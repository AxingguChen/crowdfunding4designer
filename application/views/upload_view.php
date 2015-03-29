<!doctype html>
<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
 <script src="<?php echo base_url()?>assets/js/ajaxfileupload.js"></script>
 <script>
 $(function() {
	    $('#upload_file').submit(function(e) {
	        e.preventDefault();
	        $.ajaxFileUpload({
	            url             :"<?php echo base_url();?>index.php/upload/upload_ajax", 
	            secureuri       :false,
	            fileElementId   :'userfile',
	            dataType: 'JSON',
	            success : function (data)
	            {
	               var obj = jQuery.parseJSON(data);                
	                if(obj['status'] == 'success')
	                {
	                    $('#files').html(obj['msg']);
	                 }
	                else
	                 {
	                    $('#files').html(obj['msg']);
	                  }
	            }
	        });
	        return false;
	    });
	});
 </script>
</head>
<body>
 <h1>Upload File</h1>
 <form method="post" action="" id="upload_file">
 <label for="userfile">File</label>

 <input type="file" name="userfile" id="userfile" size="20" />
 <input type="submit" name="submit" id="submit" />
 </form>
 <h2>Files</h2>
 <div id="files"></div>
</body>
</html>