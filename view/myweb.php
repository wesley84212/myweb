<html>
    <head>
    <?php
$this->load_api('jquery', '3.1.1');
$this->load_js('myweb');
?>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    </head>
    <body>
        <h1>以原生PHP來建立MVC</h1>
        <hr/>
        <h2>資料庫資料讀取</h2>
        <hr/>
        <h4>姓名：<?=$data['name'];?></h4>
        <h4>Email：<?=$data['mail'];?></h4>
        <button id='search'>查詢</button>
        <div id="myDiv"></div>
        <div id="myDiv_2"></div>
    </body>
</html>
<script>
var base_url = "<?php echo $_SERVER['SERVER_ADDR']; ?>";
</script>
