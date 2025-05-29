<div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="index.html" class="logo">
                        <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                            height="20" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <!-- Controle de Orçamento Section -->
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Controle de Orçamento</h4>
                        </li>
        
                        <!-- Perfil Section -->
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#perfil">
                                <i class="fas fa-user-alt"></i>
                                <p>Perfil</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="perfil">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="meus_dados.php">
                                            <span class="sub-item">Meus Dados</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
        
                        <!-- Endereços Section -->
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#enderecos">
                                <i class="fas fa-th-list"></i>
                                <p>Endereços</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="enderecos">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="add_enderecos.php">
                                            <span class="sub-item">Adicionar Endereços</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="enderecos.php">
                                            <span class="sub-item">Endereços</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
        
                        <!-- Orçamentos Section -->
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#orcamentos">
                                <i class="fas fa-table"></i>
                                <p>Orçamentos</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="orcamentos">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="add_orcamento.php">
                                            <span class="sub-item">Adicionar Orçamentos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="orcamentos.php">
                                            <span class="sub-item">Orçamentos</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
        
                        <!-- Sair Button (Vermelho) -->
                        <li class="nav-item">
                            <a href="login.php" class="btn btn-danger w-100">
                                <i class="fas fa-sign-out-alt"></i>
                                <p class="text-white">Sair</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>