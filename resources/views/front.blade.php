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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Montserrat;
        }

        .bg-nav {
            background: rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(40px);
            /* width: 1440px; */
            background-image: url('/assets/img/nav.png');
            background-repeat: repeat-x;
        }

        .btn-login {
            background: #5D5FEF;
            box-shadow: 0px 0px 4px 4px rgba(11, 206, 255, 0.3);
            border-radius: 30px;
            width: 100px;
        }

        .jumbotron {
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url("/assets/img/jum.png");
            height: 720px;
            margin-top: -68px;
        }

        .candy {
            background-image: url('/assets/img/bg3.png');
            margin-top: -38px;
        }

        .rectangle {
            /* background-image: url('/assets/img/image57.png'); */
            background: radial-gradient(25.74% 36.9% at 50.05% 55.04%, rgba(0, 0, 0, 0) 31.22%, #000000 100%);
            height: 550px;
        }

        .image-blurred-edge {
            background-image: url('/assets/img/image56.png');
            position: relative;
            width: 800px;
            height: 370px;
            ;
            left: -200px;
            box-shadow: 0 0 8px 8px black inset;
            z-index: -2;
        }

        .upcaming-games {
            background-image: url('assets/img/bg4.png');
        }

        .upcaming-text {
            font-family: Aclonica;
            font-style: normal;
            font-weight: normal;
            font-size: 48px;
            line-height: 74px;

            color: #5D5FEF;

            text-shadow: 0px 1px 15px rgba(108, 204, 228, 0.49);
        }

        .news {
            /* background-image: url('assets/img/bg5.png'); */
            background: linear-gradient(90deg, #1C1B1B -0.87%, rgba(28, 27, 27, 0) 49.95%, #1C1B1B 100%);
        }

        .strategic-investors {
            background-image: url('assets/img/bg4.png');
        }

        .text-strategic {
            font-family: Aclonica;
            font-style: normal;
            font-weight: normal;
            font-size: 48px;
            line-height: 74px;
            color: #5D5FEF;
            text-shadow: 0px 0px 4px rgba(11, 206, 255, 0.3);
        }

        .footer-joy {
            background: #000000;
            /* position: absolute; */
            height: 562px;
            left: 0px;
            top: 5321px;
        }

        .bg-carousul {
            background-image: url('assets/img/group.png');
        }

    </style>

    <title>landing!</title>
</head>

<body>
    <main>
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg bg-nav">
            <div class="container">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" style="width: 150px;">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" style="color: #FFFFFF" href="#">ABOUT</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #FFFFFF" href="#">STORE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #FFFFFF" href="#">GAMEBOX</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #FFFFFF" href="#">TOKEN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #FFFFFF" href="#">STAKING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #FFFFFF" href="#">DOCS</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-left">
                        <li class="nav-item active">
                            <a class="nav-link mr-3" style="color: #FFFFFF" href="#">REGISTER</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary btn-login" href="#">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron">
            {{-- <img src="{{ asset('assets/img/jum.png') }}" alt=""> --}}
        </div>

        <div class="candy text-center">

            <img class="rounded" style="width: 150px;margin-top: 45px;margin-bottom: 30px;"
                src="{{ asset('assets/img/image54.png') }}" alt="">

            <img class="rounded" style="width: 150px;margin-top: 45px;margin-bottom: 30px;margin-left: 90px;"
                src="{{ asset('assets/img/image52.png') }}" alt="">

            <img class="rounded" style="width: 150px;margin-top: 45px;margin-bottom: 30px;margin-left: 90px;"
                src="{{ asset('assets/img/image51.png') }}" alt="">

            <img class="rounded" style="width: 150px;margin-top: 45px;margin-bottom: 30px;margin-left: 90px;"
                src="{{ asset('assets/img/image50.png') }}" alt="">

        </div>

        <div class="rectangle">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" style="width: 180px;">
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-4" style="color: #FFFFFF;z-index: 20;">
                        <h2>INTO THE METAVERSE</h2>
                        <p>
                            Earn, trade, stake, farm and swap your game assets the way you want. Welcome to a metaverse
                            that lets you truly decide how you want to play.
                        </p>
                    </div>
                    <div class="col-4">
                        <div class="image-blurred-edge"></div>
                        {{-- <img style="
                            position: relative;
                            right: 150px;
                            bottom: 100px;
                            top: 0px;
                            width: 660px;" src="{{ asset('assets/img/image56.png') }}" alt=""> --}}
                    </div>
                    <div class="col-4" style="color: #FFFFFF;z-index: 20;`">
                        <h2>INTO THE METAVERSE</h2>
                        <p>
                            Earn, trade, stake, farm and swap your game assets the way you want. Welcome to a metaverse
                            that lets you truly decide how you want to play.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="upcaming-games">
            <div class="row text-center ">
                <div class="col mt-5">
                    <h3 class="upcaming-text" style="color: #5D5FEF">Upcaming Games</h3>
                </div>
            </div>
            <div class="row text-center mt-3">
                <div class="container">
                    <div class="col" style="color: #FFFFFF">
                        <p>Joy Games aims to not just create a platform but also will play an active role in the
                            development
                            and
                            curation of gaming content on the platform, the upkeep of the codebase, and the development
                            of
                            new
                            exciting ways to implement gamified finance into existing or new games, via a mixture of of
                            inhouse
                            development or co-development with our strategic partners, who are experienced and
                            successful
                            game
                            development studios.</p>
                    </div>
                </div>
            </div>

            {{-- <div class="row"> --}}
            <div class="container mt-4">
                <div class="row text-center">

                    <div class="col-3">
                        <a style="background: #5D5FEF;
                    box-shadow: 0px 0px 4px 4px rgba(11, 206, 255, 0.3);
                    border-radius: 30px;width: 200px;" href="" class="btn btn-primary">Advanture</a>
                    </div>
                    <div class="col-3">
                        <a style="background: #5D5FEF;
                    box-shadow: 0px 0px 4px 4px rgba(11, 206, 255, 0.3);
                    border-radius: 30px;width: 200px;" href="" class="btn btn-primary">Arcade</a>
                    </div>
                    <div class="col-3">
                        <a style="background: #5D5FEF;
                    box-shadow: 0px 0px 4px 4px rgba(11, 206, 255, 0.3);
                    border-radius: 30px;width: 200px;" href="" class="btn btn-primary">Race</a>
                    </div>
                    <div class="col-3">
                        <a style="background: #5D5FEF;
                    box-shadow: 0px 0px 4px 4px rgba(11, 206, 255, 0.3);
                    border-radius: 30px;width: 200px;" href="" class="btn btn-primary">Open World</a>
                    </div>
                </div>
                {{-- {{-- </div> --}}
            </div>

            <div class="container mt-4">
                <div class="row text-center">

                    <div class="col-3">
                        <a style="background: #5D5FEF;
                    box-shadow: 0px 0px 4px 4px rgba(11, 206, 255, 0.3);
                    border-radius: 30px;width: 200px;" href="" class="btn btn-primary">Advanture</a>
                    </div>
                    <div class="col-3">
                        <a style="background: #5D5FEF;
                    box-shadow: 0px 0px 4px 4px rgba(11, 206, 255, 0.3);
                    border-radius: 30px;width: 200px;" href="" class="btn btn-primary">Arcade</a>
                    </div>
                    <div class="col-3">
                        <a style="background: #5D5FEF;
                    box-shadow: 0px 0px 4px 4px rgba(11, 206, 255, 0.3);
                    border-radius: 30px;width: 200px;" href="" class="btn btn-primary">Race</a>
                    </div>
                    <div class="col-3">
                        <a style="background: #5D5FEF;
                    box-shadow: 0px 0px 4px 4px rgba(11, 206, 255, 0.3);
                    border-radius: 30px;width: 200px;" href="" class="btn btn-primary">Open World</a>
                    </div>
                </div>
                {{-- {{-- </div> --}}
            </div>
            <div class="">

                <div class="d-flex justify-content-center">
                    <div class="row mt-5 ">
                        <div class="col">
                            <div class="card" style="width: 23rem;">
                                <img src="{{ asset('assets/img/image58.png') }}" class="card-img-top" alt="...">
                                <div class="card-body"
                                    style="background: rgba(0, 0, 0, 1.69);backdrop-filter: blur(30px);">
                                    <p class="card-text" style="color: #FFFFFF">Claw Star</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 23rem;">
                                <img src="{{ asset('assets/img/image58.png') }}" class="card-img-top" alt="...">
                                <div class="card-body"
                                    style="background: rgba(0, 0, 0, 1.69);backdrop-filter: blur(30px);">
                                    <p class="card-text" style="color: #FFFFFF">Claw Star</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 23rem;">
                                <img src="{{ asset('assets/img/image58.png') }}" class="card-img-top" alt="...">
                                <div class="card-body"
                                    style="background: rgba(0, 0, 0, 1.69);backdrop-filter: blur(30px);">
                                    <p class="card-text" style="color: #FFFFFF">Claw Star</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row mt-5 ">
                        <div class="col">
                            <div class="card" style="width: 23rem;">
                                <img src="{{ asset('assets/img/image58.png') }}" class="card-img-top" alt="...">
                                <div class="card-body"
                                    style="background: rgba(0, 0, 0, 1.69);backdrop-filter: blur(30px);">
                                    <p class="card-text" style="color: #FFFFFF">Claw Star</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 23rem;">
                                <img src="{{ asset('assets/img/image58.png') }}" class="card-img-top" alt="...">
                                <div class="card-body"
                                    style="background: rgba(0, 0, 0, 1.69);backdrop-filter: blur(30px);">
                                    <p class="card-text" style="color: #FFFFFF">Claw Star</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 23rem;">
                                <img src="{{ asset('assets/img/image58.png') }}" class="card-img-top" alt="...">
                                <div class="card-body"
                                    style="background: rgba(0, 0, 0, 1.69);backdrop-filter: blur(30px);">
                                    <p class="card-text" style="color: #FFFFFF">Claw Star</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row text-center">
                <div class="col mb-5 mt-5">
                    <a style="background: #5D5FEF;
                    box-shadow: 0px 0px 4px 4px rgba(11, 206, 255, 0.3);
                    border-radius: 30px;width: 287px;" href="" class="btn btn-primary">View More</a>
                </div>
            </div>

        </div>

        <div class="news bg-dark text-white">
            <div class="row text-center">
                <div class="col mt-5">
                    <h3>News</h3>
                </div>
            </div>
            <div class="row mt-4 text-center">
                <div class="col">
                    <p>Eclipse to the world of the end of our story Inside</p>
                </div>
            </div>

            <div class="row mt-4 text-center">
                <div class="container">
                    <div class="col mt-5">
                        <div class="owl-carousel">
                            <div> <img class="bg-carousul"
                                    style="background: linear-gradient(90deg, #000000 0%, rgba(0, 0, 0, 0) 100.04%);"
                                    src="{{ asset('assets/img/image59.png') }}" alt="">
                            </div>
                            <div> <img class="bg-carousul ml-5"
                                    style="background: linear-gradient(90deg, #000000 0%, rgba(0, 0, 0, 0) 100.04%);"
                                    src="{{ asset('assets/img/image59.png') }}" alt="">
                            </div>
                            <div> <img class="bg-carousul ml-5"
                                    style="background: linear-gradient(90deg, #000000 0%, rgba(0, 0, 0, 0) 100.04%);"
                                    src="{{ asset('assets/img/image59.png') }}" alt="">
                            </div>
                            <div> <img class="bg-carousul ml-5"
                                    style="background: linear-gradient(90deg, #000000 0%, rgba(0, 0, 0, 0) 100.04%);"
                                    src="{{ asset('assets/img/image59.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-4 text-center">
                <div class="container">
                    <div class="col mt-1 mb-5">
                        <a href="" class="btn btn-primary" style="background: #5D5FEF;
                        box-shadow: 0px 0px 4px 4px rgba(11, 206, 255, 0.3);
                        border-radius: 30px;width: 287px;">View All</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="strategic-investors">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col mt-5">
                        <h3 class="text-strategic" style="color: blue">Strategic Inventoris</h3>
                    </div>
                </div>
                <div class="row mt-5 text-center">
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image17.png') }}" alt=""></div>
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image18.png') }}" alt=""></div>
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image20.png') }}" alt=""></div>
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image21.png') }}" alt=""></div>
                </div>
                <div class="row text-center mt-2">
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image22.png') }}" alt=""></div>
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image23.png') }}" alt=""></div>
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image24.png') }}" alt=""></div>
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image25.png') }}" alt=""></div>
                </div>
                <div class="row text-center mt-2">
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image26.png') }}" alt=""></div>
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image27.png') }}" alt=""></div>
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image28.png') }}" alt=""></div>
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image29.png') }}" alt=""></div>
                </div>
                <div class="row text-center mt-2">
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image30.png') }}" alt=""></div>
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image31.png') }}" alt=""></div>
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image32.png') }}" alt=""></div>
                    <div class="col-3"><img class="img-investor" style="width: 140px;"
                            src="{{ asset('assets/img/image25.png') }}" alt=""></div>
                </div>
            </div>
        </div>

        <div class="footer-joy">
            <div class="container">
                <div class="row">
                    <div class="col-3 mt-5">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                        <p class="mt-3" style="color: #ffffff">METAVERSE GAMING BY JOY GAME PLAYER</p>
                    </div>
                    <div class="col-3 mt-5">
                        <h4 class="text-center" style="color: #FFFFFF">OUR SERVICES</h4>
                        <ul style="color: #FFFFFF;
                        list-style: none;
                        position: relative;">
                            <li class="mt-3">ABOUT</li>
                            <li class="mt-3">STORE</li>
                            <li class="mt-3">GAMEBOX</li>
                            <li class="mt-3">TOKEN</li>
                            <li class="mt-3">STACKING</li>
                            <li class="mt-3">DOCS</li>
                        </ul>
                    </div>
                    <div class="col-3 mt-5">
                        <h4 style="color: #FFFFFF">HELP</h4>
                        <ul style="color: #FFFFFF;
                        list-style: none;
                        position: relative;
                        right: 38px;">
                            <li class="mt-3">HELP</li>
                            <li class="mt-3">FAQs</li>
                            <li class="mt-3">CONTACT</li>
                        </ul>
                    </div>
                    <div class="col-3 mt-5">
                        <h4 style="color: #FFFFFF">JOIN OUR COMMUNITY</h4>
                        <div class="row mt-3">
                            <div class="col">
                                <img style="width: 30px;" src="{{ asset('assets/img/akar-icons_twitter-fill.png') }}"
                                    alt="">
                                <img style="width: 30px;" src="{{ asset('assets/img/akar-icons_medium-fill.png') }}"
                                    alt="">
                                <img style="width: 30px;" src="{{ asset('assets/img/bx_bxl-discord.png') }}" alt="">
                                <img style="width: 30px;" src="{{ asset('assets/img/bx_bxl-telegram.png') }}" alt="">
                                <img style="width: 30px;" src="{{ asset('assets/img/akar-icons_github-fill.png') }}"
                                    alt="">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                // autoWidth: true,
                // loop: true
                nav: true,

            });
        });
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
