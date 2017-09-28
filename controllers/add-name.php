<?php

$app['database']->insert('users', [
    'name' => $_POST['name']
]);

header('Location: /');
/**
 * Created by PhpStorm.
 * User: Kakou-Dev
 * Date: 9/28/2017
 * Time: 1:27 AM
 */