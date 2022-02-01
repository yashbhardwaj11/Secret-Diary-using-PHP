<?php 

try {
    $db= new mysqli("localhost", "root", "","login");

}catch(Exception $exc) {
    echo $exc->getTraceAsString();
}

if(isset($_POST['username'])  && isset($_POST['content'])){

   $username = $_POST['username'];
   $content = $_POST['content'];

   $is_insert = $db->query("INSERT INTO `diary_db`(`username`, `content`) VALUES ('$username','$content')");

    if($is_insert == TRUE) {
        echo "<h2>Your Secret is stored in Diary</h2>";
        
        exit();
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">-->
    <link rel="stylesheet" type="text/css" href="content.css">
</head>
<body>
    

    <div class="contactform">
        
        <div class="btn" ><a href="logout.php">Logout</a></div>
        <form action="" method="POST">
            <h2>SECRET DIARY</h2>
            <div class="input-group"></div>
            <div class="inputbox">
                <input type="text" name="username" required="required" >
                <span>Username</span>
            </div>
            <div class="inputbox">
                <textarea type="text" cols="900" rows="10" name="content"  required="required" ></textarea>
                <span>content</span>
            </div>
            <div class="inputbox">
                <input type="submit" name="" value="submit" >
            </div>
            <div class="inputbox">
                <a href="showdata.php">Show diary</a>
            </div>
        </form>
    </div>


</body>
</html>