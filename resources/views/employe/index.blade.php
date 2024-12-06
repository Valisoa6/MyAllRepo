<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ProjetLaravel</title>
    <!-- Datatable -->
    <link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('assets/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        .content-body{
            background-color: #35444A;
        }
        .ti-home{
            font-size: 25px;
            color: blue;
        }
        .pointage{
        font-size: 30px;
        }
        .color-dark {
            color: black;
        }
        .theade {
            font-size: 15px;
            background: whitesmoke;
        }
        .display {
            box-shadow: inset;
        }
        .modal-content {
            background: whitesmoke;
            box-shadow: dimgray;
            border-radius: 30px;
        }
        .modal {
                z-index: 1050; /* Bootstrap modal default z-index */
            }

            .modal-backdrop {
                z-index: 1040; /* Bootstrap modal backdrop default z-index */
            }

        .mb-3 {
            padding: 10px;
            border-radius: 15px;
        }
        .form-control {
            padding: 20px;
            border-radius: 15px;
        }
        .form-label {
            color:black;
        }
        td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .modal-content {
            background: whitesmoke;
            box-shadow: dimgray;
            border-radius: 30px;
        }
        .modal-header {
            background: #f8f9fa;
        }
        .modal-footer {
            background: #f1f1f1;
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
        <!--******************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
       <!-- confirmation -->
       <!-- debut message modal -->
         <!-- Modal pour confirmation de suppression -->
<!-- Modals -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation de Suppression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cet employé ?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="content-body bg-white">
    <div class="container-fluid">
        <!-- Employe Table -->
        <div class="card shadow mb-4">
            <div class="bg-white card-header p-3 d-flex justify-content-between align-items-center">
            <a href="/dashboard"><button type="button" class="btn btn-primary" ><i class="fa ti-share-alt">&nbsp;Retout</i></button></a>
                
                <h3 class="color-white">Les employés de la société</h3>
                
                <button type="button" class="btn btn-primary" onclick="resetForm()" data-toggle="modal" data-target=".bd-example-modal-lg">Nouveau <i class="ti-plus"></i></button>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                    <thead class="bg-warning">
                                        <tr>
                                            <th>N°</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Téléphone</th>
                                            <th>Fonction</th>
                                            <th>Sexe</th>
                                            <th>Adresse</th>
                                            <th>Foi</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($employes as $employe)
                                        <tr class="color-dark">
                                            <td><span>{{ $employe->id}}</span></td> <!-- Afficher l'ID utilisateur ou 'N/A' si l'utilisateur n'existe pas -->
                                            <td><span>{{ $employe->nom }}</span></td>
                                            <td><span> {{ $employe->prenom }}</span></td>
                                            <td><span>{{ $employe->phone }}</span></td>
                                            <td><span>{{ $employe->role }}</span></td>
                                            <td><span>{{ $employe->sexe }}</span></td>
                                            <td><span>{{ $employe->adresse }}</span></td>
                                            <td><span>{{ $employe->foi }}</span></td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="setForm({{ json_encode($employe) }})"><i class="ti-pencil-alt"></i></button>
                                                <a href="javascript:void(0)" class="btn btn-danger" onclick="confirmDelete('/employes/{{ $employe->id }}')"><i class="ti-trash"></i></a>
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

            <!-- Modal for Add/Edit Employee -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content bg-white">
                        <div class="modal-header">
                            <h5 class="text-center">Formulaire d'ajout/modification employé</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        </div>
                        <form id="formulaire" method="post" action="/employe">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="userId" class="form-label bi bi-person-fill">User :</label>
                                    <select class="form-control color-dark" name="userId" id="userId">
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                                    <small id="nomError" style="color: red; display: none;">Le nom doit contenir uniquement des lettres.</small>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
                                    <small id="prenomError" style="color: red; display: none;">Le prénom doit contenir uniquement des lettres.</small>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Téléphone" maxlength="10">
                                    <small id="phoneError" style="color: red; display: none;">Le téléphone doit contenir uniquement des chiffres et ne pas dépasser 10 chiffres.</small>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="role" id="role" placeholder="Rôle">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="sexe" id="sexe" placeholder="Sexe">
                                    <small id="sexeError" style="color: red; display: none;">Le sexe doit être soit "homme" soit "femme".</small>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="foi" id="foi" placeholder="Foi">
                                    <small id="foiError" style="color: red; display: none;">La foi doit contenir uniquement des lettres.</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary" id="submitButton">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function setForm(data) {
        console.log("Data received in setForm:", data);
        var form = document.getElementById("formulaire");
        var submitButton = document.getElementById("submitButton");

        form["userId"].value = data["userId"];
        form["nom"].value = data["nom"];
        form["prenom"].value = data["prenom"];
        form["phone"].value = data["phone"];
        form["role"].value = data["role"];
        form["sexe"].value = data["sexe"];
        form["adresse"].value = data["adresse"];
        form["foi"].value = data["foi"];
        form.action = "/employes-update/" + data["id"];

        // Change the button text to "Modifier"
        submitButton.textContent = "Modifier";
    }

    function resetForm() {
        console.log("Resetting form");
        var form = document.getElementById("formulaire");
        form.reset();
        form.action = "{{ route('employes') }}";
        document.getElementById("submitButton").textContent = "Ajouter";
    }

    function showSuccessAddModal() {
        Swal.fire({
            icon: 'success',
            title: 'Ajout Réussi',
            text: 'L\'employé a été ajouté avec succès !',
            confirmButtonText: 'OK'
        });
    }

    function showSuccessEditModal() {
        Swal.fire({
            icon: 'success',
            title: 'Modification Réussie',
            text: 'L\'employé a été modifié avec succès !',
            confirmButtonText: 'OK'
        });
    }

    function confirmDelete(actionUrl) {
        Swal.fire({
            title: 'Êtes-vous sûr ?',
            text: "Vous ne pourrez pas revenir en arrière !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimer !',
            cancelButtonText: 'Annuler'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm').action = actionUrl;
                document.getElementById('deleteForm').submit();
            }
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        console.log('Checking session status');
        @if(session('status') == 'added')
            showSuccessAddModal();
        @elseif(session('status') == 'edited')
            showSuccessEditModal();
        @elseif(session('status') == 'deleted')
            Swal.fire({
                icon: 'success',
                title: 'Suppression Réussie',
                text: 'L\'employé a été supprimé avec succès !',
                confirmButtonText: 'OK'
            });
        @endif
    });

    function toggleFullScreen() {
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen();
        } else {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            }
        }
    }
    //validations
    document.addEventListener('DOMContentLoaded', function () {
    const phoneInput = document.getElementById('phone');
    const nomInput = document.getElementById('nom');
    const prenomInput = document.getElementById('prenom');
    const foiInput = document.getElementById('foi');
    const sexeInput = document.getElementById('sexe');
    const form = document.getElementById('formulaire');
    
    const phoneError = document.getElementById('phoneError');
    const nomError = document.getElementById('nomError');
    const prenomError = document.getElementById('prenomError');
    const foiError = document.getElementById('foiError');
    const sexeError = document.getElementById('sexeError');

    // Allow only digits in the phone input
    phoneInput.addEventListener('input', function () {
        let value = phoneInput.value;
        phoneInput.value = value.replace(/\D/g, '');
    });

    // Allow only letters in the nom, prenom, and foi inputs
    nomInput.addEventListener('input', function () {
        let value = nomInput.value;
        nomInput.value = value.replace(/[^a-zA-Z\s]/g, '');  // Only allow letters and spaces
    });

    prenomInput.addEventListener('input', function () {
        let value = prenomInput.value;
        prenomInput.value = value.replace(/[^a-zA-Z\s]/g, '');  // Only allow letters and spaces
    });

    foiInput.addEventListener('input', function () {
        let value = foiInput.value;
        foiInput.value = value.replace(/[^a-zA-Z\s]/g, '');  // Only allow letters and spaces
    });

    // Form validation before submit
    form.addEventListener('submit', function (e) {
        let valid = true;

        // Validate phone length (must be exactly 10 digits)
        if (phoneInput.value.length !== 10) {
            phoneError.style.display = 'block';
            valid = false;
        } else {
            phoneError.style.display = 'none';
        }

        // Validate nom (must contain only letters)
        if (!/^[a-zA-Z\s]+$/.test(nomInput.value)) {
            nomError.style.display = 'block';
            valid = false;
        } else {
            nomError.style.display = 'none';
        }

        // Validate prenom (must contain only letters)
        if (!/^[a-zA-Z\s]+$/.test(prenomInput.value)) {
            prenomError.style.display = 'block';
            valid = false;
        } else {
            prenomError.style.display = 'none';
        }

        // Validate foi (must contain only letters)
        if (!/^[a-zA-Z\s]+$/.test(foiInput.value)) {
            foiError.style.display = 'block';
            valid = false;
        } else {
            foiError.style.display = 'none';
        }

        // Validate sexe (must be either "homme" or "femme")
        const sexeValue = sexeInput.value.toLowerCase().trim();
        if (sexeValue !== "homme" && sexeValue !== "femme") {
            sexeError.style.display = 'block';
            valid = false;
        } else {
            sexeError.style.display = 'none';
        }

        // Prevent form submission if validation fails
        if (!valid) {
            e.preventDefault();
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

     <!-- Datatable -->
     <script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>

</body>

</html>