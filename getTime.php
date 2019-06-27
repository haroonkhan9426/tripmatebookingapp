<?php



// Get All Date by month
$list=array();
$YearList=array();
$monthList=array();
$dayList=array();
$DayList=array();

$month = 5;
$year = 2018;

for($d=1; $d<=31; $d++)
{
    $time=mktime(12, 0, 0, $month, $d, $year);
    if (date('m', $time)==$month){
        $list[]=date('Y-m-d-D', $time);
        
    }
}
echo "<pre>";
print_r($list);
echo "</pre>";

?>