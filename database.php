<?php

//DECLARANDO UMA CONSTANTE PARA O ACESSO DEO BANCO DE DADOS
define("SERVER_LOCAL","localhost");
define("SERVER_USER","root");
define("SERVER_PASSWORD","");
define("DATABASE_NAME","portaria");

$conexao = mysqli_connect(SERVER_LOCAL,SERVER_USER,SERVER_PASSWORD,DATABASE_NAME);



/*
AlunosCMC2022!!
http://gatossaurosstudio.com.br/ads/tais_guissi/

define("SERVER_LOCAL","localhost");
define("SERVER_USER","root");
define("SERVER_PASSWORD","");
define("DATABASE_NAME","si_ads_2period");

$conexao = mysqli_connect(SERVER_LOCAL,SERVER_USER,SERVER_PASSWORD,DATABASE_NAME);



define("SERVER_LOCAL","si_ads_2period.mysql.dbaas.com.br");
define("SERVER_USER","si_ads_2period");
define("SERVER_PASSWORD","SiAdsCMC2022!");
define("DATABASE_NAME","si_ads_2period");

$conexao = mysqli_connect(SERVER_LOCAL,SERVER_USER,SERVER_PASSWORD,DATABASE_NAME);




*/


/*


TABELA LOGIN:   prtaria_login
id
email_adm 
senha_adm
















TABELA LOGIN:   ads_taisgs_login
id
email_adm 
senha_adm

TABELA ENTRADA MP:   ads_taisgs_entrada_mp

id_entrada
data_entrada
hora_entrada
hora_saida
cod_prod
desc_prod
unidade_prod
qtd_prod
nf_prod
motorista ----- no

TABELA ENTRADA MP:   ads_taisgs_saida_mp

id_saida
data_saida
hora_chegou
hora_saida
cliente_saida
nf_cliente
motorista_saida


*/

?>
