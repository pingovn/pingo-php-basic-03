<?php
echo "Current default date and time: " . date("Y-m-d H:i:s", time());
date_default_timezone_set("Asia/Ho_Chi_Minh");
echo "<br />";
echo "Date and time in Ho Chi Minh: " . date("Y-m-d H:i:s", time());

echo "<br />";
$tempDateTime = strtotime("now");
echo strtotime("now") . "<br />";
echo date("Y-m-d H:i:s", $tempDateTime) . "<br />";
echo strtotime("10 September 2000") . "<br />";
echo strtotime("+1 day") . "<br />";
echo strtotime("+1 week") . "<br />";
echo strtotime("+1 week 2 days 4 hours 2 seconds") . "<br />";
echo strtotime("Next Thursday") . "<br />";
echo strtotime("Last Sunday") . "<br />";
?>

