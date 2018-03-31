<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<ul>
    @foreach ($tasks as $task)
        <li>{{$task->body}}</li>
    @endforeach
</ul>
</body>

</html>