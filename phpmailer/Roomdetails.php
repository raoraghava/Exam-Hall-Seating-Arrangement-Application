<html>
    <head>
        <style>
                    .texterhead{
    color:darkblue;
    font-family: "Times New Roman", Times, serif;
}
*.texter{
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
  
        </style>
    </head>
    <body>
    <center>
        
         <form method="post">
             <table cellpadding="10">
                 <tr><th colspan="2"><h3 class='texterhead'>ADD ROOM</h3></th></tr>
                 <tr><td class='texter'><b>Room no:</b></td><td><input type="text" placeholder='Enter Room no' name='Room'></td></tr>
                 <tr><td><b class='texter'>Benches:</b></td><td><input type="text" placeholder='Enter no.of benches' name='ben'></td></tr>
                 <tr><td><b class='texter'>Columns:</b></td><td><input type="text" placeholder='Enter no.of columns' name='col'></td></tr>
                 <tr><th><input type="submit" name="add" class='button' value="ADD ROOM">
                         </th>
                     <th><input  class='button' type="submit" name="update" value="UPDATE ROOM"></th></tr>
             </table>
         </form>
       <?php
       $conn= mysqli_connect("localhost","root","","major_project") or die("connection not created");
          if(isset($_POST['add']))
          {   
              $a=$_POST['Room'];
              $b=$_POST['ben'];
              $c=$_POST['col'];
              if($a>0&&$b>0&&$c>0)
              {    
              $q1="insert into rooms values($a,$b,$b,$c,$b,0)";
              $res=$conn->query($q1);
              if($res==true)
              echo '<font color="green">      ROOM ADDED SUCCESSFULLY</font>';
              else
                  echo '<font color="Red">      INVALID DETAILS/ROOM ALREADY EXISTED</font>';
              }
              else
                  echo '<font color="Red">      INVALID DETAILS</font>';
          }
          if(isset($_POST['update']))
          {

              $a=$_POST['Room'];
              $b=$_POST['ben'];
              $c=$_POST['col'];
                            if($a>0&&$b>0&&$c>0)
              {
              $q1="update rooms set Capacity=$b,Benches=$b,Available=$b,Cols=$c where Room_no=$a";
              $res=$conn->query($q1);
              if($res==true)
                  echo '<font color="green">      ROOM DETAILS UPDATED SUCCESSFULLY</font>';
              else
                  echo '<font color="Red">      INVALID DETAILS/ROOM DOESNOT EXIST</font>';
               }
              else
                  echo '<font color="Red">      INVALID DETAILS</font>';
          }
      ?>
        </b>
        </div>
</center>
    </body>
</html>


