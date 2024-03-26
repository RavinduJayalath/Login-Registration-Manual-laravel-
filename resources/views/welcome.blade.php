<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Styles -->

    </head>
    <body class="" style="background-image: url('{{ asset("a.png") }}'); background-size: cover; ">
        @extends('layouts.app')
        @section('content')
        <br><br><br><br>

        <div class="row mt-20">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <br><br><br><br>
                <div class="text-center mt-10">
                    <h1>Welcome to our up coming website</h1>
                    <p>We are thrilled to announce that our new site is under construction and will be launching soon. As we work diligently to create the best possible experience for our visitors, we invite you to join us on this journey.</p>

                    <form action="">
                        <br>
                        <div class="row">
                            <div class="col-md-6"> <!-- Adjust column size as needed -->
                                <input type="text" placeholder="Enter Your Email" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-secondary pl-10">Notiify me</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
            <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                <section class="container center">
                    <div class="center">
                      <div class="row d-flex justify-content-center align-items-center h-1">
                        <div class="">
                          <div class="card bg-secondary text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                              <div class=" pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 ">Please enter your login and password!</p>

                                <form action="{{route('login')}}" method="POST">
                                    @csrf

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $errors)
                                            <li>{{$errors}}</li>

                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX" placeholder="Enter e-mail" name="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                      </div>

                                      <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" placeholder="Enter Password" name="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="typePasswordX">Password</label>
                                      </div>

                                      <p class="small  pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                      <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                      <div class="">
                                        <p class="mb-0">Don't have an account? <a href="{{route('register')}}" class="text-white-50 fw-bold">Sign Up</a>
                                        </p>
                                      </div>
                                </form>







                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>

        </div>



    </body>
    @endsection
</html>



