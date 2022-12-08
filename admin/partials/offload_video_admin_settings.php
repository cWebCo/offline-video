<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://webgarh.com/
 * @since      1.0.0
 *
 * @package    Video_Uploader_For_Tutorlms
 * @subpackage Video_Uploader_For_Tutorlms/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="tab bsacft-tabs">
  <button class="tablinks active" onclick="openTab(event, 'bunny_settings')"><?php esc_html_e( 'Services', '-text' );?></button>
  <button class="tablinks" onclick="openTab(event, 'bsacft_about')"><?php esc_html_e( 'About', 'bsacft-text' );?></button>

</div>
<div id="bunny_settings" class="tabcontent">
<?php
$BUNNY_ACCESS_KEY = get_option('BUNNY_ACCESS_KEY');
$BUNNY_LIBRARY_ID = get_option('BUNNY_LIBRARY_ID');
$BUNNY_FILE_UPLOAD_LIMIT = get_option('BUNNY_FILE_UPLOAD_LIMIT');
$amazon_s3_bucket = get_option('amazon_s3_bucket');
$amazon_s3_key = get_option('amazon_s3_key');
$amazon_s3_secret = get_option('amazon_s3_secret');
$amazon_s3_region = get_option('amazon_s3_region');
$AMAZON_FILE_UPLOAD_LIMIT = get_option('AMAZON_FILE_UPLOAD_LIMIT');
$streaming_connect_service = get_option('streaming_connect_service');
?>
<div class="bsacft_key_form_div">
	<form action="" method="post" id="bsacft_key_form">
	<table class="form-table">
	        <tbody>
				<tr valign="top" class="">
					<th scope="row" class="titledesc"> <?php echo __( 'Service', 'bsacft-text' ); ?></th>
					<td class="forminp forminp-text">
						<select name="streaming_connect_service" id="streaming_connect_service">
							<option value="bunny" <?php if($streaming_connect_service=='bunny') echo 'selected'; ?>>Bunny.net</option>
							<option value="amazon" <?php if($streaming_connect_service=='amazon') echo 'selected'; ?>>Amazon S3</option>
						</select> 	
					</td>
				</tr>
			</tbody>
	</table>
	<div class="bunny_settings_div settings_div" <?php if($streaming_connect_service=='amazon') echo 'style="display:none;"'; else echo 'style="display:block;"'; ?>>
	<h3><?php echo __( 'Bunny.net Settings', 'bsacft-text' ); ?></h3>
	<p><?php echo __('You can find it on:', 'bsacft-text');?>  <a href="https://panel.bunny.net/stream/library/manage/60451#config-content-api" target="_blank">https://panel.bunny.net/stream/library/manage</a></p>
		<table class="form-table">
	        <tbody>
				<tr valign="top" class="">
					<th scope="row" class="titledesc"><?php echo __( 'Bunny Access Key', 'bsacft-text' ); ?></th>
					<td class="forminp forminp-text">
						<input type="text" title="BUNNY_ACCESS_KEY" name="BUNNY_ACCESS_KEY" id="BUNNY_ACCESS_KEY" value="<?php if($BUNNY_ACCESS_KEY) echo $BUNNY_ACCESS_KEY; ?>" placeholder="<?php echo __( 'Enter API Access Key', 'bsacft-text' ); ?>"> 	
					</td>
				</tr>
				<tr valign="top" class="">
					<th scope="row" class="titledesc"><?php echo __( 'Bunny Library ID', 'bsacft-text' ); ?> </th>
					<td class="forminp forminp-text">
						<input type="text" title="BUNNY_LIBRARY_ID" name="BUNNY_LIBRARY_ID" id="BUNNY_LIBRARY_ID" value="<?php if($BUNNY_LIBRARY_ID) echo $BUNNY_LIBRARY_ID; ?>" placeholder="<?php echo __( 'Enter Video library ID', 'bsacft-text' ); ?>"> 	
					</td>
				</tr>
				<tr valign="top" class="">
					<th scope="row" class="titledesc"><?php echo __( 'File Upload Limit', 'bsacft-text' ); ?> </th>
					<td class="forminp forminp-text">
						<input type="text" title="BUNNY_FILE_UPLOAD_LIMIT" name="BUNNY_FILE_UPLOAD_LIMIT" id="BUNNY_FILE_UPLOAD_LIMIT" value="<?php if($BUNNY_FILE_UPLOAD_LIMIT) echo $BUNNY_FILE_UPLOAD_LIMIT; ?>" placeholder="<?php echo __( 'Enter file upload limit in GB', 'bsacft-text' ); ?>"> 	
					</td>
				</tr>
			</tbody>
		</table>
