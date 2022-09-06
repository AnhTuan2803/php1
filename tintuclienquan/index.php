<?php
	session_start();
	if(isset($_SESSION['btn_user'])){

	?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Tin Tuc</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>

<body>
	<div id="wp">
		<div id="header">
			<img src="images/logo.png">
		</div>
		<div id="menu">
			<ul>
				<?php
				include 'database.php';
				$sql = 'select * from category';
				$kq = $conn->query($sql);
				// var_dump($sql);
				foreach ($kq as $key => $row) {
				?>
					<li><a href=""><?php echo $row['cate_name'] ?></a></li>
				<?php
				}
				?>
				<!-- <li><a href="#">Trang chủ</a></li>
				<li><a href="#">Xã hội</a></li>
				<li><a href="#">Kinh tế</a></li>
				<li><a href="#">Thế giới</a></li>
				<li><a href="#">Thể thao</a></li>
				<li><a href="#">Liên hệ</a></li> -->
				<li><span>Chào <?php echo $_SESSION['btn_user'] ?></span>
						<a href="./logout.php">Đăng xuất</a>
			</li>
			</ul>
		</div>
		<div id="content">
			<div id="qc">
				<img src="images/banner.jpg">
			</div>
			<div class="danhmuc">TIN NỔI BẬT</div>
			<!--  -->
			<?php
			include 'database.php';
			$sql = 'select * from news inner join category on news.cate_id = category.cate_id';
			$kq = $conn->query($sql);
			foreach ($kq as $key => $row) {
			?>
				<div class="tin">
					<a href="new_detail.php?news_id=<?php echo $row['news_id'] ?>"><img src="images/<?php echo $row['img'] ?>" /></a>
					<div class="td"><a href="new_detail.php?news_id=<?php echo $row['news_id'] ?>"><?php echo $row['title'] ?></a></div>
					<div class="dmuc"><?php echo $row['cate_name'] ?></div>
					<div class="nd"><?php echo $row['intro'] ?></div>
				</div>
			<?php
			}
			?>
			
			<!--  -->
			<!-- <div class="tin">
			<a href="new_detail.html"><img src="images/tin2.jpg"/></a>
			<div class="td"><a href="new_detail.html">Angelina Jolie - Brad Pitt: yêu bất chấp, chia ly ồn ào</a></div>
			<div class="dmuc">Xã hội</div>
			<div class="nd">Lợi thế xuất phát đầu, sự hỗ trợ của đồng đội cũng như sai lầm của đối thủ Ferrari giúp Lewis Hamilton có một chặng mỹ mãn trên trường đua </div>
		</div>
		<div class="tin">
			<a href="new_detail.html"><img src="images/top1140x84.jpg"/></a>
			<div class="td"><a href="new_detail.html">Hamilton về nhất tại GP Hungary, bỏ xa Vettel 24 điểm</a></div>
			<div class="dmuc">Thể thao</div>
			<div class="nd">Lợi thế xuất phát đầu, sự hỗ trợ của đồng đội cũng như sai lầm của đối thủ Ferrari giúp Lewis Hamilton có một chặng mỹ mãn trên trường đua </div>
		</div>
		<div class="tin">
			<a href="new_detail.html"><img src="images/tin2.jpg"/></a>
			<div class="td"><a href="new_detail.html">Angelina Jolie - Brad Pitt: yêu bất chấp, chia ly ồn ào</a></div>
			<div class="dmuc">Xã hội</div>
			<div class="nd">Lợi thế xuất phát đầu, sự hỗ trợ của đồng đội cũng như sai lầm của đối thủ Ferrari giúp Lewis Hamilton có một chặng mỹ mãn trên trường đua </div>
		</div>
		<div class="tin">
			<a href="new_detail.html"><img src="images/top1140x84.jpg"/></a>
			<div class="td"><a href="new_detail.html">Hamilton về nhất tại GP Hungary, bỏ xa Vettel 24 điểm</a></div>
			<div class="dmuc">Thể thao</div>
			<div class="nd">Lợi thế xuất phát đầu, sự hỗ trợ của đồng đội cũng như sai lầm của đối thủ Ferrari giúp Lewis Hamilton có một chặng mỹ mãn trên trường đua </div>
		</div>
		<div class="tin">
			<a href="new_detail.html"><img src="images/tin2.jpg"/></a>
			<div class="td"><a href="new_detail.html">Angelina Jolie - Brad Pitt: yêu bất chấp, chia ly ồn ào</a></div>
			<div class="dmuc">Xã hội</div>
			<div class="nd">Lợi thế xuất phát đầu, sự hỗ trợ của đồng đội cũng như sai lầm của đối thủ Ferrari giúp Lewis Hamilton có một chặng mỹ mãn trên trường đua </div>
		</div> -->
		</div>
		<div id="footer">LAB TIN TỨC</div>
	</div>
</body>

</html>
<?php
	} else{
		echo "Bạn phải đăng nhập ".'<a href="./login.php">Đăng nhập</a>';
	}
?>