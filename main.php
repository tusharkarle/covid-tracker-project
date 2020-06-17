<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width,width=device-height, initial-scale=1, shrink-to-fit=no" />
	<title>covid-19 tracker INDIA</title>
	
    

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
	<link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">


<!-- 
		ALSO ADDED CDN
-->



	



</head>

	<style type="text/css">



	*{
		margin: 0;
		padding: 0;
		color: white;

		font-size-adjust: auto;
	


	}

	.container{

		background-color: black;

	}

	.info{

		width:100%;
		text-align:right;
	}

	.modal-dialog {
  height: 80% !important;
  padding-top:10%;
}

.modal-content {
  height: 100% !important;
  overflow:visible;
}

.modal-body {
  height: 80%;
  overflow: auto;
}

.modal-open {
  overflow: hidden;
}		

	</style>
	
</head>




	


<body>

	<div class="modal1">
			
				  <!-- Modal -->
				  <div class="modal fade" id="myModal" role="dialog"  style="background-color: black;">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content" style="background-color: black;">
				        <div class="modal-header" >
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h1 class="modal-title">Alert</h1>
				        </div>
				        <div class="modal-body" style="background-color: black;">

				        	<div>
				        		<h1>Search Data For Your Location :-</h1>
				        		<h1 id="location">$$$</h1>
				        		<input type="hidden" name="state" value="" id="state">
				        		<input type="hidden" name="district" value="" id="district">

				        	</div>
				         
				        </div>
				        <div class="modal-footer" style="display: flex;justify-content: space-around;">
				          <button type="button" id="ok-clicked" class="btn btn-default" data-dismiss="modal" style="width: 20%;"><h3>OK</h3></button> 
				          <button type="button" id="search-clicked" class="btn btn-default" data-dismiss="modal"><h3>Search Manually</h3></button>

				        </div>
				      </div>
				    </div>
				  </div>


				  <script type="text/javascript">

				  		 fetch("https://ipapi.co/json/")

						 .then( (apidata1)=>{
						 	//console.log(apidata);
						 	return apidata1.json();
						 })
						 .then((actualdata1)=>{
						 	console.log(actualdata1);

						 	console.log(actualdata1.city+","+actualdata1.region+","+actualdata1.country_name);

						 	var district=actualdata1.city;
						 	var state1=actualdata1.region;

						 	$("#location").text(actualdata1.city+","+actualdata1.region+","+actualdata1.country_name);

						 	$("#state").attr("value",state1);
						 	$("#district").attr("value",district);
						 	




						 });
				  	
				  </script>
			</div>


			<div class="modal2">
			
				  <!-- Modal -->
				  <div class="modal fade" id="getlocationModal" role="dialog"  style="background-color: black;">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content" style="background-color: black;">
				        <div class="modal-header" >
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h2 class="modal-title">Select the Location</h2>
				        </div>
				        <div class="modal-body" style="background-color: black;">

				        	<div>
				        		
				        		<label><h3>State :-</h3></label>
				        			<select name="state1" id="state15" onchange="func1(this.value)" style="background-color: black;color: white;border-radius: 20px; height: 40px;width: 50%;font-size-adjust: auto;">
				        				<option>Select the states</option>


				        			</select>



								<br>		

				        		<label><h3>District :-</h3></label>

				        		<select name="district1" id="district15" style="background-color: black;color: white;border-radius: 20px; height: 40px;width: 50%;font-size-adjust: auto;">

				        				<option>Select the districts</option>

				        			</select>


				        		


				        		
				        	</div>
				         
				        </div>
				        <div class="modal-footer">

				        	 <button type="submit" id="search-clicked155" class="btn btn-default" data-dismiss="modal">Search</button>
				         
				          

				        </div>
				      </div>
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
						 	
						 	for(var a=1;a<=actualdata.statewise.length;a++){

						 		console.log(actualdata.statewise[a].state);
						 		var s=actualdata.statewise[a].state;
						 		//$('#selectBox').append(new Option(optionText, optionValue))

						 		//$('#state1').append(new Option(s,s));
						 		$('#state15').append( '<option value="'+s+'">'+s+'</option>' );
							 	}


								})
						 .catch((error)=>{

						 	console.log(error);
						 }


						 	);


						 function func1(nam){
						 	$('#district15').empty();

						 	fetch("https://api.covid19india.org/v2/state_district_wise.json")

						 .then( (apidata2)=>{
						 	//console.log(apidata);
						 	return apidata2.json();
						 })
						 .then((actualdata2)=>{
						 	console.log(actualdata2);

						 	for(var c=0;c<=actualdata2.length;c++){

						 		if (actualdata2[c].state==nam) {

						 			for(var d=1;d<=actualdata2[c].districtData.length;d++){

						 				var e=actualdata2[c].districtData[d].district;
						 				//$('#district1').append(new Option(e,e));

						 				$('#district15').append( '<option value="'+e+'">'+e+'</option>' );



						 			}

						 		}
						 	}
						 	
						 	})
						 .catch((error)=>{

						 	console.log(error);
						 });
						}

						 





						 //clicked search

						 
				  	
				  </script>
			</div>

			<div class="modal3">
			
				  <!-- Modal -->
				  <div class="modal fade" id="contact-us-modal" role="dialog"  style="background-color: black;">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content" style="background-color: black;">
				        <div class="modal-header" >
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h1 class="modal-title">Contact US</h1>
				        </div>
				        <div class="modal-body" style="background-color: black;">

				        	<H3>This website is Created By</H3>
				         	<H1> TUSHAR KARLE</H1>
				         	<img src="resources/tushar.jpeg" width="100px" height="100px" style="border-radius: 50px;">

				         	<h3>For any queries mail me at tusharkarle001@gmail.com</h3>
				        </div>
				        <div class="modal-footer" style="display: flex;justify-content: space-around;">
				          <button type="button" id="ok-clicked" class="btn btn-default" data-dismiss="modal" style="width: 20%;"><h3>OK</h3></button> 
				          

				        </div>
				      </div>
				    </div>
				  </div>


				  <script type="text/javascript">

				  		 fetch("https://ipapi.co/json/")

						 .then( (apidata1)=>{
						 	//console.log(apidata);
						 	return apidata1.json();
						 })
						 .then((actualdata1)=>{
						 	console.log(actualdata1);

						 	console.log(actualdata1.city+","+actualdata1.region+","+actualdata1.country_name);

						 	var district=actualdata1.city;
						 	var state1=actualdata1.region;

						 	$("#location").text(actualdata1.city+","+actualdata1.region+","+actualdata1.country_name);

						 	$("#state").attr("value",state1);
						 	$("#district").attr("value",district);
						 	




						 });
				  	
				  </script>
			</div>


	<div class="container" style="width:100%;height:100%;margin: 0;padding: 0;">


			
		

		<div class="heading" style="position: relative;display: flex;">
			<h1 id="title" style="">
				<strong>COVID-19 TRACKER</strong>
			</h1>

			<div style="position: absolute;right: 5%; color: blue;">
				<h2 id="contact-us-click">Contact Us</h2>
			</div>

			<script type="text/javascript">
				
				$("#contact-us-click").click(function(){
					$("#contact-us-modal").modal('show');

				})
			</script>



		</div>

		
 
		
		
		<div class="middle">


			<div class="info">

				<h2 style="text-align: center;">Stay Home !!!  Stay Safe !!!</h2>




			</div>
			<br>
			<br>


			<div class="india-info">
				<div style="display: flex; justify-content: center;">
					<div style="display: flex;width: 100%;justify-content: center;text-align: center;">
					<h1>INDIA</h1>
					<img src="resources/india-flag.jpg" width="55px" height="70px">
					</div>
				</div>

				<br>
				<br>

				<div class="india-info-data" width=100% style="text-align: center;display: flex;flex-wrap: wrap;justify-content: space-around;">

					<div style="width: 20%; background-color: blue;border-radius: 30%;">
						<h2>Total Confirmed <br> Cases</h2>
						<h1 id="india-confirmed">$$$$</h1>
						
					</div>


					<div style="width: 20%;background-color: green;border-radius: 30%;">
						<h2 style="margin-top: 5%;">Re-<br>covered</h2>
						<br>
						<h1 id="india-recovered">$$$$</h1>
						
					</div>


					<div style="width: 20%;background-color: red;border-radius: 30%;">
						<h2 style="margin-top: 10%;">Deaths</h2>
						<br>
						<h1 id="india-death">$$$$</h1>
						
					</div>


					<div style="width: 20%;background-color:purple;border-radius: 30%;">
						<h2 style="margin-top: 10%;">Active Cases</h2>
						<br>
						<h1 id="india-active">$$$$</h1>
						
					</div>


					<script type="text/javascript">
						
					 fetch("https://api.covid19india.org/data.json")

						 .then( (apidata)=>{
						 	//console.log(apidata);
						 	return apidata.json();
						 })
						 .then((actualdata)=>{
						 	console.log(actualdata);
						 	var dataobj=actualdata.statewise[0];

						 	$("#india-confirmed").text(dataobj.confirmed);
						 	$("#india-recovered").text(dataobj.recovered);
						 	$("#india-death").text(dataobj.deaths);
						 	$("#india-active").text(dataobj.active);

						 });

					</script>


					
					
				</div>

				<div class="statewise">
					
						


				</div>

				<div class="zone">
					

				</div>


			</div>


			

			
			
		</div>	
		<br>
		<br>
		<br>


		<div>
			<div style="justify-content: center;width: 100%;text-align: center;align-items: center;display: flex;">


					<h2 id="bttn-search-again" style="background-color: #ff6600;width: 40%;border-radius: 50px;">Search Again</h2>
					
					

					<br>
					<br>
					<br>
 
			</div>
		</div>


		<div class="foot">
			<br>
			<br>
			<br>
			<br>
				
				<div id="srcc" style="justify-content: center;text-align: center;">
					<h2>Disclamier</h2>
					<h4>All the above data is taken from https://api.covid19india.org .</h4>
					<h4> Ip address api https://ipapi.co is used.</h4>
					<h4>This Website was build for Educational Purpose.</h4>

					<h4>Above data may be wrong.</h4>
				</div>


			</div>
				<br>
		<br>
		<br>
	</div>

