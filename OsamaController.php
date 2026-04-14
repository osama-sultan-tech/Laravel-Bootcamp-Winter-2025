<?php

class OsamaController
{
    public function renderJson(array $data)
    {
        header("Content-Type: application/json");

        echo json_encode($data);

        exit;
    }
}
