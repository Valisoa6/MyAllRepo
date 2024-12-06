<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ProjetLaravel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('assets/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
     <!-- Datatable -->
     <link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        .btn-sortie.disabled {
            background-color: green;
            color: white; /* Couleur du texte en blanc pour contraster */
            cursor: not-allowed; /* Change le curseur pour indiquer que le bouton est désactivé */
        }
        th{
            color: black;
        }
        h4{
            color: white;
        }
        h5{
            color: black;
        }
        .con{tent-body{
            background-color: #}35444A;
        }
        td{
            color: black;
        }
        .ti-loop{
            font-size: 20px;
        }
        .ti-eye{
            font-size: 25px;
        }
        .fa-sync{
            font-size: 15px;
        }
        .btn-custom {
        background-color: #f8f9fa;
        color: #333;
        border: 2px solid #007bff;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #007bff;
            color: white;
        }

        .btn-custom:focus {
            outline: none;
            box-shadow: none;
        }
        .kjkjsdsj{
            color: black;
        }
        .modal-content{
            width: 800px;
        }
        .ml-10 {
            margin-right: 20px;
        }
        .thead {
            font-size: 15px;
            background: whitesmoke;
        }
        .pointage{
            font-size: 30px;
        }
        .ti-home{
            font-size: 25px;
            color: white;
        }
        .btn-primary {
    background-color: #007bff;
    border-color: #0056b2;
    }

    .btn-primary:hover {
        background-color: #0056b2;
    }
    .current-date{
        color: white;
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
                                        <span class="ml-2">Profile </span>
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
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Apps</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./continue"><i class="ti-timer"></i>Pointage du jour</a></li>
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
    <div id="content" class="content-body">
    <div class="container-fluid">
        <div class="row mb-4">
                <button type="button"  id="myButton" class="btn btn-primary"><i class="fa ti-share-alt">&nbsp;Retour</i></button>
            <div class="col-12">
                <h3 id="current-date" class="text-center"></h3>
            </div>
        </div>
        
        <div class="row mb-4">
            <div class="col-12 text-center">
                <button id="showFormButton" class="btn-custom">Faire Pointage</button>&nbsp;&nbsp;
                <button id="resetTableButton" class="btn btn-success">Réinitialiser et enregistre les pointages</button>
            </div>
        </div>

        <div id="pointageFormContainer" class="card shadow mb-4" style="display:none;">
            <div class="card-header">
                <h3 class="card-title">Ajouter un Pointage</h3>
            </div>
            <div class="card-body">
                <form id="pointageForm">
                    <div class="form-group">
                        <label for="employee_id">Employé</label>
                        <select id="employee_id" name="employee_id" class="form-control" required>
                            <option value="">Sélectionnez un employé</option>
                            @foreach($employes as $employe)
                                <option value="{{ $employe->id }}" data-role="{{ $employe->role }}">{{ $employe->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="types_pointage">Type de Pointage</label>
                        <select id="types_pointage" name="types_pointage" class="form-control" required>
                            <option value="">Sélectionnez un type</option>
                            <option value="Matin">Matin</option>
                            <option value="Après-midi">Après-midi</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="ajouterPointageButton" class="btn btn-primary">Ajouter Pointage</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header">
                <h5 class="">fiche de pointage du jour</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead bg-warning">
                            <tr>
                                <th rowspan="2" class="text-center">Nom</th>
                                <th rowspan="2" class="text-center">Role</th>
                                <th rowspan="2" class="text-center">Date</th>
                                <th colspan="3" class="text-center">Matin</th>
                                <th colspan="3" class="text-center">Après-midi</th>
                                <th rowspan="2" class="text-center">Marque</th>
                            </tr>
                            <tr>
                                <th class="text-center">Entrée</th>
                                <th class="text-center">Sortie</th>
                                <th class="text-center">Absent</th>
                                <th class="text-center">Entrée</th>
                                <th class="text-center">Sortie</th>
                                <th class="text-center">Absent</th>
                            </tr>
                        </thead>
                        <tbody id="pointageTableBody">
                            @foreach($pointages as $pointage)
                                <tr data-id="{{ $pointage->id }}" data-type="{{ $pointage->types_pointage }}">
                                    <td>{{ $pointage->employe->nom }}</td>
                                    <td>{{ $pointage->employe->role }}</td>
                                    <td>{{ $pointage->date_pointage }}</td>
                                    <td>{{ $pointage->heure_entree_matin }}</td>
                                    <td>{{ $pointage->heure_sortie_matin ? \Carbon\Carbon::createFromFormat('H:i:s', $pointage->heure_sortie_matin)->format('H:i:s') : '-' }}</td>
                                    <td>
                                        <input type="checkbox" class="absence-matin-checkbox" data-id="{{ $pointage->id }}" {{ $pointage->absent_matin ? 'checked' : '' }}>
                                    </td>
                                    <td>{{ $pointage->heure_entree_apresmidi }}</td>
                                    <td>{{ $pointage->heure_sortie_apresmidi ? \Carbon\Carbon::createFromFormat('H:i:s', $pointage->heure_sortie_apresmidi)->format('H:i:s') : '-' }}</td>
                                    <td>
                                        <input type="checkbox" class="absence-apresmidi-checkbox" data-id="{{ $pointage->id }}" {{ $pointage->absent_apresmidi ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-sortie" data-id="{{ $pointage->id }}" data-type="{{ $pointage->types_pointage }}">Sortie</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //
    document.addEventListener("DOMContentLoaded", function () {
    const resetTableButton = document.getElementById("resetTableButton");
    const pointageTableBody = document.getElementById("pointageTableBody");

    // Fonction pour réinitialiser le tableau
    resetTableButton.addEventListener("click", function () {
        pointageTableBody.innerHTML = '';
        alert("Les données du tableau ont été effacées.");
    });
});
    //
document.addEventListener("DOMContentLoaded", function () {
    const pointageTableBody = document.getElementById("pointageTableBody");

    // Fonction pour ajouter les lignes au tableau
    function addRows(data) {
        data.forEach(pointage => {
            const newRow = document.createElement("tr");

            // Colonne pour Absent Matin
            const absentMatinTd = document.createElement("td");
            const absentMatinCheckbox = document.createElement("input");
            absentMatinCheckbox.type = "checkbox";
            absentMatinCheckbox.value = 1;
            absentMatinCheckbox.checked = pointage.absent_matin;

            // Désactiver si le type de pointage est Matin
            absentMatinCheckbox.disabled = pointage.types_pointage === "Matin";
            absentMatinTd.appendChild(absentMatinCheckbox);

            // Colonne pour Absent Après-midi
            const absentApresmidiTd = document.createElement("td");
            const absentApresmidiCheckbox = document.createElement("input");
            absentApresmidiCheckbox.type = "checkbox";
            absentApresmidiCheckbox.value = 1;
            absentApresmidiCheckbox.checked = pointage.absent_apresmidi;

            // Désactiver si le type de pointage est Après-midi
            absentApresmidiCheckbox.disabled = pointage.types_pointage === "Après-midi";
            absentApresmidiTd.appendChild(absentApresmidiCheckbox);

            // Colonne pour le bouton Sortie
            const sortieTd = document.createElement("td");
            const sortieButton = document.createElement("button");
            sortieButton.classList.add("btn", "btn-primary");
            sortieButton.textContent = "Sortie";
            sortieButton.addEventListener("click", function () {
                alert(`Sortie enregistrée pour ${pointage.nom_employe}`);
            });
            sortieTd.appendChild(sortieButton);

            // Remplissage de la ligne du tableau
            newRow.innerHTML = `
                <td>${pointage.nom_employe}</td>
                <td>${pointage.types_pointage}</td>
                <td>${pointage.date_pointage}</td>
                <td>${pointage.heure_entree_matin || '-'}</td>
                <td>${pointage.heure_sortie_matin || '-'}</td>
            `;

            newRow.appendChild(absentMatinTd);
            newRow.innerHTML += `
                <td>${pointage.heure_entree_apresmidi || '-'}</td>
                <td>${pointage.heure_sortie_apresmidi || '-'}</td>
            `;

            newRow.appendChild(absentApresmidiTd);
           
            newRow.appendChild(sortieTd);
            pointageTableBody.appendChild(newRow);
        });
    }

    // Gestion du formulaire de pointage
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const pointageForm = document.getElementById("pointageForm");
    const employeeSelect = document.getElementById("employee_id");
    const pointageFormContainer = document.getElementById("pointageFormContainer");
    const showFormButton = document.getElementById("showFormButton");

    // Afficher/Cacher le formulaire
    showFormButton.addEventListener("click", function () {
        pointageFormContainer.style.display = pointageFormContainer.style.display === 'none' ? 'block' : 'none';
    });

    // Soumission du formulaire
    pointageForm.addEventListener("submit", function (event) {
        event.preventDefault();  // Empêcher la soumission classique

        const formData = new FormData(pointageForm);

        fetch('/pointages', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
        })
            .then(response => response.ok ? response.json() : Promise.reject(response))
            .then(data => {
                // Ajouter une nouvelle ligne dans le tableau après soumission
                const newRow = document.createElement("tr");
                newRow.innerHTML = `
                    <td>${employeeSelect.options[employeeSelect.selectedIndex].text}</td>
                    <td>${employeeSelect.options[employeeSelect.selectedIndex].getAttribute('data-role')}</td>
                    <td>${data.date_pointage}</td>
                    <td>${data.heure_entree_matin || '-'}</td>
                    <td>${data.heure_sortie_matin || '-'}</td>
                    <td><input type="checkbox" ${data.absent_matin ? 'checked' : ''} disabled=${data.types_pointage === 'Matin'}></td>
                    <td>${data.heure_entree_apresmidi || '-'}</td>
                    <td>${data.heure_sortie_apresmidi || '-'}</td>
                    <td><input type="checkbox" ${data.absent_apresmidi ? 'checked' : ''} disabled=${data.types_pointage === 'Après-midi'}></td>
                    <td><button class="btn btn-warning btn-sortie" data-id="${data.id}" data-type="${data.types_pointage}">Sortie</button></td>
                `;
                pointageTableBody.appendChild(newRow);
                pointageForm.reset();  // Réinitialiser le formulaire
                pointageFormContainer.style.display = 'none';  // Cacher le formulaire
            })
            .catch(error => {
                console.error('Erreur lors de la soumission : ', error);
                alert('Erreur lors de la soumission : ' + error.message);
            });
    });

    // Gestion des boutons de sortie
    pointageTableBody.addEventListener("click", function (event) {
        if (event.target.classList.contains("btn-sortie")) {
            const button = event.target;
            const pointageId = button.getAttribute("data-id");
            const pointageType = button.getAttribute("data-type");

            button.disabled = true;
            button.classList.add("disabled");
            localStorage.setItem(`pointage_${pointageId}`, "disabled");

            fetch(`/pointages/${pointageId}/sortie`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    type: pointageType
                })
            })
                .then(response => response.ok ? response.json() : Promise.reject(response))
                .then(data => {
                    const row = button.closest("tr");
                    if (pointageType === "Matin") {
                        row.children[4].textContent = data.heure_sortie_matin;  // Mise à jour sortie matin
                    } else {
                        row.children[7].textContent = data.heure_sortie_apresmidi;  // Mise à jour sortie après-midi
                    }
                })
                .catch(error => {
                    console.error('Erreur lors de la sortie : ', error);
                    alert('Erreur lors de la sortie : ' + error.message);
                });
        }
    });

    // Vérification de l'état des boutons lors du chargement
    const buttons = pointageTableBody.querySelectorAll(".btn-sortie");
    buttons.forEach(button => {
        const pointageId = button.getAttribute("data-id");
        if (localStorage.getItem(`pointage_${pointageId}`) === "disabled") {
            button.disabled = true;
            button.classList.add("disabled");
        }
    });

    // Affichage de la date actuelle
    const dateElement = document.getElementById('current-date');
    const currentDate = new Date().toLocaleDateString('fr-FR', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
    dateElement.textContent = `Pointage du ${currentDate}`;
});
//
document.getElementById('myButton').addEventListener('click', function() {
        fetch('/dashboard')
            .then(response => response.text())
            .then(data => {
                document.getElementById('content').innerHTML = data; // Met à jour le contenu sans recharger la page
            })
            .catch(error => console.error('Erreur:', error));
    });
</script>

    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>

    
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

     <!-- Datatable -->
     <script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>

</body>

</html>