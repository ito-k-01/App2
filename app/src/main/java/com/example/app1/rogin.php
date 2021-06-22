<!-- ログインページ -->
<!doctype html>
<html lang="ja">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
	<script type="text/javascript" src="tab.js"></script>
	<title>担当者通知システム</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="wrapper">
		<div id="header"><span>ログインページ</span></div>
		<div id="main">
			<div id="tab">
				<!-- ログイン学生 -->
				<label id="rogin_box_student">
					<input type="radio" name="tab" id="tab1" checked>
					<em>学生</em>
				</label>
				<div id="box">
					<div class="text1">
					<span>学年・クラス</span>
						<select name="grade">
							<option value="1年生" selected>1年生</option>
							<option value="2年生">2年生</option>
							<option value="3年生">3年生</option>
							<option value="4年生">4年生</option>
							<option value="5年生">5年生</option>
						</select>
						<select name="class">
							<option value="CN" selected>CN</option>
							<option value="ES">ES</option>
							<option value="IT">IT</option>
						</select><br>
						<span>出席番号</span>
						<input type="text" name="number" style="width: 140px;"></p>
						<span>パスワード</span>
						<input type="text" name="password" style="width: 140px;"></p>
						<input type="button" id="rogin_button" onclick="location.href='./index_teacher.php'" value="ログイン">
					</div>
				</div>

				<!-- ログイン担任 -->
				<label id="rogin_box_teacher">
					<input type="radio" name="tab" id="tab2">
					<em>担任</em>
				</label>
				<div id="box">
					<div class="text2">
						<span>学年・クラス</span>
						<select name="grade">
							<option value="1年生" selected>1年生</option>
							<option value="2年生">2年生</option>
							<option value="3年生">3年生</option>
							<option value="4年生">4年生</option>
							<option value="5年生">5年生</option>
						</select>
						<select name="class">
							<option value="CN" selected>CN</option>
							<option value="ES">ES</option>
							<option value="IT">IT</option>
						</select><br>
						<span>パスワード</span>
						<input type="text" name="password" style="width: 140px;"></p>
						<input type="button" id="rogin_button" onclick="location.href='./index_teacher.php'" value="ログイン">
					</div>
				</div>
			</div>
		</div>
		<div id="footer"><span>フッター</span></div>
	</div>
</body>
</html>
