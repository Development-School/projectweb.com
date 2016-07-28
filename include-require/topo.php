<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Project Web - Development of Aplications</title>

    <!-- Incluindo "reset.css" -->
    <link rel="stylesheet" href="templates/css/reset.css">

    <!-- Definindo um ícone para o "title" -->
    <link rel="icon" href="img/projectweb-ico-title.png" alt="Ícone Web Site - Project Web">

  </head>

  <!-- Cabeçalho do Web Site -->
  <header>
    <!-- Definindo Informações Resumidas de contato antes do Menu de Navegação -->
    <div class="#">
      <a href="index.php" class="#">Project Web</a>
      <nav class="#">
        <ul>
          <?php
            $inf[] = array('url' => '#', 'label' => 'São Luís, MA');
            $inf[] = array('url' => '#', 'label' => '+55 (98) 98718-5950');
            $inf[] = array('url' => '#', 'label' => 'facebook');
            $inf[] = array('url' => '#', 'label' => 'instagram');
            $inf[] = array('url' => '#', 'label' => 'Brasil');
          ?>
          <!-- Imprimindo na tela o código acima -->
          <?php foreach ($inf as $inf):?>
            <a href="<?php echo $inf['url'];?>"><?php echo $inf['label'];?></a>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>

    <!-- Definindo um "Menu de Navegação" -->
  </header>
