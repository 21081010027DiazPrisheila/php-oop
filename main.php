<?php
require_once('product.php');
require_once('CDMusic.php');
require_once('CDRack.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>TUGAS OOP PHP</title>
</head>

<body>

    <?php
        echo "<h2>PRODUCT</h2>";
        $product = new Product("Shakira", 50000, 10); // Membuat objek baru dari kelas Product
        echo "<p>Product Name: " . $product->getName() . "</p>";
        echo "<p>Product Price: " . $product->getPrice() . "</p>";
        echo "<p>Product Discount: " . $product->getDiscount() . "%</p>";
        
        $product->setName("Minimalis Rack"); // Mengubah nama produk
        $product->setPrice(250000); // Mengubah harga produk
        $product->setDiscount(30); // Mengubah diskon produk
        
        echo "\nUpdated Product Information:\n";
        echo "<p>Product Name: " . $product->getName() . "</p>";
        echo "<p>Product Price: " . $product->getPrice() . "</p>";
        echo "<p>Product Discount: " . $product->getDiscount() . "%</p>";

        echo "<h2>CD MUSIC</h2>";
        $cdmusic = new CDMusic("Shakira", 50000, 10, "Shakira", "Pop");
        echo "<p>CD Name: " . $cdmusic->getName() . "</p>";
        echo "<p>CD Price: " . $cdmusic->getPrice() . "</p>";
        echo "<p>CD Discount: " . $cdmusic->getDiscount() . "%</p>";
        echo "<p>CD Artist: " . $cdmusic->getArtist() . "</p>";
        echo "<p>CD Genre: " . $cdmusic->getGenre() . "</p>";
        echo "<p>CD Music Discount Price: " . $cdmusic->finalprice() . "</p>";

        $cdmusic->setName("Legend");
        $cdmusic->setPrice(65000);
        $cdmusic->setDiscount(15);
        $cdmusic->setArtist("John");
        $cdmusic->setGenre("Rock");

        echo "\nUpdated CD Information:\n";
        echo "<p>CD Name: " . $cdmusic->getName() . "</p>";
        echo "<p>CD Price: " . $cdmusic->getPrice() . "</p>";
        echo "<p>CD Discount: " . $cdmusic->getDiscount() . "%</p>";
        echo "<p>CD Artist: " . $cdmusic->getArtist() . "</p>";
        echo "<p>CD Genre: " . $cdmusic->getGenre() . "</p>";
        echo "<p>CD Music Discount Price: " . $cdmusic->finalprice() . "</p>";

        echo "<h2>CD RACK</h2>";
        $cd = new CDRack("Minimalis Rack", 250000, 30, "50", "Square");
        echo "<p>CD Rack Name: " . $cd->getName() . "</p>";
        echo "<p>CD Rack Price: " . $cd->getPrice() . "</p>";
        echo "<p>CD Rack Discount: " . $cd->getDiscount() . "%</p>";
        echo "<p>CD Rack Capacity: " . $cd->getCapacity() . "</p>";
        echo "<p>CD Rack Model: " . $cd->getModel() . "</p>";
        echo "<p>CD Rack Discount Price: " . $cdmusic->finalprice() . "</p>";

        $cd->setName("Wood Rack");
        $cd->setPrice(300000);
        $cd->setDiscount(45);
        $cd->setCapacity("60");
        $cd->setModel("Circle");

        echo "\nUpdated CD Information:\n";
        echo "<p>CD Rack Name: " . $cd->getName() . "</p>";
        echo "<p>CD Rack Price: " . $cd->getPrice() . "</p>";
        echo "<p>CD Rack Discount: " . $cd->getDiscount() . "%</p>";
        echo "<p>CD Rack Capacity: " . $cd->getCapacity() . "</p>";
        echo "<p>CD Rack Model: " . $cd->getModel() . "</p>";
        echo "<p>CD Rack Discount Price: " . $cdmusic->finalprice() . "</p>";
    ?>
</body>
</html>