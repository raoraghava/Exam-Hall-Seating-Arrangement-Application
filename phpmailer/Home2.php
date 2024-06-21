<html>
   
        <head> 
           
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
             <style>
            .texterhead{
    color:darkblue;
    font-family: "Times New Roman", Times, serif;
}
.texter{
    color:darkblue;
    font-size:15px;
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
  cursor: pointer;
}
        </style>
        </head>
    <body>
              
        <b class="texter">
         <center>
        <br><br>
        <form method="post">
         REG NO:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" placeholder="Enter Registered Id" name="rollno"/>
         <input type="submit" class="button" name='check' value="CHECK ROOM"/>
        </form>
        <br>
        <?php
        if(isset($_POST['check']))
        {
            if($_POST['rollno']!="")
            {
                            $roll=$_POST['rollno'];
                            $stream='cse';
                            $db="";
                            if(strlen($roll)>4)
                            {
                             switch($roll['2'])
                             {
                                 case '9':$db="firstyear";break;
                                 case '8':$db="secondyear";break;
                                 case '7':$db="thirdyear";break;
                                 case '6':$db="fourthyear";break;
                                 default:$db="firstyear";break;
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
                           echo "<center><b>";
                            $conn= mysqli_connect("localhost","root","",$db) or die("connection not created");
                            $query="select room from $stream where Rollno='$roll'";
                             $result= mysqli_query($conn, $query);
                              if(mysqli_num_rows($result)>0)
                              {
                               if($row= mysqli_fetch_array($result))
                               {  echo "ROOM NO :";
                                   if($row[0]!=0)
                                   echo "<font color='green'>".$row[0]."</font>";    
                                   else
                                       echo "<font color='green'>NOT YET ALLOTED</font>";
                               }
                              }
                            }
                              else
                              {
                                 echo "<font color='red'>INVALID REGISTERED ID</font>";
                              }
                           echo "</b></center>";}
            
            }?>

        </center>
        </b>
    </body>
</html>

