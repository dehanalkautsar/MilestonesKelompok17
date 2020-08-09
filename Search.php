
<!DOCTYPE html>
<html>
    <head>
        <title>Search</title>
        <link href="./style.css" type="text/css" rel="stylesheet">
        <style>
        h3 {
            margin: 20px 0px 0px 0px;
            padding: 0;
        }
        p{
            margin: 0;
        }
        </style>
    </head>
    <body>
        <h1 onclick="alert('Balik ke awal program');">UMKM <span class="go">go</span></h1>
        <div class="navbar">
			<ul>
				<li><a href=#about>TENTANG KAMI</a></li>
				<li><a href=#contact>HUBUNGI KAMI</a></li>
				<li style="float:right">KELUAR</li>
				<div class="searchbar">
					<input class="search-txt" type="text" name="" placeholder="Cari">
					<a href="search.php"><img src="search.png" height="19px" ></a>
					<!-- masih harus dibenerin sih hehe -->
				</div>
			</ul>
		</div>
		<!-- ini nantinya buat yg image pencarian -->
		<div>
        <form action="search.php" methods="get" id="searchForm" >
            <input type="text" name = "q" id="searchBox" placeholder="Cari" >
            <input type="submit" name = "searchButton" value="Go">
        </form>
        <?php  
        if (isset($_GET["searchButton"])){
            $q = $_GET["q"];
            if ($q !== ''){
                    include('server.php'); 
                    $query = mysqli_query($db, "SELECT * FROM content  WHERE Title LIKE '%$q%' OR Description LIKE '%$q%' ");
                    $num_rows = mysqli_num_rows($query);
                    $count = 0;
        
                    while($row = mysqli_fetch_array($query)){
                        $title = $row['Title'];
                        $desc = $row['Description'];
                        $link = $row['Link'];

                        echo '<a href ='. $link . '><h3>' . $title . '</h3></a>' . '<p>' . $desc . '</p><br>';
                        $count = $count + 1;
                    }

                    if ($count == 0){
                        echo "Tidak Ditemukan";
                    }
            }
        }
        ?>
    </body>
</html>
