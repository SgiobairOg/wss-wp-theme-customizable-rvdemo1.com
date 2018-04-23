<?php
    $uri = explode('/', filter_input(INPUT_SERVER, 'REQUEST_URI'));
    $showroom = strtolower($uri[2]);
    switch ($showroom) {
        
        case 'car+mate+trailers':
            $description = '        <h1 class="showroom_mfr_module">New Inventory</h1>
        <div class="showroom_mfr_oemlogo">
            <img src="'. get_bloginfo( 'stylesheet_directory' ) . '/assets/images/CarMateTrailers_logo.jpg" />
        </div>
        
 ';
            break;

        default:
            $description = '<h1>New Inventory</h1>
 ';
            break;
    }
    echo $description;