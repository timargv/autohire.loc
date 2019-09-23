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
            'original' => public_path() . '/storage/user/avatar/original/',
	        'small' => public_path() . '/storage/user/avatar/small/',
	        'blur' => public_path() . '/storage/user/avatar/blur/',
	        'medium' => public_path() . '/storage/user/avatar/medium/',
	        'large' => public_path() . '/storage/user/avatar/large/',
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
        $this->deleteAvatar($id);

        DB::transaction(function () use ($request, $user) {
            $path = $this->pathPhoto()['original'];
            $blurPath = $this->pathPhoto()['blur'];
            $smallPath = $this->pathPhoto()['small'];
            $middlePath = $this->pathPhoto()['medium'];
            $largePath = $this->pathPhoto()['large'];

            $img = Image::make($request['avatar']);
            if (!file_exists($path) && !file_exists($smallPath) && !file_exists($blurPath) && !file_exists($middlePath) && !file_exists($largePath)) {
                mkdir($path, 0755, true);
                mkdir($smallPath, 0755, true);
                mkdir($blurPath, 0755, true);
                mkdir($middlePath, 0755, true);
                mkdir($largePath, 0755, true);
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

            $img->resize(150, null, function ($constraint) {
                $constraint->aspectRatio();
            })->blur(70)->save($blurPath . $fileName, 100);

            $user->avatar()->create([
//                'user_id' => $user->id,
                'status' => Avatar::STATUS_MODERATION,
                'image' => $fileName,
            ]);

            $user->update();
        });
    }


    public function deleteAvatar ($userId) {
        $user = $this->getUser($userId);

        if (!$user->avatar) {return;}
        Storage::disk('public')->delete([
          $this->pathAvatarDelete()['original'].$user->avatar->image,
          $this->pathAvatarDelete()['blur'].$user->avatar->image,
          $this->pathAvatarDelete()['small'].$user->avatar->image,
          $this->pathAvatarDelete()['medium'].$user->avatar->image,
          $this->pathAvatarDelete()['large'].$user->avatar->image,
        ]);
        $user->avatar()->delete();
    }


    private function pathAvatarDelete()
    {
        $paths = [
          'original' => '/user/avatar/original/',
          'blur' => '/user/avatar/blur/',
          'small' => '/user/avatar/small/',
          'medium' => '/user/avatar/medium/',
          'large' => '/user/avatar/large/',
        ];
        return $paths;
    }


    private function getUser($id): User
    {
        return User::findOrFail($id);
    }

}

