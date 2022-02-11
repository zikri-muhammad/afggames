<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Poppins:wght@400;700;900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: Poppins;
        }

        .cardImg {
            height: 500px;
            width: 500px;
            left: 173px;
            top: 192px;
            margin-top: 100px;
            border-radius: 0px;

        }

        .cardFormLogin {
            background: #FFFFFF;
            box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.08);
            border-radius: 8px;
            margin-top: 100px;
            /* height: 940px; */
            width: 600px;
        }

        .titlle {
            font-weight: 500;
            font-size: 18px;
            /* line-height: 135.5%; */
            color: #2F2F2F;
        }

        .subTitlle {
            font-weight: 500;
            font-size: 36px;
            line-height: 120.5%;
            color: #3300ff;
        }

        .btn-google {
            background: #FFFFFF;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.11);
            border-radius: 8px;
            font-weight: 400;
            /* padding: 30px 296px 26px 243px; */
        }

        .btn-facebook {
            background: #FFFFFF;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.11);
            border-radius: 8px;
            font-weight: 400;

            /* padding: 30px 296px 26px 243px; */
        }

        .inputEmail {
            background: #ECECEC;
            border-radius: 8px;
            border-color: transparent;
            width: 558px;
            height: 43px;
        }

        .btn-login {
            /* Primary Color */
            background: #6358DC;
            border-radius: 8px;
            width: 560px;
            height: 44px;
        }

    </style>

    <title>Login!</title>
</head>

<body>
    <main class="mt-3">
        <div class="col-md-12">
            <div class="row ">
                <div class="col-md-6 d-flex justify-content-center">
                    <img class="cardImg" src="{{ asset('assets/img/Illustration.png') }}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="card cardFormLogin">
                        <div class="card-body">
                            <h2 class="titlle">Welcome To</h2>
                            <p class="subTitlle">Joy Games</p>
                            <div class="mb-5">
                                <a href="#" class="btn btn-google btn-block"><img width="20px"
                                        src="{{ asset('assets/img/google.png') }}"> <span class="ml-2">Login
                                        With Google</span></a>
                                <a href="#" class="btn btn-facebook btn-block"><img width="10px"
                                        src="{{ asset('assets/img/Vector.png') }}"> <span class="ml-2">Login
                                        With faceebook</span></a>
                            </div>
                            {{-- <section class="half">
                            <h2 class="hr-titlle"><span>Or</span></h2> --}}
                            <div class="mt-3">
                                {{-- <input class="inputEmail" placeholder="example@gmail.com" type="text"> --}}
                                {{-- <label class="sr-only"
                                    for="inlineFormInputGroupUsername2">example@gmail.com</label> --}}
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend ">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" class="form-control inputEmail" id="inlineFormInputGroupUsername2"
                                        placeholder="example@gmail.com">
                                </div>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend ">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="password" class="form-control inputEmail" id="inlineFormInputGroupUsername2"
                                        placeholder="password">
                                </div>
                                {{-- <input class="inputEmail mt-3" placeholder="password" type="password"> --}}
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck"
                                            disabled>
                                        <label class="form-check-label" for="disabledFieldsetCheck">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-login btn-block"> <span
                                        class="ml-2">Login</span></a>
                            </div>
                            <div class="text-center">
                                <div class="form-group ">
                                    <div class="form-check mt-5">
                                        <label class="form-check-label justify-content-center" for="invalidCheck2">
                                            Do you have account? <a href="#">Register</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
