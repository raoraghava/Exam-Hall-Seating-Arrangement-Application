<html>
    <head>
      
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
         <form method="post">
             <table cellpadding="10">
                 <tr><th colspan="2"><h3 class='texterhead'>ADD INVIGILATOR</h3></th></tr>
                 <tr><td class="texter">ID:</td><td><input type="text" placeholder="Enter Id" name='id'></td></tr>
                 <tr><td class="texter">Name:</td><td><input type="text" placeholder='Enter Name' name='name'></td></tr>
                 <tr><th><input type="submit" name="add" class="button" value="ADD INVIGILATOR"></th><th><input class="button" type="submit" name="update" value="UPDATE INVIGILATOR"></th></tr>
             </table>
         </form>
       <?php
       $conn= mysqli_connect("localhost","root","","major_project") or die("connection not created");
          if(isset($_POST['add']))
          {   
              $a=$_POST['id'];
              $b=$_POST['name'];
              if($a>0)
              {    
              $q1="insert into invigilators values('$b',$a,1,0,0,0)";
              $res=$conn->query($q1);
              if($res==true)
              echo '<font color="green">      INVIGILATOR ADDED SUCCESSFULLY</font>';
              else
                  echo '<font color="Red">      INVALID DETAILS/INVIGILATOR ALREADY EXISTED</font>';
              }
              else
                  echo '<font color="Red">      INVALID DETAILS</font>';
          }
          if(isset($_POST['update']))
          {

              $a=$_POST['id'];
              $b=$_POST['name'];
              if($a>0)
              {    
              $q1="update invigilators set Name='$b' where Id=$a";
              $res=$conn->query($q1);
              if($res==true)
              echo '<font color="green">      INVIGILATOR UPDATED SUCCESSFULLY</font>';
              else
                  echo '<font color="Red">      INVALID DETAILS/INVIGILATOR DOESNOT EXIST</font>';
              }
              else
                  echo '<font color="Red">      INVALID DETAILS</font>';
          }
      ?>
    </center>
    </body>
</html>


