<?php
/**
 * Created by PhpStorm.
 * User: felipe
 * Date: 13.05.20
 * Time: 21:32
 */

namespace App\Services;


use App\KibblePackage;
use App\Pet;

class KibblePackageService
{
    public function getKibblePackage(Pet $pet)
    {
        return new KibblePackage('C0001', 'Abonnement mini' . $pet->getType()->getDescription(), 29);
    }

}