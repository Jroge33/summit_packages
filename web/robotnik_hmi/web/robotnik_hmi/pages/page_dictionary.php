<?php

$page_dictionary = array();

$page = array("page_name"=>"Monitor", "path"=>"./pages/Monitor/Monitor.php", "key"=>"monitor", "only_admin"=>FALSE);
array_push($page_dictionary, $page);

$page = array("page_name"=>"Monitor GPS", "path"=>"./pages/GPS/MonitorGPS.php", "key"=>"monitor_gps", "only_admin"=>FALSE);
array_push($page_dictionary, $page);
/*
$page = array("page_name"=>"Actions", "path"=>"./pages/Actions/Actions.php", "key"=>"actions", "only_admin"=>FALSE);
array_push($page_dictionary, $page);
*/

/*
$page = array("page_name"=>"Web Teleop", "path"=>"./pages/Teleoperation/Teleoperation.php", "key"=>"teleoperation", "only_admin"=>FALSE);
array_push($page_dictionary, $page);
*/
$page = array("page_name"=>"Pad Teleop", "path"=>"./pages/Teleoperation/AdvancePadTeleoperation.php", "key"=>"padteleoperation", "only_admin"=>FALSE);
array_push($page_dictionary, $page);

$page = array("page_name"=>"GPS", "path"=>"./pages/GPS/GPSWaypoints.php", "key"=>"gps_waypoints", "only_admin"=>FALSE, "develop"=>TRUE);
array_push($page_dictionary, $page);
/*
$page = array("page_name"=>"Arm", "path"=>"./pages/Arm/Arm.php", "key"=>"arm", "only_admin"=>FALSE, "develop"=>TRUE);
array_push($page_dictionary, $page);
*/


$page = array("page_name"=>"Navigation", "path"=>"./pages/Navigation/Navigation.php", "key"=>"navigation", "only_admin"=>True, "develop"=>False);
array_push($page_dictionary, $page);

$page = array("page_name"=>"Mission", "path"=>"./pages/Mission/Mission.php", "key"=>"mission", "only_admin"=>FALSE, "develop"=>False);
array_push($page_dictionary, $page);

$page = array("page_name"=>"Develop", "path"=>"./pages/Develop/Develop.php", "key"=>"develop", "only_admin"=>FALSE, "develop"=>TRUE);
array_push($page_dictionary, $page);



?>
