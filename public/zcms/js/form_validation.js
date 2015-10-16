function Validate_AddVechicle(origin)
	{
		if(getVal('mid')==0)
			{
				alert('Please select the Manufacturer');
				document.getElementById('mid').focus();
				return false;
			}
			
		
		
		if(getVal('model')=='')
			{
				alert('Please enter the Model Name');
				document.getElementById('model').focus();
				return false;
			}
			
		if(getVal('year')==0)
			{
				alert('Please select the year of manufacture');
				document.getElementById('year').focus();
				return false;
			}
			
		
		if(getVal('current_km')=='')
			{
				alert('Please enter the current KM reading');
				document.getElementById('current_km').focus();
				return false;
			}
			
		
		if(getVal('avg_mileage')==0)
			{
				alert('Please select the Average Mileage');
				document.getElementById('avg_mileage').focus();
				return false;
			}
			
		if(getVal('avg_mileage')==0)
			{
				alert('Please select the Average Mileage');
				document.getElementById('avg_mileage').focus();
				return false;
			}
			
		
		
		
		theForm=document.getElementById("add_vechicle");
	
	
	var checkvalue=false;
	for (i=0, n=theForm.engine_type.length; i<n; i++)
		{
   		if (theForm.engine_type[i].checked)
			{
      		var checkvalue = true;
      		break;
			}
		}
	
	
	if(!checkvalue)
		{
			alert('Please choose your engine type');
			document.getElementById('engine_type').focus();
			return false;
		}
	
	//alert(document.getElementById('engine_type').checked)
	
	
	if(document.getElementById('engine_type').checked==true)
		{
			var checkvalue=false;
			for (i=0, n=theForm.petrol.length; i<n; i++)
				{
   				if (theForm.petrol[i].checked)
					{
					var checkvalue = true;
					break;
					}
				}
				
			
			
			if(!checkvalue)
		{
			alert('Please choose your engine type for petrol');
			document.getElementById('petrol').focus();
			return false;
		}
			
			
		}
		
	else
		{
			var checkvalue=false;
			for (i=0, n=theForm.diesel.length; i<n; i++)
				{
   				if (theForm.diesel[i].checked)
					{
					var checkvalue = true;
					break;
					}
				}
				
			
			
			if(!checkvalue)
		{
			alert('Please choose your engine type for diesel');
			document.getElementById('diesel').focus();
			return false;
		}
			
			
		}
	
	
	
		
		
		
		
		if(getVal('cc')==0)
			{
				alert('Please select the CC');
				document.getElementById('cc').focus();
				return false;
			}
			
		if(getVal('transmission')==0)
			{
				alert('Please select the transmission type');
				document.getElementById('transmission').focus();
				return false;
			}
			
		
		
		if(origin=='add')
			{
		if(getVal('frontview')=='')
			{
				alert('Please select the image for front view');
				document.getElementById('frontview').focus();
				return false;
			}
			}
			
		if(getVal('expt_sp')=='')
			{
				alert('Please enter the expected selling price');
				document.getElementById('expt_sp').focus();
				return false;
			}
			
		if(getVal('owner_fullname')=='')
			{
				alert('Please enter the fullname of the owner');
				document.getElementById('owner_fullname').focus();
				return false;
			}
			
		if(getVal('owner_ph')=='')
			{
				alert('Please enter the Phone no of owner');
				document.getElementById('owner_ph').focus();
				return false;
			}
			
		if(getVal('owner_vechicle_no')=='')
			{
				alert('Please enter the vechicle no');
				document.getElementById('owner_vechicle_no').focus();
				return false;
			}
			
			
		
		
	}
	


function petrol() {
	alert('a');
	return false;
  //if (document.getElementById || document.all) 
  {
	//disable diesel
	
	document.add_vechicle.petrol[0].disabled=true;
	document.add_vechicle.petrol[1].disabled=true;
	document.add_vechicle.petrol[0].checked=false;
	document.add_vechicle.petrol[1].checked=false;
	
	document.add_vechicle.diesel[0].disabled=false;
	document.add_vechicle.diesel[1].disabled=false;
	document.add_vechicle.diesel[2].disabled=false;
	document.add_vechicle.diesel[3].disabled=false;
	

	
	}
}


function diesel() {
  //if (document.getElementById || document.all)  
  {
  	//disable petrol
	document.add_vechicle.diesel[0].disabled=true;
	document.add_vechicle.diesel[1].disabled=true;
	document.add_vechicle.diesel[2].disabled=true;
	document.add_vechicle.diesel[3].disabled=true;
	document.add_vechicle.diesel[0].checked=false;
	document.add_vechicle.diesel[1].checked=false;
	document.add_vechicle.diesel[2].checked=false;
	document.add_vechicle.diesel[3].checked=false;
	
	
	document.add_vechicle.petrol[0].disabled=false;
	document.add_vechicle.petrol[1].disabled=false;
	
	
	}
}

//##############################################################################

