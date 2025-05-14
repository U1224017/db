<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>我的課程表</title>
    <style>
        body {
            font-family: "微軟正黑體", sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .info {
            font-weight: bold;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
            background-color: #ffffff;
        }
        th, td {
            border: 1px solid #333;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #cccccc;
        }
    </style>
</head>
<body>

<div class="info">
    <?php
        echo "****************<br/>";
        echo "* 日期: " . date("Y-m-d H:i:s") . " *<br/>";
        echo "* 姓名: 陳旭承 *<br/>";
        echo "* 班級: 資工二甲 *<br/>";
        echo "* 學號: U1224017 *<br/>";
        echo "****************<br/>";
    ?>
</div>
<div style="margin: 20px auto; text-align: center; font-size: 18px; font-weight: bold;">
    就讀系所：<span style="color: #0066cc;">國立聯合大學 資工系</span><br/>
    <a href="https://csie.nuu.edu.tw/" target="_blank" style="display: inline-block; margin-top: 8px; padding: 8px 16px; background-color: #0066cc; color: #fff; text-decoration: none; border-radius: 6px; transition: background-color 0.3s;">
        🔗 點我前往系所網站
    </a>
</div>


<h2 style="text-align:center;">我的課程表</h2>

<table>
    <tr>
        <th>節次＼星期</th>
        <th>一</th>
        <th>二</th>
        <th>三</th>
        <th>四</th>
        <th>五</th>
    </tr>
    <tr>
        <td>第1節</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
        <td>--</td>
    </tr>
    <tr>
        <td>第2節</td>
        <td>組合語言</td>
        <td>計算機系統實驗</td>
        <td>資料庫管理系統實務</td>
        <td>計算機網路</td>
        <td>--</td>
    </tr>
    <tr>
        <td>第3節</td>
        <td>組合語言</td>
        <td>計算機系統實驗</td>
        <td>資料庫管理系統實務</td>
        <td>計算機網路</td>
        <td>--</td>
    </tr>
    <tr>
        <td>第4節</td>
        <td>組合語言</td>
        <td>計算機系統實驗</td>
        <td>資料庫管理系統實務</td>
        <td>計算機網路</td>
        <td>--</td>
    </tr>
	<tr>
    	<td colspan="6" style="background-color:#fffae6; font-weight:bold;">午休時間</td>
	</tr>
	<tr>
        <td>第5節</td>
        <td>工程倫理</td>
        <td>數位人文-德古拉</td>
        <td>--</td>
        <td>民主與法治</td>
        <td>--</td>
    </tr>
	<tr>
        <td>第6節</td>
        <td>工程倫理</td>
        <td>數位人文-德古拉</td>
        <td>--</td>
        <td>民主與法治</td>
        <td>--</td>
    </tr>
	<tr>
        <td>第7節</td>
        <td>桌球</td>
        <td>專題討論</td>
        <td>網站後端程式設計</td>
        <td>Python資料科學應用實務</td>
        <td>--</td>
    </tr>
	<tr>
        <td>第8節</td>
        <td>桌球</td>
        <td>專題討論</td>
        <td>網站後端程式設計</td>
        <td>Python資料科學應用實務</td>
        <td>--</td>
    </tr>
	<tr>
        <td>第9節</td>
        <td>--</td>
        <td>--</td>
        <td>網站後端程式設計</td>
        <td>Python資料科學應用實務</td>
        <td>--</td>
    </tr>
</table>
<style>
    .logo-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-top: 40px;
        flex-wrap: wrap;
    }

    .logo-card {
        width: 140px;
        padding: 15px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
        text-decoration: none;
        color: #000;
    }

    .logo-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .logo-card img {
        width: 100px;
        height: auto;
        margin-bottom: 10px;
    }

    .logo-card span {
        display: block;
        font-size: 16px;
        font-weight: bold;
    }
</style>

<div class="logo-container">
    <a href="https://www.mysql.com/" target="_blank" class="logo-card">
        <img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" alt="MySQL">
        <span>MySQL</span>
    </a>
    <a href="https://chat.openai.com/" target="_blank" class="logo-card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/ChatGPT_logo.svg" alt="ChatGPT">
        <span>ChatGPT</span>
    </a>
    <a href="https://www.php.net/" target="_blank" class="logo-card">
        <img src="https://www.php.net/images/logos/php-logo.svg" alt="PHP">
        <span>PHP</span>
    </a>
</div>


</body>
</html>
