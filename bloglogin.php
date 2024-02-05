<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Task-2</title>
</head>
<body>
    <div class="signup-form">
        <h1> Login </h1>
        <div class="txt">
        <form action="dbprocess.php" method="POST">
                <i class="fa fa-calendar"></i>
                <input type="text" id="rollNumber" placeholder="Roll Number" name="rollNumber" required>
        </div>
        <div class="txt">
                <i class="fa fa-lock"></i>
                <input type="password" id="password" name="password"  placeholder="Password" required>
        </div>
    
            <button class="btn" name="btn"> Login </button>
        </form>
    </div>
</body>
</html>

