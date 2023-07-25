<?php


function the_separator() {
    $color = get_sub_field( 'color' );
    print '<div class="separator ' . $color . '"></div>';
}

