<?php

session_start();

    include("connection.php");
    include("functions.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];

        if (!empty($user_name) && !empty($password) && !is_numeric($user_name))
         {
            //save to database
            $user_id = random_num(20);
            $query = "insert into users(user_id , user_name , password) values ('$user_id' , '$user_name' , '$password')";
            mysqli_query($con,$query);

            header("Location: login.php");
            die;

        }else{
            echo "من فضلك .. ادخل بعض المعلومات الصحيحة.";
        }
    }


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../style/images/favicon.png" type="image/x-icon">
    <meta name="description" content="Courses is a platform that provides high-quality courses in areas that seek to raise the level of e-learning in the Arab world">
    <meta name="author" content="Mhmd Abd El-sallam Badr">
    <link href="https://fonts.googleapis.com/css?family=Cairo:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="login_style.css">

  <title>
   تسجيل عضوية جديدة | كورسات 
  </title>
</head>
<body>

    <header class="user__header">
        <a href="../index.php"><img src="../style/images/logo.png" alt="logo" /> </a> <br><br>
    </header>
    <div class="user">
    <form class="form" method="POST">
        <p class="user__title"> تسجيل عضو جديد   </p>
        <div class="form__group">
            <input type="text" placeholder="الأسم الاول" class="form__input" name="user_name" />
        </div>

        <div class="form__group">
            <input type="text" placeholder="الأسم الأخير " class="form__input" name="last_name"/>
        </div>       

        <div class="form__group">
            <input type="email" placeholder="البريد الاكترونى " class="form__input" />
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="كلمة السر " class="form__input" name="password"/>
        </div>
        <button class="btn" type="submit" value="signup">تسجيل  </button>
        <p> او يمكنك تسجيل دخول <a href="login.php">تسجيل دخول </a></p>
    </form>
  </div>

  <script>
    // according to button
    const button = document.querySelector('.btn')
    const form   = document.querySelector('.form')

    button.addEventListener('click', function() {
       form.classList.add('form--no') 
    });


  </script>
</body>
</html>