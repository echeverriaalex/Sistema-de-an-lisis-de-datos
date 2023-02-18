<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar</h2>
               <form action="<?php echo FRONT_ROOT ?>Manager/Add" method="post" class="bg-light-alpha p-5">
                    <h3> Datos de la persona</h3>
                    <div class="row">
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">ID (DNI)</label>
                                   <input type="text" name="id_p" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Nombre</label>
                                   <input type="text" name="nombre" value="" class="form-control">
                              </div>
                         </div>
                    </div>
                    <hr>
                    <h3> Datos de la Residencia</h3>
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">ID</label>
                                   <input type="text" name="id_r" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Calle</label>
                                   <input type="text" name="dir_calle" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Numero</label>
                                   <input type="text" name="dir_numero" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Piso departamento</label>
                                   <input type="text" name="dir_piso_depto" value="" class="form-control">
                              </div>
                         </div>
                    </div>
                    <hr>
                    <h3> Datos de la localidad</h3>
                    <div class="row">
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">ID</label>
                                   <input type="text" name="id_l" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Codigo Postal</label>
                                   <input type="text" name="c_postal" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Localidad</label>
                                   <input type="text" name="localidad" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Provincia</label>
                                   <input type="text" name="pcia" value="" class="form-control">
                              </div>
                         </div>                         
                    </div>

                    <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>