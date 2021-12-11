<?php
include 'conn.php';
$sql = "SELECT id,title,content FROM posts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) 
        
        {      
            echo '<div>';
            echo "<a href='post.php?id=$row[id]' style='color:red ;font-size: 32px;'>$row[id].$row[title]:</a><br><br>";
            
            echo "<p style='font-size: 22px;'>$row[content]</p>";
            echo "<a href='post.php?id=$row[id]''>READ MORE >></a><br><br>";
            echo '<hr>';
            // echo '/div';
            
        } 
       
    }
    else {
    echo "0 results";
        }
        $conn->close();

?>
<style>
    div{
        background-color: white;
        width: 900px;
        
    }
    a,p{
        margin: 15px;
    }
    
    html
    {
        background-color: lightgray;
    }
   
</style>