</div>
<div class="amazon_settings_div settings_div" <?php if($streaming_connect_service=='amazon') echo 'style="display:block;"'; else echo 'style="display:none;"'; ?>>
	<h3><?php echo __( 'Amazon Settings', 'bsacft-text' ); ?></h3>
	<p><?php echo __('You can find it on:', 'bsacft-text');?> <a href="https://us-east-1.console.aws.amazon.com/iam/home?region=us-east-1#/security_credentials" target="_blank">https://us-east-1.console.aws.amazon.com/iam/home?region=us-east-1#/security_credentials</a></p>
		<table class="form-table">
	        <tbody>
	        	<tr valign="top" class="">
					<th scope="row" class="titledesc"><?php echo __( 'Amazon S3 Bucket', 'bsacft-text' ); ?></th>
					<td class="forminp forminp-text">
						<input type="text" title="Amazon S3 Bucket" name="amazon_s3_bucket" id="amazon_s3_bucket" value="<?php if($amazon_s3_bucket) echo $amazon_s3_bucket; ?>" placeholder="<?php echo __( 'Enter bucket name', 'bsacft-text' ); ?>"> 	
					</td>
				</tr>
				<tr valign="top" class="">
					<th scope="row" class="titledesc"> <?php echo __( 'Amazon S3 Key', 'bsacft-text' ); ?></th>
					<td class="forminp forminp-text">
						<input type="text" title="Amazon S3 key" name="amazon_s3_key" id="amazon_s3_key" value="<?php if($amazon_s3_key) echo $amazon_s3_key; ?>" placeholder="<?php echo __( 'Enter Key', 'bsacft-text' ); ?>"> 	
					</td>
				</tr>
				<tr valign="top" class="">
					<th scope="row" class="titledesc"><?php echo __( 'Amazon S3 Secret', 'bsacft-text' ); ?></th>
					<td class="forminp forminp-text">
						<input type="text" title="Amazon S3 secret" name="amazon_s3_secret" id="amazon_s3_secret" value="<?php if($amazon_s3_secret) echo $amazon_s3_secret; ?>" placeholder="<?php echo __( 'Enter Secret', 'bsacft-text' ); ?>"> 	
					</td>
				</tr>
				<tr valign="top" class="">
					<th scope="row" class="titledesc"><?php echo __( 'Amazon S3 Region', 'bsacft-text' ); ?></th>
					<td class="forminp forminp-text">
						<input type="text" title="Amazon S3 region" name="amazon_s3_region" id="amazon_s3_region" value="<?php if($amazon_s3_region) echo $amazon_s3_region; ?>" placeholder="<?php echo __( 'Enter Region', 'bsacft-text' ); ?>"> 	
					</td>
				</tr>
				<tr valign="top" class="">
					<th scope="row" class="titledesc"><?php echo __( 'File Upload Limit', 'bsacft-text' ); ?></th>
					<td class="forminp forminp-text">
						<input type="text" title="AMAZON_FILE_UPLOAD_LIMIT" name="AMAZON_FILE_UPLOAD_LIMIT" id="AMAZON_FILE_UPLOAD_LIMIT" value="<?php if($AMAZON_FILE_UPLOAD_LIMIT) echo $AMAZON_FILE_UPLOAD_LIMIT; ?>" placeholder="<?php echo __( 'Enter file upload limit in GB', 'bsacft-text' ); ?>"> 	
					</td>
				</tr>
			</tbody>
		</table>
</div>
<p class="submit"><input type="submit" value="<?php echo __( 'Save changes', 'bsacft-text' ); ?>"></p>
</form>
</div>
</div>

<div id="bsacft_about" class="tabcontent" style="display:none">
<table class="form-table">
<tbody>
<tr>
<th scope="row"><label><?php echo __('Developed By:', 'bsacft-text');?></label></th>
<td>Webgarh Solutions</td>
</tr>
<tr>
<th scope="row"><label><?php echo __('Support Email Address:', 'bsacft-text');?></label></th>
<td><a href="mailto:info@cwebconsultants.com">info@cwebconsultants.com</a></td>
</tr>  
</tbody>
</table>
</div>