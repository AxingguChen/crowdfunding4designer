<html>
<head>
<title>My Form</title>
<script type="text/javascript">
var xmlhttp;
function loadXMLDoc(url)
{
xmlhttp=null;
if (window.XMLHttpRequest)
  {// code for IE7, Firefox, Opera, etc.
  xmlhttp=new XMLHttpRequest();
  }
else if (window.ActiveXObject)
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
if (xmlhttp!=null)
  {
  xmlhttp.onreadystatechange=state_Change;
  xmlhttp.open("GET",url,true);
  xmlhttp.send(null);
  }
else
  {
  alert("Your browser does not support XMLHTTP.");
  }
}

function state_Change()
{
if (xmlhttp.readyState==4)
  {// 4 = "loaded"
  if (xmlhttp.status==200)
    {// 200 = "OK"

    document.getElementById('type_id').innerHTML=xmlhttp.responseText;
    }
  else
    {
    alert("Problem retrieving XML data:" + xmlhttp.statusText);
    }
  }
}

var xmlhttp1;
function loadXMLDoc1(url)
{
xmlhttp1=null;
if (window.XMLHttpRequest)
  {// code for IE7, Firefox, Opera, etc.
  xmlhttp1=new XMLHttpRequest();
  }
else if (window.ActiveXObject)
  {// code for IE6, IE5
  xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
  }
if (xmlhttp1!=null)
  {
  xmlhttp1.onreadystatechange=state_Change1;
  xmlhttp1.open("GET",url,true);
  xmlhttp1.send(null);
  }
else
  {
  alert("Your browser does not support XMLHTTP.");
  }
}

function state_Change1()
{
if (xmlhttp1.readyState==4)
  {// 4 = "loaded"
  if (xmlhttp1.status==200)
    {// 200 = "OK"

    document.getElementById('style_id').innerHTML=xmlhttp1.responseText;
    }
  else
    {
    alert("Problem retrieving XML data:" + xmlhttp1.statusText);
    }
  }
}
</script>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('projects/create'); ?>

<h5>title</h5>
<input type="text" name="title" value="" size="50" />

users_id(from login user)
projectpic(upload, the same to below)

<h5>type</h5>
<script type="text/javascript">
loadXMLDoc("<?php echo base_url();?>"+ "index.php/clothes_type");
loadXMLDoc1("<?php echo base_url();?>"+ "index.php/clothes_style");
</script>
<div id = "type_id">
</div>


<script type="text/javascript">

loadXMLDoc1("<?php echo base_url();?>"+ "index.php/clothes_style");
</script>
<h5>style_id</h5>
<div id = "style_id">
</div>
<h5>description</h5>
<input type="text" name="description" value="<?php echo set_value('description'); ?>" size="50" />


<h5>madeof</h5>
<input type="text" name="madeof" value="<?php echo set_value('madeof'); ?>" size="50" />

<h5>howtowash</h5>
<input type="text" name="howtowash" value="<?php echo set_value('howtowash'); ?>" size="50" />

<h5>whyme</h5>
<input type="text" name="whyme" value="<?php echo set_value('whyme'); ?>" size="50" />

<h5>Email Address</h5>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

technical_drawing

<h5>round</h5>
<input type="text" name="round" value="<?php echo set_value('round'); ?>" size="50" />

<h5>current_sale</h5>
<input type="text" name="current_sale" value="<?php echo set_value('current_sale'); ?>" size="50" />

<h5>minimum_sale</h5>
<input type="text" name="minimum_sale" value="<?php echo set_value('minimum_sale'); ?>" size="50" />


<div><input type="submit" value="Submit" /></div>

<?php if(isset($rows) && $rows == 1) echo "succ      asdfasdfasdfasdfasdfasdfasdfasdfasdf";?>


</form>

</body>
</html>
