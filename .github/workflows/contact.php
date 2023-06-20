<!DOCTYPE html>
<html>

    <head>
        <title>Form</title>
     
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
            }
            body{
                position:relative;
            }
            .form1{
                width:50%;
                position:absolute;
                left:auto;
                top:auto;
                transform:translate(50%,50%);
                text-align:center;
                border:2px solid darkslategray;
                border-radius:5px;
            }
            input,label{
                margin-top:15px;
                padding:10px;
                outline:none;
                border-radius:5px;
                border:none;
                
            }
            h2{
                color:white;
                background-color:darkslategray ;
                padding:10px;
                width:30%;
                position:absolute;
                left:0;
                
             text-align:center;
             margin-top:10px;
             animation:moves 2s normal forwards;
            }
            @keyframes moves{
                to{
                    left:35%;
                top:10%;
                }
            }
          
            input{
                border-bottom:1px solid black;
            }   
            input:focus{
                
                border:3px solid darkslategray;
            }
            h1{
                background-color:#2F4F4F ;
                color:white;
                padding:7px;
            }
          #submit{
            width:50%;
            border:none;
            border-radius:5px;
            background-color:darkslategray;
color:white;
font-weight:bold;
font-size:18px;
margin-bottom:10px;
          }
          #submit:hover{
            background-color:#396060;
          }
        </style>
    </head>
    <body>
        <div class="form1">
            <form action="#" method="post" enctype="multipart/form-data " autocomplete="on">
                <h1>SAMPLE FORM</h1>
                <label for="fname">First Name:</label>
                <input type="text" name="fname" id="fname" required placeholder="eg:john"><br>
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" id="lname" required placeholder="eg:martin"><br>
                <label for="email">Email ID:</label>
                <input type="email" name="email" id="email" required placeholder="eg:john@gmail.com" validate><br>
                <label for="phone">Ph Number:</label>
                <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" required><br>
           <input type="submit" id="submit" name="submit">
            </form>
        </div>
    </body>
    <?php
include_once 'db.php';
if(isset($_POST['submit'])){


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql="INSERT INTO test_form(fname,lname,email,phone) VALUES('$fname','$lname','$email','$phone')";
if(mysqli_query($conn,$sql)){
    echo "<h2>Record created</h2>";
}
else{
    die();
}
mysqli_close($conn);
}
?>
</html>
