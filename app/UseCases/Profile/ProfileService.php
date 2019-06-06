<?php

namespace App\UseCases\Profile;

use App\Entity\User\Avatar;
use App\Http\Requests\Cabinet\UserAvatarRequest;
use App\User;
use App\Http\Requests\Auth\ProfileEditRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfileService
{
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
            $user->avatar()->create([
//                'user_id' => $user->id,
                'status' => Avatar::STATUS_MODERATION,
                'image' => $request['avatar']->store('user/avatar', 'public'),
            ]);

            $user->update();
        });
    }

    public function deleteAvatar ($user) {

        if (!$user->avatar) {return;}

        Storage::disk('public')->delete($user->avatar->image);
        $user->avatar()->delete();
    }

    private function getUser($id): User
    {
        return User::findOrFail($id);
    }
}
