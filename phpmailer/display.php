  <?php
                         $roll='b16cs';
                            if(isset($_POST['rollno']))
                            {
                                $roll=$_POST['rollno'];
                            }
                            $stream='error';
                            
                            if($roll[3]=='c'||$roll[3]=='C'&& $roll[4]=='s'||$roll[4]=='S')
                            {
                                $stream='cse';
                            }
                            else if($roll[3]=='i'||$roll[3]=='I' && $roll[4]=='t'||$roll[4]=='T')
                            {
                                $stream='it';
                            }
                           echo "<center><b>";
                            $conn= mysqli_connect("localhost","root","","major_project") or die("connection not created");
                            $query="select room from $stream where Rollno='$roll'";
                             $result= mysqli_query($conn, $query);
                              if(mysqli_num_rows($result)>0)
                              {
                              if($row= mysqli_fetch_array($result))
                              {  echo "Room no is:";
                                   if($row[0]!=0)
                                   echo $row[0];    
                                   else
                                       echo "NOT YET ALLOTED";
                                  }
                             }
                             else
                             {
                                 echo 'INVALID REGISTERED ID';
                             }
                             echo "</b></center>";
            
  ?>