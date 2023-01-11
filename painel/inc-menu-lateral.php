<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="."
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu"><?php echo $lang['PAINEL']?></span></a></li>
                                   
                        <li class="list-divider"></li>
                         <li class="nav-small-cap"><span class="hide-menu"><?php echo $lang['CADASTROS']?></span></li>
                     
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="file-text" class="feather-icon"></i>
                                <span class="hide-menu"><?php echo $lang['USUARIOS']?> </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="usuarios.php" class="sidebar-link"><span class="hide-menu"> Listar Usuários </span></a></li>
                                <li class="sidebar-item"><a href="add-usuario.php" class="sidebar-link"><span class="hide-menu"> <?php echo $lang['ADICIONAR_USUARIO']?> </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> 
                                        <a class="sidebar-link sidebar-link" href="newsletters.php" aria-expanded="false">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span class="hide-menu"><?php echo $lang['NEWSLETTERS']?></span>
                                        </a>
                                    </li>
                        <li class="list-divider"></li>
                         <li class="nav-small-cap"><span class="hide-menu"><?php echo $lang['CONFIGURACAO_SITE']?></span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Banners </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="banners.php" class="sidebar-link"><span
                                            class="hide-menu"> Listar Banners
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="add-banner.php" class="sidebar-link"><span
                                            class="hide-menu"> Adicionar Banner
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Sobre a Embaixada</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="sobre.php" class="sidebar-link"><span
                                            class="hide-menu"> Listar Itens
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="add-sobre.php" class="sidebar-link"><span
                                            class="hide-menu"> Adicionar Item
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Sobre a Tailândia</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="tailandia.php" class="sidebar-link"><span
                                            class="hide-menu"> Listar Itens
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="add-tailandia.php" class="sidebar-link"><span
                                            class="hide-menu"> Adicionar Item
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Serviços Consulares</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="servicos.php" class="sidebar-link"><span
                                            class="hide-menu"> Listar serviços consulares
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="add-servico.php" class="sidebar-link"><span
                                            class="hide-menu"> Adicionar serviço consular
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> 
                                        <a class="sidebar-link sidebar-link" href="textos.php" aria-expanded="false">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span class="hide-menu">Textos</span>
                                        </a>
                                    </li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Testemunhos </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="testemunhos.php" class="sidebar-link"><span
                                            class="hide-menu"> Listar Testemunhos
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="add-testemunho.php" class="sidebar-link"><span
                                            class="hide-menu"> Adicionar Testemunho
                                        </span></a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Blog </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="blogs.php" class="sidebar-link"><span
                                            class="hide-menu"> Listar Blog
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="add-blog.php" class="sidebar-link"><span
                                            class="hide-menu"> Adicionar Blog
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                         
                         <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Soluções</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="solucoes.php" class="sidebar-link"><span
                                            class="hide-menu"> Listar Soluções
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="add-solucao.php" class="sidebar-link"><span
                                            class="hide-menu"> Adicionar Solução
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                       <!--  <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Produtos </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="produtos.php" class="sidebar-link"><span
                                            class="hide-menu"> Listar Produtos
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="add-produto.php" class="sidebar-link"><span
                                            class="hide-menu"> Adicionar Produto
                                        </span></a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Galeria </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="galerias.php" class="sidebar-link"><span
                                            class="hide-menu"> Listar Galeria
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="add-galeria.php" class="sidebar-link"><span
                                            class="hide-menu"> Adicionar Galeria
                                        </span></a>
                                </li>
                            </ul>
                        </li> -->
                       
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Configurações </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="configuracoes.php" class="sidebar-link"><span
                                            class="hide-menu"> Configurações Gerais
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="metas-tags.php" class="sidebar-link"><span
                                            class="hide-menu"> Metas Tags
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="login.php?acao=logout"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>