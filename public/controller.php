<?php

// @TODO: use auto loader using composer
include_once __DIR__ . '/../src/Factory.php';
include_once __DIR__ . '/../src/SumInterface.php';
include_once __DIR__ . '/../src/Odd.php';
include_once __DIR__ . '/../src/Even.php';
include_once __DIR__ . '/../src/Gauss.php';

use IntEnse\Factory;

// default states of variables required
$number = null;
$type = null;
$response = ['success' => false];
if (isset($_REQUEST['number']) && is_numeric($_REQUEST['number'])) {
    $number = $_REQUEST['number'];
} else {
    $response['error'] = 'Number not set correctly.';
    handleResponse($response);
}
if (isset($_REQUEST['type'])) {
    $type = $_REQUEST['type'];
} else {
    $response['error'] = 'Type not set correctly.';
    handleResponse($response);
}
// get the correct class for our calculation
$class = Factory::getClass($type);
if (is_null($class)) {
    $response['error'] = 'Type not found.';
    handleResponse($response);
}
// finally run the sum logic
$sum = $class->sum($number);
$response = [
    'success' => true,
    'data' => $sum,
];
handleResponse($response);

/**
 * Prepares the response for display and ends the process.
 * 
 * @param array $response - the response array
 * 
 * @return void
 */
function handleResponse($response) : void
{
    print_r(json_encode($response));
    die();
}
?>