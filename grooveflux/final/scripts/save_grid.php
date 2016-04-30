<?php
$file=fopen('grid.txt','w');


if (flock($file, LOCK_EX | LOCK_NB)) {

    fwrite($file,$_POST['json']);
    fclose($file);
    print('{}');
    flock($fp, LOCK_UN);
} else {
    print "Could not get lock!\n";
}
?>