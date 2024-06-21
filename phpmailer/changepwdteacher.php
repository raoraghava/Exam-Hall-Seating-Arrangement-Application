<?php
  $conn=mysqli_connect("localhost","root","","major_project") or die("connection not created");
  $cpwd=$_COOKIE['username'];
  $query="select password from teacher where username='cpwd'";
   $result= mysqli_query($conn, $query);
          while(mysqli_num_rows($result)>0)
          {
              if($row= mysqli_fetch_array($result))
              {
              echo '<table><tr><td>Current password:</td><td><td>$row[1]</td></tr></table>';
              }
          }
?>
<html>
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
  <body>
  	<table>
  	<form method="POST">
          <tr>
          	 <td>
          	 	 <font class="texter">New password:</font>
          	 </td>
          	 <td>
          	 	 <input type="password"  pattern="[a-zA-Z0-9._%+-@]*[0-9._%+-@]*" minlength="4" maxlength="10" name="newpwd" required/>
          	 </td>
          </tr>
          <tr>
          	<br/>
          	<td colspan="2"><input type="submit" class="button" name="upwd" value="UPDATE PASSWORD"></td>
          </tr>
  	</form>
  </table>
  <?php
   if(isset($_POST['upwd']))
   {
   	$temp=$_POST['newpwd'];
   	$cpwd=$_COOKIE['username'];
         $conn=mysqli_connect("localhost","root","","major_project") or die("connection not created");
  $query="update teacher set password='$temp' where username='$cpwd'";
   if($conn->query($query))
   {
   	 echo '<font color="green">Password changed successfully</font>';
   }

   }
  ?>
  </body>
</html>