<?php
/*
Plugin Name: Contact Form to HubSpot
*/

add_shortcode('contact_us_form', function () {
    $message = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['custom_contact_form'])) {
        $email = sanitize_email($_POST['email']);
        $name = sanitize_text_field($_POST['name']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = '<p style="color:red">Invalid email address.</p>';
        } else {
            $name_parts = explode(' ', $name, 2);
            $first_name = $name_parts[0];
            $last_name = isset($name_parts[1]) ? $name_parts[1] : '';

            send_mail_notification($email, 'New Contact Form Submission', "Name: $name\nEmail: $email");
            create_hubspot_contact($email, $first_name, $last_name);
            log_message($email, 'New Contact Form Submission', "Name: $name\nEmail: $email");

            $message = '<p style="color:green">Message sent successfully.</p>';
        }
    }

    ob_start();
    include plugin_dir_path(__FILE__) . 'views/form.php';

    echo $message;

    return ob_get_clean();
});

add_action('init', function () {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['custom_contact_form'])) {
        include plugin_dir_path(__FILE__) . 'form-handler.php';
    }
});
