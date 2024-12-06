<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphique des Absences</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .container {
            max-width: 800px; /* Largeur maximale du conteneur */
            margin: 0 auto; /* Centrer le conteneur */
            padding: 20px; /* Espacement interne */
            border: 1px solid #ddd; /* Bordure autour du conteneur */
            border-radius: 5px; /* Coins arrondis */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
            background-color: #f9f9f9; /* Couleur de fond */
        }

        h2 {
            text-align: center; /* Centrer le titre */
            color: #333; /* Couleur du texte */
        }

        .btn {
            display: block; /* Centrer le bouton */
            margin: 0 auto; /* Centrer le bouton */
            background-color: #007bff; /* Couleur du bouton */
            color: white; /* Couleur du texte du bouton */
            padding: 10px 20px; /* Espacement interne */
            border: none; /* Enlever la bordure */
            border-radius: 5px; /* Coins arrondis */
            cursor: pointer; /* Curseur en main */
        }

        .btn:hover {
            background-color: #0056b3; /* Couleur au survol */
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Graphique des absences par employé</h2>

    <!-- Formulaire de sélection du mois -->
    <form action="{{ route('afficherGraphiqueAbsences') }}" method="GET">
        <label for="mois">Sélectionnez un mois :</label>
        <select name="mois" id="mois">
            @for ($i = 1; $i <= 12; $i++)
                <option value="{{ $i }}" {{ $moisSelectionne == $i ? 'selected' : '' }}>
                    {{ \Carbon\Carbon::create()->month($i)->format('F') }}
                </option>
            @endfor
        </select>
        <button type="submit" class="btn btn-primary">Voir le graphique</button>
    </form>

    <!-- Canvas pour le graphique -->
    <canvas id="absenceChart" width="300" height="150"></canvas>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var absencesParEmploye = @json($absencesParEmploye);

            var employeIds = absencesParEmploye.map(function(absence) {
                return absence.employeId;
            });
            var absencesCount = absencesParEmploye.map(function(absence) {
                return absence.total_absences;
            });

            var ctx = document.getElementById('absenceChart').getContext('2d');
            var absenceChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: employeIds,
                    datasets: [{
                        label: 'Nombre d\'absences',
                        data: absencesCount,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'ID Employé'
                            }
                        },
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Nombre d\'absences'
                            }
                        }
                    }
                }
            });
        });
    </script>
</div>
</body>
</html>
