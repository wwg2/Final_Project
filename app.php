<?php
  require_once 'app/init.php';
  $itemsQuery = $db->prepare("
    SELECT id,name, done
    FROM items
    WHERE user = :user
");
$itemsQuery->execute(['user'=> $_SESSION['user_id']]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];

foreach($items as $item) {
  print_r($item);
}
  

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>To do</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
  </head>
  <body>
    <div class="list">
      <h1 class="header"> To Do List </h1>
       <ul class="items">
         <li>
           <span class="item">Pick up food</span> 
         <a href="#" class="done-button"> Mark as Complete </a>
         </li> 
       </ul>
        <form class="item-add" action="add.php" method="post">
            <input type="text" name="name" placeholder="Type a new task here" class="input" autocomplete="off" required>
            <input type="submit" value="add" class="submit">
        </form> 
    </div>
  </body>
</html> 
