<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sent Mail with Multiple attachements Using wp_mail</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
<section id="SentMail">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="">
              <form method="post" action="<?php //the_permalink() ?>" enctype="multipart/form-data">
                <div class="form-group"><label for="name">Name:</label><input type="text" class="form-control" id="name" name="name"  required maxlength="50"></div>
                <div class="form-group">
                       <label for="email">Email:</label><input type="email" class="form-control"id="email" name="email" required maxlength="50">
                </div>
                <div class="form-group">
                       <label for="name">Message:</label><textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                </div>

                <div class="form-group">
                <label for="name">CV</label><input type="file" class="form-control" id="image" name="cv"  required>
                </div>

                <div class="form-group">
                <label for="name">ML</label><input type="file" class="form-control" id="image" name="ml"  required>
                </div>

                   <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs">Send It</button>
              </form>
            </div>
            </div>

      </div>
    </div>
</section>
  </body>
</html>
