<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main {
            width: 500px;
            background-color: black;
            color: white;
            padding: 50px;
            border-radius: 10px;
        }

        .logo {
            width: 50px;
            height: 50px;
            font-size: 35px;
            color: blue;
        }

        .line {
            width: 100%;
            height: 1px;
            background-color: rgb(196, 186, 186);
            margin-top: 10px;
        }

        .intro,
        .first_para,
        .second_para,
        .third_para,
        .last_para {
            font-size: 15px;
            font-weight: 500;
        }

        .first_para span {
            color: rgb(59, 59, 209);
        }

        .middle {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .box {
            width: 150px;
            height: 50px;
            display: flex;
            border: 1px solid rgb(57, 57, 104);
            align-items: center;
            justify-content: center;
            background-color: rgb(81, 73, 73);
            border-radius: 10px;
            color: white;
            font-size: 18px;
            letter-spacing: 1px;

        }

        .btn {
            width: 100%;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(59, 59, 209);
            color: white;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;

        }

        .last_para a {
            color: blue;

        }
    </style>
</head>

<body>
    <section class="container">
        <div class="main">
            <div class="logo">
                <span><i class="fa-brands fa-facebook"></i></span>
            </div>
            <div class="line"></div>
            <div class="middle">
                <div class="intro">
                    <p>Hi Shine Si Lwin,</p>
                </div>
                <div>
                    <div class="first_para">
                        <p>We received a request to reset your <span>LibraryLoom</span> password.</p>
                    </div>
                    <div class="second_para">
                        <p>Enter the following password reset code:</p>
                    </div>
                </div>
                <div class="box">
                    <p>2194736</p>
                </div>
                <div class="third_para">
                    <p>Alternatively,you can directly change your password.</p>
                </div>
                <div class="btn">
                    <p>Change Password</p>
                </div>
                <div class="last_para">
                    <p>Didn't request this change?</p>
                    <p>If you didn't request a new password,<a href="#"> let us know</a>.</p>
                </div>
            </div>


        </div>

    </section>
</body>

</html>
