<!DOCTYPE html>
<html>

<head>
    <title>Contact Form Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h2 {
            color: #000000;
            margin: 0;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #e3e3e3;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .card .mb-3 {
            margin-bottom: 15px;
        }

        .card .fw-bold {
            font-weight: bold;
            color: #555;
        }

        .footer {
            padding: 15px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>You've Got a Mail! Here's are the details</h2>
        </div>
        <div class="card">
            <div class="mb-3">
                <span class="fw-bold">Name:</span>
                <p class="mb-0">{{ $data['name'] }}</p>
            </div>
            <div class="mb-3">
                <span class="fw-bold">Phone:</span>
                <p class="mb-0">{{ $data['phone'] }}</p>
            </div>
            <div class="mb-3">
                <span class="fw-bold">Subject:</span>
                <p class="mb-0">{{ $data['subject'] }}</p>
            </div>
            <div class="mb-3">
                <span class="fw-bold">Email:</span>
                <p class="mb-0">{{ $data['email'] }}</p>
            </div>
            <div>
                <span class="fw-bold">Message:</span>
                <p>{{ $data['message'] }}</p>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; {{ date('Y') }} Sharma & Sharma Law Chambers LLP. All rights reserved.</p>
    </footer>
</body>

</html>
