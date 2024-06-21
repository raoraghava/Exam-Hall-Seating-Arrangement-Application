<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <style>
          body, html {
  height: 100%;
}
            .whit{color: "white";}
        .style1 {
  background-image: url('pic.png');
  background-repeat: no-repeat;
  background-position: center;
  background-blend-mode: lighten;
  height:100%;
}
</style>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body >
        <br/><br/><br/><br/><br/>
    <center>
        <form method="post">
        <table border="0" cellspacing="5" cellpadding="5">
            <tr> 

                <th colspan="2"><center><h1 style='color:blue'>LOGIN</h1></center></p></th>
            </tr>
            <tr>
                <th><p style="color:blue">Login As:</p></th>
                <td>
                    <select name='type'>
                        <option value="admin"/>Admin
                        <option value="student">Student
                        <option value="teacher">Teacher
                    </select>
                </td>
            </tr>
            <tr>
                <th><p style="color: blue">Username:<p/></th>
                <td><input type="text" name="username"/></td>
            </tr>
            <tr>
                <th><p  style="color: blue">Password:</p></th>
                <td><input type="password" name="password"/></td><br/><br/>
            </tr>
            <tr> 
                <th colspan="2"><center><input type="submit" style="width: 60px; height: 30px" name='login' value="login" size='25'/></center></th>
            </tr>
        </table>
        </form>
        <?php
          if(isset($_POST['login'])) 
          {
              $conn=mysqli_connect("localhost","root","","major_project") or die("connection not created");
              $query="select * from $_POST[type] where username='$_POST[username]' and password='$_POST[password]'";
              $res=mysqli_query($conn, $query);
              if(mysqli_num_rows($res)>0)
              {
                  while($row= mysqli_fetch_array($res))
                  {
                  if($_POST[type]=="student")
                  {
                      setcookie("username",$_POST['username']);
                      header("Location:Frames2.html");
                  }
                  else if($_POST[type]=="teacher")
                  {
                      setcookie("id",$row[2]);
                      header("Location:Frames3.html");
                  }
                  else
                      header("Location:Frames.html");
                  }
              }
              else
                  echo '<font color="red"><br>INVALID DETAILS</font>';
          }
        ?>
    </center>
    </body>
</html>
