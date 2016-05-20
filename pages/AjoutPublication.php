<?php 
    $titreEntete = 'Ajout Publication';
    $titrePage = 'Ajouter une publication';
 ?>   

<?php ob_start(); ?>
    <button type="button" class="btn btn-primary" onclick="addField()" >+</button>
            <!--on écrit le formulaire d'inscription -->
    <br/><br/>
    <form method="POST" action="AjoutPublication.php">
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
                                                    <label class="btn btn-primary B_aP glyphicon glyphicon-pencil">+</label>
                                                    <label class="btn btn-primary B_aM glyphicon glyphicon-trash">-</label>
                                                <div/>
                                            <td/>
                                        <tr/>   
                                        <tr>
                                            <th>Nom<br/></th>
                                            <th>Prénom<br/></th>
                                            <th>Organisation<br/></th>
                                            <th>Département<th/>
                                        </tr>
                                    </thead>
                                    <tbody class="auteur-origin" >      
                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" placeholder="Lemercier" value="" name="nom[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="Marc" value="" name="prenom[]">
                                            </td>
                                            <td>
                                                <input class="form-control Maorga" type="text" placeholder="UTT" value="" name="organisation[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="tech-CICO" value="" name="departement[]">
                                            </td>
                                        </tr>   
                                                <!--  affiche à effectuer en plus pour chaque auteur
                                                <tr>
                                                    <td>');echo('<input class="form-control" type="text" placeholder="Lemercier" value="" name="nom[]">');echo('</td>
                                                    <td>');echo('<input class="form-control" type="text" placeholder="Marc" value="" name="prenom[]">');echo('</td>
                                                    <td>');echo('<input class="form-control" type="text" placeholder="UTT" value="" name="organisation[]">');echo('</td>
                                                    <td>');echo('<input class="form-control" type="text" placeholder="tech-CICO" value="" name="departement[]">');echo('</td>
                                                </tr>
                                                !-->
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
                                            <th>titre<br/></th>
                                            <th>annee<br/></th>
                                            <th>statut<br/></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input class="form-control" type="text" value="" name="titre">
                                        </td>
                                        <td>
                                            <select class="form-control" name="annee" value="">
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
                                                <input class="form-control" type="text" value="" name="reference">
                                            </td>
                                            <td>
                                                <select class="form-control Maclass" name="categorie" value="">
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
                                                <input class="form-control conf" type="text" value="" name="lieu">
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
                                        <tbody">
                                            <tr>
                                                <td>
                                                    <label class="btn btn-primary submitjs pull-right" >Vérifier</label>
                                                </td>
                                                <td>
                                                    <input type="submit" name="valider" class="submitnojs btn btn-primary submitnojs pull-right" disabled="disabled" value="Valider">
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
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
        <?php
                /*                                    
                if(isset($_POST[nom]) && isset($_POST[prenom]) && isset($_POST[equipe]) && isset($_POST[login]) && isset($_POST[mdp])){
                    if(strlen($_POST[mdp])>6 ){ //ajouter les vérif d'existance login,nom et prenom 
                    //créer les éléments dans la BDD
                   // foreach ($_POST as $ele){
                   //     echo $ele;
                   //     echo ("<br/>");
                   // }
                    }
                }*/
        ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php' ?>        