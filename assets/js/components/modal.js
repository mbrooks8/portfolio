//Modal Control
function initModal()
{
	var dismiss = $(".dismiss");
	dismiss.click(function(){$("#modalShadow").click();});
	$(".modalToggle").click(
		function(elem)
		{
			$('body').prepend('<div class="shadow" id="modalShadow"></div>');
			let modalTarget = $("#"+$(elem.currentTarget).attr("data-toggle"));
			modalTarget.addClass("active");
			setTimeout(
				function()
				{
					$("#modalShadow").css("background-color", "rgba(0,0,0,0.4)");
					$("#modalShadow").click(
						function(){
							modalTarget.removeClass("active");
							$(this).css("background-color", "rgba(0,0,0,0)");
							let toRemove = $(this);
							setTimeout(function(){toRemove.remove()},400);
						}
					);
				},100
			);
		});
}
