<?php

namespace App\UseCases\Profile;

use App\Entity\User\Avatar;
use App\Http\Requests\Cabinet\UserAvatarRequest;
use App\User;
use App\Http\Requests\Auth\ProfileEditRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfileService
{

    public function pathPhoto()
    {
        $paths = [
            'original' => public_path() . '\storage\user\avatar\original\\',
            'small' => public_path() . '\storage\user\avatar\small\\',
            'medium' => public_path() . '\storage\user\avatar\medium\\',
            'large' => public_path() . '\storage\user\avatar\large\\',
        ];
        return $paths;
    }

    public function edit($id, ProfileEditRequest $request): void
    {
        /** @var User $user */
        $user = User::findOrFail($id);
        $oldPhone = $user->phone;
        $user->update($request->only('name', 'forename', 'surname', 'patronymic', 'city', 'about', 'phone'));
        if ($user->phone !== $oldPhone) {
            $user->unverifyPhone();
        }
    }

    public function addAvatar($id, UserAvatarRequest $request) : void
    {
        $user = $this->getUser($id);

        $this->deleteAvatar($user);

        DB::transaction(function () use ($request, $user) {
            $path = $this->pathPhoto()['original'];
            $smallPath = $this->pathPhoto()['small'];
            $middlePath = $this->pathPhoto()['medium'];
            $largePath = $this->pathPhoto()['large'];

            $img = Image::make($request['avatar']);
            if (!file_exists($path) && !file_exists($smallPath) && !file_exists($middlePath) && !file_exists($largePath)) {
                mkdir($path, 666, true);
                mkdir($smallPath, 666, true);
                mkdir($middlePath, 666, true);
                mkdir($largePath, 666, true);
            }

            $fileName = $user->id.'-'.uniqid().'-'. (new \DateTime)->getTimeStamp() . '.png';

            $img->save($path . $fileName);
            $img->resize(1000, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($largePath .$fileName, 100);
            $img->resize(450, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($middlePath . $fileName, 100);
            $img->resize(150, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($smallPath . $fileName, 100);


            $user->avatar()->create([
//                'user_id' => $user->id,
                'status' => Avatar::STATUS_MODERATION,
                'image' => $fileName,
            ]);

            $user->update();
        });
    }


    public function deleteAvatar ($user) {

        if (!$user->avatar) {return;}
        Storage::disk('public')->delete([
            '\user\avatar\original\\'.$user->avatar->image,
            '\user\avatar\small\\'.$user->avatar->image,
            '\user\avatar\medium\\'.$user->avatar->image,
            '\user\avatar\large\\'.$user->avatar->image,
        ]);
        $user->avatar()->delete();
    }


    private function getUser($id): User
    {
        return User::findOrFail($id);
    }



}
