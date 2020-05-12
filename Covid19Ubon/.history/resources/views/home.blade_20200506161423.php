@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <!-- --- -->
                <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card text-white bg-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header"><h2>Confirmed</h2></div>
                        <div class="card-body">
                            <h5 class="card-title">Confirmed</h5>
                            <small id="" class="form-text text-muted" style="color: #ffffff !important;">จำนวนผู้ติดเชื้อ:</small>
                            <p class="card-text">
                            {{$json->Confirmed}}
                            
                            </p>
                            <p class="card-text">[NewCondirmed]: {{$json->NewConfirmed}}</p>

                        </div>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header"><h2>Recovered</h2></div>
                            

                            <div class="card-body">
                                <h5 class="card-title">Recovered</h5>
                                <small id="" class="form-text text-muted" style="color: #ffffff !important;">จำนวนผู้หายติดเชื้อ:</small>
                                <p class="card-text">{{$json->Recovered}}</p>
                                <p class="card-text">[NewRecovered]: {{$json->NewRecovered}}</p>
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
    
               
                <!-- --- -->




                    
                  
                  <br>

                  {{ $json->Recovered }}
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
