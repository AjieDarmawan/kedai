
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movie</title>
    <link rel="stylesheet" href="<?=base_url('twd-theme/style.css');?>">
</head>
<body>
<div class="container">
    <form class="cssform" name="property" id="property" method="POST" action="<?php echo base_url('movie/add_video')?>" enctype="multipart/form-data" >
        <h2><a href="http://www.tutorial-webdesign.com/codeigniter-upload-file-video">Tutorial-webdesign.com</a></h2>
        <small>Demo upload file using codeigniter | &rarr; <a href="http://www.tutorial-webdesign.com/codeigniter-upload-file-video">Back to tutorial</a></small>
        <hr>
        <table>
            <tr>
                <td>Select Video :</td>
                <td><input type="file" id="video" name="video" ></td>
            </tr>
            <tr>
                <td> <input type="submit" id="button" name="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>