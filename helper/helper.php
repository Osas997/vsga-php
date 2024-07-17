<?php

function getGender($gender): string
{
    if ($gender == 1) {
        return "Laki-laki";
    } else if ($gender == 2) {
        return "Perempuan";
    } else {
        return "";
    }
}
