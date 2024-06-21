<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
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
    <?php
     if(isset($_POST['GET'])&& $_POST['id']!='')
     {
         $conn= mysqli_connect("localhost","root","","major_project") or die("connection not created");
            $day=$_POST['day'];
            $id=$_POST['id'];
            $query="select * from $day where Id=$id";
            $result= mysqli_query($conn, $query);
            if(mysqli_num_rows($result)>0)
            {
                if($row= mysqli_fetch_array($result))
                {
                    $f=$row[1];
                    $s=$row[2];
                    $t=$row[3];
                    $fo=$row[4];
                    $fi=$row[5];
                    $si=$row[6];
                    $se=$row[7];
                    $name=$row[8];
                }
            }
     }

        ?>
            <?php
          $conn= mysqli_connect("localhost","root","","major_project") or die("connection not created");
        if(isset($_POST['ADD']))
        {
            $id=$_POST['id'];
            $day=$_POST['day'];
            $f=$_POST['first'];
            $s=$_POST['second'];
            $t=$_POST['third'];
            $fo=$_POST['fourth'];
            $fi=$_POST['fifth'];
            $si=$_POST['sixth'];
            $se=$_POST['seventh'];
            $name=$_POST['name'];
        }
        if(isset($_POST['UPDATE']))
        {
            
            $id=$_POST['id'];
            $day=$_POST['day'];
            $f=$_POST['first'];
            $s=$_POST['second'];
            $t=$_POST['third'];
            $fo=$_POST['fourth'];
            $fi=$_POST['fifth'];
            $si=$_POST['sixth'];
            $se=$_POST['seventh'];
            $name=$_POST['name'];
        }
        if(isset($_POST['GET']))
        {
             if($_POST['id']!='')
             {
                 
            $day=$_POST['day'];
            $id=$_POST['id'];
             }
        }
        ?>
    <body>
    <center>
        <h3 class="texterhead">ADD TIME TABLE</h3>
        <form method="post">
            <table cellpadding='10'>
                <tr>
                    <td class="texter">Day:</td>
                    <td>
                        <select name='day'>
                        <?php
                        if(isset($day))
                        {
                            if($day=='friday')
                            {
                               echo '<option value="monday" selected>MONDAY</option>
                                 <option value="tuesday">TUESDAY</option>
                                 <option value="wednesday">WEDNESDAY</option>
                                 <option value="thursday">THURSDAY</option>
                                 <option value="friday"selected>FRIDAY</option>';
                            }
                            if($day=='tuesday')
                            {
                                 echo '<option value="monday">MONDAY</option>
                                 <option value="tuesday" selected>TUESDAY</option>
                                 <option value="wednesday">WEDNESDAY</option>
                                 <option value="thursday">THURSDAY</option>
                                 <option value="friday">FRIDAY</option>';
                            }
                             if($day=='wednesday')
                            {
                                 echo '<option value="monday">MONDAY</option>
                                 <option value="tuesday">TUESDAY</option>
                                 <option value="wednesday" selected>WEDNESDAY</option>
                                 <option value="thursday">THURSDAY</option>
                                 <option value="friday">FRIDAY</option>';
                            }
                             if($day=='thursday')
                            {
                                echo '<option value="monday">MONDAY</option>
                                 <option value="tuesday">TUESDAY</option>
                                 <option value="wednesday">WEDNESDAY</option>
                                 <option value="thursday" selected>THURSDAY</option>
                                 <option value="friday">FRIDAY</option>';
                            }
                            else if($day=='monday')
                            {
                                echo '<option value="monday" selected>MONDAY</option>
                                 <option value="tuesday">TUESDAY</option>
                                 <option value="wednesday">WEDNESDAY</option>
                                 <option value="thursday">THURSDAY</option>
                                 <option value="friday">FRIDAY</option>';
                            }
                        }
                        else
                        {
                          echo '<option value="monday">MONDAY</option>
                                 <option value="tuesday">TUESDAY</option>
                                 <option value="wednesday">WEDNESDAY</option>
                                 <option value="thursday">THURSDAY</option>
                                 <option value="friday">FRIDAY</option>';   
                        }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="texter">Id:</td>
                    <td>
                        <input type="number" name="id" placeholder="Enter Id" value="<?php echo (isset($id))?$id:'';?>"/>
                    </td>
                </tr>
                <tr>
                    <td class="texter">Name:</td>
                    <td>
                        <input type='text' placeholder="Enter Name" name='name' value="<?php echo (isset($name))?$name:'';?>"/>
                    </td>
                </tr>
                <tr>
                    <td class="texter">First period:</td>
                    <td>
                        <select name='first'>
                            <?php
                            if(isset($f))
                            {
                                if($f=='CLASS')
                                {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS" selected>CLASS</option>';
                                }
                                else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }
                            }
                            else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="texter">Second period:</td>
                   <td>
                        <select name='second' >
                            <?php
                             if(isset($s))
                            {
                                if($s=='CLASS')
                                {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS" selected>CLASS</option>';
                                }
                                else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }
                            }
                            else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="texter">Third period:</td>
                        <td>
                        <select name='third'>
                            <?php
                            if(isset($t))
                            {
                                if($t=='CLASS')
                                {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS" selected>CLASS</option>';
                                }
                                else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }
                            }
                            else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="texter">Fourth period:</td>
                  
                        <td>
                        <select name='fourth'>
                            <?php
                            if(isset($fo))
                            {
                                if($fo=='CLASS')
                                {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS" selected>CLASS</option>';
                                }
                                else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }
                            }
                            else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }?>
                        </select>
                    </td>
                    
                </tr>
                <tr>
                    <td class="texter">Fifth period:</td>
                  
                        <td>
                        <select name='fifth' >
                            <?php
                           if(isset($fi))
                            {
                                if($fi=='CLASS')
                                {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS" selected>CLASS</option>';
                                }
                                else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }
                            }
                            else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }?>
                        </select>
                   
                    </td>
                </tr>
                <tr>
                    <td class="texter">Sixth period:</td>
                    
                        <td>
                        <select name='sixth' >
                            <?php
                            if(isset($si))
                            {
                                if($si=='CLASS')
                                {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS" selected>CLASS</option>';
                                }
                                else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }
                            }
                            else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }?>
                        </select>
                    </td>
          
                </tr>
                <tr>
                    <td class="texter">Seventh period:</td>
                    
                        <td>
                        <select name='seventh' >
                            <?php
                          if(isset($se))
                            {
                                if($se=='CLASS')
                                {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS" selected>CLASS</option>';
                                }
                                else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }
                            }
                            else
                            {
                                echo '<option value="FREE">FREE</option>
                                <option value="CLASS">CLASS</option>';
                            }?>
                        </select>
                    </td>
                    
                </tr>
                
                <tr>
                    <td>
                        <input class="button" type='submit' value='ADD' name='ADD'/>
                    </td>
                    <td>
                        <input class="button" type='submit' value='GET' name='GET'/>
                    </td>
                    <td>
                        <input class="button" type='submit' value='UPDATE' name='UPDATE'/>
                    </td>
                </tr>
            </table>
        </form>
     <?php
     if(isset($_POST['GET'])&& $_POST['id']!='')
     {
         $conn= mysqli_connect("localhost","root","","major_project") or die("connection not created");
            $day=$_POST['day'];
            $id=$_POST['id'];
            $query="select * from $day where Id=$id";
            $result= mysqli_query($conn, $query);
            if(mysqli_num_rows($result)>0)
            {
                if($row= mysqli_fetch_array($result))
                {
                    $f=$row[1];
                    $s=$row[2];
                    $t=$row[3];
                    $fo=$row[4];
                    $fi=$row[5];
                    $si=$row[6];
                    $se=$row[7];
                    $name=$row[8];
                }
            }
     }

        ?>
            <?php
          $conn= mysqli_connect("localhost","root","","major_project") or die("connection not created");
        if(isset($_POST['ADD']))
        {
            $id=$_POST['id'];
            $day=$_POST['day'];
            $f=$_POST['first'];
            $s=$_POST['second'];
            $t=$_POST['third'];
            $fo=$_POST['fourth'];
            $fi=$_POST['fifth'];
            $si=$_POST['sixth'];
            $se=$_POST['seventh'];
            $name=$_POST['name'];
            $query="insert into $day values($id,'$f','$s','$t','$fo','$fi','$si','$se','$name')";
            if($conn->query($query))
                echo '<font color="green">ADDED SUCCESSFULLY</font>';
            else
                echo '<font color="red">ID ALREADY EXIST/INVALID DETAILS</font>';
            
        }
        if(isset($_POST['UPDATE']))
        {
            
            $id=$_POST['id'];
            $day=$_POST['day'];
            $f=$_POST['first'];
            $s=$_POST['second'];
            $t=$_POST['third'];
            $fo=$_POST['fourth'];
            $fi=$_POST['fifth'];
            $si=$_POST['sixth'];
            $se=$_POST['seventh'];
            $name=$_POST['name'];
            $query="update  $day set 1_period='$f',2_period='$s',3_period='$t',4_period='$fo',5_period='$fi',6_period='$si',7_period='$se',Name='$name' where Id=$id";
            if($conn->query($query))
                echo '<font color="green">UPDATED SUCCESSFULLY</font>';
            else
                echo '<font color="red">ID DOESNOT EXIST/INVALID DETAILS</font>';
        }
        if(isset($_POST['GET']))
        {
             if($_POST['id']!='')
             {
                 
            $day=$_POST['day'];
            
            $id=$_POST['id'];
            $query="select * from $day where Id=$id";
            $result= mysqli_query($conn, $query);
            if(mysqli_num_rows($result)>0)
            {
                if($row= mysqli_fetch_array($result))
                {
                    $f=$row[1];
                    $s=$row[2];
                    $t=$row[3];
                    $fo=$row[4];
                    $fi=$row[5];
                    $s=$row[6];
                    $se=$row[7];
                    $name=$row[8];
                }
            }
            else
                echo '<font color="red">ID DOESNOT EXIST/INVALID DETAILS</font>';
             }
              else {
     echo '<font color="red">ENTER ID VALUE</font>';
 } 
        }
        ?>
        </center>
    </body>
</html>
