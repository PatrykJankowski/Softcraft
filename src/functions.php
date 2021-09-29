<?php

add_filter( 'wp_enqueue_scripts', 'remove_shit', PHP_INT_MAX );

function remove_shit() {
    wp_dequeue_script('jquery');
    wp_deregister_script('jquery');
    wp_dequeue_style('wp-block-library');
    //wp_dequeue_style( 'contact-form-7' );
}

add_action('init', function() {
    remove_action('rest_api_init', 'wp_oembed_register_route');
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
}, PHP_INT_MAX - 1 );


/* Enable upload for webp image files */
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');


add_action( 'after_setup_theme', 'setup' );
function setup() {
    load_theme_textdomain( 'softcraft', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    //global $content_width;
    //if (!isset($content_width)) $content_width = 640;
    register_nav_menu('nav-menu',__('Menu nawigacyjne'));
    register_nav_menu('nav-menu-mobile',__('Menu mobilne'));
}


/* Filter menu classes and ids */
function nav_menu_attributes_filter($var) {
    return is_array($var) ? array_intersect($var, array('current_page_item', 'current-menu-ancestor', 'current_page_parent')) : '';
}
add_filter('nav_menu_css_class', 'nav_menu_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'nav_menu_attributes_filter', 100, 1);
add_filter('page_css_class', 'nav_menu_attributes_filter', 100, 1);


add_filter( 'document_title_separator', 'cyb_document_title_separator' );
function cyb_document_title_separator( $sep ) {
    return "|";
}

add_filter( 'the_title', 'title' );
function title( $title ) {
    if ( $title == '' ) {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter( 'wp_title', 'filter_wp_title' );
function filter_wp_title( $title ) {
    return $title . esc_attr( get_bloginfo( 'name' ) );
}


function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


function javascript_variables() { ?>
    <script type="text/javascript">
        let ajax_url = '<?php echo admin_url( "admin-ajax.php" ); ?>';
        let form_nonce = '<?php echo wp_create_nonce( "form_nonce" ); ?>';
    </script><?php
}
add_action ( 'wp_head', 'javascript_variables' );


function send_form() {
    // Sanitize the POST field
    // Generate email content
    // Send to appropriate email

    check_ajax_referer('form_nonce', 'security');

    // honeypot
    if ($_POST["lastname"]) {
        wp_die();
    }

    if (empty($_POST["name"])) {
        wp_send_json_error('The name is empty');
        //echo json_encode('Podaj imię');
        //wp_die();
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        wp_send_json_error('The e-mail address is not valid');
    }

    if (empty($_POST["service"])) {
        wp_send_json_error('The service is empty');
    }

    if (empty($_POST["message"])) {
        wp_send_json_error('The message is empty');
    }

    // This is the email where you want to send the comments.
    $to = 'patryk.jankowski@softcraft.pl';
    $to2 = $_POST["email"];

    // Your message subject.
    $subject = 'Pytanie: ' . $_POST["service"];
    $subject2 = 'Softcraft – potwierdzenie wysłania wiadomości';

    $body = 'E-mail: ' . $_POST["email"] . "<br>";
    $body .= 'Temat: ' . $_POST["service"] . "<br>";
    $body .= 'Od: ' . $_POST["name"] . "<br>";
    $body .= 'Numer telefonu: ' . $_POST["phone"] . "<br>";
    $body .= 'Budżet: ' . $_POST["budget"] . "<br>";
    $body .= 'Wiadomość:' . "<br>" . $_POST["message"];

    $body2 = "<!doctype html><html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\"><head><title></title><!--[if !mso]><!-- --><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><!--<![endif]--><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"><meta name=\"viewport\" content=\"width=device-width,initial-scale=1\"><style type=\"text/css\">#outlook a { padding:0; }
          body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
          table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
          img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
          p { display:block;margin:13px 0; }</style><!--[if mso]>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        <![endif]--><!--[if lte mso 11]>
        <style type=\"text/css\">
          .mj-outlook-group-fix { width:100% !important; }
        </style>
        <![endif]--><!--[if !mso]><!--><link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700\" rel=\"stylesheet\" type=\"text/css\"><style type=\"text/css\">@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700);</style><!--<![endif]--><style type=\"text/css\">@media only screen and (min-width:480px) {
        .mj-column-per-100 { width:100% !important; max-width: 100%; }
      }</style><style type=\"text/css\">@media only screen and (max-width:480px) {
      table.mj-full-width-mobile { width: 100% !important; }
      td.mj-full-width-mobile { width: auto !important; }
    }</style></head><body style=\"background-color:#ffffff;\"><div style=\"background-color:#ffffff;\"><!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]--><div style=\"background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;\"><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"background:#ffffff;background-color:#ffffff;width:100%;\"><tbody><tr><td style=\"direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0;text-align:center;\"><!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:600px;\" ><![endif]--><div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\"><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\"><tr><td align=\"center\" style=\"font-size:0px;padding:10px 25px;padding-top:0;padding-right:0px;padding-bottom:0px;padding-left:0px;word-break:break-word;\"><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse:collapse;border-spacing:0px;\"><tbody><tr><td style=\"width:600px;\"><img alt=\"\" height=\"auto\" src=\"https://softcraft.pl/wp-content/themes/softcraft/img/baner.png\" style=\"border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;\" width=\"600\"></td></tr></tbody></table></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]--><div style=\"background:#FBFBFB;background-color:#FBFBFB;margin:0px auto;max-width:600px;\"><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"background:#FBFBFB;background-color:#FBFBFB;width:100%;\"><tbody><tr><td style=\"direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0;text-align:center;\"><!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:600px;\" ><![endif]--><div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\"><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\"><tr><td align=\"left\" style=\"font-size:0px;padding:10px 25px;padding-top:50px;padding-right:25px;padding-bottom:30px;padding-left:25px;word-break:break-word;\"><div style=\"font-family:open Sans Helvetica, Arial, sans-serif;font-size:32px;font-weight:bold;line-height:1;text-align:left;color:#37392e;\">Otrzymaliśmy Twoją wiadomość</div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]--><div style=\"background:#FBFBFB;background-color:#FBFBFB;margin:0px auto;max-width:600px;\"><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"background:#FBFBFB;background-color:#FBFBFB;width:100%;\"><tbody><tr><td style=\"direction:ltr;font-size:0px;padding:20px 0;padding-bottom:20px;padding-top:20px;text-align:center;\"><!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:middle;width:600px;\" ><![endif]--><div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:middle;width:100%;\"><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:middle;\" width=\"100%\"><tr><td align=\"left\" style=\"font-size:0px;padding:10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;\"><div style=\"font-family:open Sans Helvetica, Arial, sans-serif;font-size:24px;line-height:1;text-align:left;color:#37392e;\"><span style=\"color:#37392e\">Dziękujemy za skontaktowanie się z nami!</span></div></td></tr><tr><td align=\"left\" style=\"font-size:0px;padding:10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;\"><div style=\"font-family:open Sans Helvetica, Arial, sans-serif;font-size:15px;line-height:1.2;text-align:left;color:#37392e;\"><b>Na wiadomości odpowiadamy w ciągu 48 godzin</b>, ale zazwyczaj trwa to krócej. Jeśli masz więcej pytań, skontaktuj się z nami pod adresem <a href=\"mailto:kontakt@softcraft.pl\" style=\"text-decoration:none;color:#007FFF;display:inline-block;\">kontakt@softcraft.pl</a>.</div></td></tr><tr><td align=\"left\" style=\"font-size:0px;padding:10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;\"><div style=\"font-family:open Sans Helvetica, Arial, sans-serif;font-size:15px;line-height:1;text-align:left;color:#37392e;\">Pozdrawiamy,<br></div></td></tr><tr><td align=\"left\" style=\"font-size:0px;padding:0px 25px 10px;word-break:break-word;\"><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse:collapse;border-spacing:0px;\"><tbody><tr><td style=\"width:140px;\"><img height=\"auto\" src=\"https://softcraft.pl/wp-content/themes/softcraft/img/logo.png\" style=\"border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;\" width=\"140\"></td></tr></tbody></table></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></div></body></html>";

    // This are the message headers.
    // You can learn more about them here: https://developer.wordpress.org/reference/functions/wp_mail/
    $headers = array('Content-Type: text/html; charset=UTF-8');

    wp_mail($to, $subject, $body, $headers);
    wp_mail($to2, $subject2, $body2, $headers);

    wp_send_json_success('The e-mail has been send!');
}
add_action('wp_ajax_send_form', 'send_form');
add_action('wp_ajax_nopriv_send_form', 'send_form');


// Function to change email address
function wpb_sender_email( $original_email_address ) {
    return 'kontakt@softcraft.pl';
}

// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'Softcraft';
}

// Hooking up our functions to WordPress filters
add_filter( 'wp_mail_from', 'wpb_sender_email' );
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );
