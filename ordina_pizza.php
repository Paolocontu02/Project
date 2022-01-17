<html> 
<head>
<title>ordina pizza</title>
</head>

<body style="background-color:yellow;">

<?php

  

  if (isset ($_POST['cognome']))   {$cognome=$_POST['cognome'];}     else {$cognome='';}
  if (isset ($_POST['nome']))      {$nome=$_POST['nome'];}           else {$nome='';}
  if (isset ($_POST['indirizzo'])) {$indirizzo=$_POST['indirizzo'];} else {$indirizzo ='';}
  if (isset ($_POST['citta']))     {$citta=$_POST['citta'];}         else {$citta='';}
  if (isset ($_POST['telefono']))     {$telefono=$_POST['telefono'];}         else {$telefono='';}
  if (isset ($_POST['email']))    {$email=$_POST['email'];}       else {$email='';}
  if (isset ($_POST['scelta']))    {$scelta=$_POST['scelta'];}       else {$scelta='';}
  if (isset ($_POST['personalizzazione']))    {$personalizzazione=$_POST['personalizzazione'];}       else {$personalizzazione='';}
  if (isset ($_POST['dataconsegna']))    {$dataconsegna=$_POST['dataconsegna'];}       else {$dataconsegna='';}

  echo "<h1>Dati inseriti in tabella</h1>";
  echo "<h4> Cognome  : ". $cognome."</h4> ";
  echo "<h4> Nome     : ". $nome."</h4> ";
  echo "<h4> Indirizzo: ". $indirizzo."</h4> ";
  echo "<h4> Citta    : ". $citta."</h4> ";
  echo "<h4> Telefono    : ". $telefono."</h4> ";
  echo "<h4> Email    : ". $email."</h4> ";
  echo "<h4> Scelta   : ". $scelta."</h4> ";
  echo "<h4> Personalizzazione   : ". $personalizzazione."</h4> ";
  echo "<h4> Data consegna    : ". $dataconsegna."</h4> ";
  

     $db_host = "127.0.0.1";
     $db_user = "root";              
     $db_password = "";     //rootroot per btnami 
     $db_database = "pizzeriap";       

     $connessione=mysqli_connect($db_host,$db_user,$db_password,$db_database );

     if (!$connessione)
       {
       die('Attenzione non connesso: ' . mysqli_error());
       }


   $qu= ("insert into tbl_pizze
          values (null,
            '$cognome',
               '$nome',
          '$indirizzo',
              '$citta',
	      '$telefono',
              '$email',
             '$scelta',
	     '$personalizzazione',
	     '$dataconsegna',
              now()) ");
									 
   $risultato = mysqli_query($connessione,$qu);

   if(!$risultato)
	{
		echo("Errore: " . mysqli_error($connessione));
	}
	else
	{ echo "<p>******************************</p>"; 
      echo "<br>";
	  echo "<h2>inserimento effettuato</h2>";
	}

								 

mysqli_close($connessione);

      
?>
<br><br>
<a href="index.html"><h3>Torna alla home</h3></a>

</body>
</html>
