<?php
$pageVars = array(
    'ical_url'      => $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . 'ical.php',
    'override_date' => false,
);

if ($row_pref['mode'] == "2") {
    $pageVars['members'] = array();
    do {
        $pageVars['member'][] = $row_members;
    } while ($row_members = mysql_fetch_assoc($members));
}


// http://phppod.com/Tutorials/PHP-Calendar-Tutorial.html
function GetTimeStamp($MySqlDate)
{
    // http://www.weberdev.com/get_example-1385.html
    $date_array    = explode("-", $MySqlDate); // split the array
    $var_year      = $date_array[0];
    $var_month     = $date_array[1];
    $var_day       = $date_array[2];
    $var_timestamp = mktime(0, 0, 0, $var_month, $var_day, $var_year);
    return ($var_timestamp); // return it to the user
}

error_reporting('0');
ini_set('display_errors', '0');

// Gather variables
$todaysDate = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

if (!isset($_REQUEST['date'])) {

//If no date argument is passed, then we'll set one by using the mktime() function for the current month, date and year.

    $date = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
} else {

    $date = $_REQUEST['date'];
}

$day   = date('d', $date);
$month = date('m', $date);
$year  = date('Y', $date);

// Get the first day of the month
$month_start = mktime(0, 0, 0, $month, 1, $year);

// Get friendly month name
$month_name = date('F', $month_start);

// Figure out which day of the week the month starts on.
$month_start_day = date('D', $month_start);

switch ($month_start_day) {
    case "Sun":
        $offset = 0;
        break;
    case "Mon":
        $offset = 1;
        break;
    case "Tue":
        $offset = 2;
        break;
    case "Wed":
        $offset = 3;
        break;
    case "Thu":
        $offset = 4;
        break;
    case "Fri":
        $offset = 5;
        break;
    case "Sat":
        $offset = 6;
        break;
}

// determine how many days are in the last month.
if ($month == 1) {
    $num_days_last = cal_days_in_month(0, 12, ($year - 1));
} else {
    $num_days_last = cal_days_in_month(0, ($month - 1), $year);
}

// Determine how many days are in the current month.
$num_days_current = cal_days_in_month(0, $month, $year);

// Build an array for the current days in the month
for ($i = 1; $i <= $num_days_current; $i++) {
    $num_days_array[] = $i;
}

// Build an array for the number of days in last month
for ($i = 1; $i <= $num_days_last; $i++) {
    $num_days_last_array[] = $i;
}

// If the $offset from the starting day of the week happens to be Sunday, $offset would be 0, so don't need an offset correction.

if ($offset > 0) {

    $offset_correction = array_slice($num_days_last_array, -$offset, $offset);
    $new_count         = array_merge($offset_correction, $num_days_array);
    $offset_count      = count($offset_correction);
} // The else statement is to prevent building the $offset array.
else {
    $offset_count = 0;
    $new_count = $num_days_array;
}

// count how many days we have with the two previous arrays merged together
$current_num = count($new_count);

// Since we will have 5 HTML table rows (TR) with 7 table data entries (TD) we need to fill in 35 TDs
// We will have to figure out how many days to append to the end of the final array to make it 35 days.

if ($current_num > 35) {
    $num_weeks = 6;
    $outset    = (42 - $current_num);
} elseif ($current_num < 35) {
    $num_weeks = 5;
    $outset    = (35 - $current_num);
}

if ($current_num == 35) {
    $num_weeks = 5;
    $outset    = 0;
}

// Outset Correction
for ($i = 1; $i <= $outset; $i++) {
    $new_count[] = $i;
}

// Now let's "chunk" the $new_count array into weeks. Each week has 7 days so we will array_chunk it into 7 days.
$weeks = array_chunk($new_count, 7);

// Build the next and previous month links
if ($month == 1) {
    $previous_month = mktime(0, 0, 0, 12, $day, ($year - 1));
} else {
    $previous_month = mktime(0, 0, 0, ($month - 1), $day, $year);
}

if ($month == 12) {
    $next_month = mktime(0, 0, 0, 1, $day, ($year + 1));
} else {
    $next_month = mktime(0, 0, 0, ($month + 1), $day, $year);
}


$pageVars['previous_month'] = $previous_month;
$pageVars['next_month']     = $next_month;
$pageVars['month_name']     = $month_name;
$pageVars['year']           = $year;
$pageVars['weeks']          = array();

// Now we break each key of the array into a week and create a new table row for each week with the days of that week in the table data
$i = 0;

