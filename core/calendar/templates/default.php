<?php javaScript() ?>

<div class="calendar-container">
		<?php //echo $scrollarrows ?>
		<div class="date-header"><?php echo $lang['months'][$m-1]; ?>&nbsp;<?php echo $y; ?></div>

	<div class="calendar-form-holder">
		<form name="monthYear">
			<?php monthPullDown($m, $lang['months']); yearPullDown($y); ?>
			<input class="calendarbutton" type="button" value="Kiválasztás" onClick="submitMonthYear()">
		</form>
	</div>



	<?php echo writeCalendar($m, $y); ?>
</div>
