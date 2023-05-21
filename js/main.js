$(document).ready(function(){
	$("#type_switcher").change(function(){
		var type = $(this).val();
		switch (type) {
			case "1":
				var size = "" + 
					"<div class='form-group row'>" +
						"<label for='size' class='col-sm-2 col-form-label'>Size (MB)</label>" + 
						"<div class='col-sm-6'>" +
							"<input class='form-control' type='number'    name='size' id='size' value='<?php echo $size;?>' required>" + 
						"</div>" +
					"</div>" + 
					"<p>Please provide the size of the DVD-disk in MB.</p>" +
					"";
				$("#new_menu").html(size);
				break;
			case "2":
				var weight = "" +
					"<div class='form-group row'>" + 
						"<label for='size' class='col-sm-2 col-form-label'>Weight (Kg)</label>" +
						"<div class='col-sm-6'>" +
							"<input class='form-control' type='number'  name='weight' id='weight' value='<?php echo $weight;?>' required>" +
						"</div>" +
					"</div>" +
					"<p>Please provide the weight of the book in Kg.</p>" + 
					"";
				$("#new_menu").html(weight);
				break;
			case "3":
				var dimensions = "" + 
					"<div class='form-group row'>" + 
						"<label for='height' class='col-sm-2 col-form-label'>Height (cm)</label>" +
						"<div class='col-sm-6'>" +
							"<input class='form-control' type='number'  name='height' id='height' value='<?php echo $height;?>' required>" +
						"</div>" +
					"</div>" +
					"<div class='form-group row'>" +
						"<label for='width' class='col-sm-2 col-form-label'>Width (cm)</label>" +
						"<div class='col-sm-6'>" +
							"<input class='form-control' type='number' name='width' id='width' value='<?php echo $width;?>' required>" +
						"</div>" +
					"</div>" +
					"<div class='form-group row'>" +
						"<label for='length' class='col-sm-2 col-form-label'>Length (cm)</label>" +
						"<div class='col-sm-6'>" +
							"<input class='form-control' type='number' name='length' id='length' value='<?php echo $length;?>' required>" +
						"</div>" +
					"</div>" +
					"<p>Please provide the dimensions of the furniture in HxWxL.</p>" +
				"";
				$("#new_menu").html(dimensions);
				break;
			default:
				$("#new_menu").html("");
		}
	});
});
