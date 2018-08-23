<!DOCTYPE html>
<html lang="en">
<head>
	<title>TEST</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<style>
		.diegosmallbuttons
		{
			font-size: 11px;
			margin: 0px 0px 0px 4px;
			padding: 2px;
		}
	</style>
	<script>
		function showdetails(pos)
		{					
			document.getElementById('divsup3').innerHTML = '' + 
				'<br><table ' + 
					'class="table" ' + 
					'style="' + 
						'text-align:left;' + 
						'vertical-align:middle;' + 
					'" ' + 
				'>' + 
					'<thead>' + 
						'<tr>' + 
							'<th>Detail</th>' + 
							'<th>Value</th>' + 
						'</tr>' + 
					'</thead>' + 
					'<tbody>' + 
						'<tr>' + 
							'<td class="list-group-item col-xs-6" >Name</td>' + 
							'<td class="list-group-item col-xs-6" >' + 
								document.getElementById('name'+pos).value + 
							'</td>' + 
						'</tr>' + 
						'<tr>' + 
							'<td class="list-group-item col-xs-6" >Height</td>' + 
							'<td class="list-group-item col-xs-6" >' + 
								document.getElementById('height' + pos).value + 
							'</td>' + 
						'</tr>' + 
						'<tr>' + 
							'<td class="list-group-item col-xs-6" >Mass</td>' + 
							'<td class="list-group-item col-xs-6" >' + 
								document.getElementById('mass' + pos).value + 
							'</td>' + 
						'</tr>' + 
						'<tr>' + 
							'<td class="list-group-item col-xs-6" >Hair Color</td>' + 
							'<td class="list-group-item col-xs-6" >' + 
								document.getElementById('hair_color' + pos).value + 
							'</td>' + 
						'</tr>' + 
						'<tr>' + 
							'<td class="list-group-item col-xs-6" >Skin Color</td>' + 
							'<td class="list-group-item col-xs-6" >' + 
								document.getElementById('skin_color' + pos).value + 
							'</td>' + 
						'</tr>' + 
					'</tbody>' + 
				'</table>' + 
				'<br>' + 
				'<button type="button" class="btn btn-primary">' + 
					'<a href="javascript:hidedetails();" style="color:#FFFFFF;" >' + 
						'Close' + 
					'</a>' + 
				'</button>';
			document.getElementById('divsup1').style.height = '100%';
			document.getElementById('divsup2').style.height = '100%';
		}
		function hidedetails()
		{
			document.getElementById('divsup3').innerHTML = '';
			document.getElementById('divsup1').style.height = '0px';
			document.getElementById('divsup2').style.height = '0px';
		}
		function nosort()
		{
			if ( document.getElementById('nosort').className == 'btn btn-success diegosmallbuttons' )
				return;
			document.getElementById('nosort').className = 'btn btn-success diegosmallbuttons';
			document.getElementById('sortup').className = 'btn btn-danger diegosmallbuttons';
			document.getElementById('sortdown').className = 'btn btn-danger diegosmallbuttons';
			for ( var i = 0; i < ( document.getElementById('total_rows').value - 1 ); i++ )
			{
				for ( var k = ( i + 1 ); k < document.getElementById('total_rows').value; k++ )
				{
					if ( Number(document.getElementById('pos_'+i).innerHTML) > Number(document.getElementById('pos_'+k).innerHTML) )
					{
						var aux_pos = document.getElementById('pos_'+i).innerHTML;
						document.getElementById('pos_'+i).innerHTML = document.getElementById('pos_'+k).innerHTML;
						document.getElementById('pos_'+k).innerHTML = aux_pos;
						//**
						var aux_image = document.getElementById('image_'+i).src;
						document.getElementById('image_'+i).src = document.getElementById('image_'+k).src;
						document.getElementById('image_'+k).src = aux_image;
						//**
						var aux_anchor = document.getElementById('anchor_'+i).innerHTML;
						document.getElementById('anchor_'+i).innerHTML = document.getElementById('anchor_'+k).innerHTML;
						document.getElementById('anchor_'+k).innerHTML = aux_anchor;
						//**
						var aux_species = document.getElementById('species_'+i).innerHTML;
						document.getElementById('species_'+i).innerHTML = document.getElementById('species_'+k).innerHTML;
						document.getElementById('species_'+k).innerHTML = aux_species;
						//**
						//**
						//**
						var aux_pos = document.getElementById('name'+i).value;
						document.getElementById('name'+i).value = document.getElementById('name'+k).value;
						document.getElementById('name'+k).value = aux_pos;
						//**
						var aux_pos = document.getElementById('height'+i).value;
						document.getElementById('height'+i).value = document.getElementById('height'+k).value;
						document.getElementById('height'+k).value = aux_pos;
						//**
						var aux_pos = document.getElementById('mass'+i).value;
						document.getElementById('mass'+i).value = document.getElementById('mass'+k).value;
						document.getElementById('mass'+k).value = aux_pos;
						//**
						var aux_pos = document.getElementById('hair_color'+i).value;
						document.getElementById('hair_color'+i).value = document.getElementById('hair_color'+k).value;
						document.getElementById('hair_color'+k).value = aux_pos;
						//**
						var aux_pos = document.getElementById('skin_color'+i).value;
						document.getElementById('skin_color'+i).value = document.getElementById('skin_color'+k).value;
						document.getElementById('skin_color'+k).value = aux_pos;
					}
				}
			}
		}
		function sortup()
		{
			if ( document.getElementById('sortup').className == 'btn btn-success diegosmallbuttons' )
				return;
			document.getElementById('sortup').className = 'btn btn-success diegosmallbuttons';
			document.getElementById('nosort').className = 'btn btn-danger diegosmallbuttons';
			document.getElementById('sortdown').className = 'btn btn-danger diegosmallbuttons';
			for ( var i = 0; i < ( document.getElementById('total_rows').value - 1 ); i++ )
			{
				for ( var k = ( i + 1 ); k < document.getElementById('total_rows').value; k++ )
				{
					if ( document.getElementById('species_'+i).innerHTML > document.getElementById('species_'+k).innerHTML )
					{
						var aux_pos = document.getElementById('pos_'+i).innerHTML;
						document.getElementById('pos_'+i).innerHTML = document.getElementById('pos_'+k).innerHTML;
						document.getElementById('pos_'+k).innerHTML = aux_pos;
						//**
						var aux_image = document.getElementById('image_'+i).src;
						document.getElementById('image_'+i).src = document.getElementById('image_'+k).src;
						document.getElementById('image_'+k).src = aux_image;
						//**
						var aux_anchor = document.getElementById('anchor_'+i).innerHTML;
						document.getElementById('anchor_'+i).innerHTML = document.getElementById('anchor_'+k).innerHTML;
						document.getElementById('anchor_'+k).innerHTML = aux_anchor;
						//**
						var aux_species = document.getElementById('species_'+i).innerHTML;
						document.getElementById('species_'+i).innerHTML = document.getElementById('species_'+k).innerHTML;
						document.getElementById('species_'+k).innerHTML = aux_species;
						//**
						//**
						//**
						var aux_pos = document.getElementById('name'+i).value;
						document.getElementById('name'+i).value = document.getElementById('name'+k).value;
						document.getElementById('name'+k).value = aux_pos;
						//**
						var aux_pos = document.getElementById('height'+i).value;
						document.getElementById('height'+i).value = document.getElementById('height'+k).value;
						document.getElementById('height'+k).value = aux_pos;
						//**
						var aux_pos = document.getElementById('mass'+i).value;
						document.getElementById('mass'+i).value = document.getElementById('mass'+k).value;
						document.getElementById('mass'+k).value = aux_pos;
						//**
						var aux_pos = document.getElementById('hair_color'+i).value;
						document.getElementById('hair_color'+i).value = document.getElementById('hair_color'+k).value;
						document.getElementById('hair_color'+k).value = aux_pos;
						//**
						var aux_pos = document.getElementById('skin_color'+i).value;
						document.getElementById('skin_color'+i).value = document.getElementById('skin_color'+k).value;
						document.getElementById('skin_color'+k).value = aux_pos;
					}
				}
			}
		}
		function sortdown()
		{
			if ( document.getElementById('sortdown').className == 'btn btn-success diegosmallbuttons' )
				return;
			document.getElementById('sortdown').className = 'btn btn-success diegosmallbuttons';
			document.getElementById('sortup').className = 'btn btn-danger diegosmallbuttons';
			document.getElementById('nosort').className = 'btn btn-danger diegosmallbuttons';
			for ( var i = 0; i < ( document.getElementById('total_rows').value - 1 ); i++ )
			{
				for ( var k = ( i + 1 ); k < document.getElementById('total_rows').value; k++ )
				{
					if ( document.getElementById('species_'+i).innerHTML < document.getElementById('species_'+k).innerHTML )
					{
						var aux_pos = document.getElementById('pos_'+i).innerHTML;
						document.getElementById('pos_'+i).innerHTML = document.getElementById('pos_'+k).innerHTML;
						document.getElementById('pos_'+k).innerHTML = aux_pos;
						//**
						var aux_image = document.getElementById('image_'+i).src;
						document.getElementById('image_'+i).src = document.getElementById('image_'+k).src;
						document.getElementById('image_'+k).src = aux_image;
						//**
						var aux_anchor = document.getElementById('anchor_'+i).innerHTML;
						document.getElementById('anchor_'+i).innerHTML = document.getElementById('anchor_'+k).innerHTML;
						document.getElementById('anchor_'+k).innerHTML = aux_anchor;
						//**
						var aux_species = document.getElementById('species_'+i).innerHTML;
						document.getElementById('species_'+i).innerHTML = document.getElementById('species_'+k).innerHTML;
						document.getElementById('species_'+k).innerHTML = aux_species;
						//**
						//**
						//**
						var aux_pos = document.getElementById('name'+i).value;
						document.getElementById('name'+i).value = document.getElementById('name'+k).value;
						document.getElementById('name'+k).value = aux_pos;
						//**
						var aux_pos = document.getElementById('height'+i).value;
						document.getElementById('height'+i).value = document.getElementById('height'+k).value;
						document.getElementById('height'+k).value = aux_pos;
						//**
						var aux_pos = document.getElementById('mass'+i).value;
						document.getElementById('mass'+i).value = document.getElementById('mass'+k).value;
						document.getElementById('mass'+k).value = aux_pos;
						//**
						var aux_pos = document.getElementById('hair_color'+i).value;
						document.getElementById('hair_color'+i).value = document.getElementById('hair_color'+k).value;
						document.getElementById('hair_color'+k).value = aux_pos;
						//**
						var aux_pos = document.getElementById('skin_color'+i).value;
						document.getElementById('skin_color'+i).value = document.getElementById('skin_color'+k).value;
						document.getElementById('skin_color'+k).value = aux_pos;
					}
				}
			}
		}
	</script>
