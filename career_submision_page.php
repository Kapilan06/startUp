<?php
    include('includes/header.php');
    include('includes/navbar.php');
    
?>

<h4>Upload your CV here</h4>
<label class="upload-group">
    Upload file
    <input type="file" class="upload-group" id="file">
</label>
<button type="button" class="btn btn-primary" id="uploadButton" onclick="uploadFile();">Submit</button>

<script src="fileupload.js"></script>