<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hùng ơi, Cố Lên!</h1>
    <select>
        @foreach ($channel as $item)
    <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
</body>
</html>