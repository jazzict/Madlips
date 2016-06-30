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
 <h2> Onkunde </h2>

    <p>	Er zijn veel mensen die niet kunnen <?php echo $_POST ['kunnen'] ?>. Neem nou <?php echo $_POST ['persoon'] ?>.
    Zelfs met de hulp van een <?php echo $_POST ['vakantie'] ?> of zelfs <?php echo $_POST ['getal'] ?> kan <?php echo $_POST ['persoon'] ?> niet <?php echo $_POST ['kunnen'] ?>. 
	Dat heeft niet te maken met een gebrek aan <?php echo $_POST ['beste'] ?>, maar met een te veel aan <?php echo $_POST ['slechtste'] ?>.
	Te veel <?php echo $_POST ['slechtste'] ?> leidt tot <?php echo $_POST ['overkomen'] ?> en dat is niet goed als je wilt <?php echo $_POST ['kunnen'] ?>.
	Helaas voor <?php echo $_POST ['persoon'] ?>. </p>




   
</body>
</html>
