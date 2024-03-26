

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
                        <div class="card-body text-center">

                          <div class=>

                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 ">Please enter your login and password!</p>

                            <form action="{{route('store')}}" method="POST">
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

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" placeholder="Enter Name" name="name" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1cg">Your name</label>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="email" id="form3Example3cg" placeholder="Enter email" name="email" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example3cg">Your Email</label>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <select class="form-select form-select-lg" id="group" name="group">
                                        <option selected disabled>Please select...</option>
                                        <option value="admin">Admin</option>
                                        <option value="client">Client</option>
                                      </select>
                                      <label class="form-label" for="group">Your group</label>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4cg" name="password" placeholder="Enter password"class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4cdg" name="password2" placeholder="Re-enter password"class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                  </div>

                                  <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g">
                                      I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                    </label>
                                  </div>

                                  <div class="d-flex justify-content-center">
                                    <button type="submit"
                                      class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                  </div>

                                  <p class="mb-0">Have already an account? <a href="{{route('back')}}"
                                      class="text-white-50 fw-bold"><u>Login here</u></a></p>

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
