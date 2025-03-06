<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Destinations in Thailand</title>  
    <link rel="stylesheet" href="style.css">  
</head>  
<body>  
    <header>  
        <h1>Destinations in Thailand</h1>  
        <nav>  
            <ul>  
                <li><a href="index.html">Home</a></li>  
                <li><a href="destinations.php">Experiences</a></li>  
            </ul>  
        </nav>  
    </header>  

    <section class="destinations">  
        <h2>Explore Our Destinations</h2>  
        <div class="destination-container">  
            <?php  
            $image = [  
                "images/beach.jpg" => "Stunning Beaches",  
                "images/temple.jpg" => "Ancient Temples",  
                "images/food.jpg" => "Delicious Cuisine"  
            ];  

            foreach ($image as $image => $description) {  
                if (file_exists($image)) {  
                    echo '<div class="destination-card">  
                            <img src="' . $image . '" alt="' . $description . '">  
                            <h3>' . $description . '</h3>  
                          </div>';  
                } else {  
                    echo '<p>L\'image ' . $image . ' n\'a pas été trouvée.</p>';  
                }  
            }  
            ?>  
        </div>  
    </section>  

    <footer>  
        <p>&copy; 2023 Discover Thailand. All rights reserved.</p>  
    </footer>  
</body>  
</html>