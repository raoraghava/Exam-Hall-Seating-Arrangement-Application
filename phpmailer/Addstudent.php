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
    <body>
    <center>
        <form method='post'>
            <table cellpadding="10">
                <tr><th colspan='2' class="texterhead">ADD STUDENT</th></tr>
                <tr><td class="texter">Id:</td><td><input type='number' placeholder='Enter Id' name='id'></input></td></tr>
                <tr><td class="texter">Name:</td><td><input type='text' placeholder='Enter Name' name='name'></input></td></tr>
                <tr><td class="texter">Year:</td><td>
                        <select name="year">
                            <option name="firstyear" value="firstyear" >I YEAR</option>
                            <option name="secondyear" value="secondyear">II YEAR</option>
                            <option name="thirdyear" value="thirdyear">III YEAR</option>
                            <option name="fourthyear" value="fourthyear">IV YEAR</option>
                        </select>
                        <tr><td class="texter">Branch:</td><td>
                        <select name="branch">
                            <option name="cse" value="cse">CSE</option>
                            <option name="ece" value="ece">ECE</option>
                            <option name="it" value="it">IT</option>
                            <option name="civil" value="civil">CIVIL</option>
                            <option name="mech" value="mech">MECH</option>
                        </select>
                    </td></tr>
                        <tr>
                            <td class="texter">Branch:</td>
                            <td>
                                <input type="email" placeholder="Enter Email Id" name="emal"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name='add' value='ADD STUDENT' class="button"/>
                            </td>
                            <!--<td>
                                <input type="submit" name='get' value='GET' class="button"/>
                            </td>-->
                            <td>
                                <input type="submit" name='update' value='UPDATE STUDENT' class="button"/>
                            </td>
                        </tr>
            </table>
        </form>
        <?php

         if(isset($_POST['add']) && $_POST['id']!="" && $_POST['name']!=""&& filter_var($_POST['emal'], FILTER_VALIDATE_EMAIL))
         {
               $id="B";
               $db=$_POST['year'];
               $table=$_POST['branch'];
               $email=$_POST['emal'];
               $name=$_POST['name'];
               switch($_POST['year'])
               {
                case 'firstyear':$id.="19";$sem=1;break;
                case 'secondyear':$id.="18";$sem=3;break;
                case 'thirdyear':$id.="17";$sem=5;break;
                case 'fourthyear':$id.="16";$sem=7;break;
               }
               switch($_POST['branch'])
               {
                case 'cse':$id.="CS";break;
                case 'ece':$id.="EC";break;
                case 'it':$id.="IT";break;
                case 'civli':$id.="CE";break;
                case 'mech':$id.="ME";break;
               }
               $id.=substr("000{$_POST['id']}",-3);
               
               if($_POST['id']>180)
                $id.="L";
               echo $id;
               
               $conn= mysqli_connect("localhost","root","",$db) or die("connection not created");
               $query="insert into $table values('$name','$id','$table',$sem,1,'$email',0,0)";
               $res=$conn->query($query);
               if($res==true)
                   echo '<font color="green">STUDENT INSERTED SUCCESSFULLY</font>';
               else
                   echo '<font color="red">ENTER VALID DETAILS/STUDENT ALREADY EXISTS</font>';
         }
         else 
         {
             echo '<font color="red" >ENTER VALID DETAILS</font>';
         }
          if(isset($_POST['update']) && $_POST['id']!="" && $_POST['name']!="" && filter_var($_POST['emal'], FILTER_VALIDATE_EMAIL))
         {
             $id="B";
               $db=$_POST['year'];
               $table=$_POST['branch'];
               $id=$_POST['id'];
               $email=$_POST['emal'];
               $name=$_POST['name'];
               switch($_POST['year'])
               {
                case 'firstyear':$id.="19";$sem=1;break;
                case 'secondyear':$id.="18";$sem=3;break;
                case 'thirdyear':$id.="17";$sem=5;break;
                case 'fourthyear':$id.="16";$sem=7;break;
               }
               switch($_POST['branch'])
               {
                case 'cse':$id.="CS";break;
                case 'ece':$id.="EC";break;
                case 'it':$id.="IT";break;
                case 'civli':$id.="CE";break;
                case 'mech':$id.="ME";break;
               }
               $id.=substr("000{$_POST['id']}",-3);
               if($_POST['id']>180)
                $id.="L";
              echo $id;
               $conn= mysqli_connect("localhost","root","",$db) or die("connection not created");
               $query="update $table set Name=$name and Branch=$table and Email=$email where Rollno=$id";
                 $res=$conn->query($query);
               if($res==true)
                   echo '<font color="green">STUDENT UPDATED SUCCESSFULLY</font>';
               else
                   echo '<font color="red">INVALID DETAILS/STUDENT DOESNOT EXIST</font>';
         }
        
        ?>
    </center>
    </body>
</html>
