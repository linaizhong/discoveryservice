<?php // Copyright (c) 2012, SWITCH - Serving Swiss Universities ?>

<!-- Identity Provider Selection: Start -->
<h1><?php echo getLocalString('permanent_select_header'); ?></h1> 
<form id="IdPList" name="IdPList" method="post" onSubmit="return checkForm()" action="<?php echo $actionURL ?>">
	<div id="userInputArea">
		<p class="promptMessage"><?php echo getLocalString('permanently_remember_selection') ?></p>
		<div align="center">
			<select name="user_idp" id="userIdPSelection"> 
				<option value="-" <?php echo $defaultSelected ?>><?php echo getLocalString('select_idp') ?> ...</option>
			<?php printDropDownList($IDProviders, $selectedIDP) ?>
			</select>
			<input type="submit" name="Select" accesskey="s" value="<?php echo getLocalString('save_button') ?>" >
		</div>
		<!-- Value permanent must be a number which is equivalent to the days the cookie shall be valid -->
		<input name="permanent" type="hidden" value="100">
	</div>
</form>

<?php echo getLocalString('additional_info') ?>
<!-- Identity Provider Selection: End -->
