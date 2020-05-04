<?php
$files = scandir(__DIR__);
foreach ($files as $file) {
    if($file != "fix.php"){
        $new_file = str_replace("(REV00) ","",$file);
        if($new_file != $file){
            rename($file,$new_file);
        }

    }

}
