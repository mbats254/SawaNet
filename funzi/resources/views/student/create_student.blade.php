<html>
<head>
    <title>Create Class</title>
</head>
<body>
<form method='POST' action='{{ route('post.student') }}'>
    @csrf
<select name="standard">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
</select>
<label>Stream</label>
<input type="text" name="stream" placeholder="stream e.g x,y">
<input type="submit" value="Submit">

</form>


</body>
</html>
