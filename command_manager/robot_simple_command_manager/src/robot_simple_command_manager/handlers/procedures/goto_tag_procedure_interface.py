#!/usr/bin/env python

# This handler structure is temporary. Not standard.

from robot_local_control_msgs.msg import Pose2DStamped
from robotnik_msgs.srv import GetPOI, GetPOIRequest
from ..command_procedure_interface import *


class GoToTagProcedureInterface(CommandProcedureInterface):
    def __init__(self, name, parameters):
        CommandProcedureInterface.__init__(self, name, parameters)

        self.args_description = ['tag_name']
        self.args_types = [str]
        self.args_void_allowed = [False]

    def set_parameters(self, parameters):
        '''
            Set all the required parameters of the interface 
        '''
        CommandProcedureInterface.set_parameters(self, parameters)
        self.get_poi_ns = self.get_parameter('get_poi_ns', 'poi_manager/get_poi')
        self.frame_id = self.get_parameter('frame_id', 'robot_map')

    def build_msg(self, args):
        '''
            Return the desired goal or None
        '''
        client = rospy.ServiceProxy(self.get_poi_ns, GetPOI)
        request = GetPOIRequest()
        request.name = args[0]
        response = client.call(request)
        if not response.success:
            self.raise_exception("Could not get pose from POI: "+args[0])

        if type(args) == list: 

            self.request.procedure.goals = [Pose2DStamped()]
            self.request.procedure.goals[0].header.frame_id = self.frame_id
            self.request.procedure.goals[0].pose = response.pose
