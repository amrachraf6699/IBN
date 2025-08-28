<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Accepted - {{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { margin: 0; padding: 0; background-color: #f9f9f9; font-family: 'Changa', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #333; }
        .email-container { max-width: 600px; margin: auto; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.08); }
        .email-header { background-color: #c92127; padding: 20px; text-align: center; }
        .email-header img { max-height: 100px; }
        .email-body { padding: 30px; }
        .email-body h2 { color: #333; margin-bottom: 10px; }
        .email-body h5 { color: #c92127; margin-top: 20px; }
        .email-body p { margin: 10px 0; line-height: 1.6; }
        .email-footer { text-align: center; padding: 20px; font-size: 12px; color: #888; background: #f0f0f0; }
        .btn-primary { display: inline-block; padding: 12px 25px; background-color: #28a745; color: #fff !important; text-decoration: none; border-radius: 5px; margin-top: 20px; }
        .divider { border-top: 1px solid #e0e0e0; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{ asset('images/white_logo.png') }}" alt="{{ config('app.name') }} Logo">
        </div>
        <div class="email-body">
            <h2 style="text-align: center;">Your Application has been <span style="color:#28a745;">Accepted</span>!</h2>
            <p>Hello <strong>{{ $application->email }}</strong>,</p>
            <p>We are pleased to inform you that your application for:</p>
            <h5 style="text-align: center;">{{ $DBjob->getTranslation('title', 'en') }}</h5>
            <p><strong>Location:</strong> {{ $DBjob->getTranslation('location', 'en') }}</p>
            <p><strong>Salary:</strong> {{ $DBjob->salary }}</p>
            <div class="divider"></div>
            <p>Your application has been reviewed and accepted. Our team will contact you soon for the next steps.</p>
            <p style="text-align: center;">
                <a href="{{ route('check.invite' ,$application->uuid) }}" class="btn-primary">View Details</a>
            </p>
            <p style="margin-top: 20px;">Thank you for your interest!</p>
            <p>Best regards,<br><strong>{{ config('app.name') }} Team</strong></p>
        </div>
        <div class="email-footer">
            If you’re unable to click the button, copy and paste this link into your browser:<br>
            <a href="{{ route('check.invite' ,$application->uuid) }}" style="color: #c92127;">{{ route('check.invite' ,$application->uuid) }}</a>
        </div>
    </div>
</body>
</html>
