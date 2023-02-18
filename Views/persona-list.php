<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de estudiantes</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>ID (DNI)</th>
                         <th>Nombre</th>
                         <th>Opciones</th>
                    </thead>
                    <tbody>
                         <?php
                              foreach($personaList as $persona)
                              {
                         ?>
                              <tr>
                                   <td><?php echo $persona->getId() ?></td>
                                   <td><?php echo $persona->getNombre() ?></td>
                                   <td>
                                        <form action="<?php echo FRONT_ROOT ?>Persona/Delete" method="post">
                                        <input type="text" name="id" value="<?php echo $persona->getId();?>" class="form-control" hidden>
                                             <button type="submit"> Borrar</button>
                                        </form>
                                        <form action="<?php echo FRONT_ROOT ?>Persona/ShowEditView" method="post">
                                             <input type="text" name="id" value="<?php echo $persona->getId();?>" class="form-control" hidden>
                                             <input type="text" name="nombre" value="<?php echo $persona->getNombre();?>" class="form-control" hidden>
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