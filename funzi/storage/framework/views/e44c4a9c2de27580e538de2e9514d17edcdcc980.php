<html>
<head>
    <title>Set Credentials</title>
</head>
<body>
<form method='POST' action='<?php echo e(route('post.credentials')); ?>'>
    <?php echo csrf_field(); ?>

<label>User Email</label>
<input type="email" name="name" value="<?php echo $user->email; ?>" placeholder="Student Email" readonly>
<input type="hidden" name="uniqid" value="<?php echo $user->uniqid; ?>">
<label>Password</label>
<input type="password" name="password" placeholder="password">
<label>Confirm Password</label>
<input type="password" name="confirm_password" placeholder="password">
<input type="submit" value="Submit">

</form>


</body>
</html>
<?php /**PATH D:\Laravel Projects\funzi\resources\views/user/set_credentials.blade.php ENDPATH**/ ?>