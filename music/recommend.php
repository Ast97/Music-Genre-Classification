<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head> 
<meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1"> 
<title>BLOOD BANK MANAGEMENT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="fa.css">
<style>
.error {color: #FF0000;}
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;background: lightgray; }
.bar,h1,button {font-family: "Montserrat", sans-serif}

input[type=text],input[type=number],textarea
{
width:100%;
padding: 12px;
margin:10px 0;
box-sizing:border-box;
border:3px solid #ccc;
border-radius:5px;
-webkit-transition:0.5s;
tram=nsition:0.5s;
outline:none;
}
.search
{
width: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url("searchicon.png");
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    text-align:center;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
input[type=text]:focus,input[type=number]:focus,textarea:focus
{
border-radius:5px;
border:3px solid #555;
}

input[type=submit]
{
width:100%;
padding:15px;
color:white;
background-color:#707070;
margin:10px 0;
border:none;
border-radius:5px;
cursor:pointer;
font-family:28px;
}

input[type=submit]:hover
{
background-color:#383838;
}

select {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: dimgray;
    color:white;
}

.frm
{
background:#E8E8E8;
border-radius:7px;
padding:20px;
margin-left: 70px;
margin-right: 70px;
margin-bottom: 50px;
border: solid silver 3px;
}
</style>
<body>
	<!-- Navbar -->

	<br><br><br><br><br>
    <h2 style="text-align: center"><i class="fa fa-search fa-fw hover-text-black xxlarge "></i> RECOMMENDATION BY SONG GENRE<br></h2><br>
<div class="frm">
 <form  method="post" action="act.php?go"  id="searchform"> 
  <input  type="text" name="name"> 
 <input  type="submit" name="submit" value="Search"> 
</form> 
</div>

</div>

</body> 
</html> 
