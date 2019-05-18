<?php

require_once '../../../vendor/autoload.php';

use yiioverflow\admincontacts\factories\ContactFactory;

$contacts = ContactFactory::getAll();

if (count($contacts)) {
    echo 'Test retrieved '.count($contacts).' contacts.';
} else {
    echo 'No contacts retrieved!';
}
