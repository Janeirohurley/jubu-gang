<?php
session_start();
include("connection.php");
include("fonctions.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    @$user_name=$_POST['user_name'];
    @$password=$_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //read from database
        
        $query= "select * from users where user_name = '$user_name' limit 1";
         $result= mysqli_query($con,$query);
         if($result)
         {
            if($result && mysqli_num_rows($result) > 0)
            {
               $user_data=mysqli_fetch_assoc($result);
             if($user_data['password']=== $password)
             {
                 $_SESSION['user_id']=$user_data['user_id'];
                header("location:jubu.php");
                die; 
             }
           }
         }
         echo "please enter some valid information!!!!";
    }
    else
    {
        echo "please enter some valid information!!!!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<style>
    #text{
        height: 25px;
        border-radius:  5px;
        padding: 4px;
        border:solid thin #aaa;
        width: 100%;
    }
    #button{
        padding: 10px;
        width:100px;
        color:white;
        background-color:lightblue;
        border:none;
    }
    #box{
        background-color:grey;
        margin:auto;
        width:300px;
        padding: 20px;
    }
</style>
    <div id="box">
        <form action="" method="post">
            <div style="font-size:20px;margin:10px; color:white;">Login</div>

            <input type="text" name="user_name" id="text" value="<?php echo  @$user_name; ?>"><br><br>
            <input type="password" name="password" id="text"><br><br>

            <input type="submit" value="Login" id="button"><br><br>

            <a href="signup.php">Click to signup</a><br><br>
        </form>
    </div>
</body>
</html>