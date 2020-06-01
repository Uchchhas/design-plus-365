<html>
<head>
<title>Admin-Login | Vivek Group</title>
<style>
/* Based on a Dribbble shot by Andreas Storm
   http://dribbble.com/shots/1127916-Sign-in
*/

*{
  -webkit-box-sizing:border-box;
  -moz-box-sizing:border-box;
  box-sizing:border-box;
}
body{
  background:#a9b89e;
  font-family:Arial;
  font-size:12px;
  color:#151719;
}
input[type="text"],
input[type="password"]{
  background:transparent;
  font-weight:bold;
  padding:10px;
  border-radius:3px;
  width:100%;
  margin:5px 0;
  outline:medium none;
  color:#151718;
  border:1px solid #838388;
  
}
input[type="checkbox"]{
  -webkit-appearance:none;
  width:10px;
  height:10px;
  position:relative;
  outline:medium none;
  margin-right:10px;
}
input[type="checkbox"]::before{
  width:9px;
  height:9px;
  content:"";
  display:block;
  border:3px solid #C4BCB0;
  border-radius: 9px;
  position:absolute;
}
input[type="checkbox"]:checked::after{
  width:5px;
  height:5px;
  content:"";
  display:block;
  background: #C4BCB0;
  border-radius: 5px;
  position:absolute;
  left:5px;
  top:5px;
}
input[type="submit"]{
  display:block;
  padding:10px;
  background:#7ECC42;
  border:0;
  border-radius:3px;
  font-weight:bold;
  width:100%;
  color:#fff;
  cursor:pointer;
  -webkit-transition:all 0.3s;
  -moz-transition:all 0.3s;
  transition:all 0.3s;
}
input[type="submit"]:hover{
  background:Skybulue;
}
.main-form{
  width:350px;
  margin: 100px auto;
  padding:25px;
  border: 1px solid rgba(0,0,0,0.1);
  -webkit-box-shadow:0 1px 2px rgba(0,0,0,0.2);
  background:#fff;
}
.logo{

  width:40px;
  height:40px;
  display:block;
  margin:0 auto 30px;
  border-top-left-radius:22px;
  border-top-right-radius:22px;
  border-bottom-left-radius:22px;
  position:relative;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  transform: rotate(45deg);
}
.logo::before{
  width:14px;
  height:14px;
  display:block;
  border:5px solid #F7F5F2;
  content:"";
  position:absolute;
  border-radius:14px;
  top:8px;
  left:8px;
}
.main-form > label{
  display:block;
  margin:10px 0 15px;
  line-height:15px;
  cursor:pointer;
}
.main-form > div{
  margin-top:8px;
}
a{
  color:#151718;
  text-decoration:none;
}
.main-form > a{
  font-size:11px;
  display:block;
  text-align:center;
  margin:10px 0;
}
.main-form > div >a:first-child{
  font-weight:bold;
}
.main-form > div >a:nth-child(2){
  border:1px solid #3DA087;
  display:inline-block;
  border-radius:3px;
  color:#3DA087;
  font-weight:bold;
  padding:7px 15px;
  margin-left:28px;
  -webkit-transition:all 0.3s;
  -moz-transition:all 0.3s;
  transition:all 0.3s;
}
.main-form > div >a:nth-child(2):hover{
  background:#3DA087;
  color:#fff;
}
</style>
</head>
<body>
  <!-- <form class="form-horizontal" method="POST" action="{{ route('login') }}"> -->
 {!! Form::open(['route' => 'login']) !!}
 {{ csrf_field() }}
<div class="main-form">
  <div style="margin-left:90px; margin-bottom:5px;">
       <a href="{{url('/')}}"><img src="{{ asset('admin/img/logo.png') }}" width="150px"/></a>
  </div>
   <div {{ $errors->has('email') ? ' has-error' : '' }} >  
    <!-- <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus> -->
      {!! Form::text('email', null, ['placeholder' => 'Email']) !!} 
       @if ($errors->has('email'))
	        <span class="help-block">
	            <strong>{{ $errors->first('email') }}</strong>
	        </span>
	   @endif
   </div>

   <div {{ $errors->has('password') ? ' has-error' : '' }} >  
     <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
       <!-- {!! Form::password('password', null, ['placeholder' => 'Password']) !!} -->
      @if ($errors->has('password'))
	        <span class="help-block">
	            <strong>{{ $errors->first('password') }}</strong>
	        </span>
	   @endif
   </div> 
  <label>
    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
   <!-- {!! Form::checkbox('name','remember') !!} Remember Me -->

  </label> 
   {!! Form::submit('Login',['class'=>'ajax ajax-autoload']) !!} 
  <a href="{{ route('password.request') }}" title="">Forgot your password?</a>
  <div>
    <a href="{{ route('register') }}" title="">Don't have an account?</a>
    <a href="{{ route('register') }}" title="">Sign Up</a>
  </div>
</div>
{!! Form::close() !!}
<!-- </form> -->
</body>
</html>