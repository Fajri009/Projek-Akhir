<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Page/pengguna/koleksi/koleksi.css">
    <title>Koleksi Buku</title>
</head>
<body>
    <div class="searchContainer" id="searchContainer">
        <input
            type="text"
            class="searchInput"
            id="searchInput"
            placeholder="Search by title or author"
        />
        <button class="searchButton" id="searchButton">Search</button>
    </div>

    <div class="container" id="bookContainer">
        <?php foreach ($books as $book) { ?>
            <div class="book">
                <?php $imagePath = $book['image_path'] ?>
                <?echo "<img src=\"$imagePath\" alt=\"Book Image\" />";?>
                <h3><?php echo $book['judul_buku']; ?></h3>
                <p><?php echo $book['pengarang']; ?></p>
            </div>
        <?php } ?>
    </div>
    <script src="Page/pengguna/koleksi/koleksi.js"></script>
</body>
</html>
