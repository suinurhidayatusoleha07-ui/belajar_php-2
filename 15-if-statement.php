<?php

$grade = 60;
$remedial = 60;
 
if($grade > 75) {
    echo"kamu lulus";
} else if($remedial >= 75) {
    echo "kamu lulus remedial";
} else {
    echo " kamu tidak lulus";
}
