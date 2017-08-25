<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model {
  //自动验证
  protected $_validate = array(
    //array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
    array('username','1,20','昵称不能为空,字数大于0或小于20个字符！',3,'length'),
    array('qq','6,16','qq不能为空,字数大于6或小于16个字符！',3,'length'),
    array('verify','require','验证码必须！'),
    array('content','1,180','内容不能为空,字数大于0或小于180个字符！',3,'length'),
);
  //自动添加
  protected $_auto = array (
    array('pubtime','time',3,'function'), // 对update_time字段在更新的时候写入当前时间戳
);
}
 ?>
 <meta charset="utf-8">