</head>
<body>
	<div 
		style="
			position:fixed;
			display:hidden;
			width:100%;
			height:0px;
			z-index:9000;
			opacity:0.5;
			background-color:#000000;
		" 
		id="divsup1" 
	>
	</div>
	<div 
		style="
			position:fixed;
			display:hidden;
			width:40%;
			height:0px;
			z-index:10000;
			background-color:#FFFFFF;
			margin:0 30%;
		" 
		id="divsup2" 
	>
		<div 
			class="container"
			style="width:100%;"
			id="divsup3" 
		>
		</div>
	</div>
	<div class="container" style="text-align:center;" >
		<div class="col-xs-12 col-sm-12 col-md-12 col-md-12">
			<h1>The List</h1>
		</div>
		<br>
		<table 
			class="table" 
			style="
				text-align:left;
				vertical-align:middle;
			" 
		>
			<thead>
				<tr>
					<th></th>
					<th>Gender</th>
					<th>Name</th>
					<th>
						Species
<div style="float:right;" >
	<button id="nosort" type="button" class="btn btn-success diegosmallbuttons" onClick="nosort();" >!Sort</button>
	<button id="sortup" type="button" class="btn btn-danger diegosmallbuttons" onClick="sortup();" >Up</button>
	<button id="sortdown" type="button" class="btn btn-danger diegosmallbuttons" onClick="sortdown();" >Down</button>
