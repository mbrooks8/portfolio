var template =
	{fill:function (templateURL,userValues,id){
		myFill = this.fill;

		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				// Typical action to be performed when the document is ready:
				var splitAtBeginning = xhttp.responseText.split("{{");
				var variableArray = [];
				for(var i =0;i<splitAtBeginning.length;i++)
				{
					var n = splitAtBeginning[i].search(/}}/i);
					var varToInsert = splitAtBeginning[i].substr(0,n);
					if(varToInsert != ""){
						variableArray.push(varToInsert);
						splitAtBeginning[i] = splitAtBeginning[i].substr(n+2);
					}
				}
				var data = {templateStrings:splitAtBeginning,names:variableArray,values:userValues,id:id};
				var joined = "";
				for(var i =0; i < data.values.length;i++)
				{
					joined += data.templateStrings[0];
					for(var j =1; j < data.templateStrings.length;j++)
					{
						joined +=data.values[i][data.names[j-1]];
						joined += data.templateStrings[j];
					}
				}
				document.getElementById(data.id).innerHTML = joined;
			}
		};
		xhttp.open("GET", templateURL, true);
		xhttp.send();
	},fillDom:function(dataUrl,templateUrl,domId,errorMessage,parameters)
	 {
		 //templateUrl, and domId are taken in as an array, and must have the same number of elements
		 if(templateUrl.length != domId.length)
		 {
			 alert("number of templates and Id's do not match");
			 return;
		 }
		 var xhttp = new XMLHttpRequest();
		 xhttp.onreadystatechange = function() {
			 if (this.readyState == 4 && this.status == 200) {

				 var output = "";

				 if(xhttp.responseText.length <= 1)
				 {
					 output = errorMessage;
					 for(var i = 0; i < templateUrl.length;i++)
					 {
						 document.getElementById(domId[i]).innerHTML = output;
					 }

				 }else{
					// console.log(xhttp.responseText);
					 var data = JSON.parse(xhttp.responseText);
					 //console.log(data);
					 for(var i = 0; i < templateUrl.length;i++)
					 {
						 template.fill(templateUrl[i],data,domId[i]);
					 }
				 }

			 }
		 };
		 xhttp.open("POST", dataUrl, true);
		 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


		 var output = "";
		 var count = 0;
		 for (var key in parameters) {
			 if (parameters.hasOwnProperty(key)) {
				 if(count > 0)
				 {
					 output+="&";
				 }
				 output+= key + "=" + parameters[key];
				 count++;
			 }
		 }
		 if (count == 0)
		 {
			 output = "";
		 }
		 //console.log(output);
		 xhttp.send(output);
	 }
	 ,getData:function(dataUrl,errorMessage,parameters,callback)
	 {
		 //templateUrl, and domId are taken in as an array, and must have the same number of elements
		 var xhttp = new XMLHttpRequest();
		 xhttp.onreadystatechange = function() {
			 if (this.readyState == 4 && this.status == 200) {
				 callback(xhttp.responseText);


			 }
		 };
		 xhttp.open("POST", dataUrl, true);
		 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");


		 var output = "";
		 var count = 0;
		 for (var key in parameters) {
			 if (parameters.hasOwnProperty(key)) {
				 if(count > 0)
				 {
					 output+="&";
				 }
				 output+= key + "=" + parameters[key];
				 count++;
			 }
		 }
		 if (count == 0)
		 {
			 output = "";
		 }
		 //console.log(output);
		 xhttp.send(output);
	 }
	};
