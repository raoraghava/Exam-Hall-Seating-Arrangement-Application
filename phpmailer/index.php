<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>EXAM HALL SEATING</title>
    </head>
         <body>
        <style>
            A
            {
                text-decoration: none;
            }
            .btn-group button{
                background-color: #0066ff; /* Green background */
  border: 1px solid blue; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
 width:100%;/* Set a width if needed */
  display:block ;/* Make the buttons appear below each other */
   /*top: 50%;
  left: 50%;*/
  text-align:center;
  text-decoration: none;
  font-size: 20px;
  /*margin: 4px 2px;
  cursor: pointer;*/
            }
            .btn{
  background-color: #0066ff; /* Green background */
  border: 1px solid blue; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
 width:100%;/* Set a width if needed */
  display:block; /* Make the buttons appear below each other */
   /*top: 50%;
  left: 50%;*/
  text-align: center;
  text-decoration: none;
  font-size: 15px;
  /*margin: 4px 2px;
  cursor: pointer;*/
            }

.btn-group button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
    background-color: #0033cc;
}
        </style>
            <a href="Home.php" target="down"><button class="btn">BASIC INFORMATION</button></a>
            <a href="Addstudent.php" target="down"><button class="btn">ADD STUDENT</button></a>
            <a href="Roomdetails.php" target="down"><button class="btn">ADD ROOM</button></a>
            <a href="Addinvigilator.php" target="down"><button class="btn">ADD INVIGILATOR</button></a>
            <a href="Addtimetable.php" target="down"><button class="btn">ADD TIME TABLE</button></a>
            <a href="updatetimetable.php" target="down"><button class="btn">INVIGILATOR TIME TABLE</button></a>
            <a href="Lecturers.php" target="down"><button class="btn">INVIGILATOR DETAILS</button></a>
            <a href="Studentdetails.php" target="down"><button class="btn">STUDENT DETAILS</button></a>
            <a href="Generate.php" target="down"><button class="btn">GENERATE ROOM TABLES</button></a>
            <a href="Invigilation.php" target="down"><button class="btn">INVIGILATION DUTIES</button></a>
            <a href="Email.php" target="down"><button class="btn">SEND EMAILS</button></a>
            <a href="changepwdadmin.php" target="down"><button class="btn">CHANGE PASSWORD</button></a>
            <a href="Login.php" target="_blank"><button class="btn">LOGOUT</button></a>
         </body>
</html>
