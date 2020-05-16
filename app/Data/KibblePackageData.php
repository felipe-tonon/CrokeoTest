<?php
/**
 * Created by PhpStorm.
 * User: felipe
 */

namespace App\Data;

use App\AgeOption;
use App\SizeOption;

abstract class KibblePackageData implements Data
{
    const CAT_PACKAGES = [
        SizeOption::XS => ["C0001", "Abonnement mini chat", 29],
        SizeOption::S => ["C0002", "Abonnement petit chat", 39],
        SizeOption::M => ["C0003", "Abonnement chat moyen", 49],
        SizeOption::L => ["C0004", "Abonnement grand chat", 59],
        SizeOption::XL => ["C0005", "Abonnement chat géant", 59],
    ];
    const DOG_PACKAGES = [
        SizeOption::XS => ["D0001", "Abonnement mini chien", 45],
        SizeOption::S => ["D0002", "Abonnement petit chien", 55],
        SizeOption::M => ["D0003", "Abonnement chien moyen", 75],
        SizeOption::L => ["D0004", "Abonnement grand chien", 95],
        SizeOption::XL => ["D0005", "Abonnement chien géant", 105],
    ];
}