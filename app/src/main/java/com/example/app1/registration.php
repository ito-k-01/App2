<!-- 担当者登録ページ -->
<!doctype html>
<html lang="ja">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
    <script type="text/javascript" src="tab.js"></script>
	<title>担当者通知システム</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="wrapper">
		<div id="header"><span>担当者登録ページ</span></div>
		<div id="main">
            <div id="tab">
                <!-- 登録週番 -->
                <label id="change_box_syuuban">
                    <input type="radio" name="tab" id="tab1" checked>
                    <em>週番</em>
                </label>
                    <div id="box">
						<div class="text1">
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
                            <select name="week">
                                <option value="1週目" selected>1週目</option>
                                <option value="2週目">2週目</option>
                                <option value="3週目">3週目</option>
                                <option value="4週目">4週目</option>
                                <option value="5週目">5週目</option>
                            </select><br><br>
                            </form>
                            <span>1週当たりの人数</span>
                            <input type="text" name="number1" style="width: 40px;"></p>
                            <span>最初の出席番号</span>
                            <input type="text" name="number2" style="width: 40px;"></p>
                            <input type="button" id="rogin_button" value="次へ">
                        </div>
                    </div>
                <!-- 登録掃除当番 -->
                <label id="change_box_soujitouban">
                    <input type="radio" name="tab" id="tab2">
                    <em>掃除当番</em>
                </label>
                    <div id="box">
						<div class="text2">
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
                            <select name="week">
                                <option value="1週目" selected>1週目</option>
                                <option value="2週目">2週目</option>
                                <option value="3週目">3週目</option>
                                <option value="4週目">4週目</option>
                                <option value="5週目">5週目</option>
                            </select><br><br>
                            </form>
                            <span>1週当たりの人数</span>
                            <input type="text" name="number1" style="width: 40px;"></p>
                            <span>最初の出席番号</span>
                            <input type="text" name="number2" style="width: 40px;"></p>
                            <input type="button" id="rogin_button" value="次へ">
                        </div>
                    </div>
            </div>
        </div>
		<div id="footer"><span>フッター</span></div>
	</div>
</body>
</html>
