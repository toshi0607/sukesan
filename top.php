<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
	<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
</head>


<body>

	<h1>
		<p><img src="logo.png"></p>
	</h1>
		飲み会予約、もう困らない！


	<form id="condition" action="cgi-bin/abc.cgi" method="post">
		<p><label>メールアドレス：<input type="email" name="email" size="30" maxlength="40" required></label></p>

		<p><label>予約日：<input type="text" id="datepicker" required></label></p>
	<script type="text/javascript">
		$(function(){
			$("#datepicker").datepicker();
		});
	</script>

<select name="hour">
	<?php
		for($i = 0; $i<= 23; $i++):?>
			<option value="<?php echo $i;?>"><?php echo $i;?></option>
	<?php endfor;?>
</select>
時

<select name="minute">
	<?php
		for($i = 1; $i<=59; $i++):?>
			<option value="<?php echo $i;?>"><?php echo $i;?></option>
	<?php endfor;?>
</select>
分〜



	<p><label>場所：<input type="text" name="location" placeholder="例：東京駅" required></label></p>

<p>
	<label>条件：</label><br>
		<textarea id="condition" name="condition" cols="40" rows="4" maxlength="20" placeholder="例：個室5人　中華　5000円以内　駅近　日本酒　飲み放題" require></textarea>
</p>

	<p><input type="submit" value="Go!!!!!!"></p>


	</form>

</body>

</html>