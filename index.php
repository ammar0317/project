
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" class="css">
    <title>Document</title>
</head>
<body>
       
<?php     
 
if(isset($_POST['add']))
{
echo $name = $_POST['name'];
echo $email = $_POST['email'];
echo $cell = $_POST['cell'];
echo $age = $_POST['age'];


if($age>=20 && $age <=50)
 $age_validation = true;

 else{
     $age_validation = false;
     }

if(empty($name)|| empty($email) ||empty($cell) || empty($age)){
   $mess = "<p style = \"color:red;\" > All field are requre </p>";
}
 else if (filter_var($email,FILTER_VALIDATE_EMAIL) == false){
    $mess = "<p style = \"color:red;\" >Invalid Email</p>";
}
else if($age_validation == false)
{
    $mess = "<p style = \"color:red;\" >Your Age is not support for this app</p>";
}
else if($cell_validation == false)
{
    $mess = "<p style = \"color:red;\" >Invalid Cell number</p>";
}
    else {
    $mess = "<p style = \"color:green;\">Data stayable </p>";
}


}


?> 
    
    
      <div class="user-form">

<h2>Add Your Info</h2>
<?php
if(isset($mess)){
    echo $mess;
}
?>
    <form action="" method="POST">
        <input  name ="name" type="text" placeholder="Name">
        <input  name ="email" type="text" placeholder="Email"> 
        <input  name ="cell" type="text" placeholder="Cell"> 
        <input  name ="age" type="text" placeholder="Age"> 
        <input  name ="add" type="submit" placeholder="Send"> 

    </form>



      </div>
      
    



</body>
</html>
