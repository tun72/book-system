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
            width: 45px;
            height: 45px;
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

        .middle {
            display: flex;
            margin-top: 25px;
            align-items: center;
            gap: 18px;
        }

        .stick {
            width: 6px;
            height: 40px;
            background-color: rgb(116, 113, 113);
            ;
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
                        <img src="https://m.media-amazon.com/images/M/MV5BODI0MTYzNTIxNl5BMl5BanBnXkFtZTcwNjg2Nzc0NA@@._V1_FMjpg_UX1000_.jpg"
                            alt="">
                    </div>
                    <p><span>{{ $sender }}</span> {{ $about }}</p>
                </div>
                {{-- <div class="middle">
                    <div class="stick"></div>
                    <p>Do you publish on Neobook?</p>
                </div> --}}
                <div class="btn">
                    <a href="#">Reply Now</a>
                </div>
            </div>
            @if ($comment !== '')
                <div class="third_container">
                    <p>{{ $comment }}</p>
                </div>
            @endif
        </div>

    </section>
</body>

</html>
