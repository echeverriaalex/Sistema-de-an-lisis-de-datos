<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Editar persona</h2>
               <form action="<?php echo FRONT_ROOT ?>Persona/Edit" method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <input type="text" name="id" value="<?php echo $id;?>" class="form-control" hidden>
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">ID (DNI)</label>
                                   <input type="text" name="newId" value="<?php echo $id;?>" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Nombre</label>
                                   <input type="text" name="nombre" value="<?php echo $nombre;?>" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Aceptar</button>
               </form>
          </div>
     </section>
</main>