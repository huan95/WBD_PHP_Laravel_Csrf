<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
The CSRF test form
<form method="post" action="{{ route('submit') }}">
    <input name="name" placeholder="Fill in the information">
    <input type="submit" value="Accept">
</form>
</body>
</html>