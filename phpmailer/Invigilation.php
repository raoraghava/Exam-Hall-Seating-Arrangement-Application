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
        <form method="post">
            <table border="0" cellpadding="10">
                <tr><th colspan="2"><h3 class='texterhead'>INVIGILATION</h3></th></tr>
                <tr>
                    <th class="texter">Exam Date:</th>
                    <td><input type="date" name="date"/></td>
                </tr>
                <tr>
                    <th class="texter">Exam Time:</th>
                    <td><select name="time">
                <option value="mf" >MN-11-1</option>
                <option value="af">AN-2-4</option>
                        </select></td>
                </tr>
            <tr>
                <th>
                    <input type="submit" class="button" name="reset" value="RESET">
                </th>
                <th>
                    <input type="submit" class="button" name='all' value='ALLOT'>
                </th>
            </tr>
            </table>
        </form>
<?php
$conn= mysqli_connect("localhost","root","","major_project") or die("connection not created");
  if(isset($_POST['reset']))
  {
     $query="update invigilators set allot=0,Room=0";
     $temp=$conn->query($query);
  }
  if(isset($_POST['all']))
  {
      $date=$_POST['date'];
      if($date!='')
      {
      $days=array('sunday','monday','tuesday','wednesday','thursday','friday','saturday');
      //echo $date;
      $temp=$_POST['time'];
      $split=explode("-",$date);
      $month=0;
      switch($split[1])
      {
          case '01':$month=0;break;
          case '02':$month=3;break;
          case '03':$month=3;break;
          case '04':$month=6;break;
          case '05':$month=1;break;
          case '06':$month=4;break;
          case '07':$month=6;break;
          case '08':$month=2;break;
          case '09':$month=5;break;
          case '10':$month=0;break;
          case '11':$month=3;break;
          case '12':$month=5;break;
      }
      $com1=date("Y")+date("m")+date("d");
      $com2=$split[0]+$split[1]+$split[2];
      //$ans=(floor($split[0]%100)+$split[2]+6+floor(floor(($split[0]%100))/4)+$month)%7;
      $ans=($split[0]%100+$split[2]+6+($split[0]%100)/4+$month)%7;
      if($split[0]%4==0&&($split[1]=='01'||$split[1]=='02'))
          $ans-=1;
        //echo  $com1.' '.$com2;
     if($days[$ans]=='saturday'||$days[$ans]=='sunday'||$com2<$com1)   
     {

          if($com2<$com1)
           echo '<font color="red">SELECT PROPER DATE FOR EXAM TO GET CONDUCTED</font>';           
           else
          echo '<font color="red">NO INVIGILATORS AVALIABLE</font>';         
     }
 else
     {
  echo '<b>DUTIES:</b><br/>';
  $query1="select * from invigilators where available=1 and allot=0 and Room=0 order by count";
  $query2="select * from rooms where Capacity!=Available";
  $query="";
  
  $result= mysqli_query($conn, $query2);
 
  
    if(mysqli_num_rows($result)>0)
    {  
         $output="<table cellpadding='10'><tr><th>Id</th><th>Name</th><th>Room_No</th></tr>";
        while($row= mysqli_fetch_array($result))
        {
            $allot=0;
            $rep=1;
            if($row[1]>18)
            {
                $rep=2;
            }
             $result1= mysqli_query($conn, $query1);
             if(mysqli_num_rows($result1)>0) 
             {  
              while(($row1= mysqli_fetch_array($result1))&& $rep>0)
              {
                  if($temp=="mf")
                  {
                   $query="select * from $days[$ans] where 2_period='FREE' and 3_period='FREE' and 4_period='FREE' and Id=$row1[1]";
                  }
                else
                   $query="select * from $days[$ans] where 5_period='FREE' and 6_period='FREE' and 7_period='FREE' and Id=$row1[1]"; 
              $result2= mysqli_query($conn,$query);
              if(mysqli_num_rows($result2)>0)
              {
                  $allot=1;
                  if($row2=mysqli_fetch_array($result2))
                  {
                  $output.="<tr><td>$row2[0]</td><td>$row1[0]</td><td>$row[0]</td></tr>";
                  $rep=$rep-1;
                  $res=$conn->query("update invigilators set count=count+1,allot=1,Room=$row[0] where Id=$row1[1]");
                  }
              } 
          
              }
             }
             else
              {
                  echo '<font color="red">SHORT OF INVIGILATORS</font>';exit();
              }
             
        }
        $output.='</table>';
    echo $output;
    }
 else {
    echo '<font color="red">ROOMS NOT YET ALLOTED</font>';   
    }
      }
      }
      else
      echo '<font color="red">SELECT THE DATE</font>';
  }
?>
    </center>
    </body>
</html>

