<?php

use yii\helpers\Html;
?>
<script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style type="text/css">
    #blog-section {
    margin-top: -30px;
    margin-bottom: 30px;
}
a.pull-left {margin-left: -25px;margin-right: 25px;}

h4.nombre {
    font-size: 12px;
}

h5.fecha {
    font-size: 12px;
}

.container-fluid.coment {
    background-color: white;
    -webkit-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
            -moz-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
            box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
}

img.fotocomentario {
    height: 48px;
}

.nav-pills > li {
        float: left;
        margin-left: 40px;
    }


img.img-responsive.archivo{
    max-width: 103%;
}
a {
    color: #777777;
}
        .col-md-8.imagen {
            width: 557px;
            padding-left: 6px;
        }

        .navbar-inverse {
            background-color: #34495E;
            border-color: #34495E;
        }

        .navbar {
            position: relative;
            min-height: 50px;
            margin-bottom: 20px;
            border: 0px solid transparent;
            border-radius:0px;

        }
        .navbar-brand {

            float: left;
            height:auto;
            padding: 10px 10px;
            font-size: 18px;
            line-height: 20px;
        }
        .navbar-brand>img{ width:80%;}

        .navbar-inverse .navbar-nav > li > a {
            color: #F39C12;
        }
        .navbar-inverse .navbar-nav > li > a:hover {
            background-color: #009688;
        }

        .btn-default {
            color: #333;
            background-color: #009688;
            border-color: #009688;
            border-radius:0px;
            color:#fff;
        }

        #blog-section{margin-top: -30px; margin-bottom: 30px;}
        .content-title{padding:5px;background-color:#fff;}
        .content-title h3 a{color:#34495E;text-decoration:none; transition: 0.5s;}
        .content-title h3 a:hover{color:#F39C12; }
        .content-footer{background-color:#16A085;padding:10px;position: relative;}
        .content-footer span a {
            color: #fff;
            display: inline-block;
            padding: 6px 5px;
            text-decoration: none;
            transition: 0.5s;
        }

.container-fluid.cc {
    padding-right: 15px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
}
        .content-footer span a:hover{
            color:#F39C12;
        }
        aside{
            background-color:  white;
            margin-top: 30px;
              width: 533px;
            margin-left: -6px;
            -webkit-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
            -moz-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
            box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);}
        aside .content-footer>img {
            width: 33px;
            height: 33px;
            border-radius: 100%;
            margin-right: 10px;
            border: 2px solid #fff;
        }

        .user-ditels {
                width: 338px;
                top: -82px;
                height: 83px;
                padding-bottom: 85px;
                position: absolute;
                border: solid 2px #fff;
                background-color: #16a085;
                right: 29px;
                display: none;
                z-index: 1;

        }
        .col-md-6.results {
    width: 47%;
}

        @media (max-width:768px){
            .user-ditels {
                left: 5px;
            }
            aside {
                max-width: 365px;
                width: 365px;
            }
           a#letra {
            padding: 3px;
            font-size: 12px;

            }
            .content-footer span a {
                color: #fff;
                display: inline-block;
                padding: 1px;
                padding-top: 7px;
                text-decoration: none;
                transition: 0.5s;
        }}
        .user-small-img{cursor: pointer;}

        .content-footer:hover .user-ditels  {
            display: block;
        }


        .content-footer .user-ditels .user-img{width: 100px;height:100px;float: left;}
        .user-full-ditels h3 {
            color: #fff;
            display: block;
            margin: 0px;
            padding-top: 10px;
            padding-right: 28px;
            text-align: right;
        }
        .user-full-ditels p{
            color: #fff;
            display: block;
            margin: 0px;
            padding-right: 20px;
            padding-top: 5px;
            text-align: right;}
            section#blog-section {
    max-width: 548px;
    padding-right: 3px;
}

</style>

 <section id="blog-section" class="col-md-12">
        <div class="container-fluid cc">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">

                        <div class="col-md-8 imagen">
                            <aside>

        <div class="activity-attachment" >

        <?php if($post['rfoto']=="pdf.png"){ ?>
        <a target="_blank " href="../web/img/archivos/<?php echo $post['rdescripcionPost']; ?>">
        <img class="img-responsive archivo rotate-<?php echo $post["ridPost"]; ?>" 
        src="../web/img/pdf.png" alt="Uploaded photo" ></a>
        <?php } ?>
        <?php if($post['rfoto']=="word.png"){ ?>                        
        <a target="_blank" href="../web/img/archivos/<?php echo $post['rdescripcionPost']; ?>">    
        <img class="img-responsive archivo rotate-<?php echo $post["ridPost"]; ?>" 
        src="../web/img/word.png" alt="Uploaded photo"></a>
        <?php } ?>
        <?php if($post['rfoto']=="excel.png"){ ?>
        <a target="_blank" href="../web/img/archivos/<?php echo $post['rdescripcionPost']; ?>">    
        <img class="img-responsive archivo rotate-<?php echo $post["ridPost"]; ?>" 
        src="../web/img/excel.png" alt="Uploaded photo"></a>
        <?php } ?>
        <?php if($post['rfoto']=="power.png"){ ?>
        <a target="_blank" href="../web/img/archivos/<?php echo $post['rdescripcionPost']; ?>">    
        <img class="img-responsive archivo rotate-<?php echo $post["ridPost"]; ?>" 
        src="../web/img/power.png" alt="Uploaded photo"></a>
        <?php } ?>

        <a target="_blank" href="../web/img/archivos/<?php echo $post['rdescripcionPost']; ?>"> Descargar archivo <?php echo $post['rnombreArchivo']; ?></a>

        </div>
        <div class="content-title" id="m<?php echo $post["ridPost"]; ?>">
        <div class="post-description text-left">
                <h3><p>
                </p></h3>
        </div>
        </div>


            <div class="content-footer">
                                    <img class="user-small-img" src="../web/img/perfil/t/<?php echo $perfil->rfoto; ?>">
                                    <a id="letra" href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=".$posteador[0]["rutColaborador"]; ?>"><?php echo $posteador[0]['nombreColaborador'] . " " . $posteador[0]['apellidosColaborador']; ?></a>
                                    <span class="pull-right">

                                        <?php
                                        $connection = Yii::$app->db;
                                        $jefe = "select count(*) as cuenta from rcomentarios where ridPost=" . $post["ridPost"] . "";
                                        $command = $connection->createCommand($jefe);
                                        $dataReader = $command->query();
                                        $modela = $dataReader->readAll();
                                        ?>

                                        <a  onclick="reveal(<?php echo $post["ridPost"]; ?>);" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-comments" ></i> <?php echo $modela[0]["cuenta"]; ?></a>

                                        <?php
                                        $connection = Yii::$app->db;
                                        $jefe = "select rlikes as cuenta from rpost where ridPost=" . $post["ridPost"] . "";
                                        $command = $connection->createCommand($jefe);
                                        $dataReader = $command->query();
                                        $modela = $dataReader->readAll();
                                        ?>

                                        <a id="like-<?php echo $post["ridPost"]; ?>" onclick="like(<?php echo $post["ridPost"]; ?>,<?php
                                        $session = Yii::$app->session;
                                        echo $session['rutColaborador'];
                                        ?>);" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-heart"></i> <?php echo $modela[0]["cuenta"]; ?></a>

    <?php if ($post["rutColaborador1"] == $rutColaborador) { ?>

                                            <a id="like-<?php echo $post["ridPost"]; ?>" onclick="rotate(<?php echo $post["ridPost"]; ?>,<?php
                                               $session = Yii::$app->session;
                                               echo $session['rutColaborador'];
                                               ?>);"  data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-undo"></i> </a>

                                            <a id="like-<?php echo $post["ridPost"]; ?>" onclick="eliminar(<?php echo $post["ridPost"]; ?>,<?php
                                           $session = Yii::$app->session;
                                           echo $session['rutColaborador'];
                                               ?>);"  data-toggle="tooltip" data-placement="right" title="Loved"><i class="fas fa-trash-alt"></i> </a>


    <?php } ?>

                                    </span>
                                    <div class="user-ditels">
                                        <div class="user-img"> <a href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=" . $posteador[0]["rutColaborador"]; ?>" class="pull-left"><img src="../web/img/perfil/t/<?php echo $perfil->rfoto; ?>" alt="Avatar" class="fotoavatar" style="                                               -ms-transform: rotate(<?php echo $perfil->rrotador; ?>deg);-webkit-transform: rotate(<?php echo $perfil->rrotador; ?>deg);transform: rotate(<?php echo $perfil->rrotador; ?>deg);
                                    " class="media-object fotoavatar <?php echo $post["rutColaborador1"]; ?>"> </a>
                                        </div>
                                        <span class="user-full-ditels">
                                            <p href="<?php echo "index.php?r=colaborador/compadre&rutAmigo=" . $posteador[0]["rutColaborador"]; ?>"><?php echo $posteador[0]['nombreColaborador'] . " " . $posteador[0]['apellidosColaborador']; ?></a> </p>
                                            <p> Fecha: <?php echo $post["rfecha"]; ?></p>
                                        </span>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>

                </div>

            </div>
        </div>

