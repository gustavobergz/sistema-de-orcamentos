<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Orçamentos - Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                "families": ["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['../assets/css/fonts.min.css']
            },
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
    <?php
        include_once '_sidebar.php';
        include_once '_navbar.php';
    ?>

    <div class="wrapper">
        <!-- Main Panel -->
        <div class="main-panel">
            <div class="container-fluid">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">Orçamentos</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Adicionar Orçamentos</div>
                                </div>
                                <div class="card-body">
                                    <!-- Formulário de Adicionar Orçamento -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Selecionar Cliente*</label>
                                                <select class="form-select" id="exampleFormControlSelect1" required>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="datePicker">Selecionar Data*</label>
                                                <input type="date" class="form-control" id="datePicker" required />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Contêiner para os itens dinâmicos -->
                                    <div id="itemContainer" class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email2">Inserir Item</label>
                                                <input type="text" class="form-control" id="email2" placeholder="Inserir item" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email3">Inserir Valor</label>
                                                <div class="input-group md-6">
                                                    <span class="input-group-text">R$</span>
                                                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" />
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Botões Salvar e Adicionar -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-success btn-round">Salvar</button>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            <button class="btn btn-primary btn-round" id="addButton">Adicionar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Adicionando Script para Campos Dinâmicos -->
                <script>
                    document.getElementById('addButton').addEventListener('click', function () {
                        // Cria os novos elementos de "Adicionar Item" e "Adicionar Valor"
                        const newItemContainer = document.createElement('div');
                        newItemContainer.classList.add('row'); // Mantém a mesma estrutura de grid

                        // Adiciona o campo "Inserir Item"
                        const newItemDiv = document.createElement('div');
                        newItemDiv.classList.add('col-md-6');
                        newItemDiv.innerHTML = `
                            <div class="form-group">
                                <label>Inserir Item</label>
                                <input type="text" class="form-control" placeholder="Inserir item" />
                            </div>
                        `;
                        newItemContainer.appendChild(newItemDiv);

                        // Adiciona o campo "Inserir Valor"
                        const newValueDiv = document.createElement('div');
                        newValueDiv.classList.add('col-md-6');
                        newValueDiv.innerHTML = `
                            <div class="form-group">
                                <label>Inserir Valor</label>
                                <div class="input-group md-6">
                                    <span class="input-group-text">R$</span>
                                    <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        `;
                        newItemContainer.appendChild(newValueDiv);

                        // Adiciona o novo conjunto de campos ao container
                        document.getElementById('itemContainer').appendChild(newItemContainer);
                    });
                </script>
            </div>
        </div>
    </div>

    <!-- Core JS Files -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="assets/js/plugin/moment/moment.min.js"></script>

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
</body>

</html>
