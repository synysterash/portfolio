<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Feedback Received</title>
</head>
<body>
    <h2>New Feedback Received</h2>

    <p><strong>Name:</strong> {{ $feedbackData['name'] }}</p>
    <p><strong>Email:</strong> {{ $feedbackData['email'] }}</p>
    <p><strong>Subject:</strong> {{ $feedbackData['subject'] }}</p>
    <p><strong>Message:</strong> {{ $feedbackData['message'] }}</p>

    <p>Thank you for your feedback!</p>
</body>
</html>
