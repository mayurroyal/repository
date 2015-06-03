<?php
@session_start();
include_once('./global.inc.php');
include_once($configVars['ClassesBasePath'].'blogpost.class.php');
$ObjBlogPost = new BlogPost();
$Msg = '';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Welcome to Coinxoom</title>
<link rel="stylesheet" type="text/css" href="<?php echo $configVars['CssUrlPath']; ?>style.css"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<div id="wrapper">	
<?php include($configVars['SiteBasePath'].'indexheader.php') ?>
<div class="main-content blogpost-bg">
	<div class="breadcrum-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="breadcrum"><a href="#">Home</a>><a href="#">Press Release</a></div>
				</div>
			</div>
		</div>
	</div><!--breadcrum-section end-->	
 <?php 
             $id=$_REQUEST['id'];

			$ArrayUser = $ObjBlogPost->GetBlogPost($id);
			$i=1;
									         foreach($ArrayUser as $id => $row) 
			?>
	<div class="blogsection">
		<div class="container">
			<div class="row">
            
				<div class="col-sm-8 col-md-8">
					<div class="latest-title blogtitle">
						<h1><?php echo $row['title'];?></h1>
						<p>By <a href="#"><?php echo $row['author_name'];?></a><span><?php echo $row['add_date'];?></span></p>
						<div class="social-row">
							<a href="#"><img src="<?php echo $configVars['ImageUrlPath'];?>fb-btn.png" alt="img" title=""></a>
							<a href="#"><img src="<?php echo $configVars['ImageUrlPath'];?>twi-btn.png" alt="img" title=""></a>
							<a href="#"><img src="<?php echo $configVars['ImageUrlPath'];?>googl-btn.png" alt="img" title=""></a>
						</div>
					</div><!--blogtitle end-->
					<div class="blogpview">
						<figure><img src="<?php echo $configVars['ImageUrlPath']; ?><?php echo $row['image'];?>" height="300" width="500" alt=""></figure>
						<p><?php echo $row['description'];?> </p>

						<?php /*?>/*<div class="blogs2 clearfix">
							<div class="blogs2-text">
								<p>Duis sed odio sit amet nibh vulputate cursus a 
									sit amet mauris. Morbi accumsan ipsum velit. 
									Nam nec tellus a odio tincidunt auctor a ornare
									 odio. Sed non  mauris vitae erat consequat 
									auctor eu in elit. </p>

								<p>Class aptent taciti sociosqu ad litora torquent 
									per conubia nostra, per inceptos himenaeos. 
									Mauris in erat justo. Nullam ac urna eu felis 
									dapibus condimentum sit amet a augue. 
									Sed non neque elit. Sed ut imperdiet nisi. </p>
							</div>
							<?php /*?>/*<figure><img src="<?php echo $configVars['ImageUrlPath'];?>blog1.jpg" alt="" class="img-responsive"></figure>*/ ?>
						</div>
						
					</div> <!--blogpview end-->

					<div class="coment-section">
						<div class="like-row clearfix">
							<div class="like-aside pull-left">
								<a href="#" class="likeup"><i></i>like</a>
								<a href="#" class="likedown"><i></i></a>
							</div>
							<div class="like-main pull-right">
								<div class="pull-left">
								   <a href="#" class="fblike"><i></i></a>
								   <a href="#" class="round1"><i></i></a>
								</div>

								<div class="select3 pull-right">
							        <form action="#" method="post" class="select-speed3">
									  	<select name="speed" id="speed">
									      <option selected="selected">DISQUS</option>
									      <option>DISQUS2</option>
								    	</select>
									</form>
						   	 	</div>
							</div>
						</div><!--like-row end-->
						<div class="add-new">
							<span>add new comment</span> <span class="logout-btn">logout</span>
						</div>

						<form action="#" method="post">
							<div class="coment-blog clearfix">
								<div class="coment-name pull-left"><img src="<?php echo $configVars['ImageUrlPath'];?>coment-m.png"></div>
								<div class="coment-write pull-right"><textarea placeholder="Type your comment here"></textarea></div>
							</div>
							<div class="comment-show clearfix">
								<span class="pull-left">Showing 2 comments</span>
								<div class="comment-sort pull-right">
						     		<form action="#" method="post" class="spinner1">
						     			<input id="spinner" placeholder="sort by newest first">
						     		</form>
								</div>
							</div>

							<div class="previus-comment clearfix">
								<div class="coment-name pull-left"><img src="<?php echo $configVars['ImageUrlPath'];?>coment1.png"></div>
								<div class="coment-write pull-right">
									<span class="name-show">matthew guay</span>
									<div class="previus-text">
										<p>Hey Connor, the site looks great. Congrats on launching I now you and your team will be doing great things here, and I'am already subscribed. Looking forward to seeing it grow!</p>
									</div>
									<div class="back-day clearfix">
										<span class="pull-left weeks-ago">3 weeks ago</span>
										<div class="replybox pull-right">
											<a href="#">like</a>
											<a href="#" class="replay-btn">reply</a>
										</div>
									</div>
									<div class="reply-article clearfix">
										<div class="reply-article-img pull-left">
											<img src="images/coment1.png">
										</div>
										<div class="reply-article-write pull-right">
											<textarea placeholder="Write your comment"></textarea>
										</div>
									</div>
								</div>
							</div><!--previus-comment end-->

							<div class="previus-comment clearfix">
								<div class="coment-name pull-left"><img src="<?php echo $configVars['ImageUrlPath'];?>coment2.png"></div>
								<div class="coment-write pull-right">
									<span class="name-show">darren</span>
									<div class="previus-text">
										<p>The site look set to take on the big guys! Good luck, despite not a mac owner I'll be checking here out.</p>
									</div>
									<div class="back-day clearfix">
										<span class="pull-left weeks-ago">3 weeks ago</span>
										<div class="replybox pull-right">
											<a href="#">like</a>
											<a href="#" class="replay-btn">reply</a>
										</div>
									</div>
									<div class="reply-article clearfix">
										<div class="reply-article-img pull-left">
											<img src="images/coment2.png">
										</div>
										<div class="reply-article-write pull-right">
											<textarea placeholder="Write your comment"></textarea>
										</div>
									</div>
								</div>
							</div><!--previus-comment end-->
						</form>
						<div class="linkshare-row">
							<a href="#"><i class="fa fa-envelope"></i>Subscribe by email</a>
							<a href="#"><i class="fa fa-rss"></i>RSS</a>
						</div>
						<div class="coment-blog clearfix">
							<div class="coment-name pull-left"><img src="<?php echo $configVars['ImageUrlPath'];?>coment-m.png"></div>
							<div class="coment-write pull-right"></div>
						</div>
					</div><!--coment-section end-->
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="post-aside">
						<span class="recent">Recent Post</span>
						<div class="recent-article">
							<div class="recent-box clearfix">
								<figure><img src="<?php echo $configVars['ImageUrlPath'];?>blog-recent.jpg" alt="img"></figure>
								<article>
									<span>This is a blog post</span>
									<p>By <a href="#">Jayson Chanchico</a><span>Feb. 8, 2015</span></p>
								</article>
							</div>
							<div class="recent-box clearfix">
								<figure><img src="<?php echo $configVars['ImageUrlPath'];?>blog-recent.jpg" alt="img"></figure>
								<article>
									<span>This is a blog post</span>
									<p>By <a href="#">Jayson Chanchico</a><span>Feb. 8, 2015</span></p>
								</article>
							</div>
							<div class="recent-box clearfix">
								<figure><img src="<?php echo $configVars['ImageUrlPath'];?>blog-recent.jpg" alt="img"></figure>
								<article>
									<span>This is a blog post</span>
									<p>By <a href="#">Jayson Chanchico</a><span>Feb. 8, 2015</span></p>
								</article>
							</div>
						</div><!--recent-article end-->
					</div>
				</div>
			</div>
		</div>
	</div><!--blogsection end-->

</div><!--main-content-->
</div><!--wrapper end-->

<?Php include($configVars['SiteBasePath'].'footer.php') ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>document.jquery || document.write('<script src="<?php echo $configVars['JsUrlPath']; ?>jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $configVars['JsUrlPath']; ?>custome.js"></script>
<script type="text/javascript">
$(document).ready(function(){

 $("#speed").selectmenu();

 $( "#spinner" ).spinner();

/*coment post*/
$('.replay-btn').on('click',function(){
	$(this).parents('.previus-comment').find('.reply-article').slideToggle();
	return false;
})


});
</script>
</body>
</html>