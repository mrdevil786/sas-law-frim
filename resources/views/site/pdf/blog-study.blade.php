<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        p {
            font-size: 16px;
        }

        .case-details {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>{{ $blog->title }}</h1>
    <p><strong>Author:</strong> Sharma & Sharma Law Chambers LLP</p>
    <p><strong>Published:</strong> {{ $blog->created_at->format('d M Y') }}</p>

    <!-- Display the case description -->
    <div class="case-details">
        <p><strong>Description:</strong></p>
        <div>{!! nl2br(e($blog->description)) !!}</div>
    </div>
</body>

</html>
