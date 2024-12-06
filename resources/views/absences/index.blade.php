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
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        .pointage{
            font-size: 30px;
        }
        label{
            color: black;
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
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Tavleau de bord</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./dashboard">Dashboard</a></li>dashboard
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Apps</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./absences">Absence</a></li>
                            <li><a href="./continue"><i class="ti-timer"></i> Pointage</a></li>
                            <li><a href="./employe"><i class="icon icon-single-04"></i>nos employés</a></li>
                            <li><a href="./conges">Congé</a></li>
                            <li><a href="./users"><i class="ti-user"></i> Users</a></li>
                            <li><a href="./rapport-pointage"><i class="ti-user"></i> Rapport de pointage</a></li>                   
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
        <div class="content-body">
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header p-3 d-flex justify-content-between align-items-center">
                <a href="/dashboard">
                    <button type="button" class="btn btn-primary">
                        <i class="fa ti-share-alt">&nbsp;Retour</i>
                    </button>
                </a>
                <h3 class="color-white">Page d'absence</h3>
                <button class="btn btn-success mb-3" data-toggle="modal" data-target="#addAbsenceModal">Ajouter une Absence</button>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Employé</th>
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
                                    <th>Raison</th>
                                    <th>Statut</th>
                                    <th>Prévus</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($absences as $absence)
                                <tr>
                                    <td>{{$absence->employe->id}}</td>
                                    <td>{{ $absence->employe->nom }} {{ $absence->employe->prenom }}</td>
                                    <td>{{ $absence->date_debut }}</td>
                                    <td>{{ $absence->date_fin ?? 'Non défini' }}</td>
                                    <td>{{ $absence->raison }}</td>
                                    <td>{{ ucfirst($absence->status) }}</td>
                                    <td>{{ $absence->is_prevu ? 'Oui' : 'Non' }}</td>
                                    <td>
                                        <!-- Bouton pour modifier l'absence (Ouvre le modal) -->
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#editAbsenceModal" 
                                            data-id="{{ $absence->id }}"
                                            data-date_debut="{{ $absence->date_debut }}"
                                            data-date_fin="{{ $absence->date_fin }}"
                                            data-raison="{{ $absence->raison }}"
                                            data-status="{{ $absence->status }}"
                                            data-is_prevu="{{ $absence->is_prevu }}">
                                            Modifier
                                        </button>

                                        <!-- Formulaire pour supprimer l'absence -->
                                        <form action="{{ route('absences.destroy', $absence->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form>
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
    </div>
</div>

<!-- Modal d'ajout d'absence -->
<div class="modal fade" id="addAbsenceModal" tabindex="-1" role="dialog" aria-labelledby="addAbsenceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAbsenceModalLabel">Ajouter une Absence</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('absences.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="employeId">Employé</label>
                        <select name="employeId" class="form-control" required>
                            @foreach($employes as $employe)
                            <option value="{{ $employe->id }}">{{ $employe->nom }} {{ $employe->prenom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date_debut">Date de début</label>
                        <input type="date" name="date_debut" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date_fin">Date de fin (optionnel)</label>
                        <input type="date" name="date_fin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="raison">Raison</label>
                        <input type="text" name="raison" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="is_prevu">Absence Prévue ?</label>
                        <select name="is_prevu" class="form-control" required>
                            <option value="0">Non</option>
                            <option value="1">Oui</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal de modification d'absence -->
<div class="modal fade" id="editAbsenceModal" tabindex="-1" role="dialog" aria-labelledby="editAbsenceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAbsenceModalLabel">Modifier l'Absence</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editAbsenceForm" action="" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="employeId">Employé</label>
                        <select name="employeId" id="edit_employeId" class="form-control" required>
                            @foreach($employes as $employe)
                            <option value="{{ $employe->id }}">{{ $employe->nom }} {{ $employe->prenom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date_debut">Date de début</label>
                        <input type="date" name="date_debut" id="edit_date_debut" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date_fin">Date de fin (optionnel)</label>
                        <input type="date" name="date_fin" id="edit_date_fin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="raison">Raison</label>
                        <input type="text" name="raison" id="edit_raison" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="is_prevu">Absence Prévue ?</label>
                        <select name="is_prevu" id="edit_is_prevu" class="form-control" required>
                            <option value="0">Non</option>
                            <option value="1">Oui</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script>
    $(document).ready(function() {
        $('#absenceTable').DataTable();

        // Pré-remplir le modal de modification avec les données
        $('#editAbsenceModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var date_debut = button.data('date_debut');
            var date_fin = button.data('date_fin');
            var raison = button.data('raison');
            var status = button.data('status');
            var is_prevu = button.data('is_prevu');

            var modal = $(this);
            modal.find('#edit_date_debut').val(date_debut);
            modal.find('#edit_date_fin').val(date_fin);
            modal.find('#edit_raison').val(raison);
            modal.find('#edit_is_prevu').val(is_prevu);

            // Définir l'action du formulaire de modification
            var action = "/absences/" + id;
            modal.find('form').attr('action', action);
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