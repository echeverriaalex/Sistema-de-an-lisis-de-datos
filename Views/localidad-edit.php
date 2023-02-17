<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Editar localidad</h2>
               <form action="<?php echo FRONT_ROOT ?>Localidad/Edit" method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <input type="text" name="id" value="<?php echo $id_l;?>" class="form-control" hidden>
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">ID</label>
                                   <input type="text" name="newId_l" value="<?php echo $id_l;?>" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Codigo Postal</label>
                                   <input type="text" name="c_postal" value="<?php echo $c_postal;?>" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Localidad</label>
                                   <input type="text" name="localidad" value="<?php echo $localidad;?>" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Provincia</label>
                                   <input type="text" name="pcia" value="<?php echo $pcia;?>" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Aceptar</button>
               </form>
          </div>
     </section>
</main>