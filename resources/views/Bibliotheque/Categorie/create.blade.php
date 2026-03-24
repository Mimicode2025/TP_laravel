<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Créer une Catégorie de Livre</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 40px; background-color: #f9fafb; }
    form { 
      display: flex; 
      flex-direction: column; 
      gap: 16px; 
      width: 320px; 
      background: white; 
      padding: 24px; 
      border-radius: 8px; 
      box-shadow: 0 1px 3px rgba(0,0,0,0.1); 
    }
    h2 { margin-top: 0; color: #111827; font-size: 1.25rem; }
    label { font-size: 14px; font-weight: 600; display: block; margin-bottom: 4px; color: #374151; }
    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #d1d5db;
      border-radius: 4px;
      font-size: 14px;
      box-sizing: border-box; /* Évite que l'input dépasse du form */
    }
    input:focus { outline: 2px solid #4f46e5; border-color: transparent; }
    button {
      padding: 10px;
      background: #4f46e5;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
      font-weight: 500;
      transition: background 0.2s;
    }
    button:hover { background: #4338ca; }
    .help-text { font-size: 11px; color: #6b7280; margin-top: 4px; }
  </style>
</head>
<body>

  <form action="{{ route('categories.store') }}" method="POST">
    @csrf <h2>Nouvelle Catégorie</h2>

    <div>
      <label for="code">Code de la catégorie</label>
      <input 
        type="text" 
        id="code" 
        name="code" 
        maxlength="10" 
        placeholder="ex: ROM-01" 
        required 
      />
      <div class="help-text">Max 10 caractères, doit être unique.</div>
    </div>

    <div>
      <label for="name">Nom de la catégorie</label>
      <input 
        type="text" 
        id="name" 
        name="name" 
        maxlength="100" 
        placeholder="ex: Science-Fiction" 
        required 
      />
    </div>

    <button type="submit">Enregistrer la catégorie</button>
  </form>

</body>
</html>
