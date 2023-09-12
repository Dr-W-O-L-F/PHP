<html>
<head>
<title>Email Validation</title>
<script type="text/javascript">
function validateEmail()
{
    var Emailid=document.myForm.Email.value;
    atpos=Emailid.indexOf("@");
    dotpos=Emailid.lastIndexOf(".");
    if(atpos<1 || (dotpos-atpos)<2)
    {
        alert("please enter correct Email ID");
        document.myForm.Email.focus();
        return false;
    }
    return(true);
}
</script>
</head>
<body>
<form name="myForm" onsubmit="return(validateEmail())">
EMAIL:<input type="text" name="Email">
<br>
<button type="submit" name="insert">INSERT</button>
<br>
</form>
</html>
</body>