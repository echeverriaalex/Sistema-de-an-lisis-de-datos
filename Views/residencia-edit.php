<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Editar residencia</h2>
               <form action="<?php echo FRONT_ROOT ?>Residencia/Edit" method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <input type="text" name="id" value="<?php echo $id_r;?>" class="form-control" hidden>
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">ID</label>
                                   <input type="text" name="newId_r" value="<?php echo $id_r;?>" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Calle</label>
                                   <input type="text" name="dir_calle" value="<?php echo $dir_calle;?>" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Numero</label>
                                   <input type="text" name="dir_numero" value="<?php echo $dir_numero;?>" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Piso departamento</label>
                                   <input type="text" name="dir_piso_depto" value="<?php echo $dir_piso_depto;?>" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Aceptar</button>
               </form>
          </div>
     </section>
</main>