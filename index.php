<?php

$localhost = 'C:\Users\Dant\Downloads';

/**
 * @param string $dir
 */
function scanf(string $dir): void
{
    if (!$dirHandle = opendir($dir)) {
        echo 'Fucking dir - ' . $dir;
        return;
    }

    while ($name = readdir($dirHandle)) {
        if ($name == '.' || $name == '..') {
            continue;
        }
        if (is_dir($dir . '/' . $name)) {
            scanf($dir . '/' . $name);
            continue;
        }
        if (pathinfo($name)['extension'] === "php") {
            echo $name . "<br>";
        }
    }
    closedir($dirHandle);
}

scanf($localhost);
