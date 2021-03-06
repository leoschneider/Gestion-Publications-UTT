<?php 
    $this->titreEntete = 'Ajout Publication';
    $this->script = "<script src='styles/jquery/Monjquery.js'></script>";  
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
        <form method="POST" action="index.php?controleur=ajoutPublication&action=ajouterPublication">
        <div class="col-lg-12">
        <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                    <i class="fa fa-fw"></i>
                    Qui sont les Auteurs ?  
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>
                                                <div class=" B_a" data-toggle="buttons">
                                                    <label class="btn btn-primary B_aP glyphicon glyphicon-plus"></label>
                                                    <label class="btn btn-primary B_aM glyphicon glyphicon-minus"></label>
                                                <div/>
                                            <td/>
                                        <tr/>   
                                        <tr>
                                            <th>Nom<br/></th>
                                            <th>Prénom<br/></th>
                                            <th>Organisation<br/></th>
                                            <th>Laboratoire<th/>
                                        </tr>
                                    </thead>
                                    <tbody class="auteur-origin" >      
                                        <tr>
                                            <td><input class="form-control verif" type="text" value="<?= $nomDefaut ?>"  readonly name="nom[]"></td>
                                            <td><input class="form-control verif" type="text" readonly value="<?= $prenomDefaut ?>" name="prenom[]"></td>
                                            <td><input class="form-control verif Maorga" type="text" readonly value="<?= $organisationDefaut ?>" name="organisation[]"></td>
                                            <td><input class="form-control verif" type="text" readonly value="<?= $laboratoireDefaut?>" name="departement[]"></td>
                                        </tr>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                    <i class="fa fa-fw"></i>
                    Quelles sont les informations de la Publication ?  
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Titre<br/></th>
                                            <th>Annee<br/></th>
                                            <th>Statut<br/></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input class="form-control verif" type="text" value="" name="titre">
                                        </td>
                                        <td>
                                            <select class="form-control verif" name="annee" value="">
                                                <option value ="2016">2016</option>
                                                <option value ="2017">2017</option>'
                                                <option value ="2018">2018</option>'
                                                <option value ="2019">2019</option>'
                                                <option value ="2020">2020</option>'
                                                <option value ="2021">2021</option>'
                                                <option value ="2022">2022</option>'
                                                <option value ="2023">2023</option>'
                                            </select>
                                        </td>
                                        <td>
                                            <div class="" data-toggle="buttons">
                                                <label class="btn btn-primary active">
                                                    <input type="radio" name="statut" value="soumis" autocomplete="off" checked> Soumis
                                                </label>
                                                <label class="btn btn-warning">
                                                    <input type="radio" name="statut" value="revision" autocomplete="off"> En révision
                                                </label>
                                                <label class="btn btn-success">
                                                    <input type="radio" name="statut" value="publie" autocomplete="off"> Publié
                                                </label>
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
    <div class="col-lg-12">
        <!-- /.panel -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                <i class="fa fa-fw"></i>
                Informations supplémentaires  
            </div>
            <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Lien de la publication<br/></th>
                                            <th>Catégorie<br/></th>
                                            <th class="conf">Lieu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input class="form-control verif" type="text" value="" name="reference">
                                            </td>
                                            <td>
                                                <select class="form-control Maclass verif" name="categorie" value="">
                                                    <option value ="RI">Article dans les revues internationales</option>
                                                    <option value ="RF">Article dans les revues nationales</option>
                                                    <option value ="CI">Article dans les conférences internationales</option>
                                                    <option value ="CF">Article dans les conférences nationales</option>
                                                    <option value ="OS">Ouvrage scientifique</option>
                                                    <option value ="TD">Thèse de doctorat</option>
                                                    <option value ="BV">Brevet</option>
                                                    <option value ="AP">Autre production</option>
                                                </select>     
                                            </td>
                                            <td>
                                                <input class="form-control conf " type="text" value="" name="lieu">
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
        <div class="col-lg-12">
            <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        <i class="fa fa-fw"></i>
                        Avez vous fini ? 
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><label class="btn btn-primary submitjs pull-right" >Vérifier</label></td>
                                                <td>
                                                    <input type="submit" name="valider" class="submitnojs btn btn-primary submitnojs pull-right" disabled="disabled" value="Valider">
                                                </td><td></td><td></td><td></td><td></td><td></td>
                                            </tr>
                                            <tr>
                                                <h4>Vérifications</h4>
                                                <div class="container Maverification">
                                                    <div class="alert alert-success Monsucces">
                                                        <strong>Success!</strong>
                                                        This alert.
                                                    </div>
                                                    <div class="alert alert-info Moninfo">
                                                        <strong>Info!</strong> 
                                                        This ale.
                                                    </div>
                                                    <div class="alert alert-danger Mondanger">
                                                        <strong>Danger!</strong> 
                                                        This alert.
                                                    </div>
                                                </div>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                                               
        </form>
    </div>
<div class="row">
                <div class="col-lg-2">
                </div>
            </div>
</div>