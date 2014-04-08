<?php
/*
 *  WordPress include
 */

define('WP_USE_THEMES', false);
require_once( reset( explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] ) ) . 'wp-load.php' );

/***********************/
/*   Form processing   */
if ( ! $_POST || $_POST['address'] != 'abbey road 11' || ! empty( $_POST['phone'] ) ) die(':(');

if ( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && ! empty( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ) == 'xmlhttprequest' ) {
	$is_ajax = true;
}

$response = ( isset( $is_ajax ) ? 0 : __('Please, fill all required fields correctly.', 'haku') );

$form_contents = $_POST;
$form_contents_name = trim( strip_tags( $form_contents['name'] ) );
$form_contents_email = trim( strip_tags( $form_contents['email'] ) );
$form_contents_subject = trim( strip_tags( $form_contents['subject'] ) );
$form_contents_message = trim( strip_tags( $form_contents['message'] ) );

if ( ! $form_contents_name || ! is_email( $form_contents_email ) || ! $form_contents_message ) {
	die( $response );
}

/*********************/
/*   Email content   */
$email_content = __("This email was sent through your website's contact form. You can reply to this email.", 'haku');
$email_content .= "\n";
$email_content .= '- - - - - - - - - - - - - -';
$email_content .= "\n\n";
$email_content .= __('Sent by:', 'haku') . ' &NAME ( &EMAIL )';

if ( $form_contents_subject ) {
	$email_content .= "\n\n";
	$email_content .= __('Subject:', 'haku');
	$email_content .= "\n\n";
	$email_content .= '&SUBJECT';
}

$email_content .= "\n\n";
$email_content .= '- - - - - - - - - - - - - -';
$email_content .= "\n\n";
$email_content .= __('Message content:', 'haku');
$email_content .= "\n\n";
$email_content .= '&MESSAGE';

$email_content = str_replace('&NAME', $form_contents_name, $email_content);
$email_content = str_replace('&EMAIL', $form_contents_email, $email_content);
$email_content = str_replace('&SUBJECT', $form_contents_subject, $email_content);
$email_content = str_replace('&MESSAGE', $form_contents_message, $email_content);

/***************/
/*   Options   */
$send_to = ( get_theme_option('contact_form_sendto') ? get_theme_option('contact_form_sendto') : get_option('admin_email') );
$sender = ( get_theme_option('contact_form_sender') ? get_theme_option('contact_form_sender') : $form_contents_name );

/********************/
/*   Mail subject   */
$subject = get_bloginfo('name') . ' // ';
$subject .= __('Message from:', 'haku') . ' ' . $form_contents_email;

if ( $form_contents_subject ) {
	$subject .= ' // ' . __('Subject:', 'haku') . ' ' . haku_shorten( $form_contents_subject, 5, '...' );
}

/***************/
/*   Sending   */
$headers = "From: '" . esc_attr( $sender ) . "' <" . $form_contents_email . ">\r\n";

$headers .= "Reply-To: ". $form_contents_email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if ( wp_mail( $send_to, $subject, $email_content, $headers ) ) {
	$response = ( isset( $is_ajax ) ? '1' : __('Message sent! Thank you!', 'haku') );
}

die( $response );

?>