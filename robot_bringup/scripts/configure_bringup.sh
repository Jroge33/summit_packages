#!/bin/bash

# USEFUL FORMAT PARAMETERS
bold="\e[1m"
italic="\e[3m"
underline="\e[4m"
reset="\e[0m"
black="\e[1;30m"
blue="\e[1;34m"
cyan="\e[1;36m"
green="\e[1;32m"
orange="\e[1;33m"
purple="\e[1;35m"
red="\e[1;31m"
white="\e[1;37m"
yellow="\e[1;33m"

source ~/catkin_ws/devel/setup.bash && roscd robot_bringup
# Robot params
cp -r env/ ~/robot_params

# Boot scripts
cp scripts/bringup.sh ~/
cp scripts/ros_config.sh ~/

# Boot service
sudo cp scripts/bringup-ros.service /etc/systemd/system/
sudo systemctl enable bringup-ros.service
sudo systemctl start bringup-ros.service

echo "source ~/ros_config.sh" >> ~/.bashrc

