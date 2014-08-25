
	<?php 

	javaScript() ?>


<table cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
	<td>
		<?php echo $scrollarrows ?>
		<span class="date_header">
		&nbsp;<?php echo $lang['months'][$m-1] ?>&nbsp;<?php echo $y ?></span>
	</td>

	<!-- form tags must be outside of <td> tags -->
	<form name="monthYear">
	<td align="right">
	<?php monthPullDown($m, $lang['months']); yearPullDown($y); ?>
	<input type="button" value="Kiválasztás" onClick="submitMonthYear()">
	</td>
	</form>

</tr>

<tr>
	<td colspan="2" bgcolor="#000000">
	<?php echo writeCalendar($m, $y); ?></td>
</tr>

</table>
