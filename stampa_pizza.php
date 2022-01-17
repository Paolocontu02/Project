
<html> 
<head>

<title>Elenco ordini</title>
</head>

 <body style="background-color:powderblue;">
<h1 align='center'> Elenco ordini </h1>
<?php
 
     $db_host = "127.0.0.1";
     $db_user = "root";              
     $db_password = "";          //rootroot   per btnami
     $db_database = "pizzeriap";       

     $connessione=mysqli_connect($db_host,$db_user,$db_password,$db_database );

     if (!$connessione)
       {
       die('Attenzione non connesso: ' . mysqli_error());
       }

        $qu = "select cognome, nome, citta, telefono, email, tipo_pizza, personalizzazione, data_consegna, data_ins from tbl_pizze";
	
	$risultato = mysqli_query($connessione,$qu);
	
	echo "<br><br><br>";

        echo "<table border=1 bgcolor= green align='center'>";
		echo "<th colspan=9> Pizze ordinate </th>";
        echo "<tr>";
        echo "<td>"."Cognome"."</td>";
        echo "<td>"."Nome"."</td>";
        echo "<td>"."Citta"."</td>";
	echo "<td>"."Telefono"."</td>";
	echo "<td>"."E-mail"."</td>";
        echo "<td>"."Tipo pizza"."</td>";
	echo "<td>"."Personalizzazione"."</td>";
	echo "<td>"."Data consegna"."</td>";
	echo "<td>"."Data inserimento"."</td>";	
        echo "</tr>";
       
        $numerorighe = mysqli_num_rows($risultato);



	while($r=mysqli_fetch_array($risultato))
	{
         echo "<tr>";
	     echo "<td>".$r[0]."</td>";
         echo "<td>".$r[1]."</td>";
         echo "<td>".$r[2]."</td>";
         echo "<td>".$r[3]."</td>";
         echo "<td>".$r[4]."</td>";
	echo "<td>".$r[5]."</td>";
	echo "<td>".$r[6]."</td>";
	echo "<td>".$r[7]."</td>";
	echo "<td>".$r[8]."</td>";
         echo "</tr>";
	}			
	
     
        echo "</table>";

	if($numerorighe>0)
		echo "<br><br> Numero ordini effettuati:".$numerorighe;
     
				 

mysqli_close($connessione);

      
?>
<br> <br>
<h2 align='center'><a href="index.html">Torna alla home</a></h2>

</body>
</html>
