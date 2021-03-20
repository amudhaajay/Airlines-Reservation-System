<?php
session_start();
$username = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'pass');
switch($_POST['val']){

case 'login':
if (!empty($username)){
    if (!empty($password)){
        $db_handle = pg_connect("host=localhost dbname=Project user=postgres password=123");
        $query = "select username,_password,fname from user1";
        $result = pg_exec($db_handle, $query);

        if ($result) {

            for ($row = 0; $row < pg_numrows($result); $row++) {
    
                $username1= pg_result($result, $row, 'username');
                $password1= pg_result($result, $row, '_password');
                $fname= pg_result($result, $row, 'fname');

                if($password1 == $password && $username1 == $username){
                    $_SESSION['myusername'] = $username;
                    $_SESSION['myname'] = $fname;
				    header('Location:welcomee.php');    
	              }
                else{
			 echo"<script type='text/javascript'>alert('Incorrect Username or Password');window.location.href='index.html';</script>";
                }
                }
                }
        else{
            echo "Error: ". $sql ."
                                    ". $conn->error;
        }
        $conn->close();
    }
    else{
            echo "Password should not be empty";
            die();
    }
}
else{
echo "Username should not be empty";

}
break;
case 'Create your Account':
header('Location: /asd/signup.html');
break;}
?>