foreach ($weeks AS $week) {
    $pageWeek = array();

// We now know that we are inside of a week, so we'll draw the table row (<tr>) for this week and begin draw.
    foreach ($week as $d) {
        $dayMonth = $month;
        $pageDay  = array(
            'thismonth' => true,
            'today'     => false,
            'day'       => $d,
            'planned'   => array(),
            'brew'      => array(),
            'secondary' => array(),
            'tertiary'  => array(),
            'lager'     => array(),
            'age'       => array(),
            'tap'       => array(),
            'upcoming'  => array(),
        );

        if ($i < $offset_count) {
            $pageDay['thismonth'] = false;
            $dayMonth             = $month - 1; // mktime treats 0 as Dec of the previous year, so this is cool
        } elseif ($i >= ($num_weeks * 7) - $outset) {
            $pageDay['thismonth'] = false;
            $dayMonth             = $month + 1; // mktime treats 13 as Jan of the next year, so this is cool too
        } elseif ($d == $day) {
            $pageDay['today'] = true;
        }

        mysql_select_db($database_brewing, $brewing);
        $query_calDays = "SELECT * FROM brewing";
        if ($filter != "all") $query_calDays .= " WHERE brewBrewerID = '$filter'";
        $calDays = mysql_query($query_calDays, $brewing) or die(mysql_error());
        $row_calDays       = mysql_fetch_assoc($calDays);
        $totalRows_calDays = mysql_num_rows($calDays);

        $today0            = mktime(0, 0, 0, $dayMonth, $d, $year);
        $pageDay['today0'] = $today0;
        do {
            if ($row_calDays['brewArchive'] != "Y") {
                $row_calDays['truncatedName'] = truncate_string($row_calDays['brewName'], 12, '...');
                $MySqlDate0                   = $row_calDays['brewDate'];
                $planned0                     = GetTimeStamp($MySqlDate0);
                $brewday0                     = GetTimeStamp($MySqlDate0);
                if ($row_calDays['brewPrimary'] > 0) $secondary0 = $brewday0 + ($row_calDays['brewPrimary'] * 86400); else $secondary0 = "0";
                if ($secondary0 > 0) $tertiary0 = $secondary0 + ($row_calDays['brewSecondary'] * 86400); else $tertiary0 = "0";
                if ($tertiary0 > 0) $lager0 = $tertiary0 + ($row_calDays['brewTertiary'] * 86400); else $lager0 = "0";
                if ($lager0 > 0) $age0 = $lager0 + ($row_calDays['brewLager'] * 86400); else $age0 = "0";
                if ($row_calDays['brewTapDate'] != "") $tap0 = GetTimeStamp($row_calDays['brewTapDate']); else {
                    if ($age0 > 0) $tap0 = $age0 + ($row_calDays['brewAge'] * 86400); else $tap0 = "0";
                }
                if (($row_calDays['brewStatus'] == "Planned") && (($planned0 == $today0))) {
                    $pageDay['planned'][] = $row_calDays;
                } elseif (($row_calDays['brewStatus'] != "Planned") && (($brewday0 == $today0))) {
                    $pageDay['brew'][] = $row_calDays;
                } elseif (($secondary0 == $today0) && ($row_calDays['brewSecondary'] > 0)) {
                    $pageDay['secondary'][] = $row_calDays;
                } elseif (($tertiary0 == $today0) && ($row_calDays['brewTertiary'] > 0)) {
                    $pageDay['tertiary'][] = $row_calDays;
                } elseif (($lager0 == $today0) && ($row_calDays['brewLager'] > 0)) {
                    $pageDay['lager'][] = $row_calDays;
                } elseif (($age0 == $today0) && ($row_calDays['brewAge'] > 0)) {
                    $pageDay['age'][] = $row_calDays;
                } elseif ($tap0 == $today0) {
                    $pageDay['tap'][] = $row_calDays;
                }
            }
        } while ($row_calDays = mysql_fetch_assoc($calDays));

        mysql_select_db($database_brewing, $brewing);
        $query_upDays = "SELECT * FROM upcoming";
        if ($filter != "all") $query_upDays .= " WHERE brewBrewerID = '$filter'";
        $upDays = mysql_query($query_upDays, $brewing) or die(mysql_error());
        $row_upDays       = mysql_fetch_assoc($upDays);
        $totalRows_upDays = mysql_num_rows($upDays);

        do {
            // @todo want to add a JOIN so badly!
            mysql_select_db($database_brewing, $brewing);
            $query_upRecipe = sprintf("SELECT brewBrewerID FROM recipes WHERE id = '%s'", $row_upDays['upcomingRecipeID']);
            $upRecipe = mysql_query($query_upRecipe, $brewing) or die(mysql_error());
            $row_upRecipe       = mysql_fetch_assoc($upRecipe);
            $totalRows_upRecipe = mysql_num_rows($upRecipe);

            $MySqlDate_0 = $row_upDays['upcomingDate'];
            $upcoming0   = GetTimeStamp($MySqlDate_0);
            if ($todaysDate < $upcoming0) {
                $upBrewName0 = truncate_string($row_upDays['upcoming'], 12, '...');
                if ($upcoming0 == $today0) {
                    $pageDay['upcoming'][] = $row_upDays + $row_upRecipe;

                }
            }
        } while ($row_upDays = mysql_fetch_assoc($upDays));

//Remember that good ol' $i value? Well, it's time to increment it by 1 for the next day in our loop so that the all of the IF statements we coded will work properly.
        $i++;

//Close out the for loop for $week AS $d.
        $pageWeek[] = $pageDay;
    }

//Close out the table row for this current week.

    $pageVars['weeks'][] = $pageWeek;
}

// Close out your table and that's it!
if (isset($_REQUEST['date'])) {
    $pageVars['override_date'] = true;
}

return $twig->render('calendar.html.twig', $pageVars);