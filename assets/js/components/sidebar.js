//Sidebar
window.onload = function() {
	$(".sideToggle").click(function(){
		$(".sidebar").toggleClass("active");
	})
	$(".sideBody ul li").click(function()
							   {
		$(this).toggleClass("active");
	})
};
