<script type="text/javascript">
						
					 fetch("https://api.covid19india.org/data.json")

						 .then( (apidata)=>{
						 	//console.log(apidata);
						 	return apidata.json();
						 })
						 .then((actualdata)=>{
						 	//console.log(actualdata.statewise[0]);
						 
								var sta=$("#state").attr("value");
								var dis=$("#district").attr("value");
								console.log(sta);
								console.log(dis);
								//console.log(actualdata.statewise.length);


							for (var i=1;i<=actualdata.statewise.length;i++){

								//console.log(actualdata.statewise[i].state);


								if (actualdata.statewise[i].state==sta) {

									//console.log("hello");



										fetch("https://api.covid19india.org/v2/state_district_wise.json")

											 .then( (apidata1)=>{
											 	//console.log(apidata);
											 	return apidata1.json();
											 })
											 .then((actualdata1)=>{
												 	
											 	console.log(actualdata1.length);
											 	for (var i=0;i<=actualdata1.length;i++){
											 		//console.log(i);
											 		//console.log(actualdata1);
											 		//console.log(actualdata1[i].state);

											 		if (actualdata1[i].state==sta) 
											 		{
											 			console.log(i);
											 			console.log(actualdata1);
											 			console.log(actualdata1[i].state);
											 			console.log(actualdata[i].districtData.length)




											 			

											 			
											 		}

											 		



											 	}


											 	 });
								}
						 	
						 }
						});

					</script>