<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();
?>

<a href="adicionar.php">ADICIONAR USUÁRIOS</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario):?>
        <tr>
            <td><?php echo $usuario->getId();?></td>
            <td><?php echo $usuario->getNome();?></td>
            <td><?php echo $usuario->getEmail();?></td>
            <td>
                <a href="editar.php?id=<?=$usuario->getId();?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$usuario->getId();?>">[ Excluir ]</a>
            </td>
        </tr>

    <?php endforeach;?>

</table>
