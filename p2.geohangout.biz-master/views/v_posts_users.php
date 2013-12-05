<div id='profilemenu'>
   <div id size="fontsize" style="color: #ffffff; font-size:40px; position:absolute; flow:left; margin-left:50px;">
			<strong>   Spur!</strong>
		</div>
	<div id ="mainpage">
        <!-- Menu for users who are logged in -->
        <?php if($user): ?>
            <a style="color:white; text-decoration:none; font-size:20px; font-family:Arial; float:right; margin-right:20px;" href='/users/logout'>Logout</a>
            <a style="color:white; text-decoration:none; font-size:20px; font-family:Arial; margin-left:520px;" href='/users/profile'>Profile</a>
			<a style="color:white; text-decoration:none; font-size:20px; font-family:Arial;  margin-left:20px;" href='/posts/index'>View Posts<a>
			<a style="color:white; text-decoration:none; font-size:20px; font-family:Arial;  margin-left:20px;" href='/posts/users'>Users<a>
        <!-- Menu options for users who are not logged in -->
        <?php else: ?>

            <a href='/users/signup'>Sign Up</a>
            <a href='/users/index'>Log In</a>
        <?php endif; ?>
     </div>
</div>

<br>
<br>
<center><h1> Follow other users to see their posts.</h1></center>
<br>

<br>
<br>
<div id ='windows'>
<br>

<!-- search bar -->	 	
<div class="light">	 	
<form action="/posts/searchName" method="get">	 	
<input type="text" name="name" class="search rounded" style="margin-left:-60px;height:20px;width:80%;" placeholder="Search by name"> 	 	 	
<input type="submit" name="search" value="Search Now" style="margin-top:-40px; margin-left:0px; width:100px; height:35px;" >	 
</form>
<br>

<?php foreach($users as $user): ?>

	<div id = "following" style="border: 2px solid black; background-color:efabba; font-size:14px; width:90%; border-radius: 8px; -moz-border-radius: 4px; -webkit-border-radius: 4px;">
	
	<article> 	
	<img src= "/uploads/<?=$user['picture'];?>" style = "margin-left:-500px; height:70px; width:70px;"><br>
	
    <!-- Print this user's name -->
    <div style="position:absolute; margin-left:200px; margin-top:-70px;">  	
	    <strong style="color:#000000"><?=$post['first_name']?> <?=$post['last_name']?></strong>
	</div>
	</article>

	<div id= "layout" style="padding-left:90%; postion:relative; margin-top: -20px;">
    <!-- If there exists a connection with this user, show a unfollow link -->
    <?php if(isset($connections[$user['user_id']])): ?>
        <a href='/posts/unfollow/<?=$user['user_id']?>'>
        <input type='Submit' value='Unfollow' style= "background:17bccc;"></a> 		
    <!-- Otherwise, show the follow link -->
    <?php else: ?>
        <a href='/posts/follow/<?=$user['user_id']?>'><input type='submit' value='Follow' style= "background:17bccc;"></a> 
    <?php endif; ?>
    </div>
    </div>
    <br>

<?php endforeach; ?>

</div>