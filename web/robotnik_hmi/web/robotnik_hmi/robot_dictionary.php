<?php

$robot_dictionary = array();
$robot_dictionary["global_frame"] = "robot_map";
$robot_dictionary["description"] = "robot/robot_description";
$robot_dictionary["topic_tf2_web_republisher"] = "/tf2_web_republisher";
$robot_dictionary["republisher_tfs"] = '/robot/republisher_tfs';
$robot_dictionary["topic_poi_interactive_marker"] = "/robot/poi_interactive_marker";
$robot_dictionary["topic_map"] = "/robot/throttle/map";
$robot_dictionary["topic_odometry"] = "/robot/throttle/odom";
$robot_dictionary["servic_reset_odometry"] = "/robot/reset_odometry";
$robot_dictionary["topic_joystick_robot_control"] = "/robot/pad_teleop/cmd_vel";
$robot_dictionary["topic_joystick_axi_control"] = "/robot/front_ptz_camera/front_ptz_camera/ptz_command";
$robot_dictionary["topic_system_status"] = "/robot/system_monitor/diagnostics";
$robot_dictionary["topic_hw_emergency_stop"] = "/robot/robotnik_base_hw/emergency_stop";
$robot_dictionary["topic_hw_io"] = "/robot/robotnik_base_hw/io";
$robot_dictionary["topic_hw_status"] = "/robot/robotnik_base_hw/status";
$robot_dictionary["topic_fix"] = "/robot/throttle/gps/fix";
$robot_dictionary["gpsOdometryFilterTopic"] = "/robot/odometry/filtered_world";

$robot_dictionary["service_map_nav_manager_base"] = "/robot/map_nav_manager";
$robot_dictionary["service_poi_interactive_marker_base"] = "/robot/poi_manager";

$robot_dictionary["service_robotnik_waypoints_manager_namespace"] = "/robot/robotnik_waypoints_manager";
$robot_dictionary["service_robotnik_waypoints_exe_namespace"] = "/robot/robotnik_waypoints_exe";

$robot_dictionary["service_robotnik_rms_base"] = "/robot/robotnik_rms";
$robot_dictionary["service_poi_interactive_marker_add_point"] = "/robot/poi_interactive_marker/add_pois_2d";
$robot_dictionary["service_poi_manager_read_points"] ='/robot/poi_manager/read_pois';
$robot_dictionary["service_poi_interactive_marker_goto_tag"] = '/robot/poi_interactive_marker/goto_tag';
$robot_dictionary["service_poi_interactive_marker_stop_goto"] = '/robot/poi_interactive_marker/stop_goto';
$robot_dictionary["service_poi_interactive_marker_load_points"] = '/robot/poi_interactive_marker/load_poi';

$robot_dictionary["topic_robot_local_state"]='/robot/robot_local_control/state';
$robot_dictionary["service_rlc_localization_stop"] = '/robot/robot_local_control/LocalizationComponent/stop_running_module';
$robot_dictionary["service_rlc_localization_start"] = '/robot/robot_local_control/LocalizationComponent/start_module';
$robot_dictionary["service_rlc_localization_save_map"] = '/robot/robot_local_control/LocalizationComponent/save_map';
$robot_dictionary["rlc_localization_ns"] = '/robot/robot_local_control/LocalizationComponent/';
$robot_dictionary["topic_robotnik_rms_state"]='/robot/robotnik_rms/status';
$robot_dictionary["topic_front_camera"]='/robot/front_ptz_camera/image_raw';
$robot_dictionary["topic_2d_scan"]='/robot/throttle/scan';
$robot_dictionary["web_video_server_port"]='8081';

$robot_dictionary["param_rlc_localization_components"]='/robot/robot_local_control/LocalizationComponent/components';



// <?php echo $robot_dictionary["service_poi_interactive_marker_base"]?>

?>
