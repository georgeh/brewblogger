<?php
$pageVars = array(
    'pref' => $row_pref,
);

if (($row_pref['mashDisplayMethod'] == "1") && ($row_log['brewMashProfile'] != "")) {
    $mash = $row_mash_profiles;

    $mash['ppg_label'] = '';
    if (($row_log['brewMashGravity'] != "") && ($row_log['brewPreBoilAmt'] != "") && ($row_log['brewGrain1'] != "")) {
        if ($row_pref['measFluid2'] == "liters") {
            $mash['ppg_label'] = "PPK:";
        } else {
            $mash['ppg_label'] = "PPG:";
        }
    } elseif ($row_log['brewPPG'] != "") {
        if ($row_pref['measFluid2'] == "liters") {
            $mash['ppg_label'] = "PPK:";
        } else {
            $mash['ppg_label'] = "PPG:";
        }
    }

    $mash['ppg_calc'] = '';
    if (($row_log['brewMashGravity'] != "") && ($row_log['brewPreBoilAmt'] != "") && ($row_log['brewGrain1'] != "")) {
        $mash['ppg_calc'] = calc_ppg($row_log['brewMashGravity'], $row_log['brewPreBoilAmt'], $totalGrain, $row_pref['measFluid2']);
    }

    $mash['calc_efficiency'] = '';
    if (($row_log['brewMashGravity'] != "") && ($row_log['brewPreBoilAmt'] != "") && ($row_log['brewGrain1'] != "")) {
        $mash['calc_efficiency'] = calc_efficiency($row_log['brewMashGravity'], $row_log['brewPreBoilAmt'], $totalGrain, $row_pref['measFluid2'], $row_log['id']);
    }

    $mash['steps'] = array();
    do {
        $step = $row_mash_steps;
        if ($row_pref['measTemp'] == "C") {
            $step['steTemp_adjusted'] = round(((($row_mash_steps['stepTemp'] - 32) / 9) * 5), 1);
        } else {
            $step['steTemp_adjusted'] = round($row_mash_steps['stepTemp'], 1);
        }
        $mash['steps'][] = $step;
    } while ($row_mash_steps = mysql_fetch_assoc($mash_steps));

    $pageVars['mash'] = $mash;
}

if (($row_pref['mashDisplayMethod'] == "2") || (($row_pref['mashDisplayMethod'] == "1") && ($row_log['brewMashProfile'] == ""))) { // unique mash profiles for every log
    if ($row_log['brewMashType'] != "") {
        if ($action == "scale") {
            $row_log['brewMashGrainWeight_scaled'] = ($row_log['brewMashGrainWeight'] * $scale);
        }

        $row_log['ppg_label'] = '';
        if (($row_log['brewMashGravity'] != "") && ($row_log['brewPreBoilAmt'] != "") && ($row_log['brewGrain1'] != "")) {
            if ($row_pref['measFluid2'] == "liters") {
                $row_log['ppg_label'] = "PPK:";
            } else {
                $row_log['ppg_label'] = "PPG:";
            }
        } elseif ($row_log['brewPPG'] != "") {
            if ($row_pref['measFluid2'] == "liters") {
                $row_log['ppg_label'] = "PPK:";
            } else {
                $row_log['ppg_label'] = "PPG:";
            }
        }

        $row_log['ppg_calc']        = $row_log['brewPPG'];
        $row_log['calc_efficiency'] = $row_log['brewEfficiency'];
        if (($row_log['brewMashGravity'] != "") && ($row_log['brewPreBoilAmt'] != "") && ($row_log['brewGrain1'] != "")) {
            $row_log['ppg_calc']        = round($ppg_display, 2);
            $row_log['calc_efficiency'] = round($efficiency, 2);
        }

        if ($action == "scale") {
            $row_log['brewMashSpargAmt_scaled'] = ($row_log['brewMashSpargAmt'] * $scale);
        }


    }
}

$pageVars['log'] = $row_log;
return $twig->render('recipe/mash.html.twig', $pageVars);