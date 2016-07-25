<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hannah Roe</title>
        <link rel="shortcut icon" href="css/img/favicon.ico">

        <!-- Compressed CSS -->
        <link rel="stylesheet" href="foundation/css/foundation.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <!--   Custom Css -->
        <link rel="stylesheet" type="text/css" href="css/stylesheets/custom.css">
    </head>
    <body>
        <header>
            <nav role="navigation" class="row">
                <div class="small-12 medium-6 large-3 columns">
                    <a href="index.html"><img id="logo-img" src="css/img/better.svg" alt="Logo" /></a>
                </div>
                <div class="small-12 medium-6 large-6 columns">
                    <ul class="vertical medium-horizontal menu">
                        <li>
                            <a class="menu-item" href="index.html">Portfolio</a>
                        </li>
                        <li>
                            <a class="menu-item" href="about.html">About</a>
                        </li>
                        <li>
                            <a class="menu-item" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="row">
            <section class="small-10 medium-10 large-10 small-centered column">
                <div id="contact-container" class="row">
                    <form id="contact-form" action="email_form.php" method="post" role="form" data-abide novalidate>
                        <!-- Name input -->
                        <div class="form-group">
                            <label for="name" hidden="hidden">Name</label>
                            <span class="input-group-addon"><span class="fa fa-user fa-fw"></span></span>
                            <input class="contact-input" type="text" required pattern=alpha name="name" value="" placeholder="Name">
                            <span class="form-error">
                                Just tell me your name.
                            </span>
                        </div>
                        <!-- Email Input -->
                        <div class="form-group">
                                <label for="email" hidden="hidden">Email</label>
                                <span class="input-group-addon"><span class="fa fa-envelope-o fa-fw"></span></span>
                                <input class="contact-input" type="email" required name="email" value="" placeholder="Email">
                                <small class="form-error">
                                    Your electronic mail address.
                                </small>
                        </div>
                        <!-- Message Textarea -->
                        <div class="form-group">
                            <div class="">
                                <label for="message" hidden="hidden">Message</label>
                                <span class="input-group-addon"><span class="fa fa-pencil fa-fw"></span></span>
                                <textarea class="contact-input" id="message-textarea" type="alpha_numeric" name="message" value="" placeholder="Message" required></textarea>
                                <span class="form-error">
                                    Say what's on your mind. I'm a great listener.'
                                </span>
                            </div>

                        </div>
                        <!-- Submit Button -->
                        <div class="form-group">
                            <button class="button" id="send-message" type="submit" name="button" value="submit">Send Message<span  id="airplane"class="fa fa-send fa-fw"></span></button>
                        </div>
                    </form>
                </div>


            </div>
        </section>
            <div class="row">

            </div>
        </main>
        <!-- Javascript  -->
        <script type="text/javascript" src="foundation/js/vendor/jquery.js"></script>
        <script type="text/javascript" src="foundation/js/vendor/foundation.min.js"></script>
        <script type="text/javascript" src="foundation/js/app.js">
        </script>
    </body>
</html>
