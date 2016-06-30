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
  <form method="post" action="mood.php">
    <p>
      <label>Welk dier zou je nooit als huisdier willen hebben?</label>
      <input type="text" name="activity" />
    </p>
    
    <p>
      <label>Wie is de belangrijkste persoon in je leven?</label>
      <input type="text" name="instrument" />
    </p>

    <p>
      <label>In welk land zou je graag willen wonen?</label>
      <input type="text" name="land" />
    </p>

    <p>
      <label>Wat doe je als je je verveelt?</label>
      <input type="text" name="verveling" />
    </p>

    <p>
      <label>Met welk speelgoed speelde je als kind het meest?</label>
      <input type="text" name="speelgoed" />
    </p>

    <p>
      <label>Bij welke docent spijbel je het liefst?</label>
      <input type="text" name="docent" />
    </p>

    <p>
      <label>Als je $100.000.- had, wat zou je dan kopen?</label>
      <input type="text" name="kopen" />
    </p>

    <p>
      <label>Wat is je favoriete bezigheid?</label>
      <input type="text" name="bezigheid" />
    </p>

    <label>&nbsp;</label>
    <p>
      <input type="submit" value="Versturen" />
    </p>
    </div>
  </form>
</body>
</html>
