<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/default.css">
    <link rel="stylesheet" href="/CSS/breakfastStyles.css">   
    <title>Aaron's Diner - Dinner</title>
</head>

<body>

    <div class="boxArea">
        <header>
            <div class="wrapper">
                <div class="logo">
                    <a href="/PHP/index.php">Aaron's Diner</a>
                </div>
                <div class="phpDiv">
                    <?php
                    $date = date("m-d-Y");
                    $today = date("l");
                    echo "Today is: $today, $date";
                    ?>
                </div>
                <nav>
                    <a href="/PHP/index.php">Home</a>
                    <a href="/PHP/breakfast.php">Breakfast</a>
                    <a href="/PHP/lunch.php">Lunch</a>
                    <a href="/PHP/dinner.php">Dinner</a>
                </nav>
            </div>
        </header>
    </div>

    <div class="bannerArea">
        <h2>Welcome to Aaron's Diner</h2>
    </div>
    <div class="contentArea">
        <div class="wrapper">
            <h2>Dinner Menu HERE!</h2>
            <?php
                include "CafeMenuDataStore.php";
                $cafeDS = new CafeMenuDataStore("DinnerMenu.csv");

                while ((($menuItem = $cafeDS->getNext()) != NULL)){
                    echo "Name: ", $menuItem->getItemName(), "<br>";
                    echo "Price: $", $menuItem->getItemPrice(), "<br>";
                    echo "Type: ", $menuItem->getItemType(), "<br>";
                    echo "Img: ", $menuItem->getItemImg(), "<br>";
                }

            ?>
        </div>
    </div>

</body>

</html>