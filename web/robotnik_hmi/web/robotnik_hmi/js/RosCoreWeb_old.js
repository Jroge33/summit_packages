/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



var ros = new ROSLIB.Ros();
            
ros.on('error', function(error){
    alert("Error to connect with ROS core");
    //listener.unsubscribe();
});
            
ros.on('connection', function(){
    //alert("Connect with ROS core");
});

ros.on('close', function(){
    alert("Close conection with ROS");
    //listener.unsubscribe();
});


function subscribe(name_topic, message_Type, mess_function){
    var listener = new ROSLIB.Topic({
        ros : ros,
        name : name_topic,
        messageType : message_Type
    });
    listener.subscribe(function(message) {
        mess_function(message);
    });
}

function unsubscribe(){
    listener.unsubscribe();
};

function callService (name_service, service_Type, service_request, response_function){
    var service = new ROSLIB.Service({
        ros : ros,
        name : name_service,
        serviceType : service_Type
    });
    var mess = new ROSLIB.ServiceRequest(service_request);
    service.callService(mess, function (result){
        response_function(result);
    });
}

function publish(nametopic, messageType, message){
    var pub = new ROSLIB.Topic({
        ros: ros,
        name: nametopic,
        serviceType : messageType
    });
    var mes = new ROSLIB.Message(message);
    pub.publish(mes);
    
}

function recurentData (data, nameKeyFather, dataExit){
    Object.keys(data).forEach(function(k){
        if(typeof data[k] == "object"){
            var aux = recurentData(data[k], nameKeyFather+";"+k, dataExit);
            Object.keys(aux).forEach(function(k){
                dataExit[k] = aux[k].toString();
            });
        }else{
            dataExit[nameKeyFather + ";"+ k] = data[k].toString();
        }
    });
    return dataExit;
}

function planeData (data){
    dataExit = {};
    nameKeyFather = "data";
    if (data==null){
        return dataExit;
    }
    return dataExit = recurentData (data, nameKeyFather, dataExit);
}
