<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @forelse ($timeEntries as $timeEntry)
        <p>{{ $timeEntry->project->name }} {{ $timeEntry->duration }} {{ $timeEntry->date }}</p>
    @empty
        <p>No time entries for this date.</p>
    @endforelse

</body>

</html>
