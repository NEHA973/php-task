<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Task-1</title>
</head>
<body>
    <div class="signup-form">
        <h1> Student Form </h1>
        <div class="txt">
            <form action="process.php" method="POST">
                <i class="fa fa-user"></i>
                <input type="text" id="name" placeholder="Name" name="name" required>
        </div>
        <div class="txt">
                <i class="fa fa-envelope"></i>
                <input type="email" id="email" placeholder="Email" name="email" required>
        </div>
        <div class="txt">
                <i class="fa fa-calendar"></i>
                <input type="text" id="rollNumber" placeholder="Roll Number" name="rollNumber" required>
        </div>
        <!--<div class="txt">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Password" name="Password" required>
        </div>-->
    
            <button class="btn" name="btn"> Register </button>
        </form>
    </div>
</body>
</html>

