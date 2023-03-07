<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="email-send">
        <h1>Contact us Email Details</h1>
        <p><img src=""></p>
        <p>Hii i am just sending contact us details in emails</p>
        <p>Customer Name:{{ $data['name']}}</p>
        <p>Customer Email:{{ $data['email'] }}</p>
        <p>Customer Mobile:{{ $data['mobile']}}</p>
        <p>Customer Subject:{{ $data['subject']}}</p>
        <p>Customer Message:{{ $data['message']}}</p>
        <p>Contact us or email us<a href="mailto:kripalsinhraa043@gmail.com">kripalsinhraa043@gmail.com</a></p>
        <p>Our Address:KK PVT. LTD.<br>Near Kotecha Chawk,<br>africa colony rajkot-360001 gujarat</p>
    
       </div>
    
</body>
</html>