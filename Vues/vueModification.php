<div class="container" id="container">
<div class="container" id="banniere">
    <div class="div-1">
    <h1>EDIF-WVPM</h1>
    </div>
    <div class="welcom">
        <p>Profil de :</p>
        <P><a href="#">Deconnexion</a></P>
    </div>            
    </div>
        <div class="bienvenu">GESTION DES MOTOS</div>
      <div class="global-content">
          <div class="global-page">
            
                   <div class="cache" id="modifer">
                   <div class="c-table">
                       <div class="sms">FORMULAIRE DE MODIFICATION</div>

                       <form method="post" action="" enctype="multipart/form-data"> 
                       
                            <div class="row">
                                <input type="text" class="form-control" name="id" style="display: none" value="<?= $valuer->getId()?>">
                              <div class="col">
                                <input type="text" class="form-control" name="marque" value="<?= $valuer->getMarque()?>" required ="required">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control" name="modele" value="<?= $valuer->getModel()?>" required ="required">
                            </div>
                            </div><br>
                            <div class="row">
                              <div class="col">
                                <input type="text" class="form-control" name="cylindre" value="<?= $valuer->getCylindre()?>" required ="required">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control" name="categorie"  value="<?= $valuer->getCathegorie()?>" required ="required">
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col">
                                <input type="text" class="form-control" name="serie" value="<?= $valuer->getNumero_seri()?>" required ="required">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control" name="prix" value="<?= $valuer->getPrix()?>" required ="required">
                              </div>
                            </div><br>
                            
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-success pull-right btn">Modifier</button>
                                <button type="button" class="btn btn-success pull-right btn"> <a href="motos.php">Fermer</a> </button>
                            </div>

                         </form>


                        </div>
                   </div>

            </div>

          </div>
      </div>
    </div>