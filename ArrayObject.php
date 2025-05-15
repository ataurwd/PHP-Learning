<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php
    $newName = 'Ataur Rahman';
     echo 'welcome to my php first website ..........' . $newName; 
     ?>
<?php
    $ataurRahman = 'new Name';
    echo 'welcome to our website '. $ataurRahman;
?> -->

<?php
// Step 1: Create an array
$fruits = ["Apple", "Banana", "Mango", "Orange"];

// Step 2: Access a value from the array (e.g. index 2)
$favoriteFruit = $fruits[2]; // This is "Mango"

// Step 3: Display the value
echo "My favorite fruit is: " . $favoriteFruit . "<br>";
?>

<?php
    $country = ['bangladesh', 'pakisthan', 'usa'];

    // $find_one = $country[2];

    // echo 'i Want to Go ' . $country[1];
?>


<?php
$user_info = [
    "name" => "Ataur Rahman",
    "age" => 22,
    "country" => "Bangladesh",
];

    echo "Name: " . $user_info["name"] . "<br>"
?>
    
    <?php
$user = [
  "name" => "Rubel",
  "age" => 25,
  "country" => "Bangladesh"
];

echo "Name: " . $user["name"] . "<br>";
echo "Age: " . $user["age"] . "<br>";
echo "Country: " . $user["country"];
?>

</body>
</html>