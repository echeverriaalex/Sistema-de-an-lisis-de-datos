<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de estudiantes</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>ID</th>
                         <th>Codigo postal</th>
                         <th>Localidad</th>
                         <th>Provincia</th>
                         <th>Opciones</th>
                    </thead>
                    <tbody>
                         <?php
                              foreach($localidadList as $localidad)
                              {
                                   ?>
                                        <tr>
                                             <td><?php echo $localidad->getId(); ?></td>
                                             <td><?php echo $localidad->getCodigoPostal(); ?></td>
                                             <td><?php echo $localidad->getLocalidad(); ?></td>
                                             <td><?php echo $localidad->getProvincia(); ?></td>
                                             <td>
                                                  <form action="<?php echo FRONT_ROOT ?>Localidad/Delete" method="post">
                                                  <input type="text" name="id_l" value="<?php echo $localidad->getCodigoPostal();?>" class="form-control" hidden>
                                                       <button type="submit"> Borrar</button>
                                                  </form>
                                                  <form action="<?php echo FRONT_ROOT ?>Localidad/ShowEditView" method="post">
                                                       <input type="text" name="id_l" value="<?php echo $localidad->getId();?>" class="form-control" hidden>
                                                       <input type="text" name="c_postal" value="<?php echo $localidad->getCodigoPostal();?>" class="form-control" hidden>
                                                       <input type="text" name="localidad" value="<?php echo $localidad->getLocalidad();?>" class="form-control" hidden>
                                                       <input type="text" name="pcia" value="<?php echo $localidad->getProvincia();?>" class="form-control" hidden>
                                                       <button type="submit"> Editar</button>
                                                  </form>
                                             </td>
                                        </tr>
                                   <?php
                              }
                         ?>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>