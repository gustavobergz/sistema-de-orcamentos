<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Meus Dados - Controle Financeiro</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php include_once '_sidebar.php'; ?>

        <!-- Main Panel -->
        <div class="main-panel">
            <!-- Navbar -->
            <?php include_once '_navbar.php'; ?>

            <!-- Main Content -->
            <div class="container">
                <div class="page-inner">
                    <!-- Page Header -->
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">Meus Dados</h3>
                    </div>

                    <!-- Form Section -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Altere seus dados</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Campo Email -->
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="Digite seu email" />
                                            </div>
                                        </div>

                                        <!-- Campo Senha -->
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group position-relative">
                                                <label for="password">Alterar Senha</label>
                                                <input type="password" class="form-control" id="password" placeholder="Digite sua nova senha" />
                                                <!-- Ícone do Font Awesome -->
                                                <i class="fas fa-eye position-absolute" id="togglePassword" style="right: 15px; top: 35px; cursor: pointer; color: #6c757d; font-size: 18px;"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Botões de Ação -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-success btn-round float-left mt-3">Salvar</button>
                                            <button class="btn btn-warning btn-round float-end mt-3">Alterar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Toggle Password Visibility Script -->
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>
