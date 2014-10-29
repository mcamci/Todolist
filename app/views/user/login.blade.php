@extends('layouts.todo')
@section('content')
 <div class="container">
   <form action="login" class="form-signin" method="post">
        <h2 class="form-signin-heading">Please login</h2>
        <input type="text" name="kullanici" class="form-control" placeholder="Username" required autofocus>
        <input type="password" name="sifre" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                <button class="btn btn-lg btn-success btn-block" type="button" onClick="location.href='register'">Register</button>

      </form>

    </div> <!-- /container -->
@stop

@section('style')
<style>
.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}


</style>
@stop