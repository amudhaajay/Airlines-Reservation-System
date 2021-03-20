<?php
$name = filter_input(INPUT_POST, 'name');
$mail = filter_input(INPUT_POST, 'mail');
$phno = filter_input(INPUT_POST, 'phno');
$address = filter_input(INPUT_POST, 'address');
$uname = filter_input(INPUT_POST, 'uname');
$uid = filter_input(INPUT_POST, 'uid');
$pass = filter_input(INPUT_POST, 'pass');
$a=0;

switch($_POST['val']){

case 'Create your Account':
if ((!empty($name))&&(!empty($mail))&&(!empty($phno))&&(!empty($address))&&(!empty($uname))&&(!empty($uid))&&(!empty($pass))){
        $db_handle = pg_connect("host=localhost dbname=Project user=postgres password=123");
        $query = "select username,user_id from user1";
        $result = pg_exec($db_handle, $query);

        if ($result) {

            for ($row = 0; $row < pg_numrows($result); $row++) {
    
                $username1= pg_result($result, $row, 'username');
                $uid1= pg_result($result, $row, 'user_id');

                if($uid1 != $uid && $username1 != $uname){
                    $a=$a +1;
                }
            }

        }
        if($a == pg_numrows($result)){

        //$db_handle = pg_connect("host=localhost dbname=Project user=postgres password=123");
        $query1 = "insert into user1(username,user_id,user_mobile,user_email,user_address,_password,fname)values('$uname','$uid','$phno','$mail','$address','$pass','$name')";
        $result1 = pg_exec($db_handle, $query1);

            if ($result1) {
			    echo"<script type='text/javascript'>alert('Account Created');window.location.href='index.html';</script>";
 		    }
            else{
                echo"<script type='text/javascript'>alert('Error');window.location.href='signup.html';</script>";
            }
            $conn->close();
        }
        else{
            echo"<script type='text/javascript'>alert('Username or User_ID already exists');window.location.href='signup.html';</script>";
        }
}
else{
        echo"<script type='text/javascript'>alert('Please fill all fields');window.location.href='signup.html';</script>";
        die();
}
break;

case 'Back':
   echo header('Location: /asd/index.html');
break;

}

?>