</div>
					</th>
				</tr>
			</thead>
			<tbody>
<?php 
	ini_set("allow_url_fopen", 1);
	$json = file_get_contents('https://swapi.co/api/people/?format=json');
	$obj_json = json_decode($json, true);
	$final_hiddens = "";
	$list_counter = 0;
	for ($i = 0; $i < count($obj_json["results"]); $i++ )
	{
		$listofspecies = "";
		for ($k = 0; $k < count($obj_json["results"][$i]["species"]); $k++ )
		{
			$json_2 = file_get_contents($obj_json["results"][$i]["species"][$k].'?format=json');
			$obj_json_2 = json_decode($json_2, true);
			$listofspecies = $listofspecies.$obj_json_2["name"];
		}
		$imagetouse = "other_2.png";
		if ( $obj_json["results"][$i]["gender"] == "male" )
		{
			$imagetouse = "male.jpg";
		}
		else if ( $obj_json["results"][$i]["gender"] == "female" )
		{
			$imagetouse = "female.png";
		}
		else if ( $obj_json["results"][$i]["gender"] == "n/a" )
		{
			$imagetouse = "na.png";
		}
		echo "
				<tr>
					<td class=\"list-group-item col-xs-1\" style=\"padding:15px 15px;text-align:center;\" >
						<p id=\"pos_".$list_counter."\" >".$i."</p>
					</td>
					<td class=\"list-group-item col-xs-1\" style=\"padding:15px 15px;text-align:center;\" > 
						<img 
							id=\"image_".$list_counter."\" 
							src=\"".$imagetouse."\" 
							class=\"img-rounded\" 
							style=\"height:33px;\" 
							alt=\"".$obj_json["results"][$i]["gender"]."\" >
					</td>
					<td class=\"list-group-item col-xs-7\" style=\"padding:15px 15px;\" >
						<a 
							id=\"anchor_".$list_counter."\" 
							href=\"javascript:showdetails('".$list_counter."');\" >
							".$obj_json["results"][$i]["name"]."
						</a>
					</td>
					<td class=\"list-group-item col-xs-3\" style=\"padding:15px 15px;\" >
						<p id=\"species_".$list_counter."\" >".$listofspecies."</p>
					</td>
				</tr>
		";
		$final_hiddens = $final_hiddens.
			"<input type=\"hidden\" id=\"name".$list_counter."\" value=\"".$obj_json["results"][$i]["name"]."\" />".
			"<input type=\"hidden\" id=\"height".$list_counter."\" value=\"".$obj_json["results"][$i]["height"]."\" />".
			"<input type=\"hidden\" id=\"mass".$list_counter."\" value=\"".$obj_json["results"][$i]["mass"]."\" />".
			"<input type=\"hidden\" id=\"hair_color".$list_counter."\" value=\"".$obj_json["results"][$i]["hair_color"]."\" />".
			"<input type=\"hidden\" id=\"skin_color".$list_counter."\" value=\"".$obj_json["results"][$i]["skin_color"]."\" />";
		$list_counter++;
	}
?>
			</tbody>
		</table>
	</div>
<?php echo $final_hiddens."<input type=\"hidden\" id=\"total_rows\" value=\"".$list_counter."\" />"; ?>
</body>
