<?php 
$localhost = 'C:\Users\Dant\Downloads';


function scanf($dir) {
    $d = opendir($dir);
    while( false !== ($name = readdir($d)) ) {
        if ( $name == '.' or $name == '..') continue;
        if ( is_dir( $dir . '/'. $name) ) {

            scanf($dir . '/'. $name);
        } else

            if ( pathinfo($name)['extension'] == "php") {
                echo $name . "<br>";
            }

    }
    closedir($d);
}
scanf($localhost);

/*I have trouble??!*/
?>