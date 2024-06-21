<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title></title>
            <style>
            
                    .texterhead{
    color:darkblue;
    font-family: "Times New Roman", Times, serif;
}
 .texter{
    color:darkblue;
    font-size:15px;
    font-weight: bold;
    font-family: "Times New Roman", Times, serif;
}
.button {
    background-color: #000099;
  border: none;
  border-radius: 12px;
  /*box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);*/
  color: white;
  padding: 10px 10px;
  top: 50%;
  left: 50%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  font-family: "Times New Roman", Times, serif;
  margin: 4px 2px;
}  
        </style>
    </head>
    <body>
        <?php
        $name="";
          $conn=mysqli_connect("localhost","root","","major_project") or die("connection not created");
          $val=$_COOKIE['id'];
          $q="select * from invigilators where Id=$val";
          $result= mysqli_query($conn, $q);
          if(mysqli_num_rows($result)>0)
          {
              while($row= mysqli_fetch_array($result))
              {
                  echo "
          <table cellpadding='10'>
           <tr>
              <th class='texter'>ID:</th>
              <td>$row[1]</td>                  
          </tr>
          <tr>
              <th class='texter'>Name:</th>
              <td>$row[0]</td>                  
          </tr>
          </table>";
             $name=$row[0];
              }
          }
          ?>
         <form method='post'>
            <table cellpadding="10">
                <tr>
                    <th class="texter">
                    Day:
                </th>
                <td>
                    <select name='day'>
                        <option value='monday'>MONDAY</option>
                        <option value='tuesday'>TUESDAY</option>
                        <option value='wednesday'>WEDNESDAY</option>
                        <option value='thursday'>THURSDAY</option>
                        <option value='friday'>FRIDAY</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <th colspan='2'><input type='submit' name='submit' class="button" value='GET TIME TABLES'/></th>
                </tr>
                <tr>
                    <th colspan='2'><input type='submit' name='personalsubmit' class="button" value='GET MY TIME TABLES'/></th>
                </tr>
            </table>
        </form>
        <?php
        $conn= mysqli_connect("localhost","root","","major_project") or die("connection not created");
         if(isset($_POST['submit']))
         {
             echo '<table class="table" cellpadding="10"><tr><th>ID</th><th>NAME</th><th>FIRST PERIOD</th><th>SECOND PERIOD</th><th>THIRD PERIOD</th><th>FOURTH PERIOD</th><th>FIFTH PERIOD</th><th>SIXTH PERIOD</th><th>SEVENTH PERIOD</th></tr>';
             $val=$_POST['day'];
             $query="select * from $val";
             $result= mysqli_query($conn, $query);
             if(mysqli_num_rows($result)>0)
             {
                 while($row= mysqli_fetch_array($result))
                 {
                    echo "<tr><td>$row[0]</td><td>$row[8]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>"; 
                 }
             }
             echo '</table>';
         }
           $days=array("MONDAY","TUESDAY","WEDNESDAY","THURSDAY","FRIDAY");
           if(isset($_POST['personalsubmit']))
           {
            echo '<table class="table" cellpadding="10"><tr><th>DAY</th><th>FIRST PERIOD</th><th>SECOND  PERIOD</th><th>THIRD PERIOD</th><th>FOURTH PERIOD</th><th>FIFTH PERIOD</th><th>SIXTH PERIOD</th><th>SEVENTH PERIOD</th></tr>';
               for($i=0;$i<=4;$i++)
               {
                $value=$days[$i];
                 $query="select * from $value where Name='$name'";
                 $result= mysqli_query($conn, $query);
                 if(mysqli_num_rows($result)>0)
                 {
                 if($row= mysqli_fetch_array($result))
                 {
                    echo "<tr><td>$value</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>"; 
                 }
             }
           
               }
                 echo '</table>';
           }
         ?>
    </body>
</html>
