<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="background-color:#092635;"  class="text-white">
<section class="mt-3">

  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
    
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">STUDENT REGISTRATION</h2>

              <form action="{{url('/')}}/studentRegister" method="POST" >
                @csrf

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Your Name</label>
                    <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" />
                    <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span><br>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Your Email</label>
                    <input type="email" id="form3Example1cg" name="email" class="form-control form-control-lg" />
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span><br>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                    <input type="password" id="form3Example4cg" name="password" class="form-control form-control-lg" />
                    <span class="text-danger">
                        @error('password')
                        {{$message}}
                        @enderror
                    </span><br>
                </div>

                

             

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success w-100 btn-block btn-lg gradient-custom-4 text-body" name="register">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>