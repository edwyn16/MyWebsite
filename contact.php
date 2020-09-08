<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact</title>
</head>
<body>
    <div class="container">
            <a href="index.html">
                <button class="backHome">
                    Home
                </button>
            </a>
        <h2> Contact Me </h2>
        <form action="contact.php" method="post">
            <div class="row">
                <div class="col">
                    <div class="inputField">
                        <input type="text" name="firstname" required>
                        <span class="first"> First Name </span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputField">
                        <input type="text" name="lastname" required>
                        <span class="first"> Last Name </span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="inputField">
                        <input type="email" name="E-mail" required>
                        <span class="email"> E-mail </span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputField">
                        <input type="text" name="subject" required>
                        <span class="mobile"> Subject </span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="inputField textarea">
                        <textarea name="message" required="required"></textarea>
                        <span class="message"> Type your message </span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" value="Send">
                </div>
            </div>
        </form>
    </div>
</body>
</html>