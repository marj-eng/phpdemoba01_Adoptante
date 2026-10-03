
<?php
// create a variable

$username = "BSIT BA 3101";
$Username = "12345";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT BA 3101</title>
</head>
<body>
    <h1> Hello world</h1>
    <?php echo "Hello world</h>";?>

    <h2>username : <u><?php echo $username; ?> </u></h2>
    <h2>User ID: : <u><?php echo $user_id; ?> </u></h2>

    <button  type = "button" onclick= "greetUser()">Greet User</button>

    <script>
    //variables
    var username = "<? $username?>";
    var userID = "<? $user_id?>";

    //Functions
    function greetUser(){
        alert("Hello" + username + "Your userID is": +userID);
    }
    <script/>

    
</body>
</html>