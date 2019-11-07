<?php

define("APP_ROOT_URL", "http://localhost/brawlstars");


function path(string $incompletePath)
{
    return APP_ROOT_URL . $incompletePath;
}
