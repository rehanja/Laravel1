<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Verification</title>

    <style>
        

.box{
    border-style: solid;
  border-color: grey;
  background-color: lightgrey;
  margin: 25px 50px 75px 100px;
  padding: 55px;
  margin: 55px;
  width: 320px;
}


    </style>
</head>
<body>
    <h2>EZevent</h2>
    <div class="box">
<h3>Hello!</h3>
<hr>
<p >You are receiving this email because verify your email address.</p>
<a href="{{route('sendEmailDone',["email"=>$user->email,"verifyToken"=>$user->verifyToken])}}" class="btn btn-primary">verify email</a>
<p>If you did not verify an email, you cannot access the system</p>
<p>Regards,<br>EZevent</p>
</div>
</body>
</html>




