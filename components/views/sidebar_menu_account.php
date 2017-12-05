<?php
	$image = $this->imageDefault;
	if($model != null) {
		$userPath = "public/users/".Yii::app()->user->id;
		if($model->photos != '' && file_exists($userPath.'/'.$model->photos))
			$image = Yii::app()->request->baseUrl.'/'.$userPath.'/'.$model->photos;
	}
?>

<li> 
	<?php //begin.User Info ?>
	<div class="user-info">
		<div class="admin-image"> <img src="<?php echo Utility::getTimThumb($image, 65, 65, 1);?>" alt="profile img"> </div>
		<div class="admin-action-info">
			<span><?php echo Yii::t('phrase', 'Welcome');?></span>
			<h3><?php echo Yii::app()->user->displayname;?></h3>
			<ul>
				<li><a data-placement="bottom" title="Go to Inbox" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>
				<li><a data-placement="bottom" title="Go to Profile" href="<?php echo Yii::app()->createUrl('doctor/profile');?>"><i class="zmdi zmdi-account"></i></a></li>
				<li><a data-placement="bottom" title="Full Screen" href="<?php echo Yii::app()->createUrl('site/login');?>" ><i class="zmdi zmdi-sign-in"></i></a></li>
			</ul>
		</div>
	</div>
	<?php //end.User Info ?>
</li>