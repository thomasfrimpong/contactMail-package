<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form action="/contact" method="POST">
        @csrf 
        <input type="text" class="w-20 h-10 rounded-full border-l-2" name="name" placeholder="Enter name" />
        <input type="email" name="email" placeholder="Enter email" />
        <textarea name="message" cols="30" rows="10" placeholder="Your query here.."></textarea>
        <input type="submit" value="Submit"  />
    </form>
</body>
</html>