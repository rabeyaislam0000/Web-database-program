
function formvali()
{
	var x=document.forms["sform"]["name"].value;
	var y=document.forms["sform"]["uname"].value;
	var z=document.forms["sform"]["phone"].value;
	var m=document.forms["sform"]["pass"].value;
	if(x=="")
	{
	window.alert("Name must be field out ");
	return false;	
	}
	else if(y=="")
	{
	window.alert("uname must be field out ");
	return false;	
	}
	else if(z=="")
	{
	window.alert("phone name must be field out ");
	return false;	
	}
	else if(m=="")
	{
	window.alert("password must be field out ");
	return false;	
	}
		
	
}