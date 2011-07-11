<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ajax2级联动</title><!--
大幅大放送打发发  多发地事发时大法师  多发地事发时多发地发 
--></head>
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.6.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $('#game').change(function(){
	   $.getJSON("__URL__/checked",{gameid:$("#game").val()},function(json)
				  {
		            var str="";
		           
		            for(var item in json.data)
		            {
		            str += "<option value=\""+ json.data[item] +"\" >"+ json.data[item] +"</option>";
		            }
		            jQuery("#ser").html(str);
				  })
	   
   });
  
  });
</script>
<body>
<select id='game'>
<option selected="selected" value=0>请选择</option>
<?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): ++$i;$mod = ($i % 2 )?><option value=<?php echo ($data["id"]); ?>><?php echo ($data["alias"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
<select id='ser'>
<option selected="selected">请选择</option>
</select>

</body>
</html>