<div class="container-fluid coment">
    <div style="display:none;" id="post-<?php echo $post["ridPost"]; ?>" class="post-footer">
        <div class="input-group">
            <textarea maxlength="180" id="comentario-<?php echo $post["ridPost"]; ?>" name="comentario-<?php echo $post["ridPost"]; ?>" class="form-control" placeholder="Agrega un comentario" type="text" onkeydown = "if (event.keyCode == 13) {
                                enviar(<?php echo $post["ridPost"]; ?>,<?php
                      $session = Yii::$app->session;
                      echo $session['rutColaborador'];
    ?>);
                            }" onKeyUp="contarCaracteress(this, 180,<?php echo $post["ridPost"]; ?>);"></textarea>
            <span class="input-group-addon">
                <button  onclick="enviar(<?php echo $post["ridPost"]; ?>,<?php
                         $session = Yii::$app->session;
                         echo $session['rutColaborador'];
    ?>);"><i class="fa fa-edit"></i></button>
            </span>

        </div>
        <br>
        <p>Contador: <font id="contadorc-comentario-<?php echo $post["ridPost"]; ?>" >180</font></p>
        <ul class="comments-list" style=" list-style-type: none;">
    <?php
    foreach ($comentarios as $c) {
        ?>
                 <li class="comment">
                     <a class="pull-left" href="#">
                     <div class="user-img img-circle"><p><img src="../web/img/perfil/t/<?php echo $c['rfoto']; ?>" alt="avatar" class="fotocomentario" style="-ms-transform: rotate(<?php echo $c['rrotador']; ?>deg);-webkit-transform: rotate(<?php echo $c['rrotador']; ?>deg);transform: rotate(<?php echo $c['rrotador']; ?>deg);"
                      <?php echo $post["rutColaborador1"]; ?>
                     ></p>
                     </div>
                     </a>
                       <div class="comment-body">
                        <div class="comment-heading">
                            <p><h4 class="nombre"><?php echo $c["nombreColaborador"] . " " . $c["apellidosColaborador"]; ?></h4>
                            <h5 class="fecha"><?php echo $c["fecha"]; ?></h5></p>
                        </div>
                        
                        <p style="text-transform: initial;" id="elComentario"><?php echo $c["rcontenido"]; ?></p>
                        <br>
                    </div>
                    
                    </li>

    <?php } ?>
            <li id="<?php echo $post["ridPost"]; ?>" class="comment"></li>
        </ul>

    </div>
    </section>