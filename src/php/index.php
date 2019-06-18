<?php

require_once 'php/forms.php';
echo "hi";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Contact form -->
    <div class="contactme__body__form" data-aos="zoom-in" data-aos-duration="2000">
        <form action="" method="POST">
            <!-- Contact me inputs -->
            <div>
                <div>
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control" id="firstnameinputid" value="" placeholder="First Name *" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="surname" class="form-control" id="lastnameinputid" placeholder="Last Name *" required>
                    </div>
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="emailinputid" placeholder="Email *" required>
                </div>

                <div class="form-group">
                    <input type="tel" name="phone"class="form-control" id="phoneinputid" placeholder="Phone">
                </div>
            </div>
            <!-- Contact me message -->

            <div class=" form-group contactformmessage">
                <div class="contactformmessagetext">
                    <textarea name="long_text" class="form-control" id="messageinputid" placeholder="message"></textarea>
                    
                    
                </div>

                <div class="button">
                    <button type="submit" class="btn btn-outline-secondary" id="Submitbutton">Submit</button>
                </div>

            </div>

        </form>

    </div>

</body>
</html>