<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\RedimensionaController;

class UploaderController extends Controller{
  /**
  *@Route("/upload")
  */
  public function uploaderAction(){
    $templating = $this->container->get('templating');
    $html = $templating->render('upload/uploader.html.twig', []);
           
    return new Response($html);
  }

  /**
  *@Route("/recebeUpload")
  */

  public function recebeAction(Request $request){
    $templating = $this->container->get('templating');
    $html = $templating->render('upload/recebeUpload.html.twig', []);

// verifica se foi enviado um arquivo
if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
    echo 'Você enviou o arquivo: <strong>' . $_FILES[ 'arquivo' ][ 'name' ] . '</strong><br />';
    echo 'Este arquivo é do tipo: <strong > ' . $_FILES[ 'arquivo' ][ 'type' ] . ' </strong ><br />';
    echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'arquivo' ][ 'tmp_name' ] . '</strong><br />';
    echo 'Seu tamanho é: <strong>' . $_FILES[ 'arquivo' ][ 'size' ] . '</strong> Bytes<br /><br />';
 
    $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
    $nome = $_FILES[ 'arquivo' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid ( time () ) . '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = 'upload ' . $novoNome;
 
        // tenta mover o arquivo para o destino
        /*if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
            echo ' < img src = "' . $destino . '" />';
        }*/
        if($request->files){
            foreach($request->files as $uploadedFile) {
                $name = $arquivo_tmp;
                $file = $uploadedFile->move($destino, $name);
                echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
                echo ' <img src = "'.$file.'" />';
            }
        }else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
    else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
else
    echo 'Você não enviou nenhum arquivo!';

/* Cria a instancia da classe */
$imagem = new RedimensionaController();
 
/* Configura a imagem que vamos redimensionar */
$imagem->imagem = $destino;
 
/* 
Configura a imagem de destino. Se você for apenas exibir uma imagem
temporária, comente esta linha
*/
$imagem->imagem_destino = 'arquivos/nova_imagem.png';
 
/* 
Se uma largura for definida, você pode deixar a classe calcular o aspect 
ratio da imagem deixando a altura zerada. O mesmo vale para a largura, porém,
uma altura deverá existir (uma das duas deve ser definida).
 
Você também pode configurar as duas, neste caso você força a imagem a ter o 
tamanho desejado
*/
$imagem->largura = 520;
 
/* A nova altura será gerada automaticamente. */
$imagem->altura = 0;
 
/* Qualidade de 0 a 100 */
$imagem->qualidade = 100;
 
/* Gera a nova imagem */
$nova_imagem = $imagem->executa();
 
/* Se não for uma imagem temporária, você poderá exibi-la assim */
if ( $imagem->imagem_destino && $nova_imagem ) {
    echo "<img src='{$nova_imagem}'>";
}
 
/* Se você quiser ver se algum erro ocorreu, utilize o seguinte. */
if ( $imagem->erro ) echo $imagem->erro;
    return new Response($html);
  }
}