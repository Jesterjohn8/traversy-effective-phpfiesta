<!DOCTYPE html>
<html>
<body>

<?php
$pokemon = array (
  array(1,"Bulbasaur","Grass","Poison","Overgrow",45,49,49),
  array(2,"Ivysaur","Grass","Poison","Overgrow",60,62,63),
  array(3,"Venusaur","Grass","Poison","Overgrow",80,82,83),
  array(4,"Charmander","Fire","N/A","Blaze",39,52,43),
  array(5,"Charmeleon","Fire","N/A","Blaze",58,64,58),
  array(6,"Charizard","Fire","Flying","Blaze",78,84,78),
  array(7,"Squirtle","Water","N/A","Blaze",44,48,65),
  array(8,"Wartortle","Water","N/A","Torrent",59,63,80),
  array(9,"Blastoise","Water","N/A","Torrent",79,83,100),
  array(10,"Caterpie","Bug","N/A","Torrent",50,20,55),
  array(11,"Onix","Rock","Ground","Sturdy",80,84,100)
);
    
foreach ($row = 0; $row < 11; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  foreach ($col = 0; $col < 8; $col++) {
    echo "<li>".$pokemon[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>

</body>
</html>
