<?php
include "header.php";

$nationalHolidays = [
  ["name" => "New Year's Day", "date" => "January 1", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH8dQLqjpALURvzMz_hVKx0_G27pK4n4xJtg&s"],
  ["name" => "Araw ng Kagitingan", "date" => "April 9", "image" => "https://binalonan.gov.ph/wp-content/uploads/2019/09/56848059_1323745134439484_262451930901512192_n.jpg"],
  ["name" => "Maundy Thursday", "date" => "April 2", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeWtQH3EgCaHGVOAQWgDoAkz6CrDFliyDFBQ&s"],
  ["name" => "Good Friday", "date" => "April 3", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTn9mpXI2gnCeDshRpANRpN92AOear9hzH-Ng&s"],
  ["name" => "Labor Day", "date" => "May 1", "image" => "https://static.vecteezy.com/system/resources/previews/002/147/449/non_2x/labor-day-various-professions-representation-background-design-free-vector.jpg"],
  ["name" => "Independence Day", "date" => "June 12", "image" => "https://cdn.vectorstock.com/i/1000v/49/34/philippine-independence-day-celebration-vector-37944934.jpg"],
  ["name" => "Bonifacio Day", "date" => "November 30", "image" => "https://www.shutterstock.com/image-vector/november-30-happy-bonifacio-day-600nw-2549491019.jpg"],
  ["name" => "Christmas Day", "date" => "December 25", "image" => "https://img.freepik.com/free-vector/merry-christmas-wallpaper-design_79603-2129.jpg"],
  ["name" => "Rizal Day", "date" => "December 30", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqOnMTKnWQQZuo-E5b1O2kRhxs5II6xnGBiA&s"]
];

$localHolidays = [
  ["name" => "Ninoy Aquino Day", "date" => "August 21", "image" => "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/ninoy-aquino-day-design-template-1888621c9d3dfd7facaef13832be1d34_screen.jpg?ts=1737803242"],
  ["name" => "National Heroes Day", "date" => "Last Monday of August", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqHqm6vQEeQZgavfbSgzQ39AIifyQpXNGlGA&s"],
  ["name" => "All Saints’ Day", "date" => "November 1", "image" => "https://www.wishesmsg.com/wp-content/uploads/Wishing-you-a-very-Happy-All-Saints-Day.jpg"],
  ["name" => "Pampanga Day", "date" => "December 11", "image" => "https://preview.redd.it/happy-pampanga-day-v0-0n1pi8ubm56e1.jpg?width=1920&format=pjpg&auto=webp&s=d59fa41589f8887ec98cb3b5a16a20d316e1fbfb"]
];

$imgClasses = ["gow-img-div", "sekiro-img-div", "dazai-img-div", "u4-img-div"];
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <main>
        <h2 style="text-align:center;margin-top:2rem;">National Holidays</h2>

        <div class="container">
            <?php foreach ($nationalHolidays as $index => $holiday):
                $cardNum  = ($index % 4) + 1;
                $imgClass = $imgClasses[$index % 4];
            ?>
            <div class="card-div card-<?= $cardNum; ?>">
                <div class="like-icon-div"></div>
                <div class="img-div <?= $imgClass; ?>">
                    <img src="<?= $holiday['image']; ?>" alt="<?= $holiday['name']; ?>">
                </div>
                <div class="text-container">
                    <h2 class="item-name"><?= $holiday['name']; ?></h2>
                    <p class="date"><?= $holiday['date']; ?>, 2026</p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <h2 style="text-align:center;margin-top:2rem;">Local Holidays</h2>

        <div class="container">
            <?php foreach ($localHolidays as $index => $holiday):
                $cardNum  = ($index % 4) + 1;
                $imgClass = $imgClasses[$index % 4];
            ?>
            <div class="card-div card-<?= $cardNum; ?>">
                <div class="like-icon-div"></div>
                <div class="img-div <?= $imgClass; ?>">
                    <img src="<?= $holiday['image']; ?>" alt="<?= $holiday['name']; ?>">
                </div>
                <div class="text-container">
                    <h2 class="item-name"><?= $holiday['name']; ?></h2>
                    <p class="date"><?= $holiday['date']; ?>, 2026</p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <?php include "footer.php"; ?>
</body>

</html>
