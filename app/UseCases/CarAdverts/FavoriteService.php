<?php


namespace App\UseCases\CarAdverts;


use App\Entity\Cars\Advert\Advert;
use App\User;

class FavoriteService
{

    public function add($userId, $carAdvertId) : void
    {
        $user = $this->getUser($userId);
        $carAdvert = $this->getCarAdvert($carAdvertId);
        $user->addToFavorites($carAdvert->id);
    }

    public function remove($userId, $carAdvertId) : void
    {
        $user = $this->getUser($userId);
        $carAdvert = $this->getCarAdvert($carAdvertId);
        $user->removeFromFavorites($carAdvert->id);
    }


    private function getUser($id) : User {
        return User::findOrFail($id);
    }

    private function getCarAdvert($id) : Advert {
        return Advert::findOrFail($id);
    }

}