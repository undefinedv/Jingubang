<h2><?php echo $title; ?></h2>
<h5>请不要忽略http/https</h5>
</div>
<div style="width:500px;"><label style="width:50px;text-align:right;" for="url">URL</label>
    <input type="text" name="url" id="sqlurl" style="width:150px;"/><br/>
</div>
<div style="width:500px;">
    <input type="submit" name="submit" id="subbtn" value="开始检测"/>
    <br/>
    <div><input type="button" class="addhobbytip" value="增加喜好">
        <input type="button" class="addhobby" onclick="addhobby()"></div>
    <br/>
    <?php foreach ($hobbys as $hobby): ?>
        <label><input name="hobby" type="radio" value="" onclick=usehobby("<?php echo $hobby['name']; ?>")><?php echo $hobby['name']; ?> </label>
        <input type="hidden" id="hobby-<?php echo $hobby['name'];?>" value='<?php echo $hobby['json']; ?>'>
        <a href="javascript:;" onclick=delhobby('<?php echo $hobby["name"];?>')>删除</a>
    <?php endforeach; ?>
    <label><input name="hobby" type="radio" value="" onclick="inithobby()"/> 空 </label>
</div>
</form>
<script>
    $(document).ready(function () {
        $("#subbtn").click(function () {
            optionArr = sql();
            var sqlurl = $("#sqlurl").val();
            var url = "<?php echo site_url('jingubang/sql')?>";
            $.ajax({
                type: "POST",
                url: url,
                data: {"url": sqlurl, "parameters": optionArr},
                dataType: "text",
                async: true,
                success: function (msg) {

                },
                error: function () {

                }
            });
        });
    });
</script>