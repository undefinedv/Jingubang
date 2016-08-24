<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('jingubang/login'); ?>
<h5>带*为必填</h5>
<div style="width:500px;"><label style="width:50px;text-align:right;" for="username">*用户名</label>
    <input type="input" name="username" maxlength="20" style="width:150px;" placeholder="不超过20位"/>
</div>
<div style="width:500px;"><label style="width:50px;text-align:right;" for="password">*密 码</label>
    <input type="password" name="password" maxlength="32" style="width:150px;"/><br/>
</div>
<div style="width:500px;">
    <input style="btn btn-outline-inverse btn-lg" type="submit" name="submit" value="登陆"/>
    <br/>
</div>
</form>