
	$(document).ready(function(){
		$("#edu1").hide();
		$("#edu").click(function(){
			//alert("clicked");
			$("#edu1").toggle(500);
		});
		$("#view").hide();
		$("#grad").click(function(){
			$("#view").fadeToggle(500);
		});
	});
