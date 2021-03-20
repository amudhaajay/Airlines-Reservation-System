<?php
session_start();
$c_loc = filter_input(INPUT_POST, 'hi');
$des = filter_input(INPUT_POST, 'hi1');
$adate = filter_input(INPUT_POST, 'deparure');
$rdate = filter_input(INPUT_POST, 'return');
$fclass = filter_input(INPUT_POST, 'cls');
$a=0;
switch($_POST['val']){

case 'Order Ticket Now':
if ((!empty($c_loc))&&(!empty($des))&&(!empty($adate))&&(!empty($rdate))){
        $db_handle = pg_connect("host=localhost dbname=Project user=postgres password=123");
        $query = "select c_location,destination,adate,rdate,flight_name from flight";
        $result = pg_exec($db_handle, $query);

        if ($result) {

            for ($row = 0; $row < pg_numrows($result); $row++) {
    
                $c_loc1= pg_result($result, $row, 'c_location');
                $des1= pg_result($result, $row, 'destination');
                $adate1= pg_result($result, $row, 'adate');
                $rdate1= pg_result($result, $row, 'rdate');
                $flightname1= pg_result($result, $row, 'flight_name');
                $a=$_SESSION['myusername'];

                if($c_loc == $c_loc1 && $des1 == $des && $adate == $adate1 && $rdate1 == $rdate){
                    $query1 = "insert into booking(username,c_location,destination,adate,rdate,fclass,flightname)values('$a','$c_loc1','$des1','$adate1','$rdate1','$fclass','$flightname1')";
                    $result1 = pg_exec($db_handle, $query1);

            if ($result1) {
			    echo"<script type='text/javascript'>alert('Booking Successfull!!!');window.location.href='welcomee.php';</script>";
 		    }
            else{
                echo"<script type='text/javascript'>alert('Error');window.location.href='signup.html';</script>";
            }
                    
                break;
                }
                
            }
            
                echo"<script type='text/javascript'>alert('No flight found');window.location.href='welcomee.php';</script>";
                die();

        }
       
    }
else{
    echo"<script type='text/javascript'>alert('Please fill all fields');window.location.href='welcomee.php';</script>";
}
break;

case 'Back':
   echo header('Location: /asd/index.html');
break;

}

?>
