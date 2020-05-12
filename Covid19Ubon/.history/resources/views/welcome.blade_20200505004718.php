<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md v">
                    
                    COVID-19-UBON
                </div>
                <p>รายงานสถานการณ์ โควิด-19
                    อัพเดทข้อมูลล่าสุด : 02/05/2020 11:34</p>
                <hr>
                <!-- -----------Evaluate------------- -->
                <div class="container">
                    <button type="button" class="btn btn-outline-primary btn-md btn-block">แบบทดสอบประเมินความเสี่ยง</button>
                </div>
                <!-- -----------Evaluate------------- -->
                <hr>
                <!-- -----------card------------- -->
                <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card text-white bg-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header"><h2>Confirmed</h2></div>
                        <div class="card-body">
                            <h5 class="card-title">Confirmed</h5>
                            <p class="card-text">2966</p>
                            <p class="card-text">[NewCondirmed]</p>

                        </div>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header"><h2>Recovered</h2></div>
                            <div class="card-body">
                                <h5 class="card-title">Recovered</h5>
                                <p class="card-text">2740</p>
                                <p class="card-text">[NewRecovered 1]</p>
                            </div>
                            </div>
                    </div>

                    <div class="col-sm">
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                            <div class="card-header"><h2>Hospitalized</h2></div>
                            <div class="card-body">
                                <h5 class="card-title">Hospitalized</h5>
                                <p class="card-text">193</p>
                                <p class="card-text">[NewHospitalized]</p>
                            </div>
                            </div>
                    </div>

                    <div class="col-sm">
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header"><h2>Deaths</h2></div>
                            <div class="card-body">
                                <h5 class="card-title">Deaths</h5>
                                <p class="card-text">54</p>
                                <p class="card-text">[NewDeaths]</p>
                            </div>
                            </div>
                    </div>


                </div>
                </div>
                <!-- -------------card----------- -->
                <hr>
                <!-- -------------Link----------- -->
                <div class="links">
                    
                    <!-- <a href="" type="" >Success</a> -->
                    <a href="">Covid19</a>
                    <a href="">Treatment&Protection</a>
                    <a href="">News</a>
                    <a href="">GitHub</a>
                </div>


        </div>
    </body>
</html>
