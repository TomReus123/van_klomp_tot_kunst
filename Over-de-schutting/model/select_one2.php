<?php
/**
 * Created by PhpStorm.
 * User: Sjaak
 * Date: 15-5-2017
 * Time: 12:32
 */

$sql = "SELECT * FROM phpro_bedrijf WHERE id= " . $id;

$result = $mysqli->query($sql);
$result = convertResultToArray($result);