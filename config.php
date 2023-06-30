<?php
    $connect = new PDO('mysql:host=localhost;dbname=eaglephysio', 'root', '');
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

	function getRecentArticles($connect){
		$query = "select id, title, image from blogs where status = 1 order by created_at desc LIMIT 3";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchall();

		$output = '';
		$count = 0;
		foreach($result as $row){
			if($count == 0){
				$output .= '
				<div class="a5 lg:a2u/2 af">
					<div class="aA[270px] ae a1M a1N a1O wow fadeInUp" data-wow-delay=".3s">
					<img src="images/blogimages/'.$row['image'].'" alt="image" class="a5 a1P a1Q a1R">
					<div class="ao a5 a1P a9 a1a a6 a1S a1T a1U a1V">
						<div class="a1W a5 a33 a6 a1S ad">
						<div class="aJ[410px] w-full">
							<h3>
							<a href="blog-details.php?id='.$row['id'].'" class="a1X a1Y a1k hover:aU a21">
							'.$row['title'].'
							</a>
							</h3>
							<a href="blog-details.php?id='.$row['id'].'" class="a25 aR a1k">
							Continue reading...
							</a>
						</div>
						<div class="a6 a7 ad">
							<a href="blog-details.php?id='.$row['id'].'" class="a1k hover:aU" name="read-more" aria-label="read-more">
							<svg width="32" height="32" viewbox="0 0 32 32" class="a23">
								<path d="M18.6667 22.5868V17.2534H6.77334L6.73334 14.5734H18.6667V9.25342L25.3333 15.9201L18.6667 22.5868Z"></path>
							</svg>
							</a>
						</div>
						</div>
					</div>
				</div>
				';
			}else if($count == 1){
				$output .= '
					<div class="aA[270px] ae a1M a1N a1O wow fadeInUp" data-wow-delay=".3s">
					<img src="images/blogimages/'.$row['image'].'" alt="image" class="a5 a1P a1Q a1R">
					<div class="ao a5 a1P a9 a1a a6 a1S a1T a1U a1V">
						<div class="a1W a5 a33 a6 a1S ad">
						<div class="aJ[410px] w-full">
							<h3>
							<a href="blog-details.php?id='.$row['id'].'" class="a1X a1Y a1k hover:aU a21">
							'.$row['title'].'
							</a>
							</h3>
							<a href="blog-details.php?id='.$row['id'].'" class="a25 aR a1k">
							Continue reading...
							</a>
						</div>
						<div class="a6 a7 ad">
							<a href="blog-details.php?id='.$row['id'].'" class="a1k hover:aU" name="read-more" aria-label="read-more">
							<svg width="32" height="32" viewbox="0 0 32 32" class="a23">
								<path d="M18.6667 22.5868V17.2534H6.77334L6.73334 14.5734H18.6667V9.25342L25.3333 15.9201L18.6667 22.5868Z"></path>
							</svg>
							</a>
						</div>
						</div>
					</div>
				</div>
				</div>
				';
			}else{
				$output .= '
					<div class="a5 lg:a2u/2 af">
						<div class="md:aA[570px] ae a1M a1N a1O wow fadeInUp" data-wow-delay=".35s">
							<img src="images/blogimages/'.$row['image'].'" alt="image" class="a5 a1P a1Q a1R">
							<div class="ao a5 a1P a9 a1a a6 a1S a1T a1U a1V">
								<div class="a1W a5 a33 a6 a1S ad">
								<div class="aJ[410px] w-full">
									<h3>
									<a href="blog-details.php?id='.$row['id'].'" class="a1X a1Y a1k hover:aU a21">
									'.$row['title'].'
									</a>
									</h3>
									<a href="blog-details.php?id='.$row['id'].'" class="a25 aR a1k">
									Continue reading...
									</a>
								</div>
								<div class="a6 a7 ad">
									<a href="blog-details.php?id='.$row['id'].'" class="a1k hover:aU" name="read-more" aria-label="read-more">
									<svg width="32" height="32" viewbox="0 0 32 32" class="a23">
										<path d="M18.6667 22.5868V17.2534H6.77334L6.73334 14.5734H18.6667V9.25342L25.3333 15.9201L18.6667 22.5868Z"></path>
									</svg>
									</a>
								</div>
								</div>
							</div>
							</div>
						</div>
					</div>
				';
			}
		  $count = $count +1;
		}

		return $output;
	}

	function getArticleById($connect, $id){
		$query = "select u.username, b.title, b.content, b.subtitle, b.subcontent, b.image, b.created_at from 
		blogs b
		inner join users u on b.author = u.id
		where b.id = $id";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchall();

		$output = [];
		foreach($result as $row){
			$output['author'] = $row['username'];
			$output['title'] = $row['title'];
			$output['content'] = $row['content'];
			$output['subtitle'] = $row['subtitle'];
			$output['subcontent'] = $row['subcontent'];
			$output['image'] = $row['image'];
			$output['date'] = date('d-M-Y', strtotime($row['created_at']));
		}

		return $output;
	}

	function getAllArticles($connect){
		$query = "select id, title, image from blogs where status = 1 order by created_at desc";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchall();

		$output = '';
		foreach($result as $row){
			$output .= '
				<div class="a5 lg:a2u/2 af">
					<div class="aA[350px] ae a1M a1N a1O wow fadeInUp" data-wow-delay=".3s">
						<img src="images/blogimages/'.$row['image'].'" alt="image" class="a5 a1P a1Q a1R">
						<div class="ao a5 a1P a9 a1a a6 a1S a1T a1U a1V">
							<div class="a1W a5 a33 a6 a1S ad">
								<div class="aJ[410px] w-full">
									<h3>
									<a href="blog-details.php?id='.$row['id'].'" class="a1X a1Y a1k hover:aU a1Z al">
									'.$row['title'].'
									</a>
									</h3>
									<a href="blog-details.php?id='.$row['id'].'" class="a25 aR a1k">
									Continue reading...
									</a>
								</div>
								<div class="a6 a7 ad">
									<a href="blog-details.php?id='.$row['id'].'" class="a1k hover:aU" name="read-more" aria-label="read-more">
									<svg width="32" height="32" viewbox="0 0 32 32" class="a23">
										<path d="M18.6667 22.5868V17.2534H6.77334L6.73334 14.5734H18.6667V9.25342L25.3333 15.9201L18.6667 22.5868Z"></path>
									</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			';
		}

		return $output;
	}

?>