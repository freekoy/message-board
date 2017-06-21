<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/message-board/Public/Home/css/index.css">
    <title>留言板</title>
  </head>
  <body>
      <div>
        <div id="mian">
          <h1>留言板</h1>
          <?php if(is_array($list)): foreach($list as $key=>$message): ?><div >
            <span><?php echo ($message["username"]); ?> &nbsp&nbsp&nbsp <?php echo (date("Y-m-d",$message['pubtime'])); ?></span>
            <p>
              <?php echo ($message["content"]); ?>
            </p>
          </div><?php endforeach; endif; ?>
        </div>
        <span style="text-align:center"><?php echo ($page); ?></span>
        <div id="mian">
        <div id="respond" class="comment-respond">
          <h3>欢迎留言</h3>
          <form class="" action="" method="post">
            <p>昵称:<input type="text" name="username" value=""></p>
            <p>QQ:<input type="text" name="qq" value=""></p>
            <p>验证码:<input type="text" name="verify" value=""><img src="<?php echo U('/Home/Index/vcode');?>" style="vertical-align:middle" /></p>
            <p><textarea name="content" rows="8" cols="52"></textarea></p>
            <p><input type="submit"   value="提交"></p>
          </form>
        </div>
        </div>
    </div>
  </body>
</html>