<?php 
    $this->titreEntete = 'Inscription';
    $this->script = "<script src='styles/jquery/monjqueryInscription.js'></script>";
    $this->stylesCss = '
    <!-- MetisMenu CSS -->
    <link href="bootstrap/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="bootstrap/dist/css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="bootstrap/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="bootstrap/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Alertes JS -->
    <link href="styles/css/Moncss.css" rel="stylesheet" type="text/css">';
 ?>  

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
           <h1 class="page-header"><?= $titrePage ?></h1><!-- ELEMENT SPECIFIQUE -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div id="contenu">
        <form method="POST" action="index.php?controleur=inscription&action=inscrire">
            <div class="col-lg-12">
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <i class="fa fa-fw"></i>
                        Quelles sont vos informations personnelles ?  
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nom<br/></th>
                                                <th>Prenom<br/></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input class="form-control verif" type="text" name="nom"></td>
                                                <td><input class="form-control verif" type="text" name="prenom"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- maintenant les infos UTT -->
            <div class="col-lg-12">
                <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                            <i class="fa fa-fw"></i>
                            Quelle est votre équipe de recherche ?
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr><th>Equipe de recherche<br/></th></tr>
                                            </thead>
                                            <tbody>
                                                <tr>      
                                                    <td>
                                                        <div class="btn-group" data-toggle="buttons">
                                                            <label class="btn btn-primary active"><input type="radio" name="equipe" value="CREIDD" autocomplete="off" checked> CREIDD</label>
                                                            <label class="btn btn-primary"><input type="radio" name="equipe" value="ERA" autocomplete="off"> ERA</label>
                                                            <label class="btn btn-primary"><input type="radio" name="equipe" value="GAMMA3" autocomplete="off"> GAMMA3</label>
                                                            <label class="btn btn-primary"><input type="radio" name="equipe" value="LASMIS" autocomplete="off"> LASMIS</label>
                                                            <label class="btn btn-primary"><input type="radio" name="equipe" value="LM2S" autocomplete="off"> LM2S</label>
                                                            <label class="btn btn-primary"><input type="radio" name="equipe" value="LNIO" autocomplete="off"> LNIO</label>
                                                            <label class="btn btn-primary"><input type="radio" name="equipe" value="LOSI" autocomplete="off"> LOSI</label>
                                                            <label class="btn btn-primary"><input type="radio" name="equipe" value="tech-CICO" autocomplete="off"> tech-CICO</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Informations du Compte -->
                <div class="col-lg-12">
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            <i class="fa fa-fw"></i>
                            Quelles sont vos informations de compte ? 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Login<br/></th>
                                                    <th>Mot de passe<br/></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input class="form-control verif" type="text" name="login"></td>
                                                    <td><input class ="form-control verif" type="password" value="" name="mdp"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="organisation" value="UTT">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <div class="well well-sm">   
                                    <table class="table">
                                        <thead>
                                            <p>Avez vous fini ?</p>
                                        </thead>
                                        <body>   
                                            <tr>
                                                <th><div class=""><a class="btn btn-primary btn-large Monverif">Vérifier</a></div></th>
                                                <th>
                                                    <div class="">
                                                        <button class="btn btn-primary btn-large Monvalider" type="submit" value="Valider" name="submit">Valider
                                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                                        </button>
                                                    </div>
                                                </th>
                                                <th></th>
                                            </tr>
                                            <tr><div class="container Maverification">
                                                    <div class="alert alert-success Monsucces">
                                                        <strong>Success!</strong>
                                                        This alert.
                                                    </div>
                                                    <div class="alert alert-info Moninfo">
                                                        <strong>Info!</strong> 
                                                        This alert.
                                                    </div>
                                                    <div class="alert alert-danger Mondanger">
                                                        <strong>Danger!</strong> 
                                                        This alert.
                                                    </div>
                                                </div>
                                            </tr>
                                                  <!--<ul class="pager">
                                                    <li class="previous disabled"><span aria-hidden="true">&larr;older</span></li>
                                                    <li class="next"><span aria-hidden="true"><input class="btn btn-primary btn-large" type="reset" value="Réinitialiser"></span></li>
                                                  </ul> !-->
                                            <script src="bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
                                        </body>
                                    </table>
                                </div>
                            </div>       
                        </div>
                    </div>
                </div>                                        
        </form>               
    </div>
</div>
 
