<?php
require 'includes/snippet.php';
require 'includes/db-inc.php';
include 'includes/header.php';

// Function to safely escape and sanitize user input
function sanitizeInput($input)
{
	global $conn;
	return mysqli_real_escape_string($conn, htmlspecialchars($input));
}

?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/testing.css">
</head>

<body>
	<?php include "includes/nav.php"; ?>
	<section id="mainSection">
		<div id="mainDiv" style="margin-top: 10rem;">
			<!-- main section -->
			<section>
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header-text text-center">
								<h1>Satu Buku Lagi</h1>
								<p>Pengetahuan adalah Kekuatan.</p>
								<div class="input-group">
									<form class="form-search" method="get" action="borrow-student.php">
										<button class="btn" type="submit" value="Search">
											<img src="images/search.png" alt="">
										</button>
										<input class="form-control" type="text" name="search" id="search" placeholder="Cari buku berdasarkan judul">
									</form>
									<!-- <button onclick="getBook()" class="btn" type="button" id="searchBtn">
										<img src="img/search.png" alt="">
									</button>
									<input id="inputField" type="text" class="form-control" value="" placeholder="Search by books name"> -->
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">
							<span class="glyphicon glyphicon-book"></span>
							<strong>Borrow Books</strong>
						</div>
					</div>

					<div class="container">
						<div class="panel-search">
							<div class="panel-heading">
								<div class="row-search">
									<form method="get" action="borrow-student.php">
										<label for="categories">Category:</label>
										<select name="categories" id="categories">
											<option value="all">All</option>
											<option value="Fiction">Fiction</option>
											<option value="Subjects">Subjects</option>
											<option value="Biography">Biography</option>
										</select>
										<input type="submit" value="Filter">
									</form>
								</div>
								<!-- <div class="row">
									<form method="get" action="borrow-student.php">
										<label for="search">Search by Title:</label>
										<input type="text" name="search" id="search" placeholder="Enter book title">
										<input type="submit" value="Search">
									</form>
								</div> -->
							</div>

							<table>
								<tr>
									<th>Nomor</th>
									<th>Judul Buku</th>
									<th>Penulis</th>
									<th>Buku Tersisa</th>
									<th>Nama Penerbit</th>
									<th>Tersedia</th>
									<th>Kategori</th>
									<th>cover</th>
									<th>Pinjam</th>

								</tr>
								</thead>
								<?php
								// Check if the search parameter is set
								if (isset($_GET['search'])) {
									$searchTerm = sanitizeInput($_GET['search']);

									$sql = "SELECT * FROM books WHERE bookTitle LIKE '%$searchTerm%'"; // Use LIKE for partial matches
								} else {
									$sql = "SELECT * FROM books";
								}

								if (isset($_GET['categories']) && $_GET['categories'] !== 'all') {
									// Add category filter to the SQL query
									$selectedCategory = sanitizeInput($_GET['categories']);
									$sql .= " WHERE categories = '$selectedCategory'";
								}

								$query = mysqli_query($conn, $sql);
								$counter = 1;

								while ($row = mysqli_fetch_array($query)) {
									$_SESSION['book_Title'] = $row['bookTitle'];
									$cover_url = !empty($row['cover']) ? $row['cover'] : '';
								?>
									<tbody>
										<tr>
											<td><?php echo $counter++; ?></td>
											<td><?php echo $row['bookTitle']; ?></td>
											<td><?php echo $row['author']; ?></td>
											<td><?php echo $row['bookCopies']; ?></td>
											<td><?php echo $row['publisherName']; ?></td>
											<td><?php echo $row['available']; ?></td>
											<td><?php echo $row['categories']; ?></td>
											<td>
												<?php if (!empty($cover_url)) : ?>
													<img src="<?php echo $cover_url; ?>" alt="Cover Image" style="max-width: 100px;">
												<?php else : ?>
													No Cover Image
												<?php endif; ?>
											</td>
											<td>
												<a href="lend-student.php?bid=<?php echo $row['bookId'] ?>" id="show" class="show-in">
													<button class="btn btn-success" style="font-size: 12px; margin-right:-3rem">Pinjam Sekarang</button>
													<input type="hidden" class="book-id" value="<?php echo $row['bookId']; ?>">
													<input type="hidden" class="book-name" value="<?php echo $row['bookTitle']; ?>">
													<input type="hidden" class="purpose" value="show">
												</a>
											</td>
										</tr>
									</tbody>
								<?php
								}
								?>
							</table>
						</div>
					</div>
			</section>
		</div>
	</section>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js.bootstrap.js"></script>
</body>

</html>