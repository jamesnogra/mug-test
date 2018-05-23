<?php

    $arr = [
        'color' =>          $_POST['color'],
        'text' =>           $_POST['text'],
        'y_position' =>     $_POST['y_position'],
    ];
    echo json_encode($arr);

?>