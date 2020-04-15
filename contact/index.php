<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <h1>Simple PHP Contact Form</h1>
            <p>A Simple Contact Form developed in PHP with HTML5 Form validation. Has a fallback in <strike>jQuery</strike> pure JavaScript for browsers that do not support HTML5 form validation.</p>
        </div>
    </div>
            
    <div class="col-md-6 col-md-offset-3">
        <form action="/_contact-form/index.php" enctype="application/x-www-form-urlencoded" id="contact-form" class="form-horizontal" method="post">
            <div class="form-group">
                <label for="form-name" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="form-email" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="form-phone" class="col-lg-2 control-label">Phone</label>
                <div class="col-lg-10">
                    <input type="tel" class="form-control" id="form-phone" name="form-phone" placeholder="Phone">
                </div>
            </div>
            <div class="form-group">
                <label for="form-subject" class="col-lg-2 control-label">Subject</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="Subject" required>
                </div>
            </div>
            <div class="form-group">
                <label for="form-message" class="col-lg-2 control-label">Message</label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="form-message" name="form-message" placeholder="Message" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default">Send</button>
                </div>
            </div>
        </form>
    </div>
    
    <script type="text/javascript" src="public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form');
    </script>
</body>
</html>
