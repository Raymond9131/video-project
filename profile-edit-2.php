<?php include("header.php"); ?>
<div class="profile-heading">
<div class="container">
<h1>Profile</h1>
</div>
</div>
<section class="light-gray">
<div class="container">
<div class="uploadbox-main">
<div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url(images/user-male-icon.png);">
            </div>
        </div>
    </div>
	<h2>User Name</h2>
	
</div>

<div class="row profile-form">
<div class="col-md-6">
<div class="form-group">
<label>First Name</label>
<input type="text" class="form-control" />
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Last Name</label>
<input type="text" class="form-control" />
</div>
</div>
<div class="col-md-6">

<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" />
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Zip Code</label>
<input type="text" class="form-control" />
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control" />
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label>Phone Number</label>
<input id="phone2" type="tel" class="form-control" placeholder="+966">
</div>
</div>

<div class="col-md-12">
<div class="savebox">
<button class="save_btn">Save</button>
</div>
</div>

</div>
<!--
<div class="votebox">
<div class="row">
<div class="col-md-4">
<div class="video-voting profile-bg-1">
<a href="vote-user-video.php#voted"><h2>Voted Videos</h2></a>
<div class="iconbox">
<img src="images/icon-p-1.png"/>
</div>
</div>
</div>

<div class="col-md-4">
<div class="video-voting profile-bg-1">
<a href="vote-user-video.php"><h2>Favourite Videos</h2></a>
<div class="iconbox">
<img src="images/icon-p-2.png"/>
</div>
</div>
</div>

<div class="col-md-4">
<div class="video-voting profile-bg-1">
<a href="my-video.php"><h2>Popular Videos</h2></a>
<div class="iconbox">
<img src="images/icon-p-3.png"/>
</div>
</div>
</div>


</div>
</div>-->



</div>
</section>

<?php include("footer.php"); ?>