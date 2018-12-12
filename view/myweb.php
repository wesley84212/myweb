<html>
    <head>
    <?php $this->load_api('jquery', '3.1.1')?>
    <?php $this->load_js('myweb')?>
    </head>
    <body>
        <h1>以原生PHP來建立MVC</h1>
        <hr/>
        <h2>資料庫資料讀取</h2>
        <hr/>
        <h4>姓名：<?=$data['name'];?></h4>
        <h4>Email：<?=$data['mail'];?></h4>
        <button id='search'>查詢</button>
    </body>
</html>
<script>
var base_url = "<?php echo $_SERVER['SERVER_ADDR']; ?>";
</script>
