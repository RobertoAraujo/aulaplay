<?php
//declare(strict_types=1);
namespace Poshyweb\AulaPlay\view\pages\NovoVideo;

use Poshyweb\AulaPlay\Infra\Percistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$conn = ConnectionCreator::createConnection();

if ($conn == false) {
    echo " não funfou";
}