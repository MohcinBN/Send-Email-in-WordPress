<?php



if (!empty($_POST)) {


// First check the nonce, if it fails the function will break

//    check_ajax_referer('form-nonce', 'security');



    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $errors = '';

    }



  /*  if ( ! function_exists( 'wp_handle_upload' ) ) { require_once( ABSPATH . 'wp-admin/includes/file.php' );} */







// Nonce is checked, get the POST data and sign user on

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);


    if (!function_exists('wp_handle_upload')) {require_once( ABSPATH . '/wp-admin/includes/file.php' );}



    $uploadedfile = $_FILES['cv'];

    $upload_overrides = array( 'test_form' => false );

    $movefile = wp_handle_upload( $uploadedfile, $upload_overrides);


    if ( empty($movefile['error']) ) {

      $attachments = $movefile['file'];

    } else {

         $attachments = null;

    }



    $uploadedfile2 = $_FILES['ml'];

    $upload_overrides2 = array( 'test_form' => false );

    $movefile2 = wp_handle_upload( $uploadedfile2, $upload_overrides2 );


    if ( empty($movefile2['error']) ) {

      $attachments_2 = $movefile2['file'];

    } else {

         $attachments_2 = null;

    }



  //  var_dump($attachments_2);


    $subject = "Contact Form: $name";

    $email_body = "You get a message from website.com conact form.\n\n" . "Details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email\n";

    $headers .= "Reply-To: $email";

    $to = 'Test@gmail.com';



    if (wp_mail($to, $subject, strip_tags($email_body), $headers, array($attachments, $attachments_2))) {



        $success = '';

    } else {

        $errors = '';

    }

}
