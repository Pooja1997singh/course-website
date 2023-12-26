<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <h1 style="text-align:center;text-decoration:underline; ">{{$data['name'] ?? ''}} want to enroll in {{ $data['course'] }}</h1>
    <p>
        <strong> {{$data['name'] ?? ''}} Details,</strong>
    <p>
    <p>{{$data['name'] ?? ''}}</p>
    <p>{{$data['email'] ?? ''}}</p>
    <p>{{$data['mobile_number'] ?? ''}}</p>
    
    

    <p style="text-align:justify;">{{ $data['course'] }}</p>
    <p>
        Thank You.
        Regards
    </p>


</body>
</html>