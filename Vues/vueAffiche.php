<?php

    require_once('../Modeles/routeur.php');
    require_once('../Controleurs/controleurAffiche.php');
    require_once('../Modeles/connexion.php');

    $db = bdd();
    $motoManager = new MotoManager($db);
    $controle = new ControleurAffiche;
    $controle->afficher();

?>
<!DOCTYPE html>
<html>
<head>

    <?php include('include/head.php'); ?>
</head>
<body>
<div class="container" id="container">
        <div class="container" id="banniere">
            <div class="div-1">
            <h1>EDIF-WVPM</h1>
            </div>
            <div class="welcom">
                <p>Profil de :</p>
                <P><a href="#">Modifier le profil</a></P>
                <P><a href="vueDeconnexion.php">Deconnexion</a></P>
            </div>            
        </div>
        <div class="bienvenu">GESTION DES MOTOS</div>
      <div class="global-content">
          <div class="global-page">
            <div class="cache" id="liste">
                 <div class="row">
                   <div class="col-lg-3">
                       <div class="panel panel-success text-center nbr">
                           <div class="panel-heading c-nbr">
                             <strong> NOMBRES TOTAL DES YAMAHA</strong>
                           </div>
                         <div class="panel-body">
                              <?php echo count($list_yamaha)?>
                              <p onclick="afficher(2)"> <a href="#"> Liste </a></p>
                         </div>
                       </div>
                   </div>

                   <div class="col-lg-3">
                       <div class="panel panel-success text-center nbr">
                           <div class="panel-heading c-nbr">
                             <strong> NOMBRES TOTAL DES RATO</strong>
                           </div>
                         <div class="panel-body">
                              <?php echo count($list_rato)?>
                              
                              <p onclick="afficher(3)"> <a href="#"> Liste </a></p>
                         </div>
                       </div>
                   </div>

                   <div class="col-lg-3">
                       <div class="panel panel-success text-center nbr">
                           <div class="panel-heading c-nbr">
                             <strong> NOMBRES TOTAL DES KAISER</strong>
                           </div>
                         <div class="panel-body">
                              <?php echo count($list_kaiser)?>                              
                              <p onclick="afficher(4)"> <a href="#"> Liste </a></p>
                         </div>
                       </div>
                       </div>
                       <div class="col-lg-3">
                       <div class="panel panel-success text-center nbr">
                           <div class="panel-heading c-nbr">
                             <strong> NOMBRES TOTAL DES SUZIKI</strong>
                           </div>
                         <div class="panel-body">
                              <?php echo count($list_suziki)?>                              
                              <p onclick="afficher(5)"> <a href="#"> Liste </a></p>
                         </div>
                       </div>
                       </div>
                       </div>
                       <div class="c-table">
                       <div class="sms">LISTE DE TOUTES LES MOTOS</div>
                           <table class="table table-bordered">
                              <thead>
                                <tr id="ligne">
                                  <th id="colone" scope="col">N°</th>
                                  <th id="colone" scope="col">Modèle</th>
                                  <th id="colone" scope="col">Marque</th>
                                  <th id="colone" scope="col">Cylindre</th>
                                  <th id="colone" scope="col">Cathégorie</th>
                                  <th id="colone" scope="col">Numéro Série</th>
                                  <th id="colone" scope="col">Prix</th>
                                  <th id="colone" scope="col">Année</th>
                                  <th id="colone" scope="col">Edit</th>
                                  <th id="colone" scope="col">Delete</th>
                                  <th id="colone" scope="col">Detail</th>
                                </tr>
                              </thead>
                              <tbody id="tbody">
                              <tr>             
                                       <?php    
                                       foreach($list_moto as $key => $value) {
                                       ?>
                                         <tr>
                                            <td id="colone"><?=$key+1?></td>
                                            <td id="colone"><?=$value->getModel()?></td>
                                            <td id="colone"><?=$value->getMarque()?></td>
                                            <td id="colone"><?=$value->getCylindre()?></td>
                                            <td id="colone"><?=$value->getCategorie()?></td>
                                            <td id="colone"><?=$value->getNumeroSerie()?></td>
                                            <td id="colone"><?=$value->getPrix()?></td>
                                            <td id="colone"><?=$value->getAnnee()?></td>
                                            <td id="colone"><a href="vueModification.php?id=<?= $value->getId()?>" type="button" id="edit"> Editer </a></td>
                                            <td id="colone"><a href="vueAffiche?id=<?= $value->getId()?>" type="button" id="del"> delete </a></td>
                                            <td id="colone"><a href="vueDetail?id=<?= $value->getId()?>"  type="button" id="det"> Detail </a></td>
                                         </tr>
                                        <?php
                                        }
                                        ?>   
                                    </tr>
                              </tbody>
                            </table>
                            <p>TOTAL: <?php echo count($list_moto)?></p>

                            <div class="panel-footer">
                                <button type="button" class="btn btn-success pull-right btn" onclick="afficher(5)">Nouveau</button>
                            </div>

                        </div>
                   </div>

                   <div class="cache" id="yamaha">
                   <div class="c-table">
                       <div class="sms">LISTE DES YAMAHA</div>
                           <table class="table table-bordered">
                              <thead>
                              <tr id="ligne">
                                  <th id="colone" scope="col">N°</th>
                                  <th id="colone" scope="col">Modèle</th>
                                  <th id="colone" scope="col">Marque</th>
                                  <th id="colone" scope="col">Cylindre</th>
                                  <th id="colone" scope="col">Cathégorie</th>
                                  <th id="colone" scope="col">Numéro Série</th>
                                  <th id="colone" scope="col">Prix</th>
                                  <th id="colone" scope="col">Année</th>
                                  <th id="colone" scope="col">Edit</th>
                                  <th id="colone" scope="col">Delete</th>
                                  <th id="colone" scope="col">Detail</th>
                                </tr>
                              </thead>
                              <tbody id="tbody">
                              <tr>             
                                       <?php    
                                       foreach($list_yamaha as $key => $value) {
                                       ?>
                                         <tr>
                                            <td id="colone"><?=$key+1?></td>
                                            <td id="colone"><?=$value->getMarque()?></td>
                                            <td id="colone"><?=$value->getModel()?></td>
                                            <td id="colone"><?=$value->getCylindre()?></td>
                                            <td id="colone"><?=$value->getCategorie()?></td>
                                            <td id="colone"><?=$value->getNumeroSerie()?></td>
                                            <td id="colone"><?=$value->getPrix()?></td>
                                            <td id="colone"><?=$value->getAnnee()?></td>
                                            <td id="colone"><a href="vueModification.php?id=<?= $value->getId()?>" type="button" id="edit"> Editer </a></td>
                                            <td id="colone"><a href="vueAffiche?id=<?= $value->getId()?>" type="button" id="del"> delete </a></td>
                                            <td id="colone"><a href="vueDetail?id=<?= $value->getId()?>"  type="button" id="det"> Detail </a></td>
                                         </tr>
                                        <?php
                                        }
                                        ?>   
                                    </tr>
                              </tbody>
                            </table>
                            <p>TOTAL: <?php echo count($list_yamaha)?></p>

                            <div class="panel-footer">
                                <button type="button" class="btn btn-success pull-right btn" onclick="afficher(5)">Nouveau</button>
                                <button type="button" class="btn btn-success pull-right btn" onclick="afficher(1)">Fermer</button>
                            </div>

                        </div>
                   </div>

                   <div class="cache" id="rato">
                   <div class="c-table">
                       <div class="sms">LISTE DES RATO</div>
                       <table class="table table-bordered">
                              <thead>
                              <tr id="ligne">
                                  <th id="colone" scope="col">N°</th>
                                  <th id="colone" scope="col">Modèle</th>
                                  <th id="colone" scope="col">Marque</th>
                                  <th id="colone" scope="col">Cylindre</th>
                                  <th id="colone" scope="col">Cathégorie</th>
                                  <th id="colone" scope="col">Numéro Série</th>
                                  <th id="colone" scope="col">Prix</th>
                                  <th id="colone" scope="col">Année</th>
                                  <th id="colone" scope="col">Edit</th>
                                  <th id="colone" scope="col">Delete</th>
                                  <th id="colone" scope="col">Detail</th>
                                </tr>
                              </thead>
                              <tbody id="tbody">
                              <tr>             
                                       <?php    
                                       foreach($list_rato as $key => $value) {
                                       ?>
                                         <tr>
                                            <td id="colone"><?=$key+1?></td>
                                            <td id="colone"><?=$value->getModel()?></td>
                                            <td id="colone"><?=$value->getMarque()?></td>
                                            <td id="colone"><?=$value->getCylindre()?></td>
                                            <td id="colone"><?=$value->getCategorie()?></td>
                                            <td id="colone"><?=$value->getNumeroSerie()?></td>
                                            <td id="colone"><?=$value->getPrix()?></td>
                                            <td id="colone"><?=$value->getAnnee()?></td>
                                            <td id="colone"><a href="vueModification.php?id=<?= $value->getId()?>" type="button" id="edit"> Editer </a></td>
                                            <td id="colone"><a href="vueAffiche?id=<?= $value->getId()?>" type="button" id="del"> delete </a></td>
                                            <td id="colone"><a href="vueDetail?id=<?= $value->getId()?>"  type="button" id="det"> Detail </a></td>
                                         </tr>
                                        <?php
                                        }
                                        ?>   
                                    </tr>
                              </tbody>
                            </table>
                            <p>TOTAL: <?php echo count($list_rato)?></p>

                            <div class="panel-footer">
                                <button type="button" class="btn btn-success pull-right btn" onclick="afficher(5)">Nouveau</button>
                                <button type="button" class="btn btn-success pull-right btn" onclick="afficher(1)">Fermer</button>
                            </div>

                        </div>
                   </div>

                   <div class="cache" id="kaiser">
                   <div class="c-table">
                       <div class="sms">LISTE DES KAISER</div>
                       <table class="table table-bordered">
                              <thead>
                              <tr id="ligne">
                                  <th id="colone" scope="col">N°</th>
                                  <th id="colone" scope="col">Modèle</th>
                                  <th id="colone" scope="col">Marque</th>
                                  <th id="colone" scope="col">Cylindre</th>
                                  <th id="colone" scope="col">Cathégorie</th>
                                  <th id="colone" scope="col">Numéro Série</th>
                                  <th id="colone" scope="col">Prix</th>
                                  <th id="colone" scope="col">Année</th>
                                  <th id="colone" scope="col">Edit</th>
                                  <th id="colone" scope="col">Delete</th>
                                  <th id="colone" scope="col">Detail</th>
                                </tr>
                              </thead>
                              <tbody id="tbody">
                              <tr>             
                                       <?php    
                                       foreach($list_kaiser as $key => $value) {
                                       ?>
                                         <tr>
                                            <td id="colone"><?=$key+1?></td>
                                            <td id="colone"><?=$value->getModel()?></td>
                                            <td id="colone"><?=$value->getMarque()?></td>
                                            <td id="colone"><?=$value->getCylindre()?></td>
                                            <td id="colone"><?=$value->getCategorie()?></td>
                                            <td id="colone"><?=$value->getNumeroSerie()?></td>
                                            <td id="colone"><?=$value->getPrix()?></td>
                                            <td id="colone"><?=$value->getAnnee()?></td>
                                            <td id="colone"><a href="vueModification.php?id=<?= $value->getId()?>" type="button" id="edit"> Editer </a></td>
                                            <td id="colone"><a href="vueAffiche?id=<?= $value->getId()?>" type="button" id="del"> delete </a></td>
                                            <td id="colone"><a href="vueDetail?id=<?= $value->getId()?>"  type="button" id="det"> Detail </a></td>
                                         </tr>
                                        <?php
                                        }
                                        ?>   
                                    </tr>
                              </tbody>
                            </table>
                            <p>TOTAL: <?php echo count($list_kaiser)?></p>

                            <div class="panel-footer">
                                <button type="button" class="btn btn-success pull-right btn" onclick="afficher(5)">Nouveau</button>
                                <button type="button" class="btn btn-success pull-right btn" onclick="afficher(1)">Fermer</button>
                            </div>

                        </div>
                   </div>           
                   <div class="cache" id="formulaire">
                   <div class="c-table">
                       <div class="sms">FORMULAIRE D'INSERTION</div>
                       <form action="vueAffiche.php method="POST" enctype="multipart/form-data"> 
                       <div class="row">
                              <div class="col">
                              <input type="text" class="form-control" name="model" placeholder="Modéle..." required ="required">
                               
                              </div>
                              <div class="col">
                              <input type="text" class="form-control" name="marque" placeholder="Marque..." required ="required">
                                
                            </div>
                            </div><br>
                        <div class="row">
                              <div class="col">
                              <input type="text" class="form-control" name="cylindre" placeholder="Cylindre..." required ="required">
                      
                              </div>
                              <div class="col">
                              <input type="text" class="form-control" name="categorie" placeholder="Cathégorie..." required ="required">
                              </div>
                            </div><br>
                        <div class="row">
                              <div class="col">
                                <input type="text" class="form-control" name="numeroSerie" placeholder="N° Serie..." required ="required">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control" name="prix" placeholder="Prix..." required ="required">
                              </div>
                            </div><br>
                        <div class="col-6">
                                <input type="text" class="form-control" name="annee" placeholder="Année..." required ="required">
                              </div>
                            </div><br>
                            <div class="panel-footer">
                                <input type="submit" class="btn btn-success pull-right btn" value='Enregistrer'>
                                <button type="button" class="btn btn-success pull-right btn" onclick="afficher(1)">Fermer</button>
                            </div>
                         </form>

                        </div>
                   </div>

                   </div>      
              </div>
          </div>
      </div>
    </div>
    <script src="js/script.js" type="text/javascript" charset="utf-8">
          
    </script>
</body>
</html>