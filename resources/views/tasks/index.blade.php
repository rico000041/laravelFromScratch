<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    @foreach ($tasks as $task)
        <li> 
        	<a href = "/tasks/{{ $task->id }}">
       			 {{ $task->title }}
			</a>
        </li>
    @endforeach

</body>
</html>