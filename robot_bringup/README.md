# robot_bringup

ROS package with the standard and common configuration for any Robotnik's robot. The goal of this package is to cover most of the configuration parameters of the robot.

It contains all the environment variables required by the standard Robotnik packages.

It contains the bringup scripts to run all the robot components.

It is intended to work with the "real" robot as well as the simulation.

## 1 Installation

- Copy the package into the workspace
- Copy the folder **env** as **robot_params** into the **home** folder
- Copy the scripts *bringup.sh* and *ros_config.sh* into the **home** folder
- Copy (as sudo) the script *bringup-ros.service* into the folder **/etc/systemd/system**
- Enable the service to start automatically:
  ```
  sudo systemctl enable bringup.ros.service
  ```
- Copy all the files from **controller** into the **home** folder
- Move the files to the correct directories with the next commands:
  ```
  sudo mv ./50-ds4drv.rules /etc/udev/rules.d/
  sudo mv ./ds4drv.service /etc/systemd/system/
  sudo mv ./ds4drv.conf /etc/
  ```
- Enable the service to start automatically:
  ```
  sudo systemctl enable ds4drv.service
  sudo systemctl start ds4drv.service
  ```

The execution of the processes rely on **screenrc** and **rosmon** package. Be sure they are correctly installed and configured in the system.

Important: This package does not include any dependencies with other packages.

## 2 Configuration

### 2.1 Environment variables
This package contains all the launch and .yaml files with the standard configuration for sensors, navigation, localization,... This params can be edited directly or combine it with the use of the environment variables.

The environment variables configuration is split in different files and categories in the **env** folder. In each file you will find the description of every variable.

The params are distributed in the following files/categories:
* bringup
* robot_params
* battery_params
* sensors_params
* perception_params
* localization_params
* navigation_params
* manipulation_params
* rlc_params
* simulation_params

### 2.2 Screenrc

Install screen

```
sudo apt-get install screen
```

Modify the ~/.screenrc file, adding the following text:
```
termcapinfo xterm* ti@:te@
shell -$SHELL
setenv LD_LIBRARY_PATH `echo $CMAKE_PREFIX_PATH | awk '{split($1, a, ":"); print a[1];}'`"/lib":/opt/ros/melodic/lib:/opt/ros/melodic/lib/x86_64-linux-gnu
zombie kr
verbose on
```
Note: Be aware of your current ROS distro.

## 3 bringup

You can either run the script bringup.sh directly or via the system call if it has been previously configured.

Via systemctl, you have the following options:
```
sudo systemctl start bringup.ros.service
sudo systemctl stop bringup.ros.service
sudo systemctl status bringup.ros.service
```
