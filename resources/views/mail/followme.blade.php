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
        }

        .first_container {
            display: flex;
            font-size: 25px;
            font-weight: 600;
            background-color: rgb(145, 142, 142);
            color: rgba(175, 85, 29, 0.66);
            padding: 15px 20px;
            gap: 10px;
        }

        .second_container {
            background-color: rgb(24, 22, 22);
            color: white;
            padding: 10px 20px;
        }

        .icon_container {
            display: flex;
            gap: 10px;
        }

        .icon {
            width: 50px;
            height: 50px;
            background-color: rgba(139, 214, 208, 0.658);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn {
            width: 120px;
            padding: 10px 0px;
            background-color: rgba(175, 85, 29, 0.66);
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
            border-radius: 10px;
        }

        .third_container {
            background-color: rgb(145, 142, 142);
            padding: 20px 20px;
            color: white;
        }

        .third_container a {
            color: blue;
        }
    </style>
</head>

<body>

    <section class="container">
        <div class="main">
            <div class="first_container">
                <p>wattpad</p>
                <span><i class="fa-solid fa-book-skull"></i></span>
            </div>
            <div class="second_container">
                <div class="icon_container">
                    <div class="icon">
                        <p>T</p>
                    </div>
                    <p>Follow me on Wattpad,a free,one-of-a-kind-social</p>
                </div>
                <p>reading and writing app.My username is TunTun167</p>
                <div class="btn">
                    <a href="#">Try it Now</a>
                </div>
            </div>
            <div class="third_container">
                <p>The message was sent to <a href="#">tun72553@gmail.com</a>.You are receiving this email because
                    you registered with Wattpad(31 Adeladic Street East,P.O. BOX 565. Toronto,ON,M5C2J6).IF you no
                    longer want to receive these emails,you can unsubscribe here.</p>
            </div>
        </div>

    </section>

</body>

</html>
