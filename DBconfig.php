<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;


$factory = (new Factory)->withServiceAccount('contactus-5243e-firebase-adminsdk-lkrmv-71835aac56.json')
                        ->withDatabaseUri('https://contactus-5243e-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

$auth = $factory->createAuth();

?>