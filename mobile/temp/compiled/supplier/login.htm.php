<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_var['lang']['cp_home']; ?><?php if ($this->_var['ur_here']): ?> - <?php echo $this->_var['ur_here']; ?><?php endif; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<link href="styles/main.css" rel="stylesheet" type="text/css" />


<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>
<script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
<?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

if (window.parent != window)
{
  window.top.location.href = location.href;
}

//-->
</script>
</head>
<body style="background:url(images/login_bg.png) repeat-x;padding:0px;">
<div style="width:1210px;height:768px;margin:0 auto;background:url(images/login_dl.jpg) no-repeat; " >
<form method="post" action="privilege.php" name='theForm' onsubmit="return validate()">
  <table cellspacing="0" cellpadding="0" style=" padding-top:295px; " align="center" class="login_dl">
  <tr>
<td class="dl">
      <table cellspacing="0" cellpadding="0" width="100%">
      <tr>
        <td class="dl_1" width="22%"><?php echo $this->_var['lang']['label_username']; ?></td>
        <td><input type="text" name="username" class="text_input1"/></td>
      </tr>
      <tr>
        <td class="dl_2"><?php echo $this->_var['lang']['label_password']; ?></td>
        <td><input type="password" name="password"  class="text_input1"/></td>
      </tr>
      <?php if ($this->_var['gd_version'] > 0): ?>
      <tr>
        <td class="dl_1"><?php echo $this->_var['lang']['label_captcha']; ?></td>
        <td><input type="text" name="captcha" class="capital text_input1" style="width:70px; margin-right:5px; float:left; "/><img src="index.php?act=captcha&<?php echo $this->_var['random']; ?>" width="126" height="36" alt="CAPTCHA" border="0" onclick= this.src="index.php?act=captcha&"+Math.random() style="cursor: pointer; float:left " title="<?php echo $this->_var['lang']['click_for_another']; ?>" /></td>
      </tr>
      
      <?php endif; ?>
     <tr class="low_height">
        <td>&nbsp;</td>
        <td><input type="checkbox" value="1" name="remember" id="remember" /><label for="remember" ><?php echo $this->_var['lang']['remember']; ?></label></td></tr>
      <tr>
      	<td colspan="2" align="center"><input type="submit" value="登&nbsp;录" class="button2" /></td>
      </tr>
      <tr class="low_height1">
        <td colspan="2" align="right">&raquo; <a href="get_password.php?act=forget_pwd"><?php echo $this->_var['lang']['forget_pwd']; ?></a></td>
      </tr>
      </table>
    </td>
  </tr>
  </table>
  <input type="hidden" name="act" value="signin" />
</form>
</div>
<script language="JavaScript">
<!--
  document.forms['theForm'].elements['username'].focus();
  
  /**
   * 检查表单输入的内容
   */
  function validate()
  {
    var validator = new Validator('theForm');
    validator.required('username', user_name_empty);
    //validator.required('password', password_empty);
    if (document.forms['theForm'].elements['captcha'])
    {
      validator.required('captcha', captcha_empty);
    }
    return validator.passed();
  }
  
//-->
</script>
</body>