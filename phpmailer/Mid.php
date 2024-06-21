<html>
    <head>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
        <?php
           //echo '<center><table><tr><th colspan="6">DIAS</th></tr></table></center>';
            $i=0;$j=0;
            $branch=array();
            $year=array();
            foreach($_POST['branch'] as $value)
            {
               $branch[$i++]=$value;
            } 
            $cou=$i-1;
            $i=0;
            foreach($_POST['year'] as $value)
            {
               $year[$i++]=$value;
            } 
            $couy=$i-1;
            $i=4;
            $conn= mysqli_connect("localhost","root","","major_project") or die("connection not created");
            $stop=0;
            $anotherroom=0;
            $avail=12;
            $count=0;
            $main_query="select Room_no,Benches,Capacity,Available,cols from rooms where status=0";
            $main_result= mysqli_query($conn, $main_query);
            if(mysqli_num_rows($main_result)>0)
            {
             while($row= mysqli_fetch_array($main_result))
             {
                 $anotherroom=0;
                 if($stop==1)
                 {
                     echo "</div>".$output;
                    break;
                 }
                 $room=$row[0];
                 $var=$row[1];
                 $avail=$row[3];
                 $div=$avail;     
                 $col=$row[4];    
                 echo "<h1 style=\"text-align:left;float:left;\">Room No:$row[0]</h1><br/>";
                 $output="<table><tr><td><table border=\"1\" style=\"float:left;\" cellspacing='10' cellpadding='15'>";
                 for(;$j<=$couy;)
                 {
                     if($avail==0&&$stop!=1)
                         break;
                     if($avail==0&&$stop==1)
                     {
                         $stop=0;
                         $j++;
                         break;
                     }
                     if($stop==1&&$avail!=0)
                     {
                         if($j==$couy)
                             break;
                         $j++;
                         $stop=0;
                     }
                     $conn2= mysqli_connect("localhost","root","",$year[$j]) or die("connection not created");
                    while(true)
                   {
                     $op=0;
                     if($stop==1)
                         break;
                     if($avail==0)
                     {
                         $query1="update rooms set status=1 where Room_no=$room";
                         $conn->query($query1);
                         $output.="</table></td></tr></table>";
                         echo $output;
                         break;
                     }
                     $fi=0;
                     $se=1;
                     $th=2;
                     $fo=3;
                   $query1="select * from $branch[0] where status=0";
                   $query2="select * from $branch[1] where status=0";
                   $query3="select * from $branch[2] where status=0";
                   $query4="select * from $branch[3] where status=0";
                   $result1= mysqli_query($conn2, $query1);
                   $result2= mysqli_query($conn2, $query2);
                   $result3= mysqli_query($conn2, $query3);
                   $result4= mysqli_query($conn2, $query4);
                   if(mysqli_num_rows($result1)<=0&&$i<=$cou)
                   {
                       $query1="select * from $branc h[$i] where status=0";
                       $result1= mysqli_query($conn2, $query1);
                       $fi=$i;
                   $i++;
                   }
                   if(mysqli_num_rows($result2)<=0&&$i<=$cou)
                   {
                       $query2="select * from $branch[$i] where status=0";
                       $result2= mysqli_query($conn2, $query2);
                       $se=$i;
                   $i++;
                   }
                   if(mysqli_num_rows($result3)<=0&&$i<=$cou)
                   {
                       $query3="select * from $branch[$i] where status=0";
                       $result3= mysqli_query($conn2, $query3);
                       $th=$i;
                   $i++;
                   }
                   if(mysqli_num_rows($result4)<=0&&$i<=$cou)
                   {
                       $query4="select * from $branch[$i] where status=0";
                       $result4= mysqli_query($conn2, $query4);
                       $fo=$i;
                   $i++;
                   }
                   if(mysqli_num_rows($result1)>0)
                  {
                    if($row= mysqli_fetch_array($result1))
                    {
                    $count++;
                    $output.="<tr>";
                    $output.="<td><pre>$row[1]"
                            . "<br> ($branch[$fi])</pre></td>";
                    $query1="update $branch[$fi] set status=1,room=$room where Rollno='$row[1]'";
                    $vl=$conn2->query($query1);
                         $avail=$avail-1;
                    $query1="update rooms set Available=$avail where Room_no=$room";
                     $vl=$conn->query($query1);
                     $op++;
                    }
                 }
                   if(mysqli_num_rows($result2)>0)
                  {
                    if($row= mysqli_fetch_array($result2))
                    {
                      $output.="<td><pre>$row[1]"
                            . "<br> ($branch[$se])</pre></td>";
                    $output.="</tr>";
                    $query1="update $branch[$se] set status=1,room=$room where Rollno='$row[1]'";
                    $vl=$conn2->query($query1);
                    $op++;
                    }
                 }  
                 if(mysqli_num_rows($result3)>0)
                  {
                    if($row= mysqli_fetch_array($result3))
                    {
                    $count++;
                    $output.="<tr>";
                      $output.="<td><pre>$row[1]"
                            . "<br> ($branch[$th])</pre></td>";
                    $query1="update $branch[$th] set status=1,room=$room where Rollno='$row[1]'";
                    $vl=$conn2->query($query1);
                    $query1="update rooms set status=1 where Room_no=$room";
                    $op++;
                    }
                 } 
                 if(mysqli_num_rows($result4)>0)
                  {
                    if($row= mysqli_fetch_array($result4))
                    {
                     $output.="<td><pre>$row[1]"
                            . "<br> ($branch[$fo])</pre></td>";
                    $output.="</tr>";
                    $query1="update $branch[$fo] set status=1,room=$room where Rollno='$row[1]'";
                    $vl=$conn2->query($query1);
                       $avail=$avail-1;
                    $query1="update rooms set Available=$avail where Room_no=$room";
                     $vl=$conn->query($query1);
                    $op++;
                    }
                 }
               if($op==0&&$avail!=0)
                   $stop=1;
             if($count==($div/$col))
             {
                $count=0;
                echo $output;
                $output="<table border=\"1\" style=\"float:left;\" cellspacing='10' cellpadding='15'>";
             }
             }
             }
             }
            }
            else {echo 'NO ROOMS TO ALLOCATE';}
            mysqli_close($conn);
              mysqli_close($conn2);
        ?>
</html>