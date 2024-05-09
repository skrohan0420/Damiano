
    <?php

    if (!empty($header_link)) {
        foreach ($header_link as $link) {
            echo "<link href='" . base_url() . "assets/css/" . $link . "' rel='stylesheet'>";
        }

    }
    ?>