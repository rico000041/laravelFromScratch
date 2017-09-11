<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    @foreach ($tasks as $task)
        <li> {{ $task->title }}</li>
    @endforeach
</body>
</html>