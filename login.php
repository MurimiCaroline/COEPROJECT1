<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/index.css<?php echo time();?>">
    <!--prevents quest for cached file-->
</head>
<body>
    <div class="login">
         <form name="frmContact" method="POST" action="datalogin.php" id="myform">
            
                <h1>LOG IN</h1>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="your email" required>
               
                <label for="Password">Password</label>
                <input type="text" id="password" name="pass" placeholder="your password" required>
            
                <button type="submit"  onsubmit="validate(e)" >SUBMIT</button>
                
        
        </form>
    </div>
    <script src="main.js"></script>
 
</body>
</html>
