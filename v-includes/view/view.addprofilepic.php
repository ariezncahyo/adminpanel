<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body{
	background-color:#000;
}
#content_holder{
	max-height: 80%;
	width:50%;
	margin:0 auto;
}

#current_pic{
	max-height: 87%;
	width: 68%;
	padding: 2%;
	border: 1px solid red;
}
#profile_pic_uploader{
	margin: 0 auto;
	height: 29px;
	width: 50%;
	margin-top: 2%;
	
}
#picadder{
}
#profile_pic{
	width: 70%;
	color:#FFF;
}
#submit{
	background-image:url(../images/button.png);
	border-color: #F88017;
}
#profile_image{
	max-width:100%;
	max-height:100%
}



</style>

</head>

<body>
	<div id="content_holder">
        <div id="current_pic">
                <img id="profile_image" src="../images/ims.png" alt=""> </div>
         </div>
         <div id="profile_pic_uploader">
         	<form id="picadder" action="" method="post" enctype="multipart/form-data">
            	<input type="file" id="profile_pic" name="userfile" />
                <input type="submit" id="submit" value="submit" />
            
            </form>
         
         </div>
    </div>

</body>
</html>