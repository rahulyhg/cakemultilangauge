<?php
  /**
   * Script: var/lib/reports/templates/framework.php
   * Author: Andy Gray
   *
   * Description
   * Common framework for report ordering pages
   *
   * Required definitions
   * - PORTAL
   * - PRODUCT
   * - LANGUAGE
   */

/* main template */
$page = file_get_contents( 'templates/'.PRODUCTFILE.'.html');

/* header */
$header = file_get_contents( 'templates/header.html');
$page = str_replace
  ('<!--HEADER-->', 
   $header, 
   $page);

/* left column */
$left_column = file_get_contents( 'templates/left_column.html');
$page = str_replace
  ('<!--LEFTCOLUMN-->', 
   $left_column, 
   $page);

/* order form */
$order_context = file_get_contents( 'templates/orderform.html');
$page = str_replace
  ('<!--ORDERFORM-->', 
   $order_context, 
   $page);

/* API ID */
$page = str_replace
  ('<!--APIID-->',
   md5(PORTAL),
   $page);

/* product type */
$page = str_replace
  ('<!--PRODUCTTYPE-->',
   PRODUCT,
   $page);

/* language */
$page = str_replace
  ('<!--LANGUAGE-->',
   LANGUAGE,
   $page);

/* mask email for printed reports */
if( isset( $mask_email ) && $mask_email === true ) {
  /* hide the delivery options */
  /* email address refers to the customer */
  $page = str_replace
    ('<!--DELIVERYEMAILADDRESSLABEL-->',
     'Your Email Address',
     $page);
  $page = str_replace
    ('<!--DELIVERYMETHOD-->',
     '<input type="hidden" name="delivery" value="2" />',
     $page);
 } else {
  $page = str_replace
    ('<!--DELIVERYEMAILADDRESSLABEL-->',
     'Delivery Email Address',
     $page);
  $page = str_replace
    ('<!--DELIVERYMETHOD-->',
     '<tr>'.
     '<td><label for="delivery"><strong>Delivery Method:</strong></label></td>'.
     '<td><input type="radio" name="delivery" class="rb" value="1" checked="checked" onClick="javascript:setDeliveryEmail();">Email attachment (PDF)</td>'.
     '</tr>'.
     '<tr>'.
     '<td>&nbsp;</td>'.
     '<td><input type="radio" name="delivery" class="rb" value="2" onClick="javascript:setDeliveryPrintedCopy();">Printed (by post)</td>'.
     '</tr>',
     $page);
 }

/*
 * day options
 */
for( $dayoptions='', $day = 0; $day < 31; $day++ ) {
  $dayoptions .= '<option value="'. ($day+1).'">'.($day+1).'</option>';
 }
$page = str_replace
  ('<!--LABEL_DAY_OPTIONS-->',
   $dayoptions,
   $page);

/*
 * month options
 */
$months = array( 'January','February','March','April','May','June','July','August','September','October','November','December');
for( $monthoptions='', $month = 0; $month < 12; $month++ ) {
  $monthoptions .= '<option value="'. ($month+1).'">'.$months[$month].'</option>';
 }
$page = str_replace
  ('<!--LABEL_MONTH_OPTIONS-->',
   $monthoptions,
   $page);

/*
 * year options
 */
for( $yearoptionss='', $year = 2010; $year >= 1900; $year-- ) {
  $yearoptions .= '<option value="'. ($year).'">'.($year).'</option>';
 }
$page = str_replace
  ('<!--LABEL_YEAR_OPTIONS-->',
   $yearoptions,
   $page);

/*
 * hour options
 */
for( $houroptions='', $hour = 0; $hour < 24; $hour++ ) {
  $hourstr = sprintf("%02d %s.m. (%02d.00)", 
		     (($hour == 12) ? 12 : ($hour % 12)), 
		     (($hour < 12) ? 'a' : 'p' ),
		     $hour);
  $houroptions .= '<option value="'. ($hour).'">'.($hourstr).'</option>';
 }
$page = str_replace
  ('<!--LABEL_HOUR_OPTIONS-->',
   $houroptions,
   $page);

/*
 * minute options
 */
for( $minuteoptions='', $minute = 0; $minute < 60; $minute++ ) {
  $minuteoptions .= '<option value="'. ($minute).'">'.($minute).'</option>';
 }
$page = str_replace
  ('<!--LABEL_MINUTE_OPTIONS-->',
   $minuteoptions,
   $page);

/*
 * current location
 * used for Rob Hand Calendar only
 * TODO use country list again
 * TODO use place autocomplete again
 */
if( isset( $show_current_location ) && $show_current_location === true ) {
  $page = str_replace
    ('<!--LABEL_CURRENT_LOCATION-->',
     '<tr>'.
     '<td><label for="currentlocation"><strong>Current Location:</strong></label></td>'.
     '<td>'.
     '<input id="frmHIOrderCurrentLocation" type="text" name="currentlocation" maxlength="48" />'.
     '</td>'.
     '</tr>',
     $page);
 } else {
  /* lose the comment */
  $page = str_replace
    ('<!--LABEL_CURRENT_LOCATION-->',
     '',
     $page);
 }

/*
 * links
 */
$links = file_get_contents( 'templates/links.html');
$page = str_replace
  ('<!--LINKS-->', 
   $links, 
   $page);

/*
 * tracking
 * tracking script
 */
$tracking = file_get_contents( 'templates/tracking.html');
$page = str_replace
  ('<!--TRACKING-->', 
   $tracking, 
   $page);

/*
 * scripts
 * javascript inlcudes at the foot of the document
 */
$scripts = file_get_contents( 'templates/scripts.html');
$page = str_replace
  ('<!--SCRIPTS-->', 
   $scripts, 
   $page);

/*
 * remove emacs hints
 * emacs hints serve to set the page formatting to HTML
 */
$page = str_replace
  ('<!-- -*- mode: html; -*- -->',
   '',
   $page);

file_put_contents('./build/'.PRODUCTFILE.'.html',$page);
?>
