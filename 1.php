<!DOCTYPE html>
<html>
<head>
  <title>My Uploader</title>
  <link rel="stylesheet" type="text/css" href="http://localhost:/uploadify/uploadify.css">
  <script type="text/javascript" src="http://localhost:/uploadify/swfobject.js"></script>
  <script type="text/javascript" src="http://localhost:/uploadify/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="http://localhost:/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
</head>
<body>
  <h1>Uploadify Test</h1>
  <form>
    <div id="queue"></div>
    <embed src="http://localhost/uploadify/uploadify.swf">
    <input id="file_upload" name="file_upload" type="file" multiple="true">
  </form>
   
  <script type="text/javascript">
  <?php $timestamp = time(); ?>
   
  $(function() {
    $('#file_upload').uploadify({
      'formData' : {
        'timestamp' : '<?php echo $timestamp; ?>',
        'token'     : '<?php echo md5('unique_salt' . $timestamp); ?>'
      },
      'swf'      : 'http://localhost:/uploadify/uploadify.swf',
      'uploader' : 'http://localhost:/uploadify/uploadify.php',
 
      'onUploadSuccess' : function(file, data, response) {
        alert('The file was saved to: ' + data);
      }
 
    });
  });
  </script>
   
</body>
</html>