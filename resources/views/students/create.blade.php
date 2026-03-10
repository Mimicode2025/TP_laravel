<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Formulaire</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 40px; }
    form { display: flex; flex-direction: column; gap: 16px; width: 280px; }
    label { font-size: 14px; display: block; margin-bottom: 4px; }
    input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }
    button {
      padding: 10px;
      background: #4f46e5;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
    }
    button:hover { background: #4338ca; }
  </style>
</head>
<body>
  <form>
    <h2>Création</h2>

    <div>
      <label for="nom">Nom</label>
      <input type="text" id="nom" name="nom" />
    </div>

    <div>
      <label for="prenom">Prénom</label>
      <input type="text" id="prenom" name="prenom" />
    </div>

    <div>
      <label for="age">Âge</label>
      <input type="number" id="age" name="age" placeholder="25" min="0" />
    </div>

    <button type="submit">Créer</button>
  </form>
</body>
</html>