<html>
<head>   
 
<!-- 1 -->
<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
 
<!-- 2 -->
<script src="../../js/jquery.min.js"></script>
<script src="dropzone.min.js"></script>
<script>
<!-- 3 -->
Dropzone.options.myDropzone = {
    init: function() {
        thisDropzone = this;
        <!-- 4 -->
        $.get('upload.php', function(data) {
 
            <!-- 5 -->
            $.each(data, function(key,value){
                 
                var mockFile = { name: value.name, size: value.size };
                 
                thisDropzone.options.addedfile.call(thisDropzone, mockFile);
 
                thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "uploads/"+value.name);
                 
            });
             
        });
    }
};


</script>
 
</head>
 
<body>
 
<!-- 3 -->
<form action="upload.php" class="dropzone"></form>
   
</body>
 
</html>