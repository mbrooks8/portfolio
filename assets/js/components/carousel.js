var carousel = {carousels:""};

carousel.carInterval;
carousel.init = function(){
	console.log("init");
	carousel.carousels = $(".carousel");
	var temp = [];
	for (var i = 0; i <carousel.carousels.length;i++)
	{
		if(carousel.carousels.length > 1 && carousel.carousels[i].id == ""){alert("when using multiple carousel.carousels you must give an ID to each carousel");}
		var selectString = "";
		if(carousel.carousels[i].id != "")
		{
			selectString = "#"+carousel.carousels[i].id;
		}
		selectString += ".carousel ul";
		temp.push(selectString);
	}
	carousel.carousels = temp;
	carousel.makeCarousels();
	for(var i =0;i < carousel.carousels.length;i++){
		var temp = $(carousel.carousels[i]+" li");
		var size = temp.length;
		temp = $(carousel.carousels[i]+" li:eq(0)");
		temp.css({left:"50%"});
	}
}
carousel.makeCarousels = function(){
	let carousels = carousel.carousels;
	carInterval = setInterval(function(){
		for(let i =0;i < carousels.length;i++){
			setTimeout(function(){carousel.testtest(i);},1500);
		}
	},6500);

}
carousel.testtest = function(currentCar){
	var temp = $(carousel.carousels[currentCar]+" li");
	var size = temp.length;
	temp = $(carousel.carousels[currentCar]+" li:eq(1)");
	temp.css({left:"50%"});
	temp = $(carousel.carousels[currentCar]+" li:eq(0)");
	temp.css({left:"-100%"});
	setTimeout(function(){carousel.testtesttest(currentCar);},5000);
}
carousel.testtesttest = function(currentCar){
	console.log("testtesttest");
	var temp = $(carousel.carousels[currentCar]+" li");
	var size = temp.length;
	temp = $(carousel.carousels[currentCar]+" li:eq(0)");
	$($(carousel.carousels[currentCar]+" li:eq(0)").clone()).appendTo(carousel.carousels[currentCar]);
	$(carousel.carousels[currentCar]+" li:first").remove();
	$(carousel.carousels[currentCar]+" li:last").css({left:"200%"});
}
