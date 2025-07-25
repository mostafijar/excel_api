<?php

header('Content-Type: application/json');

$data = [
  "users" => [
    [ "name" => "John Doe", "email" => "john@example.com" ],
    [ "name" => "Jane Smith", "email" => "jane@example.com" ],
    [ "name" => "Ali Khan", "email" => "ali@example.com" ],
    [ "name" => "Maria Garcia", "email" => "maria@example.com" ],
    [ "name" => "Leo Zhang", "email" => "leo@example.com" ]
  ]
];

echo json_encode($data, JSON_PRETTY_PRINT);