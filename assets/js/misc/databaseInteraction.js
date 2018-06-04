function getTenants(){
	$.ajax({
		method: "POST",
		url: "./database/apartments/getTenants.php",
		data: {apartmentId:apartmentId}
	})
		.done(function( response ) {
		console.log(response);
		var output = "";
		if(response.length <= 1)
		{
			output = "we were unable to find any apartments that you manage";
		}else{
			var tenants = JSON.parse(response);
			for(var i = 0; i <tenants.length;i++)
			{
				output+="<li>firstName: "+tenants[i].firstName+"<ul>";
				output+="<li>lastName : "+tenants[i].lastName+"</li>";
				output+="<li>unitNumber: "+tenants[i].unitNumber+"</li>";
				output+="<li>approved: "+tenants[i].approved+"</li>";
				if(tenants[i].approved == 0)
				{
					//When approving make sure manager is the correct manager
					output+="<li><a href='#' onclick='approveTenant("+tenants[i].userId+")'>click to approve</a></li>";
				}
				output+="</ul></li>";
			}
		}
		$("#tenants").html(output);
	});
};
function completeWorkOrder(){
	$.ajax({
		method: "POST",
		url: "./database/apartments/updateWorkOrder.php",
		data: {orderId:orderId}
	})
		.done(function( response ) {
		console.log(response);
		var output = "";
		if(response.length <= 1)
		{
			output = "we were unable to find any apartments that you manage";
		}else{
			console.log("successfully updated the tenant");
		}
	});
};
function approveTenant(tenantId)
{
	console.log(tenantId);
	$.ajax({
		method: "POST",
		url: "./database/apartments/approveTenant.php",
		data: {tenantId:tenantId}
	})
		.done(function( response ) {
		console.log(response);
	})
}
function getWorkOrders()
{
	$.ajax({
		method: "POST",
		url: "./database/apartments/getWorkOrders.php",
		data: {apartmentId:apartmentId}
	})
		.done(function( response ) {
		console.log(response);
		var output = "";
		if(response.length <= 1)
		{
			output = "we were unable to find any work orders";
		}else{
			var workOrders = JSON.parse(response);
			for(var i = 0; i <workOrders.length;i++)
			{
				output+="<li>userId: "+workOrders[i].userId+"<ul>";
				output+="<li>dateSubmitted : "+workOrders[i].dateSubmitted+"</li>";
				output+="<li>title: "+workOrders[i].title+"</li>";
				output+="<li>description: "+workOrders[i].description+"</li>";
				output+="<li>status: "+workOrders[i].status+"</li>";
				output+="<li>urgency : "+workOrders[i].urgency+"</li>";
				output+="<li>completed: "+workOrders[i].completed+"</li>";
				output+="<li>expectedCompletion: "+workOrders[i].expectedCompletion+"</li>";
				output+="<li>orderId: "+workOrders[i].orderId+"</li>";
				output+="<li>apartmentId: "+workOrders[i].apartmentId+"</li>";
				output+="<li><a onclick='getWorkMessages("+workOrders[i].orderId+")'>click me to view Messages:</a></li>";
				output+="<li><a onclick='sendMessageToTenant("+workOrders[i].orderId+")'>send message</a><input type='text' id='sendMessage"+workOrders[i].orderId+"'></li>";
				output+="<li id='workMessages"+workOrders[i].orderId+"'></li>";
				output+="</ul></li>";
			}
		}
		$("#workOrder").html(output);
	})
}
function sendMessageToTenant(workOrderId)
{
	console.log(workOrderId);
	console.log($("#sendMessage"+workOrderId).val());
	$.ajax({
		method: "POST",
		url: "./database/apartments/newWorkMessage.php",
		data: {orderId:workOrderId,message:$("#sendMessage"+workOrderId).val()}
	})
		.done(function( response ) {
		console.log(response);
	})
}
function getWorkMessages(orderId)
{
	$.ajax({
		method: "POST",
		url: "./database/apartments/getWorkMessages.php",
		data: {orderId:orderId}
	})
		.done(function( response ) {
		var output = "";
		if(response.length <= 1)
		{
			output = "we were unable to find any messages";
			$("#workMessages"+orderId).html(output);
		}else{
			console.log(response);
			$("#workMessages"+orderId).html(response);
		}
	})
}
