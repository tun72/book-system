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
            background-color: black;
            color: white;
        }

        .main {
            width: 100%;
            height: 100%;
            padding: 20px;
        }

        .logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
        }

        .line {
            width: 100%;
            height: 1px;
            background-color: rgb(50, 49, 49);
            margin-top: 10px;
        }

        .heading {
            font-size: 20px;
            font-weight: 600;
            margin-top: 10px;
        }

        .first_para,
        .second_para {
            font-size: 30px;
            margin-top: 20px;
        }

        .second_para span {
            color: gold;
        }

        .btn {
            width: fit-content;
            border: 1px solid blue;
            padding: 10px 25px;
            margin-top: 20px;
            border-radius: 10px;
            font-size: 18px;

        }
    </style>

</head>

<body>


    <section class="container">
        <h3>Your Sent you a message.</h3>
        <div class="main">
            <p>{{ $username }}</p>

            <p>{{ $message }}</p>

        </div>

    </section>
</body>

</html>
