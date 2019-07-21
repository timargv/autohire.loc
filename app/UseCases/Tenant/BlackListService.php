<?php


namespace App\UseCases\Tenant;


use App\Entity\Tenant\BlackList;
use App\Entity\Tenant\BlackListComment;
use App\Entity\Tenant\BlackListPhoto;
use App\Http\Requests\Tenant\BlackListCommentRequest;
use App\Http\Requests\Tenant\BlackListFileRequest;
use App\Http\Requests\Tenant\BlackListRequest;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BlackListService
{

    public function pathPhoto()
    {
        $paths = [
            'original' => public_path() . '/storage/user/black-tenant/images/original/',
            'blur' => public_path() . '/storage/user/black-tenant/images/blur/',
            'small' => public_path() . '/storage/user/black-tenant/images/small/',
            'medium' => public_path() . '/storage/user/black-tenant/images/medium/',
            'large' => public_path() . '/storage/user/black-tenant/images/large/',
        ];
        return $paths;
    }

    public function pathFile()
    {
        $paths = [
            'original' => public_path() . '/storage/user/black-tenant/images/original/',
            'blur' => public_path() . '/storage/user/black-tenant/images/blur/',
            'small' => public_path() . '/storage/user/black-tenant/images/small/',
            'medium' => public_path() . '/storage/user/black-tenant/images/medium/',
            'large' => public_path() . '/storage/user/black-tenant/images/large/',
        ];
        return $paths;
    }


    public function create ($userId, BlackListRequest $request) : BlackList
    {
        $user = $this->getUser($userId);

        return DB::transaction(function () use ($request, $user) {

            /** @var BlackList $blacklistTenant */
            $blacklistTenant = BlackList::make([
                'name' => $request['name'],
                'city' => $request['city'],
                'author_id' => $user->id,
                'status'    => BlackList::STATUS_MODERATION
            ]);

            // ssh test
            $blacklistTenant->saveOrFail();

            if ($request['photo']) {
                $this->addPhotoMain($user->id, $request, $blacklistTenant->id);
            }

            if ($request['comment']) {
                $this->addComment($user->id, $request, $blacklistTenant->id);
            }

            return $blacklistTenant;

        });

    }

    public function addPhotoMain($userId, $request, $blackListId) : void
    {
        $tenant = $this->getTenant($blackListId);

        $this->deletePhotoMainTenant($blackListId);

         DB::transaction(function () use ($request, $userId, $tenant) {

             $path = $this->pathPhoto()['original'];
             $blurPath = $this->pathPhoto()['blur'];
             $smallPath = $this->pathPhoto()['small'];
             $middlePath = $this->pathPhoto()['medium'];
             $largePath = $this->pathPhoto()['large'];

             $img = Image::make($request['photo']);
             if (!file_exists($path) && !file_exists($smallPath) && !file_exists($blurPath) && !file_exists($middlePath) && !file_exists($largePath)) {
                 mkdir($path, 0755, true);
                 mkdir($blurPath, 0755, true);
                 mkdir($smallPath, 0755, true);
                 mkdir($middlePath, 0755, true);
                 mkdir($largePath, 0755, true);
             }

             $fileName = $userId.'-'.uniqid().'-'. (new \DateTime)->getTimeStamp() . '.png';

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


             $photo = $tenant->photos()->create([
                 'author_id' => $userId,
                 'status' => BlackListPhoto::STATUS_MODERATION,
                 'photo' => $fileName,
                 'is_main' => 1
             ]);

             $tenant->update();

         });
    }

    public function addFile($userId, BlackListFileRequest $request, $blackListId)
    {

    }

    public function addComment($userId, $request, $blackListId) : void
    {
        $tenant = $this->getTenant($blackListId);
        $tenant->comments()->create([
            'comment' => $request['comment'],
            'author_id' => $userId,
            'status' => BlackListComment::STATUS_MODERATION
        ]);

        $tenant->update();
    }

    public function deletePhotoMainTenant ($tenantId) {

        $photo = $this->getPhotoMainTenant($tenantId);

        if (!$photo) {return;}
        Storage::disk('public')->delete([
            $this->pathPhotoDelete()['original'].$photo->photo,
            $this->pathPhotoDelete()['small'].$photo->photo,
            $this->pathPhotoDelete()['medium'].$photo->photo,
            $this->pathPhotoDelete()['large'].$photo->photo,
        ]);
        $photo->delete();
    }

    private function pathPhotoDelete()
    {
        $paths = [
          'original' => '/user/black-tenant/images/original/',
          'small' => '/user/black-tenant/images/small/',
          'medium' => '/user/black-tenant/images/medium/',
          'large' => '/user/black-tenant/images/large/',
        ];
        return $paths;
    }


    public function getUser($id) : User
    {
        return User::findOrFail($id);
    }

    public function getTenant($id) : BlackList
    {
        return BlackList::findOrFail($id);
    }

    public function getPhotoMainTenant($tenantId)
    {
        return BlackListPhoto::where([['black_list_tenant_id', $tenantId],['is_main', true]])->first();
    }

}
