<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Endereços - Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../assets/img/kaiadmin/favicon.ico" type="image/x-icon" />
    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: { "families": ["Public Sans:300,400,500,600,700"] },
            custom: { "families": ["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css'] },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css">
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
                        <h3 class="fw-bold mb-3">Endereços</h3>
                    </div>

                    <!-- Form to Add Endereços -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Adicionar Endereços</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Campo Nome de Cliente -->
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="username">Nome do Cliente</label>
                                                <input type="text" class="form-control" id="username" placeholder="Digite o nome do cliente" />
                                            </div>
                                        </div>

                                        <!-- Campo Telefone -->
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="telefone">Telefone do Cliente</label>
                                                <input type="text" class="form-control" id="telefone" placeholder="Digite o telefone do Cliente" oninput="formatarTelefone(event)" />
                                            </div>
                                        </div>

                                        <!-- Campo Empresa ou Endereço -->
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label for="password">Empresa ou Endereço</label>
                                                <input type="text" class="form-control" id="password" placeholder="Digite a Empresa ou Endereço" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Botão de Submit à esquerda -->
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-start">
                                            <button class="btn btn-success btn-round mt-3">Salvar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Core JS Files -->
            <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
            <script src="../assets/js/core/popper.min.js"></script>
            <script src="../assets/js/core/bootstrap.min.js"></script>

            <!-- jQuery Scrollbar -->
            <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

            <!-- Moment JS -->
            <script src="../assets/js/plugin/moment/moment.min.js"></script>

            <!-- Chart JS -->
            <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

            <!-- jQuery Sparkline -->
            <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

            <!-- Chart Circle -->
            <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

            <!-- Datatables -->
            <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

            <!-- Bootstrap Notify -->
            <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

            <!-- jQuery Vector Maps -->
            <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
            <script src="../assets/js/plugin/jsvectormap/world.js"></script>

            <!-- Sweet Alert -->
            <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

            <!-- Kaiadmin JS -->
            <script src="../assets/js/kaiadmin.min.js"></script>
        </div>
    </div>

    <script>
        function formatarTelefone(event) {
            var input = event.target;
            var telefone = input.value.replace(/\D/g, ''); // Remove tudo que não for número

            // Verifica se o telefone possui o DDD
            if (telefone.length <= 10) {
                // Formato sem DDD: XXXX-XXXX
                telefone = telefone.replace(/^(\d{4})(\d{4})$/, '$1-$2');
            } else {
                // Formato com DDD: (XX) XXXXX-XXXX
                telefone = telefone.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
            }

            input.value = telefone; // Atualiza o valor do campo com o formato
        }
    </script>
</body>

</html>
