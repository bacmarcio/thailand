<?php
include "../Class/acesso.class.php";
$verificaRestrito = Acesso::getInstance(Conexao::getInstance());
$usuarios = Acesso::getInstance(Conexao::getInstance());

include "../Class/config.class.php";
$infoSistema = ConfigSistema::getInstance(Conexao::getInstance())->rsDados();
$acessosSite = ConfigSistema::getInstance(Conexao::getInstance());

include "../Class/metasTags.class.php";
$metastags = MetasTags::getInstance(Conexao::getInstance());

include "../Class/produtos.class.php";
$produtos = Produtos::getInstance(Conexao::getInstance());

include "../Class/estados.class.php";
$estados = Estados::getInstance(Conexao::getInstance());

include "../Class/cidades.class.php";
$cidades = Cidades::getInstance(Conexao::getInstance());

include "../Class/clientes.class.php";
$clientes = Clientes::getInstance(Conexao::getInstance());

include "../Class/categorias.class.php";
$categorias = Categorias::getInstance(Conexao::getInstance());

include "../Class/testemunhos.class.php";
$testemunhos = Testemunhos::getInstance(Conexao::getInstance());

include "../Class/banners.class.php";
$banners = Banners::getInstance(Conexao::getInstance());

include "../Class/parceiros.class.php";
$parceiros = Parceiros::getInstance(Conexao::getInstance());

include "../Class/filmes.class.php";
$filmes = Filmes::getInstance(Conexao::getInstance());

include "../Class/compras.class.php";
$compras = Compras::getInstance(Conexao::getInstance());

include "../Class/salas.class.php";
$salas = Salas::getInstance(Conexao::getInstance());

include "../Class/textos.class.php";
$textos = Textos::getInstance(Conexao::getInstance());

include "../Class/blogs.class.php";
$blogs = Blogs::getInstance(Conexao::getInstance());

include "../Class/galerias.class.php";
$galerias = Galerias::getInstance(Conexao::getInstance());

include "../Class/newsletters.class.php";
$newsletters = Newsletters::getInstance(Conexao::getInstance());

include "../Class/servicos.class.php";
$servicos = Servicos::getInstance(Conexao::getInstance());

include "../Class/treinamentos.class.php";
$treinamentos = Treinamentos::getInstance(Conexao::getInstance());

include "../Class/solucoes.class.php";
$solucoes = Solucoes::getInstance(Conexao::getInstance());

include "../Class/sobre.class.php";
$sobre = Sobre::getInstance(Conexao::getInstance());

include "../Class/tailandia.class.php";
$tailandia = Tailandia::getInstance(Conexao::getInstance());


$verificaRestrito->restritoAdmin();
$dadosUsuarioLogado = $verificaRestrito->rsDados($_SESSION['dadosLogado']->id);

function get_url(){ 
    return $_SERVER['SCRIPT_NAME'].$_SERVER['REQUEST_URI'];
  }
  
  define('SITE_URL', 'https://'.$_SERVER['HTTP_HOST'].'/projetos/thailand');

?>