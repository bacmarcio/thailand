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

include "Class/banners.class.php";
$banners = Banners::getInstance(Conexao::getInstance());

include "Class/estados.class.php";
$estados = Estados::getInstance(Conexao::getInstance());

include "Class/cidades.class.php";
$cidades = Cidades::getInstance(Conexao::getInstance());

include "Class/servicos.class.php";
$servicos = Servicos::getInstance(Conexao::getInstance());

include "Class/sobre.class.php";
$sobre = Sobre::getInstance(Conexao::getInstance());

include "Class/tailandia.class.php";
$tailandia = Tailandia::getInstance(Conexao::getInstance());

include "Class/brasil-tailandia.class.php";
$brasilTailandia = brasilTailandia::getInstance(Conexao::getInstance());

define('SITE_URL', 'https://'.$_SERVER['HTTP_HOST'].'/projetos/thailand');
?>