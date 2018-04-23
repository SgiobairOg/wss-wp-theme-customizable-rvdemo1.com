<?php
    $condition = filter_input(INPUT_GET, 'condition');
    switch($condition) {
        case '1':
            $description = '<h1 style="padding-left:15px;">New Inventory</h1>       ';
            break;

        case '2':
            $description = '<h1 style="padding-left:15px;">Pre-Owned Inventory</h1>   ';
            break;

        default:
            $description = ' ';
            break;
    }
    echo $description;