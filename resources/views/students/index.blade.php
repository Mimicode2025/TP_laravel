<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ROGG|Students</title>
	<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #f4f6f9;
        padding: 40px;
    }

    table {
        width: 100%;
        max-width: 800px;
        margin: auto;
        border-collapse: collapse;
        background-color: #ffffff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        border-radius: 8px;
        overflow: hidden;
    }

    thead {
        background-color: #2c3e50;
        color: white;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
    }

    th {
        font-weight: bold;
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 0.5px;
    }

    tbody tr {
        border-bottom: 1px solid #eeeeee;
    }

    tbody tr:nth-child(even) {
        background-color: #f9fafb;
    }

    tbody tr:hover {
        background-color: #eef2f7;
        transition: 0.2s;
    }
</style>
</head>
<body>
	{{-- <div class="container">
		<header>
			<div class="brand">
				<div class="logo">R</div>
				<div>
					<div style="font-weight:700">Rogg App</div>
					<div style="font-size:12px;color:var(--muted)">Tableau de bord minimal</div>
				</div>
			</div>
			<nav>
				<a href="#">Accueil</a>
				<a href="#features">Fonctionnalités</a>
				<a href="#contact">Contact</a>
			</nav>
		</header>

		<section class="hero">
			<h1>Bienvenue sur votre tableau de bord</h1>
			<p>Interface simple créée dans le fichier home.blade.php — modifiez-la librement pour vos besoins.</p>
			<div class="actions">
				<button class="btn">Commencer</button>
				<button class="btn ghost">En savoir plus</button>
			</div>

			<div id="features" class="grid">
				<div class="card">
					<h3>Rapide</h3>
					<p style="color:var(--muted);margin:0">Conçue pour être légère et responsive.</p>
				</div>
				<div class="card">
					<h3>Personnalisable</h3>
					<p style="color:var(--muted);margin:0">Modifiez le style et le contenu depuis Blade.</p>
				</div>
				<div class="card">
					<h3>Intégration Laravel</h3>
					<p style="color:var(--muted);margin:0">Placez ce fichier dans vos routes pour l'afficher.</p>
				</div>
			</div>
		</section>

		<footer id="contact">
			© {{ date('Y') }} Rogg — Besoin d'aide ? Ouvrez une issue.
		</footer>
	</div> --}}
    <table>

        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Âge</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student['name'] }}</td>
                    <td>{{ $student['firstname'] }}</td>
                    <td>{{ $student['age'] }}</td>
                    <td>{{ $student['age'] < 18 ? 'Mineur' : 'Majeur' }}</td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>

