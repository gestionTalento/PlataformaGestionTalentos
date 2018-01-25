<?php

use yii\helpers\Html;
?>
<div class="panel panel-white post panel-shadow">

    <div class="post-heading">

        <div class="media activity-item">

            <?php if ($posteador2) { ?>
            	<div class="media-body">
                    <div class="col-md-12 col-xs-12">
                        <a href="#" class="pull-left hidden-xs">
                            <img src="../img/perfil/t/<?php echo $posteador[0]['rfoto']; ?>" alt="Avatar" style="



                         -ms-transform: rotate(<?php echo $posteador[0]['rrotador']; ?>deg);
                         -webkit-transform: rotate(<?php echo $posteador[0]['rrotador']; ?>deg);
                         transform: rotate(<?php echo $posteador[0]['rrotador']; ?>deg);



                            " class="media-object avatar <?php echo $posteador[0]["rrotador"]; ?>">
                        </a>

                        <p class="activity-title">
                        <a id="tituloPublicador" href="
                        <?php 
                        Yii::$app->session; 

                        if($posteador[0]["rutColaborador"] == $session['rutColaborador']){
                            echo "compadre?rutAmigo=".$session['rutColaborador'];
                        }else{
                            echo "compadre?rutAmigo=".$posteador[0]["rutColaborador"];
                        }
                        ?>">
                            <?php echo $posteador[0]['nombreColaborador'] . " " . $posteador[0]['apellidosColaborador']; ?>
                                
                            </a>
                             <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <a id="tituloPublicador" href="
                        <?php  echo "compadre?rutAmigo=".$posteador2[0]["rutColaborador"]; ?>
                        ">
                            <?php echo $posteador2[0]['nombreColaborador'] . " " . $posteador2[0]['apellidosColaborador']; ?>
                                
                        </a>
                        </p>
                        <small class="text-muted">fecha: <?php echo $post["rfecha"]; ?></small>
                        <div class="activity-attachment">
                            <a href="#" class="thumbnail">
                            </a>
                        </div>
                    </div>


                </div>

            <?php } else { ?>
            <div class="row">
          <a href="#" class="pull-left">
            <img src="../img/perfil/t/<?php echo $posteador[0]['rfoto']; ?>" alt="Avatar" style="

                         -ms-transform: rotate(<?php echo $posteador[0]['rrotador']; ?>deg);
                         -webkit-transform: rotate(<?php echo $posteador[0]['rrotador']; ?>deg);
                         transform: rotate(<?php echo $posteador[0]['rrotador']; ?>deg);

            " class="media-object avatar <?php if($post["rut1"]==$session['rut']){echo "perfill";} ?>">
        </a>
        <p class="activity-title"><a id="tituloPublicador" href="<?php echo "compadre?rutAmigo=".$posteador[0]["rutColaborador"]; ?>"><?php echo $posteador[0]['nombreColaborador'] . " " . $posteador[0]['apellidosColaborador']; ?></a> </p>
            <small class="text-muted">fecha: <?php echo $post["rfecha"]; ?></small>
    </div>

            <?php } ?>

        </div> 
    </div>
     <div class="post-description">

        <p style="margin-top: 35px;" id="estado"><?php
            $cadena_resultante = preg_replace("/((http|https|www)[^\s]+)/", '<a target="_blank" href="$1">$0</a>', $post['rdescripcionPost']);
            echo $cadena_resultante;
            ?></p>

        <div class="stats">

            <?php
            $connection = Yii::$app->db;
            $jefe = "select rlikes as cuenta from rpost where ridPost=" . $post["ridPost"] . "";
            $command = $connection->createCommand($jefe);
            $dataReader = $command->query();
            $modela = $dataReader->readAll();
            ?>

             <?php if($megusta==true){


                ?>
                <button class="stat-item btn btn-success"><p class="hidden-xs">Me Gusta</p><i class="fa fa-thumbs-up icon"></i><?php echo $modela[0]["cuenta"]; ?></button>
                 <?php
                }else {?>
                <button id="like-<?php echo $post["ridPost"]; ?>" onclick="like(<?php echo $post["ridPost"]; ?>,<?php $session = Yii::$app->session; echo $session['rutColaborador']; ?>);" class="stat-item btn visible-xs-*">
                <p class="hidden-xs">Me Gusta</p>
                <i class="fa fa-thumbs-up icon"></i><?php echo $modela[0]["cuenta"]; ?>

                </button>
                <?php
                }?>
                <?php
            $connection = Yii::$app->db;
            $jefe = "select count(*) as cuenta from rcomentarios where ridPost=" . $post["ridPost"] . "";
            $command = $connection->createCommand($jefe);
            $dataReader = $command->query();
            $modela = $dataReader->readAll();
            ?>
            <button  onclick="reveal(<?php echo $post["ridPost"]; ?>);" class="stat-item btn visible-xs-*">
                <p class="hidden-xs">Comentarios</p>
                <i  class="fa fa-comments-o icon"></i><?php echo $modela[0]["cuenta"]; ?>
             </button>
            <?php $session = Yii::$app->session;
        $rutColaborador1 = $session['rut'];
         if ($post["rut1"] == $rutColaborador1) { ?>

                <button id="like-<?php echo $post["ridPost"]; ?>" onclick="eliminar(<?php echo $post["ridPost"]; ?>,<?php echo $model[0]['rutColaborador']; ?>);" class="stat-item btn">
                   <p class="hidden-xs"> Eliminar post</p>
<i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>
            <?php } ?>

        </div>

    </div>    
    <div style="display:none;" id="post-<?php echo $post["ridPost"]; ?>" class="post-footer">
            <div class="input-group"> 
                <textarea maxlength="180" id="comentario-<?php echo $post["ridPost"]; ?>" name="comentario-<?php echo $post["ridPost"]; ?>" class="form-control" placeholder="Agrega un comentario" type="text" onkeydown = "if (event.keyCode == 13) {
                            enviar(<?php echo $post["ridPost"]; ?>,<?php $session = Yii::$app->session; echo $session['rutColaborador']; ?>);
                        }" onKeyUp="contarCaracteress(this,180,<?php echo $post["ridPost"]; ?>);"></textarea>
                <span class="input-group-addon">
                    <button  onclick="enviar(<?php echo $post["ridPost"]; ?>,<?php $session = Yii::$app->session; echo $session['rutColaborador']; ?>);"><i class="fa fa-edit"></i></button>  
                </span>
            </div>

            <br>
            <p>Contador: <font id="contadorc-comentario-<?php echo $post["ridPost"]; ?>" >180</font></p>
            <ul class="comments-list">
                <?php
                foreach ($rcomentarios as $c) {
                    ?>
                    <li class="comment">
                        <a class="pull-left" href="#">
<img class="avatar" style="-ms-transform: rotate(<?php echo $c['rrotador']; ?>deg);-webkit-transform: rotate(<?php echo $c['rrotador']; ?>deg);transform: rotate(<?php echo $c['rrotador']; ?>deg);" src="../img/perfil/t/<?php echo $c['rfoto']; ?>" alt="avatar">
                        </a>
                        <div class="comment-body">
                            <div class="comment-heading">
                                <h4 class="user"><?php echo $c["nombreColaborador"] . " " . $c["apellidosColaborador"]; ?></h4>
                                <h5 class="time"><?php echo $c["rfecha"]; ?></h5>
                            </div>
                            <br>
                            <p style="text-transform: initial;" id="elComentario"><?php echo $c["contenido"]; ?></p>
                        </div>

                    </li>

                <?php } ?>
                <li id="<?php echo $post["ridPost"]; ?>" class="comment"></li>
            </ul>
        </div>

</div>
<style type="text/css">

   
    p#estado {
        font-size: 19px;
        margin-left: 25px;
        margin-bottom: 70px;
        padding-top: 0px;
        font-weight: 300;
    }
    i.fa.fa-caret-right {
        font-size: 21px;
        padding: 10px;
        color: #7f7f7f;
    }
</style>
