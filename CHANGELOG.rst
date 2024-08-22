# v2.1 (24-04-2020)
* Update to submodules
* Updated build_system (9618da45d8303a34bdaa16c97ce55dd922f0147c)
* Updated imu_tools (0d2a0cdcb8888267663f2ab9cde6a7d171a3a983)
* Updated vectornav (49aef4bc709a0a5af8a845719f47dd029f5027c3)
* Updated eband_local_planner (827c75f94620b8c2797711db77915ac0a75ba1e5)
* Updated marker_mapping (596d55a48778087e0c2b21bca5369983550eaf8f)
* Added robotnik_localization
* Updated rcomponent (27c54b7949519a32974b0b68ea21eed56f4dddca)
* Updated robotnik_modbus_io (8e83f6d12c3ea717e5f76b83b567bc1524cc82f8)
* Updated robotnik_msgs (ec07e4b1b5ab4d93b5c17797aa711b5aed7f4a6a)
* Updated rosmon (9685522a6c5b5933593f4dd46051dffa3edaa424)
* Added robot_local_control
* Added battery_manager
* Updated robotnik_navigation (cdf9a63b4c6ed1567b39f922ca9d4737e6d45cf8)
* Updated rbkairos_common (70e344b7a707fc7f65896857efcb08ceff060be0)
* Updated robotnik_base_hw (ad0366bb0097f2d960d808778c19e8836e2be64b)
* Updated summit_xl_common (8e31345c879a1c795ac6082940300d397714e81f)
* Updated summit_xl_robot (840b3b332bcb266717a65a261a9f50c033f23373)
* Added costmap_prohibition_layer
* Added robot_pose_publisher

# V2.0 (24-02-2020)
* Added new battery_estimation package
* Added robot_local_control (master_procedures branch) with minor improvements in procedure_component
* Added marker_mapping package
* Updated robotnik_base_hw_lib with split battery estimation
* Add rostful
* Added rosmon to workspace
* Add rbkairos packages
* Add simulation packages
* Organize packages in different folders/categories
* Add new gps ublox config
* Add compatibility with zed_camera
* Debs generated with new build_system package

# V1.9 (22-10-2019)
* Updated robotnik_base_hw (1b67efe9cde37eacf846fb9a4ff2f7d9140a04f6)
* Updated robotnik_base_hw_lib (v9.17)
* Updated axis_camera (68fa35778273bd2e2dba295678f776d8e62050aa)
* Added battery_manager (03164705eb765160932df7d7f35af495c753d287)
* Updated poi_manager (37679f7972a121b2bf6746c5e1cd811fb272dba2)
* Updated rcomponent (c88a10658b94fbdf59d1affcbe956f66c886c773)
* Updated robotnik_msgs (8232ba96f72492d9c118f9ab16be148f4b0608ba)
* Updated robotnik_navigation (e2d9cb1d498358e3b8e23775a310a4434a6e61be)
* Updated robotnik_sensors (eb66306a69c419517a498525a42eed3930a1bd6c)
* Added ros_rslidar (2565211637b233c17784121035ba6518da17a23e)
* Updated vectornav (not pushed commit)

# V1.8 (25-09-2019)
* Changed robot prefix to "robot"
* Updated robotnik_base_hw (feaa3b2f48886b203f0f315b2bc0ecb31183d38f)
* Updated robotnik_base_hw_lib (v9.16)
* Updated summit_xl_common (bdefe48f2e82c71b4f1c4ec268e62e75012f2f30)
* Updated summit_xl_robot (5850df0365a4b47af3ac25b2e01fb24437e558d5)

# V1.7(13-05-2019)
* Updated imu_manager (060155a0d4eb1454a5a1324c705565f6d61d1211)
* Updated robotnik_base_hw (da22fe3cdf0d0daa22671b01c2a91c258cf0939f)
* Updated robotnik_base_hw_lib (ce387899abdad4e84772ce8cfbfe27c6cfbc7f79)
* Updated robotnik_msgs (93ef35f5322fa55523344ee7f91ef050bbd6e8a6)
* Updated robotnik_navigation (8db01f9c1388fc07da6cfe66ae2a018c9ca77fa2)
* Updated summit_xl_common (b92df677df5345dee4e98d18a9898b1963ed72db)
* Updated summit_xl_robot (8be24d5232d77b3c336a43cc328420e3494025aa)

# V1.6(07-03-2019)
* Added support for docking with reflectors

# V1.5(06-03-2019)
* Added imu_manager (and update px4_pluginlists.yaml)
* Update robotnik_base_hw to 0.9.14 version
* New sources version with libraries without compile

# V1.4(05-02-2019)
* Update summit_xl_robot to include:
  * New environment variables
  * Scripts to auto config env variables and autorun
* Update robotnik_base_hw to 0.9.12 version
  * Offset in voltage 
  * Bugs correction in get_time and state machine
  * ignore invalid joint commands (infinite or nan)
* Updated summit_xl_common (5bc482f26b750a91a10f13465c9c32bd5caf3038)
* Update summit_xl_robot (5f1abf94b0c4bb30fab473c9d458f592c338a9d4)
* Update map_nav_manager (e0e2b12b4bea6239f49cec5c0d80d9ade2d4ec8b)
* Add Changelog file


# V1.3 (21-11-2018)
* Added robot_localization_utils
* Updating summit_xl_robot
* Updating summit_xl_common (removed rl_utils)
* Updating robotnik_msgs: 
* New messages for safety
* New battery docking msg
* BaseHw:
  * New battery estimation curve
  * Management of docking station charging through internal I/O
  * Feedback of the current from the battery and feedback of the charging process

# V1.2 (25-10-2018)
* summit_xl_description: added new steel template
* summit_xl_description: added poi_manager to bringup
* poi_manager: deleted namespace from launch file
* map_nav_manager (summit_xl branch): added output to the nodes in launch file. poi_marker: updated namespace of poi_manager services and fixed rear camera topics in javascript files.

# V1.1 (04-10-2018)
* Deleted robotnik_navigation from sources. It is a non-deliverable repository.
* Updated robotnik_base_hw to kinetic-0.9.5 tag.
* Created the script to auto-generate the libraries of the workspace (summit_generate_debs.sh)
* Add the libraries folder to the workspace.

# V1.0
* First version of the sources

