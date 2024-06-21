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
        <meta charset="UTF-8">
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
    <body><center>
        <form action="" method="post">
            <font class="texter">ID:</font><input type="number" name="id"/>
            <input type="submit" class="button" name="submit" value="SEARCH"/>
        </form>
        <br/>
        <?php
        echo '<table border="0" cellpadding="10"><tr><th>Id</th><th>Name</th><th>Available</th><th>Invigilation Duties</th><th>Room No</th></tr>';
        $conn= mysqli_connect("localhost","root","","major_project") or die("connection not created");
        if(isset($_POST['submit']))
        {
             $store=$_POST['id'];
             $query="select * from invigilators where Id='$store'";
             $result= mysqli_query($conn, $query);
             if(mysqli_num_rows($result)>0)
             {  
              if($row= mysqli_fetch_array($result))
              {
                  $se="YES";
                  if($row[2]==0)
                      $se="NO";
                   echo '<tr><td>'.$row[1].'</td><td>'.$row[0].'</td><td>'.$se.'</td><td>'.$row[3].'</td><td>'.$row[5].'</td></tr>';
              }
             }
        }
        else
        {
             $query="select * from invigilators";
             $result= mysqli_query($conn, $query);
             
              if(mysqli_num_rows($result)>0)
             {  
              while($row= mysqli_fetch_array($result))
              {
                   $se="YES";
                  if($row[2]==0)
                      $se="NO";
                   echo '<tr><td>'.$row[1].'</td><td>'.$row[0].'</td><td>'.$se.'</td><td>'.$row[3].'</td><td>'.$row[5].'</td></tr>';
              }
              
             }
        }
        echo '</table>';
        ?>
    </center>
    </body>
</html>
