
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
    <center>
        <br><br><br>
        <form method="post">
            <table cellpadding="10"  border="0">
                <tr><th colspan="2" class="texterhead">DETAILS</th></tr>
                <tr><td class="texter">Year:</td><td>
                        <select name="year">
                            <option name="firstyear" value="firstyear" >I YEAR</option>
                            <option name="secondyear" value="secondyear">II YEAR</option>
                            <option name="thirdyear" value="thirdyear">III YEAR</option>
                            <option name="fourthyear" value="fourthyear">IV YEAR</option>
                        </select>
                        <tr><td class="texter">Branch:</td>
                            <td>
                        <select name="branch">
                            <option name="cse" value="cse">CSE</option>
                            <option name="ece" value="ece">ECE</option>
                            <option name="it" value="it">IT</option>
                            <option name="civil" value="civil">CIVIL</option>
                            <option name="mech" value="mech">MECH</option>
                        </select>
                    </td></tr>
                        <tr><th colspan="2" ><input class="button" type="submit" name="but" value="GET"></th></tr>
            </table>
            
        </form>
       
        <?php
           if(isset($_POST['but']))
           {
               $output="<table class='table' cellpadding='10'><b><tr><th>Name</th><th>Rollno</th><th>Branch</th><th>Semester</th><th>Section</th><th>Email ID</th><th>Room</th></tr></b>";
               $branch=$_POST['branch'];
               $conn=mysqli_connect("localhost","root","",$_POST['year']) or die("connection not created");
               $q="select * from $branch";
               $result= mysqli_query($conn, $q);
               if(mysqli_num_rows($result)>0)
               {
                   while($row= mysqli_fetch_array($result))
                   {
                       $output.="<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td></tr>";
                   }
               }
               $output.='</table>';
               echo $output;
           }
        ?>
    </center>
    </body>
</html>
