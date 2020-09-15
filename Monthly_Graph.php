<style>
  #container {
  height: 400px;
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 310px;
  max-width: 800px;
  margin: 1em auto;
}

#sliders td input[type=range] {
  display: inline;
}
#sliders td {
  padding-right: 1em;
  white-space: nowrap;
}
</style>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<?php
include 'connection.php';
include_once 'graphMaker.php';

function unsetValues($values,$array){
    foreach ($values as $value) {
        unset($array[$value]);
    }
    return $array;
}

$sql="SELECT DISTINCT EXTRACT(MONTH FROM start_time) as Month,"
                        . "count( DISTINCT user_name) as unique_logins ,COUNT(application) as number_access, "
                        . "SUM(TIME_TO_SEC(`Total_system_hours`))/3600 as Total_system_hours from monitored_info "
                        . "group by EXTRACT(MONTH FROM start_time)";
$query=  mysqli_query($dbconfig,$sql);
while($row = mysqli_fetch_assoc($query)) {
    $row = json_encode($row, JSON_NUMERIC_CHECK);
    $row = json_decode($row, true);
    $row['Total_system_hours'] = round($row['Total_system_hours'],1);
    $file_contents[] = $row;
}

$graph1_data =($file_contents);
$chart_name = "Total number of unique logins, Application access and Hours of app used per Month in (BAPTIST LONGIDO)";
$chart_id = 'graph1Chart';
$x_axis_column = "Month";
 
createChartArea($chart_id);
$chart_data = prepareChartData($graph1_data,$x_axis_column);
drawColumnChart($chart_data['series_data'], $chart_data['x_axis_data'], $chart_name, $chart_id, $subtitle = '');

?>
