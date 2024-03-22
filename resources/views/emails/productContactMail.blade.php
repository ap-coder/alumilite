<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            max-width: 200px;
            margin-bottom: 10px;
        }

        h2 {
            color: #333333;
        }

        p {
            color: #666666;
            margin-bottom: 20px;
        }

        .message {
            padding: 15px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            @if (@$setting->header_logo)
                <img src="{{ $setting->header_logo->getUrl() }}" alt="alumilitearmor">
            @endif
        </div>
        <h2>Product Contact Form Submission</h2>
        <p>Dear Alumilitearmor,</p>
        <div class="message">
            <p><strong>Product Name:</strong> <a href="{{ $mailData['product_name'] }}">{{ $mailData['product_name'] }}</a> </p>
            <p><strong>Name:</strong> {{ $mailData['name'] }}</p>
            <p><strong>Email:</strong> {{ $mailData['email'] }}</p>
            <p><strong>Phone:</strong> {{ $mailData['phone'] }}</p>
            <p><strong>Subject:</strong> {{ $mailData['subject'] }}</p>
            <p><strong>Message:</strong> {{ $mailData['message'] }}</p>
        </div>
        <p>Please respond to this inquiry as soon as possible.</p>
    </div>
</body>
</html>