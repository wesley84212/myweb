<html>
    <head>
    <?php $this->load_api('jquery', '3.1.1')?>
    </head>
    <body>
        <h1>MVC test web</h1>
        <hr/>
        <h2>userfile</h2>
        <hr/>
        <h4>姓名：<?=$data['name'];?></h4>
        <h4>Email：<?=$data['mail'];?></h4>
        <button id='search'>查詢</button>
    </body>
</html>

<script>
var base_url = "<?php echo $_SERVER['SERVER_ADDR']; ?>";
$('#search').click(function(){
    $.ajax({
        method: 'POST',
        url:'http://'+base_url+'/mvc/get_search',
        dataType:'text',
        data : {type:'get'},
        success : function(data){
            alert(data);
        },
        error : function(){
            alert('error');
        }
    });
});
</script>