<html>
    <head>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       
        <title></title>
               <style>
                    .texterhead{
                       font-size:25px;
    font-weight: bold;
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
                            $roll=$_COOKIE['username'];
                            $db="";
                            $stream="";
                            switch($roll['2'])
                             {
                                 case '9':$db="firstyear";break;
                                 case '8':$db="secondyear";break;
                                 case '7':$db="thirdyear";break;
                                 case '6':$db="fourthyear";break;
                             }
                             if($roll[3]=='c'||$roll[3]=='C'&& $roll[4]=='s'||$roll[4]=='S')
                            {
                                $stream='cse';
                            }
                            else if($roll[3]=='i'||$roll[3]=='I' && $roll[4]=='t'||$roll[4]=='T')
                            {
                                $stream='it';
                            }
                             else if($roll[3]=='e'||$roll[3]=='E' && $roll[4]=='c'||$roll[4]=='C')
                            {
                                $stream='ece';
                            }
                             else if($roll[3]=='M'||$roll[3]=='m' && $roll[4]=='E'||$roll[4]=='e')
                            {
                                $stream='mech';
                            }
                             else if($roll[3]=='C'||$roll[3]=='c' && $roll[4]=='E'||$roll[4]=='e')
                            {
                                $stream='civil';
                            }
          $conn=mysqli_connect("localhost","root","",$db) or die("connection not created");
          $q="select * from $stream where Rollno='$roll'";
          $result= mysqli_query($conn, $q);
          if(mysqli_num_rows($result)>0)
          {
              while($row= mysqli_fetch_array($result))
              {
          echo "
          <table cellpadding='10'>
          <tr>
             <td><h1 class='texterhead'>DETAILS</h1></td>
          </tr>
          <tr>
              <td class='texter'>Name:</td>
              <td>$row[0]</td>                  
          </tr>
          <tr>
              <td class='texter'>RollNo:</td>
              <td>$row[1]</td>                  
          </tr>
          <tr>
              <td class='texter'>Branch:</td>
              <td>$row[2]</td>                  
          </tr>
          <tr>
              <td class='texter'>Email ID:</td>
              <td>$row[5]</td>                  
          </tr>
          <tr>
              <td class='texter'>Room:</td>
              <td>$row[6]</td>                  
          </tr>
          </table>";
              }
          }
        ?>
    </body>
</html>