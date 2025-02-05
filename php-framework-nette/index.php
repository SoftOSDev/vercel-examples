<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8; X-Wap-Proxy-Cookie=none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>聊天</title>
    <link type="text/css" href="chat.css?v=1.2" rel="stylesheet" />
</head>
<body>
<div class="top"><span class="name">HUA丨多人在线聊天</span></div>
<?php
require_once 'app.php';
if(empty(@$_COOKIE[KEYS.'_name'])){
	echo '<div class="write login">                
                <input type="text" value="'.rand_nick().'" id="nick" maxlength="5" placeholder="请随便输入昵称.." />                
                <a href="javascript:;" id="login" class="write-link send">进入</a>
</div>';	      
} 
echo '<div class="talk mk-chat-box">     
</div>
<div class="talk write">                
                <input type="text" id="msg" maxlength="140" placeholder="聊点什么吧..." />                
                <a href="javascript:;" id="send" class="write-link send" onclick="send()">发送</a>
</div>'; 
?>
<script src="jquery.min.js"></script>
<script src="chat.min.js"></script>
</body>
</html>
