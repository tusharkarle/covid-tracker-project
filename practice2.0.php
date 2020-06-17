
	<link rel="stylesheet" type="text/css" href="additional/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="additional/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="additional/jquery-ui.structure.css">
	<link rel="stylesheet" type="text/css" href="additional/jquery-ui.structure.min.css">
	<link rel="stylesheet" type="text/css" href="additional/jquery-ui.theme.css">
	<link rel="stylesheet" type="text/css" href="additional/jquery-ui.theme.min.css">


	<script src="additional/jquery.js"></script>
	<script src="additional/jquery-ui.js"></script>
	<script src="additional/jquery-ui.min.js"></script>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
$state="Maharashtra";
$district="Ahmednagar";



//$state=$_POST['state'];
//$district=$_POST['district'];

?>

<input id="state34" type="hidden" name="" value="<?php echo($state);?>">
<input id="district34" type="hidden" name="" value="<?php echo($district);?>">


<h1 class="zone">hello</h1>

<script type="text/javascript">
		


		var sta=$("#state34").attr("value");
		var dis=$("#district34").attr("value");
		console.log(sta);
		console.log(dis);




		fetch("	https://api.covid19india.org/zones.json").then((apidata)=>{

			return apidata.json();


		})
		.then((acutualdata)=>{

			console.log(acutualdata);
			console.log(acutualdata.zones.length);


			for(var a=0;a<+acutualdata.zones.length;a++){

				if (acutualdata.zones[a].state==sta && acutualdata.zones[a].district==dis) {
					console.log(a);
					console.log(acutualdata.zones[a].zone);

					$(".zone").text(acutualdata.zones[a].zone+" zone"+sta);

				}
			}

		});






</script>>