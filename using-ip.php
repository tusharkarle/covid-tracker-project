<?php

//$state="Maharashtra";
//$district="Ahmednagar";



$state=$_POST['state'];
$district=$_POST['district'];


?>


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



<input id="state34" type="hidden" name="" value="<?php echo($state);?>">
<input id="district34" type="hidden" name="" value="<?php echo($district);?>">


<div class="state-district-info">

	<div class="state.info">
		<br>
		<br>
		<br>
		
				<div style="display: flex;width: 100%;justify-content: center;background-color:#ff6600;border-radius: 200px;">
					 <h1>State:-&nbsp;</h1>
					<h1><?php echo $state;?></h1>						
				
					</div>
				</div>

				<br>
				<br>
		

				<div class="state-info-data" width=100% style="text-align: center;display: flex;flex-wrap: wrap;justify-content: space-around;">

					<div style="width: 25%; background-color: blue;border-radius: 30%;">
						<h2>Total Confirmed <br> Cases</h2>
						<h1 id="state-confirmed">$$$$</h1>
						
					</div>


					<div style="width: 20%;background-color: green;border-radius: 30%;">
						<h2 style="margin-top: 5%;">Re-<br>covered</h2>
						<br>
						<h1 id="state-recovered">$$$$</h1>
						
					</div>


					<div style="width: 20%;background-color: red;border-radius: 30%;">
						<h2 style="margin-top: 10%;">Deaths</h2>
						<br>
						<h1 id="state-death">$$$$</h1>
						
					</div>


					<div style="width: 20%;background-color:purple;border-radius: 30%;">
						<h2 style="margin-top: 10%;">Active Cases</h2>
						<br>
						<h1 id="state-active">$$$$</h1>
						
					</div>
		</div>


		<div class="district-infor">
			<br>
			<br>
			<br>
		

				<div style="display: flex;width: 100%;text-align: center;;justify-content: center;background-color:#ff6600;border-radius: 200px;">
					
					<h1>District:-&nbsp;</h1>
					<h1><?php echo $district;?></h1>
				
					
				</div>

				<br><br>
		

				<div class="district-info-data" width=100% style="text-align: center;display: flex;flex-wrap: wrap;justify-content: space-around;">

					<div style="width: 25%; background-color: blue;border-radius: 30%;">
						<h2>Total Confirmed <br> Cases</h2>
						<h1 id="district-confirmed">$$$$</h1>
						
					</div>


					<div style="width: 20%;background-color: green;border-radius: 30%;">
						<h2 style="margin-top: 5%;">Re-<br>covered</h2>
						<br>
						<h1 id="district-recovered">$$$$</h1>
						
					</div>


					<div style="width: 20%;background-color: red;border-radius: 30%;">
						<h2 style="margin-top: 10%;">Deaths</h2>
						<br>
						<h1 id="district-death">$$$$</h1>
						
					</div>


					<div style="width: 20%;background-color:purple;border-radius: 30%;">
						<h2 style="margin-top: 10%;">Active Cases</h2>
						<br>
						<h1 id="district-active">$$$$</h1>
						
					</div>


			


		</div>
		<br>


		<div id="zone" style="width: 100%;justify-content: center;padding-left:30%;" >
			<div class="zone-clr" style="width:60%;display: inline-flex;border-radius: 50px;background-color: black;justify-content: center;">
					<h2 class="zone1">District Zone :- </h2>
					<h2 class="zone2">a</h2>
			</div>
		</div>




					<script type="text/javascript">
						
					 fetch("https://api.covid19india.org/data.json")

						 .then( (apidata)=>{
						 	//console.log(apidata);
						 	return apidata.json();
						 })
						 .then((actualdata)=>{
						 	console.log(actualdata);
						 	console.log(actualdata.statewise.length);
						 	

						 
								var sta=$("#state34").attr("value");
								var dis=$("#district34").attr("value");
								console.log(sta);
								console.log(dis);
								

								for(var i=0;i<=actualdata.statewise.length;i++){

									if (actualdata.statewise[i].state==sta) {

										console.log(i);

										console.log(actualdata.statewise[i].state);
										console.log(actualdata.statewise[i].confirmed);
										

										$("#state-confirmed").text(actualdata.statewise[i].confirmed);
										$("#state-recovered").text(actualdata.statewise[i].recovered);
										$("#state-death").text(actualdata.statewise[i].deaths);
										$("#state-active").text(actualdata.statewise[i].active);


										fetch("https://api.covid19india.org/v2/state_district_wise.json")

											 .then( (apidata1)=>{
											 	//console.log(apidata);
											 	return apidata1.json();
											 })
											 .then((actualdata1)=>{
												 	
											 	console.log(actualdata1);

											 	for(var a=0;a<actualdata1.length;a++){

											 		if (actualdata1[a].state==sta) {
											 			console.log(a);
											 			console.log(actualdata1[a].districtData.length);


											 			for (var b=0;b<actualdata1[a].districtData.length;b++) {

											 				if (actualdata1[a].districtData[b].district==dis) {
											 					console.log(b);
											 					console.log(actualdata1[a].districtData[b].district);


											 					$("#district-confirmed").text(actualdata1[a].districtData[b].confirmed);
																$("#district-recovered").text(actualdata1[a].districtData[b].recovered);
																$("#district-death").text(actualdata1[a].districtData[b].deceased);
																$("#district-active").text(actualdata1[a].districtData[b].active);
											 				}
											 				
											 			}
											 		}


											 	}
											


											 	 });
									}
								}

								



						})
						 .catch((error)=>{

						 	console.log(error);
						 }


						 	);





						 fetch("https://api.covid19india.org/zones.json").then((apidata)=>{

										return apidata.json();


									})
									.then((acutualdata)=>{

									var sta=$("#state34").attr("value");
								var dis=$("#district34").attr("value");

										console.log(acutualdata);
										console.log(acutualdata.zones.length);


										for(var f=0;f<+acutualdata.zones.length;f++){

											if (acutualdata.zones[f].state==sta && acutualdata.zones[f].district==dis) {
												console.log(f);
												console.log(acutualdata.zones[f].zone);

												$(".zone2").text(acutualdata.zones[f].zone);

												if (acutualdata.zones[f].zone=="Orange") {
													$(".zone-clr").css("background-color","#ff6600");
													

												}
												else if (acutualdata.zones[f].zone=="Red") {

													$(".zone-clr").css("background-color","red");
												;

												}
												else if (acutualdata.zones[f].zone=="Green") {
													$(".zone-clr").css("background-color","green");
													

												}


											}
										}

									});







					</script>


					
					
				</div>



