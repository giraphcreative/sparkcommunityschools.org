<?php

function the_header() {

    $image = get_sub_field('image');
    $title = get_sub_field('title');

    ?>
    <div class="page-header" style="background-image: url(<?php print $image; ?>);">
        <img src="<?php print $image; ?>" />
        <div class="page-header-content">
            <div class="page-header-content-inner">
                <h1><?php print $title ?></h1>
                <hr>
            </div>
        </div>
    </div>
    <?php

}

