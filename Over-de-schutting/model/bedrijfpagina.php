<?php

/**
 * Created by PhpStorm.
 * User: Sjaak
 * Date: 24-5-2017
 * Time: 15:38
 */
echo "<div class='container'>";
echo $_SESSION['user_id'];
{foreach from=$result item=oneItem}
echo "{$oneItem.text}";
echo "</div>";
?>