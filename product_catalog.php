<html>
<head>
    <title><?php echo $title ='Product Catalog';?></title>
</head>
<body>
   <h1><?php echo $brand ='Smartphone Xiaomi';?></h1> 
   <!-- tampilkan data product disini dengan perulangan dan di dalam tabel -->
   <?php
   $No = ["1","2","3","4"];
   $NamaBarang = ["Redmi Note 9", "Redmi Note 9 Pro", "Mi Note 10", "Mi Note 10 Pro"];
   
   echo "<table border='1'>";
   echo "<tr><td>No</td>";
   echo "<td>Nama Barang</td>";
   echo "</tr>";

   for($i=0; $i < 4; $i++){
      echo "<tr>";
      echo "<td>$No[$i]</td> ";
      echo "<td>$NamaBarang[$i]</td> ";
      echo "</tr>";
   }
   ?>

</body>
</html>