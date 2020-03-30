<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Bonises
    |--------------------------------------------------------------------------
    |
    | Settings for all bonuses
    |
    */

    "bonuses" => [
        "production" => [
            "lumber" => 0.25,
            "clay" => 0.25,
            "iron" => 0.25,
            "crop" => 0.25,
        ],
        "silver" => [
            "mining" => 0.05,  // getting gold every day ?
            "time" => 3600 * 12  // 1 day
        ],
        "plus" => [
            "gold" => [
                "mining" => 0.001,  // getting gold every day ?
                "time" => 3600 * 24  // 1 day
            ],
            "silver" => [
                "mining" => 0.05,  // getting gold every day ?
                "time" => 3600 * 12  // 1 day
            ]
        ]
    ],

];
