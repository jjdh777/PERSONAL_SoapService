<?php

require_once './MyClassExample.php';

function demonstration(
    $parameterOne = '$parameterOne',
    $parameterTwo = '$parameterTwo',
    $parameterThree = '$parameterThree'
) {
    return (new MyClassExample())
        ->demonstration(
            $parameterOne,
            $parameterTwo,
            $parameterThree
        );
}

function uploadFile(
    $filename,
    $file
) {
    return (new MyClassExample())
        ->uploadFile(
            $filename,
            $file
        );
}
