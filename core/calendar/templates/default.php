<?php javaScript() ?>

<div class="calendar-container">
		<?php //echo $scrollarrows ?>
		<div class="date-header"><?php echo $y; ?>&nbsp;<?php echo $lang['months'][$m-1]; ?></div>

	<div class="calendar-form-holder">
		<form name="monthYear">
			<?php yearPullDown($y); monthPullDown($m, $lang['months']); ?>
			<input class="blue btn timeselectfix" type="button" value="Kiválasztás" onClick="submitMonthYear()">
		</form>
	</div>



	<?php echo writeCalendar($m, $y); ?>
</div>
