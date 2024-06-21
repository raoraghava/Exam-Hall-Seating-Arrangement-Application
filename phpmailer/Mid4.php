<html>
    <head>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
        <?php
             $found1=0;
             $found2=0;
             $fi=0;$se=0;
           $cou=0;
           $first=0;$second=0;
           $fir=0;$sec=0;
           $fii=0;$see=0;
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
                 echo '<table border="1" width="100%" height="10%"><tr align="center"><center><th>DIAS</th></tr></table>';
                 echo "<h1 style=\"text-align:left;float:left;\">Room No:$row[0]</h1><br/>";
                 $output="<table><tr><td><table border=\"1\" style=\"float:left;\" cellspacing='10' cellpadding='15'>";
                 for(;$fir<=$couy||$sec<=$couy;)
                 {
                     if($fii==1)
                     {
                         $fii=0;
                         if($first<$couy)
                         {
                             $first+=1;
                             $fir=$first;
                         }
                         else
                         {
                             $fir+=1;
                         }
                     }
                     if($see==1)
                     {
                         $see=0;
                         if($second<$couy)
                         {
                             $second+=1;
                             $sec=$second;
                         }
                         else
                         {
                             $sec+=1;
                         }
                     }
                     if($avail==0&&$stop!=1)
                         break;
                     if($avail==0&&$stop==1)
                     {
                         $stop=0;
                         break;
                     }
                     if($stop==1&&$avail!=0)
                     {
                         //if($first==$couy&&$second==$couy)
                           //  break;
                         $stop=0;
                     }
                     $conn1= mysqli_connect("localhost","root","",$year[$first]) or die("connection not created");
                     $conn2= mysqli_connect("localhost","root","",$year[$second]) or die("connection not created");
                     $ch=0;
                    while(true)
                   {
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
                     $complete=0;
                     if($found1!=1)//remove couy condition
                     {
                     for(;$complete<=$cou;)
                     {
                          if($ch>$cou)
                          $ch=0;
                         $complete+=1;
                         $fi=$ch;
                     $query1="select * from $branch[$fi] where status=0";
                     $result1= mysqli_query($conn1,$query1);
                      if(mysqli_num_rows($result1)>0)
                      {
                          $found1=1;break;
                      }
                      $ch+=1;
                     }
                     }
                     if($found1==0&&$first<$couy)
                     {
                        $stop=1;
                        $fii=1;
                        break;
                     }
                       $complete=0;
                       if($found2!=1)//remove couy condition
                       {
                      for(;$complete<=$cou;)
                     {
                             if($ch>$cou)
                             $ch=0;
                          $complete+=1;
                          if($ch!=$fi)
                          {
                              $se=$ch;
                     $query2="select * from $branch[$se] where status=0";
                     $result2= mysqli_query($conn2, $query2);
                      if(mysqli_num_rows($result2)>0)
                      {
                          $ch+=1;$found2=1;break;
                      }
                          }
                          $ch+=1;
                     }
                       }
                     if($found2==0&&$second<$couy)
                     {
                      $stop=1;
                      $see=1;break;
                     }
                     //if($found1==0)
                      //break;
                     if($found1==1)
                     {
                      $found1=0;
                      if($found2==1)
                      {
                          $found2=0;
                        if(mysqli_num_rows($result1)>0)
                    {
                    if($row= mysqli_fetch_array($result1))
                    {
                    $output.="<tr><th><pre>$row[1]"
                            . "<br> ($branch[$fi])</pre></th>";
                    $query1="update $branch[$fi] set status=1,room=$room where Rollno='$row[1]'";
                    $vl=$conn1->query($query1);
                         $avail=$avail-1;
                    $query1="update rooms set Available=$avail where Room_no=$room";
                     $vl=$conn->query($query1);
                     }
                      }
                      if(mysqli_num_rows($result2)>0)
                      {
                       if($row= mysqli_fetch_array($result2))
                      {
                       $output.="<th><pre>$row[1]"
                            . "<br> ($branch[$se])</pre></th>";
                        $output.="</tr>";
                        $query1="update $branch[$se] set status=1,room=$room where Rollno='$row[1]'";
                        $vl=$conn2->query($query1);
                        }
                        }    
                      }
                      else
                      {
                           if(mysqli_num_rows($result1)>0)
                        {
                         if($row= mysqli_fetch_array($result1))
                         {
                         $output.="<tr><th colspan='2'><pre>$row[1]<br>($branch[$fi])</pre></th></tr>";
                          $query1="update $branch[$fi] set status=1,room=$room where Rollno='$row[1]'";
                          $vl=$conn1->query($query1);
                          $avail=$avail-1;
                          $query1="update rooms set Available=$avail where Room_no=$room";
                          $vl=$conn->query($query1);
                    }
                 }
                      }
                     }
                     $count++;
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