<?php

require("src/chartjs.php");

$chart = new Chart("bar");
$chart->data->labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$ds = new DataSet();
for ($i = 0; $i < 12; $i++) $ds->data[] = rand(0, 100);
$chart->data->addDataSet($ds);
echo json_encode($chart);

?>