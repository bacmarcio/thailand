<?php
include "Class/config.class.php";
$infoSistema = ConfigSistema::getInstance(Conexao::getInstance())->rsDados();

include "Class/metasTags.class.php";
$metastags = MetasTags::getInstance(Conexao::getInstance())->rsDados();

include "Class/textos.class.php";
$textos = Textos::getInstance(Conexao::getInstance());

include "Class/newsletters.class.php";
$newsletters = Newsletters::getInstance(Conexao::getInstance());

include "Class/galerias.class.php";
$galerias = Galerias::getInstance(Conexao::getInstance());

include "Class/blogs.class.php";
$blogs = Blogs::getInstance(Conexao::getInstance());

include "Class/produtos.class.php";
$produtos = Produtos::getInstance(Conexao::getInstance());

include "Class/banners.class.php";
$banners = Banners::getInstance(Conexao::getInstance());

include "Class/testemunhos.class.php";
$testemunhos = Testemunhos::getInstance(Conexao::getInstance());

include "Class/estados.class.php";
$estados = Estados::getInstance(Conexao::getInstance());

include "Class/cidades.class.php";
$cidades = Cidades::getInstance(Conexao::getInstance());

include "Class/servicos.class.php";
$servicos = Servicos::getInstance(Conexao::getInstance());

include "Class/treinamentos.class.php";
$treinamentos = Treinamentos::getInstance(Conexao::getInstance());

include "Class/solucoes.class.php";
$solucoes = Solucoes::getInstance(Conexao::getInstance());

include "Class/simulador.class.php";
$simulador = Simulador::getInstance(Conexao::getInstance());

define('SITE_URL', 'https://'.$_SERVER['HTTP_HOST'].'/projetos/pico-solar');
?>