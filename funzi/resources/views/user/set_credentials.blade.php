<html>
<head>
    <title>Set Credentials</title>
</head>
<body>
<form method='POST' action='{{ route('post.credentials') }}'>
    @csrf

<label>User Email</label>
<input type="email" name="name" value="{!! $user->email !!}" placeholder="Student Email" readonly>
<input type="hidden" name="uniqid" value="{!! $user->uniqid !!}">
<label>Password</label>
<input type="password" name="password" placeholder="password">
<label>Confirm Password</label>
<input type="password" name="confirm_password" placeholder="password">
<input type="submit" value="Submit">

</form>


</body>
</html>
