<?php

$conn = new mysqli('localhost', 'root', '', 'crud_simple');

if (!$conn) {
    die(mysqli_error($conn));
}
