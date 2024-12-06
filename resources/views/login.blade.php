<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Ajout du CSS directement ici -->
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
            padding: 15px;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            height: 50vh;
            max-width: 900px;
            width: 100%;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            overflow: hidden;
            background-color: #fff;
            position: relative;
        }

        .image-container {
            width: 50%;
            background: url('/images/your-image.jpg') no-repeat center center;
            background-size: cover;
        }

        .form-container {
            width: 50%;
            padding: 40px;
            box-sizing: border-box;
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #00BCD4;
        }

        .submit-button {
            width: 100%;
            padding: 20px;
            background: linear-gradient(to right, #4CAF50, #00BCD4);
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 20px;
            text-align: center;
        }

        .submit-button:hover {
            background: linear-gradient(to right, #45a049, #00b5a6);
        }

        .text-center {
            text-align: center;
            margin-top: 20px;
        }

        .text-center a {
            color: #00BCD4;
            text-decoration: none;
            font-weight: bold;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 10px;
        }

        .modal-close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .modal-close:hover,
        .modal-close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        @media (max-width: 900px) {
            .container {
                flex-direction: column;
            }

            .image-container,
            .form-container {
                width: 100%;
            }
        }

        @media (max-width: 600px) {
            .form-group input,
            .form-group select {
                font-size: 14px;
                padding: 12px;
            }

            .submit-button {
                padding: 12px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="image-container"></div>
        <div class="form-container" id="loginContainer">
            <h1>Login</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-group">
                <label class="form-label">Téléphone</label><br><br>
                    <input type="text" id="loginPhone" name="phone" placeholder="phone" required>
                </div>
                <div class="form-group">
                                <label class="form-label">mot de passe</label><br><br>
                                <input id="validation-password"
                                       class="form-control password"
                                       name="password"
                                       type="password" data-validation="[L>=6]"
                                       data-validation-message="$ must be at least 6 characters"
                                       placeholder="Password">
                </div>
                <div class="form-group">
                                <a href="{{ url('/password/lost') }}" class="pull-right cat__core__link--blue cat__core__link--underlined">Avez-vous oubliez ton mot de passe?</a>
                                
                            </div>
                <button type="submit" class="submit-button">Login</button>
            </form>
        </div>
    </div>
    <script>
        $(function() {

            // Form Validation
            $('#form-validation').validate({
                submit: {
                    settings: {
                        inputContainer: '.form-group',
                        errorListClass: 'form-control-error',
                        errorClass: 'has-danger'
                    }
                }
            });

            // Show/Hide Password
            $('.password').password({
                eyeClass: '',
                eyeOpenClass: 'icmn-eye',
                eyeCloseClass: 'icmn-eye-blocked'
            });
        });
    </script>
</body>
</html>
