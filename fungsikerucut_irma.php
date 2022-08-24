<?php
$phi = 22/7;
$r =28;
$t =40;
function VolumeKerucut($phi,$r,$t) {
    return (1/3*$phi*$r*$r*$t);
}

echo "Volume Kerucut tersebut adalah =".Volumekerucut($phi,$r,$t)."cm";
?>