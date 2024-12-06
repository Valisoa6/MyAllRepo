
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>projetLaravel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('assets/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <style>
        .modal-content{
            width: 650px;
        }
        .valisoa {
            max-width: 1505px; /* Largeur maximale du conteneur */
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
        #absenceCount{
            font-size: 30px;
            color: black;
        }
        .submit-button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(to right, #4CAF50, #00BCD4);
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 15px;
            text-align: center;
        }
/* Dashboard Global Styles */
.dashboard-container {
    padding: 20px;
    border-radius: 25px; 
    font-family: 'Arial', sans-serif;
    color: black;

}
.petita{
    font-size: 20px;
}
.chart svg {
    width: 100px;
    height: 100px;
}
.modal-header {
    background-color: #f8f9fa; /* Couleur d'arrière-plan */
}

.modal-title {
    font-weight: bold; /* Gras pour le titre */
}

.table {
    margin-bottom: 0; /* Élimine l'espace en bas de la table */
}

.overview {
    display: flex;
    justify-content: space-between;
    margin-bottom: 30px;
    height: 230px;
}
.employee-avatar {
    width: 50px; /* Ajuster la largeur de l'avatar */
    height: 50px;
    border-radius: 50%; /* Rendre l'image ronde */
    object-fit: cover; /* Ajuster l'image si elle dépasse les dimensions */
}


.card {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: white;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 520px;
}

.collaborators-card {
    width: 45%;
}

.chart {
    width: 45%;
}

h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.number {
    font-size: 2.5em;
    color: #007bff;
}

/* Donut Chart Styles */
.donut-chart {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.circular-chart {
    width: 100px;
    height: 100px;
    transform: rotate(-90deg);
}

.circle-bg {
    fill: none;
    stroke: #e0e0e0;
    stroke-width: 3.8;
}

.circle {
    fill: none;
    stroke-width: 3.8;
    stroke-linecap: round;
    stroke: #ff6347;
    animation: progress 1s ease-out forwards;
}

@keyframes progress {
    0% { stroke-dasharray: 0 100; }
}

.chart-label {
    position: absolute;
    font-size: 1.2em;
    font-weight: bold;
    color: #333;
}

.presence-details {
    margin-top: 15px;
    list-style: none;
    padding: 0;
}

.presence-details li {
    font-size: 1em;
    margin-bottom: 8px;
}

/* Employee List Styles */
.employee-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.employee-card {
    width: calc(33.33% - 20px);
    background-color: white;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 15px;
    text-align: center;
    transition: transform 0.3s;
}

.employee-card:hover {
    transform: scale(1.05);
}

.employee-info {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
}

.employee-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin-right: 15px;
}

.employee-details {
    text-align: left;
}

.employee-name {
    font-size: 1.2em;
    font-weight: bold;
    color: #333;
}

.employee-role {
    font-size: 0.9em;
    color: #777;
}

.employee-times {
    text-align: left;
}
i{
    font-size:20px;
}
.time-entry, .time-exit {
    font-size: 14px;
    color: #555;
}

.time-entry i, .time-exit i {
    color: #28a745;
    margin-right: 5px;
}

/* Responsive */
@media screen and (max-width: 768px) {
    .employee-card {
        width: calc(50% - 20px);
    }

    .overview {
        flex-direction: column;
    }

    .card, .chart {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        width: 300px;
    }
}

@media screen and (max-width: 480px) {
    .employee-card {
        width: 100%;
    }
}

    </style>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('assets/images/logo.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('assets/images/logo-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('assets/images/logo-text.png') }}" alt="">
            </a>
            
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        <p onclick="toogleFullScreen()" class="p-5 mt-4"><i class="ti-fullscreen"></i></p>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="mt-3">
                                    @if(Auth::check())
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="submit-button">Se déconnecter</button>
                                    </form>
                                @endif
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            
                            
                            <li class="nav-item dropdown header-profile">
                                
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Pointage </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                ></i><span class="nav-text">Dashboard</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./dashboard"><i class="ti-bar-chart-alt"></i> Dashboard</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">Apps</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./continue"><i class="ti-timer"></i> Pointage</a></li>
                            <li><a href="./employe"><i class="icon icon-single-04"></i>nos employés</a></li>
                            <li><a href="./conges">Congé</a></li>
                            <li><a href="./users"><i class="ti-user"></i> Users</a></li>
                            <li><a href="./rapport-pointage"><i class="ti-user"></i> Rapport de pointage</a></li> 
                            <li><a href="./absences">Absence</a></li>                            
                        </ul>
                    </li>   
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body bg-white">
    <div class="container-fluid">
        <div class="dashboard-container">
              <!-- Modal -->
                    <div class="modal fade" id="employeeDetailModal" tabindex="-1" aria-labelledby="employeeDetailModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="employeeDetailModalLabel">Détails de l'employé</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center">
                                        <img id="employee-avatar" src="" alt="Avatar de l'employé" class="rounded-circle" style="width: 100px; height: 100px;">
                                    </div>
                                    <div id="employee-details-view">
                                        <p><strong>Nom:</strong> <span id="employee-name-view"></span></p>
                                        <p><strong>Prénom:</strong> <span id="employee-prenom-view"></span></p>
                                        <p><strong>Téléphone:</strong> <span id="employee-phone-view"></span></p>
                                        <p><strong>Rôle:</strong> <span id="employee-role-view"></span></p>
                                        <p><strong>Sexe:</strong> <span id="employee-sexe-view"></span></p>
                                        <p><strong>Adresse:</strong> <span id="employee-adresse-view"></span></p>
                                        <p><strong>Foi:</strong> <span id="employee-foi-view"></span></p>
                                    </div>
                                    <form id="employee-details-form" style="display: none;">
                                        <div class="mb-3">
                                            <label for="employee-name" class="form-label">Nom</label>
                                            <input type="text" class="form-control" id="employee-name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="employee-prenom" class="form-label">Prénom</label>
                                            <input type="text" class="form-control" id="employee-prenom" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="employee-phone" class="form-label">Téléphone</label>
                                            <input type="text" class="form-control" id="employee-phone" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="employee-role" class="form-label">Rôle</label>
                                            <input type="text" class="form-control" id="employee-role" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="employee-sexe" class="form-label">Sexe</label>
                                            <input type="text" class="form-control" id="employee-sexe" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="employee-adresse" class="form-label">Adresse</label>
                                            <input type="text" class="form-control" id="employee-adresse" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="employee-foi" class="form-label">Foi</label>
                                            <input type="text" class="form-control" id="employee-foi" required>
                                        </div>
                                        <input type="hidden" id="employee-id">
                                        <button type="button" class="btn btn-primary" onclick="updateEmployeeDetails()">Sauvegarder</button>
                                    </form>
                                    <button class="btn btn-info" id="edit-button" onclick="enableEditing()" style="margin-top: 10px;">
                                    <i class="ti-pencil-alt">&nbsp;Modifier</i>
                                    </button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Modal -->
                    <div class="overview">
                        <div class="card col-3 bg-info">
                            <h2>NOS EMPLOYES</h2>
                            <a href="/employe" class="number">{{ $totalEmployees }}</a>
                        </div>&nbsp;&nbsp;&nbsp;
                        <div class="card col-3 bg-success">
                            <h2>LES PERSONNES EN CONGES</h2>
                            <a href="/conges" class="number">8</a>
                        </div>&nbsp;&nbsp;
                        <div class="card col-3 bg-warning">
                            <h2>Absences d'Aujourd'hui</h2>
                            <p>
                                <a href="#" id="absenceCount" data-toggle="modal" data-target="#absenceModal">
                                    {{ $absences->count() }} absences aujourd'hui
                                </a>
                            </p>
                        </div>&nbsp;&nbsp;&nbsp;
                        <div class="card d-flex bg-gradient-warning">
                            <div class="chart">
                                <h2>Présence</h2>
                                <div class="donut-chart">
                                    <svg viewBox="0 0 36 36" class="circular-chart orange">
                                        <path class="circle-bg"
                                            d="M18 2.0845
                                                a 15.9155 15.9155 0 0 1 0 31.831
                                                a 15.9155 15.9155 0 0 1 0 -31.831" />
                                        <path class="circle"
                                            stroke-dasharray="{{ $presencePercentage }}, 100"
                                            d="M18 2.0845
                                                a 15.9155 15.9155 0 0 1 0 31.831
                                                a 15.9155 15.9155 0 0 1 0 -31.831" />
                                    </svg>
                                    <div class="chart-label">
                                        <p>{{ $presencePercentage }}%</p>
                                    </div>
                                </div>
                                <ul>
                                    <li>Présent: {{ $presentEmployees }} Employés</li>
                                    <li>Absent: {{ $absentEmployees }} Employés</li>
                                    <li>Total: {{ $totalEmployees }} Employés</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- graph -->
                    <div class="valisoa">
                    <h2>Graphique des absences par employé dans un mois</h2>

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
                    <canvas id="absenceChart" width="700" height="150"></canvas>
                 <!-- fin graph -->
                </div>

                    <!-- Modal pour afficher les détails des absences -->
                    <div class="modal fade" id="absenceModal" tabindex="-1" role="dialog" aria-labelledby="absenceModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="absenceModalLabel">Détails des absences</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <ul id="absenceList">
                                        @foreach($absences as $absence)
                                            <li>
                                                <strong>ID:</strong> {{ $absence->employe->id }} - 
                                                <strong>Nom:</strong> {{ $absence->employe->nom }} {{ $absence->employe->prenom }} absent ajourd'hui
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- graphique -->
             
            <h3 class="text-center">Les employés pointés ce jours</h3>
            <div class="employee-list">
                @foreach($pointages as $pointage)
                    <div class="employee-card">
                        <div class="employee-info">
                            @if($pointage->employe->image)
                                <img src="{{ asset($pointage->employe->image) }}" 
                                     alt="Avatar de l'employé" 
                                     class="employee-avatar" 
                                     data-id="{{ $pointage->employe->id }}" 
                                     onclick="showEmployeeDetails(this)">
                            @else
                                <img src="{{ $pointage->employe->sexe == 'homme' ? '/images/avatar-homme.png' : '/images/avatar-femme.png' }}" 
                                     alt="Avatar de l'employé" 
                                     class="employee-avatar" 
                                     data-id="{{ $pointage->employe->id }}" 
                                     onclick="showEmployeeDetails(this)">
                            @endif
                            <div class="employee-details">
                                <p>{{ $pointage->employe->nom }}</p>
                                <p>{{ $pointage->employe->role }}</p>
                            </div>
                        </div>
                        <div class="employee-times">
                            <div class="time-entry">
                                <i class="icon-entry"></i>
                                Entrée (Matin): {{ $pointage->heure_entree_matin ?? 'N/A' }}
                            </div>
                            <div class="time-exit">
                                <i class="icon-exit"></i>
                                Sortie (Matin): {{ $pointage->heure_sortie_matin ? \Carbon\Carbon::createFromFormat('H:i:s', $pointage->heure_sortie_matin)->format('H:i') : '-' }}
                            </div>
                            <div class="time-entry">
                                <i class="icon-entry"></i>
                                Entrée (Après-midi): {{ $pointage->heure_entree_apresmidi ?? 'N/A' }}
                            </div>
                            <div class="time-exit">
                                <i class="icon-exit"></i>
                                Sortie (Après-midi): {{ $pointage->heure_sortie_apresmidi ? \Carbon\Carbon::createFromFormat('H:i:s', $pointage->heure_sortie_apresmidi)->format('H:i') : '-' }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Assurez-vous que jQuery et Bootstrap JS sont inclus -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
function enableEditing() {
    // Afficher le formulaire et masquer la vue des détails
    document.getElementById('employee-details-form').style.display = 'block';
    document.getElementById('employee-details-view').style.display = 'none';
    document.getElementById('edit-button').style.display = 'none'; // Masquer le bouton Modifier
}

function showEmployeeDetails(element) {
    const employeeId = element.getAttribute('data-id');

    // Effectuer une requête AJAX pour obtenir les détails de l'employé
    fetch(`/employe/${employeeId}`)
        .then(response => response.json())
        .then(data => {
            // Remplir les détails dans la vue
            document.getElementById('employee-id').value = data.id; // Ajouter l'ID de l'employé
            document.getElementById('employee-name-view').innerText = data.nom;
            document.getElementById('employee-prenom-view').innerText = data.prenom;
            document.getElementById('employee-phone-view').innerText = data.phone;
            document.getElementById('employee-role-view').innerText = data.role;
            document.getElementById('employee-sexe-view').innerText = data.sexe;
            document.getElementById('employee-adresse-view').innerText = data.adresse;
            document.getElementById('employee-foi-view').innerText = data.foi;

            // Remplir le formulaire pour l'édition
            document.getElementById('employee-name').value = data.nom;
            document.getElementById('employee-prenom').value = data.prenom;
            document.getElementById('employee-phone').value = data.phone;
            document.getElementById('employee-role').value = data.role;
            document.getElementById('employee-sexe').value = data.sexe;
            document.getElementById('employee-adresse').value = data.adresse;
            document.getElementById('employee-foi').value = data.foi;

            // Afficher l'avatar de l'employé
            const avatarUrl = data.image ? data.image : (data.sexe === 'homme' ? '/images/avatar-homme.png' : '/images/avatar-femme.png');
            document.getElementById('employee-avatar').src = avatarUrl;

            // Afficher la modal
            $('#employeeDetailModal').modal('show');
        })
        .catch(error => console.error('Erreur:', error));
}

function updateEmployeeDetails() {
    const csrfTokenElement = document.querySelector('meta[name="csrf-token"]');
    if (!csrfTokenElement) {
        console.error('CSRF token not found');
        return; // Sortir de la fonction si le token n'est pas trouvé
    }
    const employeeId = document.getElementById('employee-id').value;
    const updatedData = {
        nom: document.getElementById('employee-name').value,
        prenom: document.getElementById('employee-prenom').value,
        phone: document.getElementById('employee-phone').value,
        role: document.getElementById('employee-role').value,
        sexe: document.getElementById('employee-sexe').value,
        adresse: document.getElementById('employee-adresse').value,
        foi: document.getElementById('employee-foi').value
    };

    // Effectuer une requête AJAX pour mettre à jour les détails de l'employé
    fetch(`/employe/${employeeId}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfTokenElement.getAttribute('content') // Accéder au token ici
        },
        body: JSON.stringify(updatedData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Actualiser l'affichage dans la liste des employés, si nécessaire
            $('#employeeDetailModal').modal('hide'); // Fermer la modal
            location.reload(); // Recharger la page pour afficher les données mises à jour
        } else {
            console.error('Erreur de mise à jour:', data.message);
        }
    })
    .catch(error => console.error('Erreur:', error));
}


        function toogleFullScreen(){
        if (!document.fullscreenElement){
            document.documentElement.requestFullscreen();
        }else {
            if(document.exitFullscreen){
                document.exitFullscreen();
            }
        }
    };
    $(document).ready(function() {
    // Lorsque le lien avec l'identifiant 'absenceCount' est cliqué, ouvrir le modal
    $('#absenceCount').on('click', function() {
        // Réinitialiser le contenu du modal
        $('#modalAbsencesBody').empty(); // Vider le contenu du modal avant de le remplir
        $('#modalTitle').text('Détails des Absences'); // Titre du modal

        // Appel AJAX pour récupérer les données des absences
        $.ajax({
            url: '/absences', // Remplacez par l'URL de votre API pour récupérer les données d'absence
            method: 'GET',
            success: function(data) {
                // Vérifier si des absences ont été retournées
                if (data.length > 0) {
                    // Parcourir chaque absence et ajouter au modal
                    data.forEach(function(absence) {
                        $('#modalAbsencesBody').append(`
                            <div class="absence-item">
                                <strong>ID Employé :</strong> ${absence.employeId}<br>
                                <strong>Nom :</strong> ${absence.nom}<br>
                                <strong>Raison :</strong> ${absence.raison}<br>
                                <hr>
                            </div>
                        `);
                    });
                } else {
                    $('#modalAbsencesBody').append('<p>Aucune absence enregistrée aujourd\'hui.</p>');
                }

                // Ouvrir le modal
                $('#modalAbsences').modal('show');
            },
            error: function(xhr, status, error) {
                console.error("Erreur lors de la récupération des données : ", error);
                $('#modalAbsencesBody').append('<p>Une erreur est survenue lors du chargement des absences.</p>');
                $('#modalAbsences').modal('show');
            }
        });
    });
});

    $(document).ready(function() {
    // Lorsque le bouton Show est cliqué
    $('#absenceList').on('click', 'button', function() {
        // Récupérer les données associées à l'employé
        const id = $(this).data('id');
        const nom = $(this).data('nom');
        const prenom = $(this).data('prenom');
        const role = $(this).data('role');
        const raison = $(this).data('raison');

        // Afficher les informations dans le modal
        $('#fullDetails').html(`
            <strong>ID:</strong> ${id} <br>
            <strong>Nom:</strong> ${nom} ${prenom} <br>
            <strong>Fonction:</strong> ${role ? role : 'Non défini'} <br>
            <strong>Raison de l'absence:</strong> ${raison}
        `);
    });
});
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
                label: 'Nombre d\'absents',
                data: absencesCount,
                borderColor: 'rgba(75, 192, 192, 2)',
                borderWidth: 2,
                fill: false
            }]
        },
        options: {
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'ID Employé' // Légende pour l'axe des X (ID Employé)
                    }
                },
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Nombre d\'absents' // Légende pour l'axe des Y (Nombre d'absents)
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top', // Vous pouvez mettre 'top', 'bottom', 'left', ou 'right' selon vos préférences
                    labels: {
                        boxWidth: 10,
                        font: {
                            size: 12
                        }
                    }
                }
            }
        }
    });
});
     </script>
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <!-- Vectormap -->
    <script src="{{ asset('assets/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gaugeJS/dist/gauge.min.js') }}"></script>
    <!--  flot-chart js -->
    <script src="{{ asset('assets/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendor/flot/jquery.flot.resize.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-bar-demo.js') }}"></script>
</body>
</html>