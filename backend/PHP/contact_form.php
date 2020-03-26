<!DOCTYPE html>
<html>
    <head>
        <title>KINKIDY | CONTACT FORM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="./contact_form.css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h2>Contact Form</h2>
                <form action="contact_response.php" method="POST">
                    <div class="input"><input type="text" name="full_name" placeholder="Full Name" required/></div>
                    <div class="input"><input type="email" name="email" placeholder="Email Address" required/></div>
                    <div class="input"><input type="text" name="address" placeholder="Address" /></div>
                    <div class="input"><input type="text" size="14" name="phone_number" placeholder="Phone Number" /></div>
                    <div class="input">
                        <select name="gender">
                            <option>Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Inbetween</option>
                            <option>Prefer not to say </option>
                          </select>
                    </div>
                    <div class="input">
                        <textarea name="message">Drop a message for me</textarea>
                    </div>
                    <button type="submit" name="submit">Submit</button>
                </form>  
            </div>
        </div>
    </body>
</html>