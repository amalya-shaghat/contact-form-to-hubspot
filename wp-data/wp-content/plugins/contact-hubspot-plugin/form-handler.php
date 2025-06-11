<?php

function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function send_mail_notification($email, $subject, $message) {
    wp_mail($email, $subject, $message . "\nFrom: $email");
}

function create_hubspot_contact($email, $first_name, $last_name) {
    $token = getenv('HUBSPOT_TOKEN');
    $url = 'https://api.hubapi.com/crm/v3/objects/contacts';

    $data = [
        'properties' => [
            'email' => $email,
            'firstname' => $first_name,
            'lastname' => $last_name,
        ]
    ];

    $response = wp_remote_post($url, [
        'headers' => [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $token,
        ],
        'body' => json_encode($data),
        'timeout' => 15,
    ]);

    if (is_wp_error($response)) {
        error_log('HubSpot API error: ' . $response->get_error_message());
        return false;
    }

    $code = wp_remote_retrieve_response_code($response);
    if ($code !== 201) {
        $body = wp_remote_retrieve_body($response);
        error_log('HubSpot API response error: ' . $body);
        return false;
    }

    return true;
}


function log_message($email, $subject, $message) {
    $log = plugin_dir_path(__FILE__) . 'messages.log';
    file_put_contents($log, "[$email] $subject - $message\n", FILE_APPEND);
}

$name = sanitize_text_field($_POST['name']);
$email = sanitize_email($_POST['email']);

if (!is_valid_email($email)) {
    echo '<p style="color:red">Invalid email address.</p>';
} else {
    $name_parts = explode(' ', $name, 2);
    $first_name = $name_parts[0];
    $last_name = isset($name_parts[1]) ? $name_parts[1] : '';

    send_mail_notification($email, 'New Contact Form Submission', "Name: $name\nEmail: $email");
    create_hubspot_contact($email, $first_name, $last_name);
    log_message($email, 'New Contact Form Submission', "Name: $name\nEmail: $email");
    echo '<p style="color:green">Message sent successfully.</p>';
}
