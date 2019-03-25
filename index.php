<html>
<title>Song Recommendation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="fa.css">
<style>

</style>
<body>
      <a href="recommend.php" class="navi"><i class="fa fa-arrow-left"></i>SONG RECOMMENDATION</a>
  <br><br>
    <h1><span class="headblack" style="margin-left: -2%;top: 10%;">TRENDING SONGS</span></h1><br><br><br><br>
<div class="box">

<?php  
  //connect  to the database 
     $connect=mysqli_connect("localhost","root","","music");
 
if($connect==false)
{
    die("ERROR: Failed to Connect".mysqli_connect_error());
} 
      $sql="SELECT * FROM msd ORDER BY songpop DESC LIMIT 10"; 
      $res=mysqli_query($connect,$sql);  
      echo '<table border=1px>'; 
      echo'<th>SONG NAME</th><th>ARTIST NAME</th><th>GENRE</th><th>SONG POPULARITY</th>';
      while($row=mysqli_fetch_array($res)){ 
  echo'<tr>'; // printing table row
echo '<td>'.$row['song'].'</td><td>'.$row['artist'].'</td><td>'.$row['Genre'].'</td><td>'.$row['songpop'].'</td>'; // we are looping all data to be printed till last row in the table
echo'</tr>';
      } 
    ?> 
</table>
</div>
<br><br>
<h1><span class="headblack" style="margin-left: -4%;top: 161%;">TRENDING ARTISTS</span></h1><br><br><br><br>
<div class="box">
<?php  
      $sql="SELECT * FROM msd ORDER BY Artist_popularity DESC LIMIT 10"; 
      $res=mysqli_query($connect,$sql);  
      echo '<table border=1px>'; 
      echo'<th>ARTIST NAME</th><th>ARTIST POPULARITY</th>';
      while($row=mysqli_fetch_array($res)){ 
      //-display the result of the array 
  echo'<tr>'; // printing table row
echo '<td>'.$row['artist'].'</td><td>'.$row['Artist_popularity'].'</td>'; // we are looping all data to be printed till last row in the table
echo'</tr>';
      } 
    ?> 
</table></div>
</body>
</html>