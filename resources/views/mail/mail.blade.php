<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $data['title'] }}</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 30px;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="max-width: 600px; margin: auto; background-color: #ffffff; padding: 30px; border-radius: 6px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <tr>
            <td>
                <h2 style="color: #002147; margin-bottom: 20px;">New Contact Message</h2>

                <p style="margin: 0 0 10px;"><strong>Name:</strong> {{ $data['name'] }}</p>
                <p style="margin: 0 0 10px;"><strong>Email:</strong> {{ $data['email'] }}</p>
                <p style="margin: 0 0 10px;"><strong>Subject:</strong> {{ $data['subject'] }}</p>
                <p style="margin: 0 0 10px;"><strong>Message:</strong></p>
                <p style="background-color: #f0f0f0; padding: 15px; border-radius: 4px;">{{ $data['message'] }}</p>
                
                <hr style="margin: 30px 0; border: none; border-top: 1px solid #ddd;">

                <p style="font-size: 12px; color: #888;">This message was sent via your website contact form.</p>
            </td>
        </tr>
    </table>

</body>
</html>
