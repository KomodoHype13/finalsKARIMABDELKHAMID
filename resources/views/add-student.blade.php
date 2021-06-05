<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karim Abdel-khamid</title>
</head>
<body>
    <h1>Add new post</h1>
    <form method="POST" action ="{{route('post.addSubmit')}}">
        <label for ="title">First name:</label>
        <input type ="Name" name="title" placeholder="Enter your name">
        <label for ="Surname">Surname:</label>
        <input type ="text" name="title" placeholder="Enter your Surname">
        <textarea name="post" rows ="3"></textarea>
        <input type ="sumbit" value="sumbit">

    </form>
</body>
</html>