
<?php
if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if(strlen($user) <=8){
        echo '<script>alert("please enter a 8 digit password")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
<div class="col-1">Name: <input type="text" name="name" >
   <div class="col-2">E-mail: <input type="text" name="email" >
       <div class="col-3"> Website: <input type="text" name="website" >
          <div class="col-4"> Comment: <textarea name="comment" rows="5" cols="40"></textarea>
           <input type="submit" name="submit">
          </div>
       </div>
    </div>
</div>
</form>    
</body>
</html>


