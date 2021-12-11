<head>
<form action="validate.php" method="POST">
<style>
h1 {
    background-color: lightsalmon;
    text-align: center;
    color: blueviolet;
}

</style>
<h1> Admin Panel</h1>
<div class="container">
    <label for="userid"><b>Username :</b></label>
    <input type="text" placeholder="Enter Username" name="userid" autocomplete="off" required ><br>
    <label for="pass"><b>Password :</b></label>
    <input type="text" placeholder="Enter Password" name="pass" autocomplete="off" required><br><br>
    <button type="submit">Login</button>
</div>
<style>
    html{
        background-color: skyblue;
    }
    form{
        background-color: skyblue;
    }
    div{
        text-align: center;
        /* color: darkred; */
        
    }
    label{
        color: darkred;
        display: inline-block;
        /* float: left; */
        clear: left;
        width: 80px;
        text-align: right;
    }
    input   {
        
        margin-left: 15px;
        margin-top: 4px;
        display: inline-block;
        
        
    }
    button{
        border-color: blue;
        background-color: blue;
        /* color: darkblue; */
        margin-top: 5px;
    }
</style>
</form>

</head>
