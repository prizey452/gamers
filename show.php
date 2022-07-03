<?php

    include "../config.php";

    $sql = "select * from users";
    $result = $connect->query($sql);
    while($row == $result->fetch_assoc()){
        if ($row['id'] == $_GET['id']){
            echo '<form class="form" action="modify.php" method="POST">';
            echo '<td><input type="text" name="username" value="'.$row['username'].'"></td>';
            echo '<td><input type="text" name="phone_number" value="'.$row['phone_number'].'"></td>';
            echo '<td><input type="email" name="email" value="'.$row['email'].'"></td>';
            echo '<td><input type="text" name="age" value="'.$row['age'].'"></td>';
            echo '<td><input type="text" name="location" value="'.$row['location'].'"></td>';
            echo '<td><input type="text" name="gender" value="'.$row['gender'].'"></td>';
            echo '<td><input type="date" name="date_of_birth" value="'.$row['date_of_birth'].'"></td>';
            echo '<td><input type="text" name="gaming_platform" value="'.$row['gaming_platform'].'"></td>';
            echo '<td><input type="text" name="gaming_category" value="'.$row['gaming_category'].'"></td>';
            echo '<td><input type="text" name="favourite_game" value="'.$row['favourite_game'].'"></td>';
            echo '<td><button type="submit" class="button">save</button></td>';
            echo '<td><input type="hidden" name="id" value="'.$row['id'].'"></td>';
            echo '</form>';   
        }else{
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['phone_number'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['location'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['date_of_birth'] . "</td>";
            echo "<td>" . $row['gaming_platform'] . "</td>";
            echo "<td>" . $row['gaming_category'] . "</td>";
            echo "<td>" . $row['favourite_game'] . "</td>";
            echo '<td><a class="button" href="show.php?id=' . $row['id'] .'" role="button" >update</a></td>';
            echo '<td><a class="button" href="delete.php?id=' . $row['id'] .'" role="button" >delete</a></td>';
            echo "</tr>";
        }
    }
    $connect->close();

?>