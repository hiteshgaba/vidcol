function validateForm()
{
var y=document.forms["myform"]["fullname"].value;
var x=document.forms["myform"]["email"].value;
var z=document.forms["myform"]["username"].value;
var p=document.forms["myform"]["password"].value;
var rp=document.forms["myform"]["repeatpassword"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if( ((y==null||y=="")&&(p==null||p=="")) || ((y==null||y=="")&&(rp==null||rp=="")) || ((y==null||y=="")&&(z==null||z==""))||((y==null||y=="")&&(x==null||x==""))
 || ((p==null||p=="")&&(rp==null||rp=="")) || ((p==null||p=="")&&(z==null||z==""))
 || ((rp==null||rp=="")&&(z==null||z=="")) || ((rp==null||rp=="")&&(x==null||x==""))
 || ((z==null||z=="")&&(x==null||x=="")) ) 
 {
 alert("Complete Your fields");
return false;
 }
 else
 {
if(y==null||y=="")
{
alert("FullName must be filled out");
return false;
}
if(p==null||p=="")
{
alert("Password Field Must Be Filled ");
return false;
}
if(rp==null||rp=="")
{
alert("Retype Your Password ");
return false;
}
if(z==null||z=="")
{
alert("UserName must be filled out");
return false;
}
if(x==null||x=="")
{
alert("Email Field must be filled out");
return false;
}
}
if(atpos<1||dotpos<atpos+2||dotpos+2>=x.length)
{
alert("Not a valid e-mail address");
return false;
}
else
return true
}

