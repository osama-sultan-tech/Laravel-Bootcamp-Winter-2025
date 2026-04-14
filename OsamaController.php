<?php

class OsamaController
{
    public function getMyInfo()
    {
        $data = [
            "name" => "Osama Sultan",
            "track" => "Backend",
            "stage" => "Phase 3: REST API Development using Laravel"
        ];

        header("Content-Type: application/json");

        echo json_encode($data);

        exit;
    }
}
