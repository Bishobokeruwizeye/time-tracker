<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client{{$client->name}}</title>
</head>
<body>
<div>
    <h2>EditClient</h2>
    <p>Name: {{$client->name}}</p>
    <p>Code: {{$client->code}}</p>
    <p>Phone: {{$client->phone}}</p>
    <p>Address: {{$client->address}}</p>
</div>

    
</body>
</html>