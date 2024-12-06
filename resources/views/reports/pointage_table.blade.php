<!-- resources/views/reports/pointage_table.blade.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapport de Pointage</title>
    <!-- Liens pour les styles CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }

        .header img {
            max-width: 150px;
        }

        .header h1 {
            font-size: 24px;
            margin: 10px 0;
        }

        .header h2 {
            font-size: 18px;
            margin: 5px 0;
        }

        .table-responsive {
            width: 100%;
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
        }

        /* Styles pour l'impression */
        @media print {
            body {
                padding: 0;
                margin: 0;
            }

            .table-responsive {
                page-break-inside: auto;
            }

            table {
                page-break-inside: auto;
                page-break-after: auto;
            }

            tr {
                page-break-inside: avoid;
                page-break-after: auto;
            }

            thead {
                display: table-header-group;
            }

            tfoot {
                display: table-footer-group;
            }
        }
    </style>
</head>

<body>

    <!-- En-tête avec logo et titre -->
    <div class="header">
        <!-- Titre principal -->
        <h1>Tout les employés dans la société Lazan'i Betsileo</h1>

        <!-- Sous-titre (Mois sélectionné) -->
        <h2>Rapport de Pointage - Mois de {{ date('F Y', strtotime($month)) }}</h2>
    </div>

    <!-- Tableau de données des employés -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Fonction</th>
                    <th>Total Heures</th>
                    <th>Jours de Congé</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employes as $employe)
                    <tr>
                        <td>{{ $employe['nom'] }}</td>
                        <td>{{ $employe['prenom'] }}</td>
                        <td>{{ $employe['role'] }}</td>
                        <td>{{ $employe['total_hours'] }}</td>
                        <td>{{ $employe['days_off'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pied de page -->
    <div class="footer">
        <p><strong>Rapport généré automatiquement par le système de pointage</strong></p>
    </div>

</body>

</html>
