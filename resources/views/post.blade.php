<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KARIM ABDEL-KHAMID</title>
</head>
<body>
    <h1>All posts</h1>
    @foreach ($posts as $p)
        <h3>{{$p->Name}}</h3>
        <h3>{{$p->Surname}}</h3>
        <h3>{{$p->Department}}</h3>
    @endforeach
</body>
</html>