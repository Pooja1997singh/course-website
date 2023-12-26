<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <h1 style="text-align:center;text-decoration:underline; ">{{$data['subject']}}</h1>

    <strong>Dear Dotfy,<strong>
    <p>I hope this message finds you well.</p>
    <p style="">
    I am writing to confirm my registration for the Live Project Training offered by Dotfy. I'm excited about the prospect of enhancing my skills and gaining hands-on experience through your program. I understand the importance of practical knowledge in today's competitive job market, and I believe that your training will significantly contribute to my professional development.
    </p>
    <p>Here are my registration details:</p>
    <p>
        <strong> {{$data['name'] ?? ''}} Details,</strong>
    <p>
    <p>Name :{{$data['name'] ?? ''}}</p>
    <p>Email Address : {{$data['email'] ?? ''}}</p>
    <p>Contact Number : {{$data['mobile_number'] ?? ''}}</p>
    <p>
    I am eager to delve into real-world projects, receive guidance on portfolio building, and benefit from the expertise offered by Dotfy. I am also looking forward to learning about AI tools, setting up my freelancing account, and refining my LinkedIn profile as part of your comprehensive training.
    </p>
    <p>
    Please let me know if there are any further steps I need to take or any additional information you require from my end to complete the registration process.

    </p>
    <p>Thank you for providing this opportunity, and I'm excited to embark on this learning journey with Dotfy.</p>
    
   
    <p>
        Best Regards
    </p>
    <strong>{{ $data['name'] }}</strong>


</body>
</html>