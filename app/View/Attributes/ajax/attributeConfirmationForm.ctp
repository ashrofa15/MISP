<div class="confirmation">
<?php
	echo $this->Form->create('Attribute', array('style' => 'margin:0px;', 'id' => 'PromptForm'));
	if ($hard) $hard = '/true';
?>
<legend><?php echo __('Attribute Deletion'); ?></legend>
<div style="padding-left:5px;padding-right:5px;padding-bottom:5px;">
<p><?php echo __('Are you sure you want to'); if ($hard) echo 'hard-'; echo __('delete Attribute #'); echo $id . '?'; if ($hard) echo __(' The Attribute will be permanently deleted and unrecoverable. Also, this will prevent the deletion to be propagated to other instances.'); ?></p>
	<table>
		<tr>
			<td style="vertical-align:top">
				<span id="PromptYesButton" title="<?php echo __('Delete'); ?>" role="button" tabindex="0" aria-label="<?php echo __('Delete'); ?>" class="btn btn-primary" onClick="submitDeletion(<?php echo $event_id; ?>, 'delete', 'attributes', '<?php echo $id . $hard;?>')"><?php echo __('Yes'); ?></span>
			</td>
			<td style="width:540px;">
			</td>
			<td style="vertical-align:top;">
				<span class="btn btn-inverse" title="<?php echo __('No'); ?>" role="button" tabindex="0" aria-label="<?php echo __('No'); ?>" id="PromptNoButton" onClick="cancelPrompt();"><?php echo __('No'); ?></span>
			</td>
		</tr>
	</table>
</div>
<?php
	echo $this->Form->end();
?>
</div>
