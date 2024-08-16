<?php
function checkActive($url)
{
    if ($_SERVER['REQUEST_URI'] == $url) {
        echo "fw-bold text-primary";
    }
};
