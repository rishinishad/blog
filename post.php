<?php

include 'conn.php';
$id=$_GET['id'];
$query="SELECT * from contents where id= $id";
$result=mysqli_query($conn,$query);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
    {
        echo '<div><br>';   
        echo "<h1>$row[ctitle]:</h1>";
        echo "<p>$row[content]</p><br><br>";
        echo "<img src='img1.png' ><br><br>";
        echo "<hr>";
    

    }
}


?>

<link rel="stylesheet" href="comstyle.css">
<div>
<form action="" method="POST">
<!-- <a href="post.php?"> -->
    <h2>LEAVE A REPLY</h2>
<label for="name">Name:</label><br><br>

        <input type="text" name="name" required placeholder="Your Name">
     <br><br>
<label for="comment">Comment:</label><br><br>
		<textarea name="comment" id="" cols="106" rows="13" required placeholder="Comment here..." ></textarea>
		<br>
		
		<input type="submit" name="save" value="Submit">
        
</form>
</div>

<?php
include_once 'conn.php';
$id= $_GET['id'];
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $comment = $_POST['comment'];
	 $sql = "INSERT INTO comment (id,name,comment) VALUES ('$id','$name','$comment')";
	 if (mysqli_query($conn, $sql)) {
	// 	echo "New record created successfully !";
    //     header("Location:post.php");
        $sql="SELECT * from comment where id =$id";
        $result = $conn->query($sql);

    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) 

        
        {    
            echo '<div>';
            echo "<b><p>$row[name]:</p></b> ";
            echo "<p>$row[comment]</p>";
            // echo "<p>$row[time]</p>";
            $t="$row[time]";
            echo time_ago_in_php($t);

          
        } 
       
    }
    else {
    // echo "0 results";
        }
        $conn->close();

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

// echo "<h3>Read comments:</h3>";
$sql="SELECT * from comment where id =$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) 

{    
    echo '<div>';
    echo "<b><p>$row[name]:</p></b>";
    echo "<p>$row[comment]</p>";
    // echo "<p>$row[time]</p>";
    $t="$row[time]";
    
      echo time_ago_in_php($t);

} 


}
else {
// echo "0 results";
}
$conn->close();

// $names = [
//     'vishal',
//     'rishi'
// ];

function time_ago_in_php($t){
  
    date_default_timezone_set("Asia/Kolkata");         
    $time_ago        = strtotime($t);
    $current_time    = time();
    $time_difference = $current_time - $time_ago;
    $seconds         = $time_difference;

    $minutes = round($seconds / 60);
    $hours   = round($seconds / 3600);
    $days    = round($seconds / 86400);
    $weeks   = round($seconds / 604800);
    $months  = round($seconds / 2629440);
    $years   = round($seconds / 31553280);

    if ($seconds <= 60){

        return "<p>Just Now</p>";
    
      } else if ($minutes <= 60){
    
        if ($minutes == 1){
    
          return "<p>one minute ago</p>";
    
        } else {
    
          return "<p>$minutes minutes ago</p>";
    
        }
    
      } else if ($hours <= 24){
    
        if ($hours == 1){
    
          return "<p>an hour ago</p>";
    
        } else {
    
          return "<p>$hours hrs ago</p>";
    
        }
    
      } else if ($days <= 7){
    
    
    if ($days == 1){

        return "<p>yesterday<p>";
  
      } else {
  
        return "<p>$days days ago</p>";
  
      }

  } else if ($weeks <= 4.3){

    if ($weeks == 1){

      return "<p>a week ago</p>";

    } else {

      return "<p>$weeks weeks ago</p>";

    }

  } else if ($months <= 12){

    if ($months == 1){

      return "<p>a month ago</p>";

    } else {

      return "<p>$months months ago</p>";

    }

  } else {
    
    if ($years == 1){

      return "<p>one year ago</p>";

    } else {

      return "<p>$years years ago</p>";

    }
  }
    
    }

?>
<!-- 
<?php foreach ($names as $name) { ?>
    <p><?php echo $name ?></p>
<?php } ?> -->

