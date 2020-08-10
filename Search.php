
<!DOCTYPE html>
<html>
    <head>
        <title>Search</title>
        <link href="./style.css" type="text/css" rel="stylesheet">
        <link href="./chatbox.css" type="text/css" rel="stylesheet">
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
    <a style="text-decoration:none" href="./umkm_go.html"><h1 onclick="alert('Kembali ke halaman utama');">UMKM <span class="go">go</span></h1></a>
        <div class="navbar">
			<ul>
			    <li><a href="./umkm_go.html#about">TENTANG KAMI</li>
			    <li><a href="./umkm_go.html#contact">HUBUNGI KAMI</a></li>
		  	    <li style="float:right"><a href="index.php?logout=1">KELUAR</a></li>
				<div class="searchbar">
                    <form action="search.php" methods="get" id="searchForm" >
                        <input type="text" name = "q" id="searchBox" placeholder="Cari" >
                        <input type="submit" name = "searchButton" value="Go">
                    </form>
				</div>
			</ul>
		</div>
		<!-- ini nantinya buat yg image pencarian -->
		<div>
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
                        echo "<h3>Tidak Ditemukan<h3>";
                    }
            }
        }
        ?>

    <footer id="contact" style="  position: absolute; bottom: 0;width: 100%;">
        <img src="telp.png" height="10px"><p>+62 821 47568923</p><br>
        <img src="fb.png" height="10px"><p>UMKM.go</p><br>
        <img src="ig.png" height="10px"><p>@UMKM_go</p>
    </footer>

    <!--ChatBox-->
    <button class="open_button" onclick="openForm()">QnA</button>

    <div class="chat_popup" id="myForm">
        <form class="form_container">
            <h1 class="chatty">Chat</h1>
            <label for="msg">Kamu bisa berdisuksi dengan ahli ekonomi di forum ini!</label>
            <textarea placeholder="Ask the expert..." name="msg" required></textarea>

            <button type="submit" class="submit_btn">Send</button>
            <button type="button" class="cancel_btn" onclick="closeForm()">Close</button>
            <button type="button" class="inbox">Inbox</button>
        </form>
    </div>

    <script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }	

    </script>

    </body>
</html>
