
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


<select name="" id="sele" style="background-color: black;color: white;" >
<input type="hidden" name="" id="stat">

</select>





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
						 		//$("#sele").append('<option value="${a}">${s}</option>');

						 		$('#sele').append(new Option(s, a));
							 	}


								})
						 .catch((error)=>{

						 	console.log(error);
						 }


						 	);

					</script>