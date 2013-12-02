<div id='profilemenu'>
   <div id size="fontsize" style="color:#c0ac0f; font-size:40px; position:absolute; flow:left; margin-left:50px;">
			<strong>   Spur!</strong>
		</div>
	<div id ="mainpage">
        <!-- Menu for users who are logged in -->
        <?php if($user): ?>
            <a style="color:white; text-decoration:none;font-size:20px; font-family:Arial; float:right; margin-right:20px;" href='/users/logout'>Logout</a>
            <a style="color:white; text-decoration:none; font-size:20px; font-family:Arial; position:absolute; margin-left:430px;" href='/users/profile'>Profile</a>
			<a style="color:white; text-decoration:none; font-size:20px; font-family:Arial; position:absolute; margin-left:520px;" href='/posts/index'>View post<a>
			<a style="color:white; text-decoration:none; font-size:20px; font-family:Arial; position:absolute; margin-left:630px;" href='/posts/users'>Users<a>
			<a style="color:white; text-decoration:none; font-size:20px; font-family:Arial; position:absolute; margin-left:710px;" href=''>About us<a>
        <!-- Menu options for users who are not logged in -->
        <?php else: ?>

            <a href='/users/signup'>Sign up</a>
            <a href='/users/index'>Log in</a>
        <?php endif; ?>
     </div>
        
</div>
<br>
<br>
<br>
<br><br>
<br><br>
<br><br>
<br>
<div id ='windows'>
<br>
<img src= "/uploads/<?=$user->picture;?>" style = "height:200px; width:200px;">
<h1> One step away, upload your picture</h1> 
<form action="/users/p_upload" method="post" enctype="multipart/form-data">

<label for="file" style="postion:absolute; margin-left:-110px;"> Filename:</label>

<input type="file" name="file" id="file">
<input type="submit" name="submit" value="Submit">
</form>
</div>

