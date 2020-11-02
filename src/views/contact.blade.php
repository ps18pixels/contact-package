<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
<h1>I am from view</h1>
<form action="{{ route('sendMail') }}" method="POST">
    @csrf
    <label>
        <input type="text" name="name" value="Arkal" >
    </label>
    <label>
        <input type="text" name="email" value="pradeep.18pixels@gmail.com" >
    </label>
    <label>
        <textarea name="message" cols="30" rows="10">This is a test message</textarea>
    </label>
    <button type="submit">Submit</button>
</form>
</body>
</html>
