<!-- カレンダーページ -->
<!doctype html>
<html lang="ja">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
	<title>担当者通知システム</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="wrapper">
		<div id="header"><span>カレンダーページ</span></div>
		<div id="main">
			<div id="calender_month"><span>x</span></div><br>
			<input type="button" id="next_button" onclick="location.href='./registration.php'" value="登録ページ">
			<input type="button" id="next_button" onclick="location.href='./change.php'" value="変更ページ">
			<form>
                <select name="month">
                    <option value="4月" selected>4月</option>
                    <option value="5月">5月</option>
                    <option value="6月">6月</option>
                    <option value="7月">7月</option>
                    <option value="8月">8月</option>
                    <option value="9月">9月</option>
                    <option value="10月">10月</option>
                    <option value="11月">11月</option>
                    <option value="12月">12月</option>
                    <option value="1月">1月</option>
                    <option value="2月">2月</option>
                    <option value="3月">3月</option>
                </select>
			</form>
			<input type="button" id="next_button" value="移動">
		</div>
		<div id="footer"><span>フッター</span></div>
	</div>
</body>
</html>
