<?php

require 'OsamaController.php';

$data = [
    "name" => "Osama Sultan",
    "track" => "Backend",
    "stage" => "Phase 3: REST API Development using Laravel"
];

$osama = new OsamaController();

$osama->renderJson($data);
