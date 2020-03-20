<!DOCTYPE HTML>

<HTML>
    <HEAD>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/style_profile.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script>
		function textAreaAdjust(o) {
			o.style.height = "1px";
			o.style.height = (25 + o.scrollHeight) + "px";
		}
		window.postComment = function () {
			var div = document.getElementById("comments");

			div.innerHTML = div.innerHTML + "<br>" + document.getElementById("comment").value;

		}
		window.addEventListener("load", function () {
			const loader = document.querySelector(".loader");
			loader.className += " hidden"; // class "loader hidden"
		});
	</script>
	<style>
		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			border-radius: 20px;
		}

		.card-header:first-child {
			border-radius: 20px;
		}

		.card-footer:last-child {
			border-radius: 20px;
		}

		.tombol {
			display: block;
			width: 100%;
			height: 50px;
			border-radius: 25px;
			outline: none;
			border: none;
			background: linear-gradient(62deg, rgba(202, 157, 4, 1) 14%, rgba(252, 210, 30, 1) 100%);
			background-size: 200%;
			font-size: 1.2rem;
			color: #fff;
			font-family: 'Poppins', sans-serif;
			text-transform: uppercase;
			margin: 1rem 0;
			cursor: pointer;
			transition: .5s;
		}

		.tombol:hover {
			background-position: right;
		}
		
		.modal-content {
			border-radius: 20px;
		}

		.modal-header{
			background-color: #3C4806;
			color: #fff;
		}
		.close {
			color: #fff;
		}
	</style>
    </HEAD>
    <BODY>
        <?php
            include_once '../include/db_connection.php';
            $tmp = new DB();
            $db = $tmp->getDB();
            $data = $tmp->getPost();
        ?>
        <?php
            // foreach($data as $tmps){
            //     echo $tmps[1] . '<br>';
            //     echo $tmps[2] . '<br>';
            //     $comment = $tmp->getComment($tmps[0]);
            //     foreach($comment as $cmt){
            //         echo $cmt[0] . '<br>';
            //         echo $cmt[1] . '<br>';
            //     }
            // }
        ?>
        	<div class="loader">
		<img src="../asset/img/brand.png" alt="Loading..." />
	</div>
	<img class="wave" src="../asset/img/wave.gif">
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-base nav-border p-2">
		<a class="navbar-brand" style="font-size: 28px; font-family: 'Neometric Medium';" href="#">
			<img src="../asset/img/brand.png" style="max-width: 100px;">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
			aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<div class="input-group ml-auto col-md-10">
				<span class="input-group-append">
					<button class="btn border border-left-0" type="button">
						<i class="fa fa-search" style="color: #3C4806;"></i>
					</button>
				</span>
				<input type="text" class="form-control border border-right-0" placeholder="Search...">
			</div>
		</div>
	</nav>
	<!--- \\\\\\\cover-->
	<header class="masthead" style="background-image: url('../asset/img/pp.jpg');" data-toggle="modal" data-target="#coverPic">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12 text-center">
				</div>
			</div>
		</div>
	</header>>
	<!--- \\\\\\\body-->
	<div class="container-fluid" style="margin-top: 2rem;">
		<div class="row justify-content-center"" style=" margin-left: 1rem; margin-right: 1rem;">
			<div class="col-lg-3">
				<div class="d-flex flex-column p-3 block" style="max-width: 100%; max-height: auto; href="">
					<div class=" card">
					<div class="card-body" style="padding: 2.5rem;">
						<div class="row">
							<div class="col-12 col-lg-8 col-md-6">
								<h3 class="mb-0 text-truncated">Nickname</h3>
								<p class="lead">@username</p>
								<p>
									Birth Date 31/10/1997
								</p>
								<p>
									Home Town : </br>Jl. Scientia Boulevard, Gading, Kec. Serpong, Tangerang, Banten
									15227
								</p>
							</div>
							<div class="col-12 col-lg-4 col-md-6 text-center">
								<img src="../asset/img/pp.jpg" alt="" class="mx-auto rounded-circle img-fluid profilePic" data-toggle="modal" data-target="#profilePic">
								<br>
							</div>
							<div class="col-12 col-lg-4">
								<h3 class="mb-0">20.7K</h3>
								<small>Post</small>
							</div>
							<div class="col-12 col-lg-4">
								<h3 class="mb-0">245</h3>
								<small>Like</small>
							</div>
							<button class="btn btn-block tombol"><span class="fa fa-plus-circle"></span> Edit
								Profile</button>
							<button class="btn btn-block tombol"><span class="fa fa-sign-out"></span> Logout</button>
							<!--/col-->
						</div>
						<!--/row-->
					</div>
					<!--/card-block-->
				</div>
			</div>
		</div>
		<div class="col-lg-6 gedf-main p-3">

			<!--- \\\\\\\Post-->
			<div class="card gedf-card">
				<div class="card-header">
					<ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab"
								aria-controls="posts" aria-selected="true">Make
								a publication</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images"
								aria-selected="false" href="#images">Images</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                            <form action="../controller/post.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label class="sr-only" for="message">post</label>
								<textarea class="form-control" id="message" name="posts" onkeyup="textAreaAdjust(this)"
									style="overflow:hidden; resize: none; border-radius: 20px;"></textarea>
                            </div>
                            <div class="form-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="file" id="file">
									<label class="custom-file-label" for="customFile">Upload image</label>
								</div>
							</div>
                            
						</div>
					</div>
					<div class="btn-toolbar justify-content-end">
						<div class="btn-group">
							<button type="submit" class="post">share</button>
						</div>
					</div>
				</div>
			</div>
            </form>
            <br><br>
            <?php foreach($data as $tmps):?>
			<div class="card gedf-card">
				<div class="card-header">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex justify-content-between align-items-center">
							<div class="mr-2">
								<img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
							</div>
							<div class="ml-2">
								<div class="h5 m-0">Nickname</div>
								<div class="h7 text-muted"><?php echo $tmps[2]?></div>
							</div>
						</div>
					</div>

				</div>
				<div class="card-body">
					<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
					<p class="card-text">
                        <?php if($tmps[3] == null){

                        }else{
                            echo '<div style="width:100px;height:100px;"';
                            echo '<img src="../asset/img/' . $tmps[3] . '"/>';
                            echo '</div>';
                        }
                        ?>
						<?php echo $tmps[1]?>
					</p>
				</div>
				<div class="card-footer">
					<a href="#" class="card-link"><i class="fa fa-gittip"></i> Like (499)</a>
					<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment (46)</a>
                    <br><br>
					<div class="card card-inner">
                    <?php $comment = $tmp->getComment($tmps[0]); ?>
                        <?php foreach($comment as $cmt): ?>
						<div class="card-body">
							<div class="row">
								<div class="col-md-2">
									<img class="rounded-circle" width="100px" src="https://picsum.photos/50/50"
										alt=""><br>
									<p class="text-secondary text-center">15 Minutes Ago</p>
								</div>
								<div class="col-md-10">
									<p><a
											href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong><?php echo $cmt[1]?></strong></a>
									</p>
									<p><?php echo $cmt[0]?></p>
								</div>
							</div>
                        </div>
                        <?php endforeach;?>
					</div>
                    <br>
                    <form action="../controller/comment.php?id_post=<?php echo $tmps[0]?>" method="post">
					<textarea class="form-control" id="message" name="comment"onkeyup="textAreaAdjust(this)"
						style="overflow:hidden; resize: none; border-radius: 20px;" onclick="postComment();"></textarea>
					<br>
					<div class="btn-toolbar justify-content-end">
						<div class="btn-group">
							<button type="submit" class="comment">Comments</button>
						</div>
                    </div>
                    </form>
				</div>
            </div>
            <?php endforeach;?>
		</div>
	</div>
	</div>
	<div class="modal fade" id="coverPic" tabindex="-1" role="dialog" aria-labelledby="coverPic" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="coverPic">Change Cover Picture</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<div class="file-upload-wrapper">
					<input type="file" >
				  </div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="post" data-dismiss="modal">Close</button>
			  <button type="submit" class="post">Save</button>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="modal fade" id="profilePic" tabindex="-1" role="dialog" aria-labelledby="profilePic" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="profilePic">Change Profile Picture</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<div class="file-upload-wrapper">
					<input type="file" >
				  </div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="post" data-dismiss="modal">Close</button>
			  <button type="submit" class="post">Save</button>
			</div>
		  </div>
		</div>
	  </div>
    </BODY>
</HTML>