<?php

$equip = array();
if ($row_log['brewEquipProfile'] != "") {
    $equip = $row_equip_profiles;
    if (($row_pref['measFluid2'] == "liters") && ($row_equip_profiles['equipBrewerID'] == "brewblogger")) {
        $equip['equipBatchSize_converted'] = volumeconvert($row_equip_profiles['equipBatchSize'], "liters");
    } else {
        $equip['equipBatchSize_converted'] = $row_equip_profiles['equipBatchSize'];
    }

    if (($row_equip_profiles['equipBoilVolume'] !="") && ($row_pref['measFluid2'] == "liters") && ($row_equip_profiles['equipBrewerID'] == "brewblogger")) {
        $equip['equipBoilVolume_converted'] = volumeconvert($row_equip_profiles['equipBoilVolume'], "liters");
    } else {
        $equip['equipBoilVolume_converted'] = $row_equip_profiles['equipBoilVolume'];
    }

    if (($row_equip_profiles['equipMashTunDeadspace'] !="") && ($row_pref['measFluid2'] == "liters") && ($row_equip_profiles['equipBrewerID'] == "brewblogger")) {
        $equip['equipMashTunDeadspace_converted'] = volumeconvert($row_equip_profiles['equipMashTunDeadspace'], "liters");
    } else {
        $equip['equipMashTunDeadspace_converted'] = $row_equip_profiles['equipMashTunDeadspace'];
    }

    if (($row_equip_profiles['equipMashTunWeight'] !="") && ($row_pref['measWeight2'] == "kilograms") && ($row_equip_profiles['equipBrewerID'] == "brewblogger")) {
        $equip['equipMashTunWeight_converted'] = volumeconvert($row_equip_profiles['equipMashTunWeight'], "liters");
    } else {
        $equip['equipMashTunWeight_converted'] = $row_equip_profiles['equipMashTunWeight'];
    }

    if (($row_equip_profiles['equipMashTunVolume'] !="") && ($row_pref['measFluid2'] == "liters") && ($row_equip_profiles['equipBrewerID'] == "brewblogger")) {
        $equip['equipMashTunVolume_converted'] = volumeconvert($row_equip_profiles['equipMashTunVolume'], "liters");
    } else {
        $equip['equipMashTunVolume_converted'] = $row_equip_profiles['equipMashTunVolume'];
    }

    if (($row_equip_profiles['equipLoss'] !="") && ($row_pref['measFluid2'] == "liters") && ($row_equip_profiles['equipBrewerID'] == "brewblogger")) {
        $equip['equipLoss_converted'] = volumeconvert($row_equip_profiles['equipLoss'], "liters");
    } else {
        $equip['equipLoss_converted'] = $row_equip_profiles['equipLoss'];
    }
}

return $twig->render('recipe/equipment.html.twig', array(
    'equip_profile' => $equip,
));
















