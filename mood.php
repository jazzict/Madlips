<html>
<head>
  <title>Formulier</title>
  <link href="style1.css" rel="stylesheet" type="text/css" />
</head>

<body>

<h1> Mad Lips </h1>
<div class="all">
<ul>
  <li> <a href="form.php">Er heerst paniek.. </a></li>
  <li><a href="onkunde.php">Onkunde </a></li>
</ul>
 <h2> Er heerst paniek </h2>
   <p> Er heerst paniek in het koninkrijk <?php echo $_POST ['land'] ?>.</p>
<p>Koning <?php echo $_POST ['instrument'] ?> is ten einde raad en als koning <?php echo $_POST ['instrument'] ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST ['docent'] ?> .</p>

<p>"<?php echo $_POST ['docent'] ?>! Het is een ramp! Het is een schande!"</p>
<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
<p>"Mijn <?php echo $_POST ['activity'] ?> is verdwenen! Zo maar, zonder waarschuwing.</p>
<p>En ik had net <?php echo $_POST ['speelgoed'] ?> voor hem gekocht!"</p>
<p>"Majesteit, uw <?php echo $_POST ['activity'] ?> komt vast vanzelf weer terug?"</p>
<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd 
<?php echo $_POST ['verveling'] ?> leren?"</p>
<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST ['kopen'] ?>! voor gebruiken."</p>
<p>"<?php echo $_POST ['docent'] ?>!, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
<p>"<?php echo $_POST ['bezigheid'] ?>, Sire."</p>
</body>
</html>
