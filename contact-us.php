<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="contact-style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

</head>
<body>
    
    <main>

    <form class="contact-form"  action="contactform.php" method="post">

        <p>Contact Us</p>
       
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="mail" placeholder="Your E-Mail Address">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message"></textarea>
        <button class="form-button" type="submit" name="submit">Send Message</button>

    </form>
    </main> 

</body>
</html>