<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test programmeur</title>
</head>
<body>
    <form action="/test_programmeur/resultat.php" method="post">
<ul>
    <li>
      <label for="name">Nom&nbsp;:</label>
      <input type="text" id="name" name="user_name" />
    </li>
    <li>
      <label for="revenu">Revenu annuel&nbsp:</label>
      <input type="number" id="revenu" name="user_income" />
    </li>
    <li>
      <label for="travaux">Travaux réalisés&nbsp;:</label>
      <input type="number" id="travaux" name="user_works">
    </li>
    <li>
      <label for="dons">Don et mécénas&nbsp;:</label>
      <input type="number" id="dons" name="user_donation">
    </li>
  </ul>
  <div class="button">
  <button type="submit">Valider</button>
</div>

</form>
</body>
</html>





