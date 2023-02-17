<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de residencias</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>ID</th>
                         <th>Calle</th>
                         <th>Numero</th>
                         <th>Piso departamento</th>
                         <th>Opciones</th>
                    </thead>
                    <tbody>
                         <?php
                              foreach($residenciaList as $residencia)
                              {
                                   ?>
                                        <tr>
                                             <td><?php echo $residencia->getId();?></td>
                                             <td><?php echo $residencia->getCalle();?></td>
                                             <td><?php echo $residencia->getNumero();?></td>
                                             <td><?php echo $residencia->getDepartamento();?></td>
                                             <td>
                                                  <form action="<?php echo FRONT_ROOT ?>Residencia/Delete" method="post">
                                                  <input type="text" name="id_r" value="<?php echo $residencia->getId();?>" class="form-control" hidden>
                                                       <button type="submit"> Borrar</button>
                                                  </form>
                                                  <form action="<?php echo FRONT_ROOT ?>Residencia/ShowEditView" method="post">
                                                       <input type="text" name="id_r" value="<?php echo $residencia->getId();?>" class="form-control" hidden>
                                                       <input type="text" name="dir_calle" value="<?php echo $residencia->getCalle();?>" class="form-control" hidden>
                                                       <input type="text" name="dir_numero" value="<?php echo $residencia->getNumero();?>" class="form-control" hidden>
                                                       <input type="text" name="dir_piso_depto" value="<?php echo $residencia->getDepartamento();?>" class="form-control" hidden>
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