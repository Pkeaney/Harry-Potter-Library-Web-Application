<?php

function inject_checker($conn, $field)
{
    return (htmlentities(trim(mysqli_real_escape_string($conn, $field))));
}