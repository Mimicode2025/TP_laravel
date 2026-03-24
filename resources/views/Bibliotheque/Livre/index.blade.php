<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Livres - Bibliothèque</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #eee;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        h1 {
            margin: 0;
            color: #2c3e50;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .btn:hover {
            background-color: #2980b9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            text-align: left;
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f9fa;
            color: #7f8c8d;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            background-color: #e1f5fe;
            color: #0288d1;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
        }
        .btn-edit { background-color: #f1c40f; color: #fff; }
        .btn-delete { background-color: #e74c3c; color: #fff; }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Livres Disponibles</h1>
            <a href="{{ route('livres.create') }}" class="btn">Ajouter un livre</a>
        </header>

        @if(session('success'))
            <div style="padding: 15px; background-color: #d4edda; color: #155724; border-radius: 5px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($livres as $livre)
                <tr>
                    <td><strong>{{ $livre->isbn }}</strong></td>
                    <td>{{ $livre->title }}</td>
                    <td>{{ $livre->auteur }}</td>
                    <td><span class="badge">{{ $livre->categorie->name ?? 'N/A' }}</span></td>
                    <td class="actions">
                        <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-sm btn-edit">Modifier</a>
                        <form action="{{ route('livres.destroy', $livre->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-delete" onclick="return confirm('Supprimer ce livre ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" style="text-align:center; padding: 30px; color: #95a5a6;">
                        Aucun livre trouvé dans la bibliothèque.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>