</body>


</html>



<script type="text/javascript">
	$(document).ready( function()
	{	
		

			
	
	$('#myModal').modal({backdrop: 'static', keyboard: false})  ;


	$("#myModal").modal('show');

	$("#bttn-search-again").click(function(){
								$('#myModal').modal({backdrop: 'static', keyboard: false})  ;
								$("#getlocationModal").modal('show');


							});



		$("#search-clicked").click(function(){


			$('#getlocationModal').modal({backdrop: 'static', keyboard: false});
			$("#getlocationModal").modal('show');


			


		});

		$("#ok-clicked").click(function(){

			var district=$("#district").attr("value");
			var stat=$("#state").attr("value");
			

			$.ajax({
				url:"using-ip.php",
				type:"post",
				data:{
					
					state:stat,
					district:district

					
				},
				success:function(result){

					$(".statewise").html(result);
				}
			});
		});

		$("#search-clicked155").click(function(){
							
			

						 	var stat=$("#state15").val();
						 	var dis=$("#district15").val();

						 

						 	$.ajax({
									url:"using-ip.php",
									type:"post",
									data:{
										
										state:stat,
										district:dis

										
									},
									success:function(result){

										$(".statewise").html(result);
									}
								});
						 	
						 	

						 });


			





		

	});



</script>