//Nepa Functions

//Do not add any function here. You can add your function in user_functions.js file


function err(display,name)
	{
		alert('Please enter the '+display);
		//alert (name);
		document.getElementById(name).focus();
	}

//###############################################################################



function emailverify(email)
	{
	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	str=email;
	if(!filter.test(str))
		{
		return false
		}
	else return true;
	}
	
//###################################################################################


function NumberValidate(num){
if(isNaN(num))return false;
else return true;
}
	
	
//###################################################################################

function getConfirm()
	{
		return confirm('Do you really want to delete?');
			
	}

//###############################################################################	

function getVal(id)
	{
		return document.getElementById(id).value;
	}
	
//###############################################################################


function toggle_visibility(id)
{
/*
	var e = document.getElementById(id);
    if(e.style.display == 'block') e.style.display = 'none';
    else e.style.display = 'block';
	*/
	$("#"+id).slideToggle(100);
}


//###############################################################################


function redirect(URL)
	{
		top.location=URL;
	}

//###############################################################################


function RedirectWithConfirm(url)
{
	var result=confirm('Are you sure you want to proceed?');
	if(result)	top.location=url;
	else return false;
}


//###########################################################################


function popUp(URL,width,height)
{
day = new Date();
id = day.getTime();
eval("Photo" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width="+ width +",height="+ height +",left = 312,top = 184');");
}


//#############################################################################
//a should be in merged with comma ','. field name is merged with comma
//divis should be the id of that div where the error message is displayed

function validate_form_div(a,divid)
	{
		var z=a.split(',');
		num_data = z.length;
		var msg = 'Error! The following fields are empty<br>';
		var err=0;
		//alert(a);
		for(var i=0; i<num_data; i++)
			{
				//alert(z[i]);
				if(document.getElementById(z[i]).value=='')
					{
						msg=msg+z[i]+'<br>';
						err++;
					}
			}
		if(err!=0)
			{
				document.getElementById(divid).innerHTML=msg;
				return false;
			}
		else return true;		
		
	}
	


//###################################################################################

function Alert_NoDelete()
	{
		alert('You cannot delete this!');
	}
	
	
	


//##############################CHECK THE NUMERICAL VALUE##########################

function IsNum(amount)
{
var okChars = "0123456789.-";
var xChars = amount;
var allChar = true;
for (i=0; i<xChars.length; i++)
	{
    ch = xChars.charAt(i);
    for (j=0; j<okChars.length; j++)
		{
    	if (ch == okChars.charAt(j)) 
			{
        	allChar==true; 
			j=okChars.length;
      		}
		}	
    if (j == okChars.length)
		{
    	allChar = false;
    	i=xChars.length;
    	}
	}
if (!allChar)return false; else return true;
}
//############################################################


function validate_form(a,type,divId)
	{
		var z=a.split(',');
		num_data = z.length;
		var msg = 'Some of the Required Field Missing!';
		var err=0;
		for(var i=0; i<num_data; i++)
			{
				//alert(z[i]);
				if(document.getElementById(z[i]).value=='')
					{
						err++;
					}
			}
		if(err!=0)
			{
				if(type=='div')document.getElementById(divId).innerHTML=msg;
				else if(type='alert')alert(msg)
				return false;
			}
		else return true;		
	}
	

//###############################################################################

function validate_form_front(a,type,divId)
	{
		var z=a.split(',');
		num_data = z.length;
		var msg = '<img src="images/err.gif" align="absmiddle" /> Error! Required Field/s missing ';
		var err=0;
		for(var i=0; i<num_data; i++)
			{
				//alert(z[i]);
				if(document.getElementById(z[i]).value=='')
					{
						err++;
					}
			}
		if(err!=0)
			{
				if(type=='div')document.getElementById(divId).innerHTML=msg;
				else if(type='alert')alert(msg)
				return false;
			}
		else return true;		
	}
	
//####################################################################################



	
