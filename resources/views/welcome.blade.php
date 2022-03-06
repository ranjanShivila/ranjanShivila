<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      html,body { 
	height: 100%; 
}

.global-container{
	height:100%;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #f5f5f5;
}

form{
	padding-top: 10px;
	font-size: 14px;
	margin-top: 30px;
}

.card-title{ font-weight:300; }

.btn{
	font-size: 14px;
	margin-top:20px;
}


.login-form{ 
	width:330px;
	margin:20px;
}

.sign-up{
	text-align:center;
	padding:20px 0 0;
}

.alert{
	margin-bottom:-30px;
	font-size: 13px;
	margin-top:20px;
}
      </style>
  </head>
  <body>
<h1 class="text-center">login yourself</h1>

 
      <div class="global-container">
        <div class="card login-form">
        <div class="card-body">
          <h3 class="card-title text-center">Log in to our website</h3>
          <div class="card-text">
            <!--
            <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
            <form action="{{url('registeruser')}}" method="POST">

              @if(Session::has('sucess'))
              <div class="alert alert-sucess text-sucess"> {{Session::get('sucess')}}</div>
              @endif
              @if(Session::has('failed'))
              <div class="alert alert-danger"> {{Session::get('failed')}}</div>
              @endif
              @csrf
              <!-- to error: add class "has-danger" -->
              <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <span class="has-danger text-danger">@error('name') {{$message}} @enderror</span>
              </div>18
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <a href="#" style="float:right;font-size:12px;">Forgot password?</a>
                <input type="email" class="form-control form-control-sm" id="exampleInputPassword1" name="email">
                <span class="has-danger text-danger">@error('email') {{$message}} @enderror</span>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <a href="#" style="float:right;font-size:12px;">Forgot password?</a>
                
               <input type="text" class="form-control form-control-sm" id="exampleInputPassword1" name="address">
                <span class="has-danger text-danger">@error('address') {{$message}} @enderror</span>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">select role</label>
                <select name="roll" id="roll" class="form-control form-control-sm" required>
                  <option value="">select your role</option>
                  <option value="0" name="roll">User</option>
                  <option value="1" name="roll">Recurter</option>
                </select>                
               


                <span class="has-danger text-danger">@error('address') {{$message}} @enderror</span>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <a href="#" style="float:right;font-size:12px;">Forgot password?</a>
                <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" name="password">
                <span class="has-danger text-danger">@error('password') {{$message}} @enderror</span>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Register</button>
              
              <div class="sign-up">
               don'thave an account? <a href="{{route('login')}}">Log in</a>
              </div>
              <div class="container d-flex">
                <div>
                  log in with google? <a href='{{route('login.google')}}'>google</a>

                </div>
              <div>
                log in with facebook? <a href='{{route('login.facebook')}}'>facebook</a>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
      
     


 
 





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>