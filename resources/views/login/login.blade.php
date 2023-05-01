@extends('layout.index')

@section('content')
    {{-- <div class="container"> --}}
    {{-- <div class="d-flex justify-content-start">...</div>
    <div class="d-flex justify-content-end">...</div>
    <div class="d-flex justify-content-center">...</div>
    <div class="d-flex justify-content-between">...</div>
    <div class="d-flex justify-content-around">...</div> --}}
            {{-- <div class="col-md-4 col-md-offset-4" style="background-color: #000000;"> --}}
            <div class="d-flex justify-content-center sesi-div-tengah">
                @include('inc.msg')
            </div>
            <div class="d-flex justify-content-center sesi-div-tengah" style="margin-bottom:60px;">
                <!-- jarak antara kolom -->
                
                <br>
                <form action="/login" method="POST" class="">
                    @csrf
                    <div class="card" style="width:350px">
                        <br>
                        <center>
                            <h1><img src="{{asset("img/24thrift-logo-1080.png")}}" width="120px" height="">
                            </h1>
                            <p>Selamat Datang</p>
                        </center>
                        {{-- <form> --}}
                            <div class="card-body">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="{{Session::get('email')}}" class="form-control">
                            </div>
                            <div class="card-body">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <br>
                            <div class="text-center">
                                {{-- <center> --}}
                                <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                {{-- </center> --}}

                                <br><br>
                                <p>Not a member? <a href="/signup">Sign up</a>
                                    <br><a href="/">Dashboard</a>
                                </p>
                
                            </div>
                            <br>
                        {{-- </form> --}}
                </form>
            </div>
@endsection