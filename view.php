<!DOCTYPE html>
<html>
<head>
<style>
* {
  font-family: sans-serif; /* Change your font family */
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}
</style>
</head>
<body>
<table class="content-table">
  <thead>
    <tr>
      <th>Ticket ID</th>
      <th>Passenger</th>
      <th>Flight Name</th>
      <th>Flight Category</th>
      <th>Boarding</th>
      <th>Destination</th>
      <th>Departure</th>
      <th>Arrival</th>
    </tr>
  </thead>
  <tbody>
    
    <?php 
    session_start();  // LOOP TILL END OF DATA
    $a=$_SESSION['myusername']; 
    $b=$_SESSION['myname'];
    $db_handle = pg_connect("host=localhost dbname=Project user=postgres password=123");
    $query = "select * from booking";
    $result = pg_exec($db_handle, $query); 
    if ($result) {

      for ($row = 0; $row < pg_numrows($result); $row++) {

          $username1= pg_result($result, $row, 'username');
          $c_loc1= pg_result($result, $row, 'c_location');
          $des= pg_result($result, $row, 'destination');
          $adate1= pg_result($result, $row, 'adate');
          $rdate1= pg_result($result, $row, 'rdate');
          $fcls= pg_result($result, $row, 'fclass');
          $flname= pg_result($result, $row, 'flightname');

          if( $username1 == $a){
                
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo(rand(1000,10000));?></td>
                <td><?php echo $b;?></td> 
                <td><?php echo $flname;?></td> 
                <td><?php echo $fcls;?></td> 
                <td><?php echo $c_loc1;?></td> 
                <td><?php echo $des;?></td> 
                <td><?php echo $adate1;?></td> 
                <td><?php echo $rdate1;?></td> 
                
                
            </tr> 
            <?php 
                } }}
             ?> 
    
  </tbody>
</table>

</body>
</html>
