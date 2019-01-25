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
        <h4>帳號:<input type="text" id='account'></h4>
        <h4>密碼:<input type="text" id='password'></h4>
        <button id='search'>登入</button>

    </body>
</html>
<script>
var base_url = "<?php echo $_SERVER['SERVER_ADDR']; ?>";
</script>
