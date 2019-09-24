<?php
function arr_rotate(&$array,$rotate_count) {
        for ($i = 0; $i < $rotate_count; $i++) {
            array_push($array, array_shift($array));
        }
    }


  ?>