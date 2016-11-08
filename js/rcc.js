$(document).ready(function() {
	$.get("/tabs/projects/rcc/php/init.php", function(data) {
			$("#generated_date").html(data.modified_time);
	}, "json");

	$("#regenerate").on("click", function() {
		$("#loading").show();
		$.post("/tabs/projects/rcc/php/generate.php", function() {
			$.get("/tabs/projects/rcc/php/init.php", function(data) {
					$("#generated_date").html(data.modified_time);
			}, "json");
			$("#loading").hide();
		});
	});

	$("#get_random").on("click", function() {
		$.get("/tabs/projects/rcc/php/getRandomPacks.php?pack_count="+$("#pack_count").val(), function(data) {
			if(data.length > 0) {
				$("#card-list-body").empty();
				for(i=0; i<data.length; i++) {
					$("#card-list-body").append("/addcardcast " + data[i] + "<br/>");
				}
			}

			$("#card_panel").show(400);
		}, "json");
	});
});
