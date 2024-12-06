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
    <link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inclure SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Inclure jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Inclure Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <style>
        .pointage {
            font-size: 30px;
        }
        .content-body{
            background-color: #35444A;
        }
    </style>
</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">
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
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
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
        <div class="content-body bg-white">
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class=" card-header p-3 d-flex justify-content-between align-items-center">
            <a href="/dashboard"><button type="button" class="btn btn-primary" ><i class="fa ti-share-alt">&nbsp;Retout</i></button></a>
                <h3 class="color-white">Page congés</h3>
                <button type="button" class="btn btn-primary" onclick="resetForm()" data-toggle="modal" data-target=".bd-example-modal-lg">Nouveau</button>
            </div>
        </div>

        <!-- Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title ">Liste des employés en congés</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead class="bg-warning">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Date de début</th>
                                        <th>Date de fin</th>
                                        <th>Raison</th>
                                        <th>Nombre de jours</th>
                                        <th>Nombre de jours restant</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($conges as $conge)
                                <tr>
                                    <td>{{ $conge->employe->nom }}</td>
                                    <td>{{ $conge->date_debut }}</td>
                                    <td>{{ $conge->date_fin }}</td>
                                    <td>{{ $conge->raison }}</td>
                                    <td>{{ $conge->nombreJour }}</td>
                                    <td>{{ $conge->jourRestant }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="setForm({{ json_encode($conge) }})">
                                           <i class="ti-pencil-alt"></i></i>
                                        </button>
                                        <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $conge->id }})">
                                            <i class="ti-trash"></i></i>
                                        </button>
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

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Demande de congé</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formulaire" action="{{ route('conges.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="employeId" class="form-label">Employé :</label>
                                <select class="form-control" name="employeId" id="employeId" required>
                                    @foreach($employes as $employe)
                                        <option value="{{ $employe->id }}">{{ $employe->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date_debut">Date de début</label>
                                <input type="date" class="form-control" name="date_debut" id="date_debut" required>
                            </div>
                            <div class="form-group">
                                <label for="date_fin">Date de fin</label>
                                <input type="date" class="form-control" name="date_fin" id="date_fin" required>
                            </div>
                            <div class="form-group">
                                <label for="raison">Raison</label>
                                <textarea class="form-control" name="raison" id="raison" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" id="submitButton">Enregistrer vos congé</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="copyright">
        <p>ProjetLaravel @2023 | Design by <a href="https://www.example.com" target="_blank">Example</a></p>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('assets/js/quixnav-init.js') }}"></script>
<script src="{{ asset('assets/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>
<script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Custom Script -->
<script>
    // Fonction pour définir le formulaire pour l'édition
    function setForm(data) {
        var form = document.getElementById("formulaire");
        form["employeId"].value = data["employe_id"];
        form["date_debut"].value = data["date_debut"];
        form["date_fin"].value = data["date_fin"];
        form["raison"].value = data["raison"];
        form.action = "/conge/update/" + data["id"];
        document.querySelector('.modal-title').textContent = 'Modifier congé';
        document.querySelector('#submitButton').textContent = 'Modifier';
    }

    // Réinitialisation du formulaire
    function resetForm() {
        var form = document.getElementById("formulaire");
        form.reset();
        form.action = "{{ route('conges.store') }}";
        document.querySelector('.modal-title').textContent = 'Demande de congé';
        document.querySelector('#submitButton').textContent = 'Enregistrer vos congé';
        $('#submitButton').prop('disabled', false); // Activer le bouton lors de la réinitialisation
    }
    document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('congeForm').addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(this);
        const method = document.getElementById('congeId').value ? 'PUT' : 'POST';
        const url = document.getElementById('congeId').value ? `/conges/${document.getElementById('congeId').value}` : '/conges';

        fetch(url, {
            method: method,
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    title: 'Succès',
                    text: data.success,
                    icon: 'success'
                }).then(() => {
                    location.reload(); // Recharger la page pour voir les modifications
                });
            } else if (data.error) {
                Swal.fire({
                    title: 'Erreur',
                    text: data.error,
                    icon: 'error'
                });
            }
        })
        .catch(error => {
            Swal.fire({
                title: 'Erreur',
                text: 'Une erreur est survenue, veuillez réessayer.',
                icon: 'error'
            });
        });
    });

    document.querySelectorAll('[data-toggle="modal"]').forEach(button => {
        button.addEventListener('click', function () {
            const conge = JSON.parse(this.getAttribute('data-conge'));
            document.getElementById('congeId').value = conge.id;
            document.getElementById('employeId').value = conge.employeId;
            document.getElementById('date_debut').value = conge.date_debut;
            document.getElementById('date_fin').value = conge.date_fin;
            document.getElementById('raison').value = conge.raison;
            document.getElementById('submitButton').textContent = 'Modifier';
        });
    });
});
    // Fonction pour confirmer la suppression d'un congé
    function confirmDelete(congeId) {
        Swal.fire({
            title: 'Voulez-vous vraiment supprimer ce congé?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Oui, supprimer',
            cancelButtonText: 'Non, annuler'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    
                    url: "/conge/delete/" + congeId,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Assurez-vous que le token CSRF est envoyé si nécessaire
                    },
                    success: function(response) {
                        Swal.fire('Succès!', 'Le congé a été supprimé.', 'success').then(() => {
                            location.reload(); // Recharger la page pour voir les changements
                        });
                    },
                    error: function(xhr, status, error) {
                        Swal.fire('Erreur!', 'Une erreur s\'est produite lors de la suppression.', 'error');
                    }
                });
            }
        });
    }

    // Vérification du congé lors de la sélection d'un employé
    $('#employeId').change(function() {
        var employeId = $(this).val();

        if(employeId) {
            $.ajax({
                url: '/check-conge/' + employeId,
                type: 'GET',
                success: function(response) {
                    if(response.exists) {
                        // Afficher un message d'erreur si un congé existe déjà
                        Swal.fire({
                            title: 'Erreur!',
                            text: 'Cet employé a déjà pris un congé cette année.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        $('#submitButton').prop('disabled', true); // Désactiver le bouton Enregistrer
                    } else {
                        $('#submitButton').prop('disabled', false); // Activer le bouton Enregistrer
                    }
                }
            });
        }
    });

    // Gestion de la soumission du formulaire
    $('#formulaire').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        var formAction = $(this).attr('action');
        $.ajax({
            url: formAction,
            type: 'POST',
            data: formData,
            success: function(data) {
                if (data.success) {
                    Swal.fire({
                        title: 'Congé avec Succès!',
                        text: data.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        resetForm(); // Réinitialiser le formulaire
                        location.reload(); // Recharger la page pour voir les changements
                    });
                } else if (data.error) {
                    Swal.fire({
                        title: 'Erreur!',
                        text: data.error,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    title: 'Erreur!',
                    text: 'Vous ne pouvez pas avoir un nouveau congé car vous avez atteindre ou dépasser 30 jours de vos congé rendez-vous à l\'année prochaine',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
    //agrandir l'ecran
    function toogleFullScreen(){
        if (!document.fullscreenElement){
            document.documentElement.requestFullscreen();
        }else {
            if(document.exitFullscreen){
                document.exitFullscreen();
            }
        }
    };
</script>
</body>

</html>
