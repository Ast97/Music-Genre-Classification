<html>
<title>Song Recommendation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="fa.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif; }
<style>

</style>
<body>
  <br><br>
    <h1><span class="headblack" style="top: 4%;">LIST OF RECOMMENDATIONS</span></h1><br><br><br><br>
    <br><br>
<div class="box">
<?php 
  if(isset($_POST['submit'])){ 
  if(isset($_GET['go'])){ 
      if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
      $name=$_POST['name']; 
  //connect  to the database 
     $connect=mysqli_connect("localhost","root","","music");
 
if($connect==false)
{
    die("ERROR: Failed to Connect".mysqli_connect_error());
} 
 //-query  the database table 
      $sql="SELECT Genre FROM msd WHERE song LIKE '".$name."' "; 
  //-run  the query against the mysql query function 
      $res=mysqli_query($connect,$sql); 
      $data=mysqli_fetch_array($res);
      $genre=$data['Genre'];
      echo 'Searched song was of genre: '.$genre;
      $sql="(SELECT * FROM msd WHERE Genre LIKE '".$genre."' ) ORDER BY RAND() LIMIT 10"; 
      $result=mysqli_query($connect,$sql); 
  //-create  while loop and loop through result set 
      echo '<table border=1px>'; 
      echo'<th>SONG NAME</th><th>ARTIST NAME</th><th>GENRE</th><th>SONG POPULARITY</th>';
      while($row=mysqli_fetch_array($result)){ 
      //-display the result of the array 
  echo'<tr>'; // printing table row
echo '<td>'.$row['song'].'</td><td>'.$row['artist'].'</td><td>'.$row['Genre'].'</td><td>'.$row['songpop'].'</td>'; // we are looping all data to be printed till last row in the table
echo'</tr>';
      } 
 } 
      else{ 
  echo  "<p>Please enter a search query</p>"; 
      } 
      } 
      } 
    ?> 
</div>
</body>
</html>