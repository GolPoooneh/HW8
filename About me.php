<?php

    $name=NULL;
    $email=NULL;
    $subject=NULL;
    $message=NULL;

    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['subject'])){
        $subject = $_POST['subject'];
    }
    if(isset($_POST['message'])){
        $message = $_POST['message'];
    }

?>


<html lang="fa" dir="rtl">
    <title>Parsa Ghezelbash</title>
    <body>
    <nav>
            &nbsp; &nbsp; 
            <a href="main.php" class="x"><button>Parsa Ghezelbash</button></a>
            <a href = "Introduction.php" class="x"><button>معرفی</button></a>
            <a href = "Skills.php" class="x"><button>مهارت ها و توانمندی ها</button></a>
            <a href = "Honors.php" class="x"><button>افتخارات و دستاوردها</button></a>
            <a href = "About me.php" class="x"><button>تماس با من</button></a>
        </nav>

        <div class="a">
            <h2>راه های ارتباطی</h2>
        </div>
        <p class="b">
            <a href="ghezelbash.parsa.ghezelbash83@gmail.com">ghezelbash.parsa.ghezelbash83@gmail.com</a> &nbsp; : &nbsp; Email<br>
            <a href="https://github.com/GolPoooneh">https://github.com/GolPoooneh</a> &nbsp; : &nbsp; Github <br>
            <a href="https://www.linkedin.com/in/parsa-ghezelbash-7426a8233/">https://www.linkedin.com/in/parsa-ghezelbash-7426a8233/</a> &nbsp; : &nbsp; Linkedin <br>
        </p>

        <?php

            $num = count(glob("*.txt")) + 1;
            $file = fopen("$num.txt", "w");
            fwrite($file,"$name\n$email\n$subject\n$message");
            fclose($file);

        ?>

        <form method="post">
            <input type="text" placeholder="نام و  نام خانوادگی" id="name" name="name">
            <input type="text" placeholder="ایمیل" id="email" name="email">
            <br><br>
            <input type="text" placeholder="عنوان" id="subject" name="subject">
            <br>
            <input type="text" placeholder="متن اصلی" id="message" name="message">
            <br>
            <button id="send">ارسال</button>
        </form>

        <footer>
            <p class="y">
                نویسنده: پارسا قزلباش <br>
            <a href="https://www.linkedin.com/in/parsa-ghezelbash-7426a8233/"><button><img src="vecteezy_linkedin-icons-set-isolated-vector-social-media-logo_5689664.jpg"></button></a> &nbsp; &nbsp;
            <a href="https://Ghezel10.t.me/ "><button><img src="2582606.png"></button></a> &nbsp; &nbsp;
            <a href="https://github.com/GolPoooneh"><button><img src="25231.png"></button></a>
            </p>
        </footer>
    </body>

    <script>
        document.getElementById("send").onclick = function(){
            var sure = prompt("آیا از اطلاعات وارده شده اطمینان دارید؟ بله/خیر")
            if(sure == "بله"){
                alert("با موفقیت ارسال شد")
            }
        }
    </script>

    <style>
        #send{
            font-family: "b zar";
            font-size: 20;
            margin-top: 6px;
            border: none;
            background-color: rgb(0, 142, 14);
            color: white;
            width: 80px;
            height: 40px;
            cursor: pointer;
        }
        #send:hover{
            background-color: rgb(0, 110, 0);
        }
        #send:active{
            background-color: rgb(0, 110, 0);
            transform: translateY(1px);
        }
        #name{
            text-align: center;
            font-family: "b zar";
            font-weight: bold;
            color: black;
            background-color: white;
            border-width: 1px;
            height: 40px;
            width: 200px;
        }
        #email{
            text-align: center;
            font-family: "b zar";
            font-weight: bold;
            color: black;
            background-color: white;
            border-width: 1px;
            height: 40px;
            width: 300px;
            margin-right: 10px;
        }
        #subject{
            text-align: center;
            font-family: "b zar";
            font-weight: bold;
            color: black;
            background-color: white;
            border-width: 1px;
            height: 40px;
            width: 200px;

        }
        #message{
            text-align: right;
            text-indent: 2cm;
            font-family: "b zar";
            font-weight: bold;
            color: black;
            background-color: white;
            border-width: 1px;
            height: 3cm;
            width: 70%;
            margin-top: 10px;
        }
        input{
            border-radius: 6px;
        }
        .a{
            font-family: "b nazanin";
            text-align: center;
            font-size: 20;
        }
        .b{
            font-family: "b nazanin";
            font-size: 22;
        }
        .x{
            margin-left: 30px;
        }
        .y{
            margin-bottom: -4px;
            margin-top: 10px;
        }
        body{
            background-color: black;
            color: white;
        }
        nav{
            background-color: rgb(255, 255, 255);
            height: 40px;
            border-radius: 4px;;
            width: 100%;
        }

        button{
            color: black;
            border: none;
            background-color: unset;
            font-weight: 600;
            cursor: pointer;
            font-size: large;
            font-family: "b mitra";
            border-radius: 5px;
            margin-top: 3px;

        }
        button:hover{
            background-color: rgb(226, 226, 226);
        }
        button:active {
            background-color: rgb(203, 203, 203);
            transform: translateY(1px);
        }

        footer{
            background-color: white;
            position: fixed;
            bottom: 0%;
            width: 100%;
            text-align: center;
            color: black;
            font-family: "b mitra";
            font-size: large;
            font-weight: bold;
            border-radius: 5px;
            right: 1px;
        }
        img{
            height: 30px;
            width: auto;
        }
    </style>
</html> 