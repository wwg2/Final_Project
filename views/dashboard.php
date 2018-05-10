<?php include 'header.php';
 ?>
    <main class="container">

      <?php include 'flashmessages.php'; 
      ?>
        <div class="card mt-3">

          <div class="card-header bg-info text-white">
            Welcome, <?php echo($_SESSION['firstName'] . ' ' . $_SESSION['lastName']) 
            ?>
          </div>

          <div class="card-body">
            <?php if(count($todos) == 0):
            ?>
              <p class="card-text">You don't have any thing to do.</p>
            <?php else: 
            ?>
              <div id="incomplete-todos">

                <h3>Incomplete Todos</h3>

                <table class="table table-hover mb-5">

                  <thead>
                    <th class="w-25">Title</th>
                    <th>Created on</th>
                    <th>Due date</th>
                    <th>Actions</th>
                  </thead>

                  <tbody>
                   
                   <?php foreach($todos as $todo): 
                    ?>
                      <?php if(!$todo['isdone']): 
                      ?>

                        <tr>
                          <?php if((int)$todo['id'] == $edit_id): 
                          ?>
                            <form class="form" action="." method="POST">

                              <input type="hidden" name="action" value="edit_todo">
                              <input type="hidden" name="todo-id" value="<?php echo $todo['id'] ?>">

                              <td> <input type="text" class="form-control" name="title" value="<?php echo $todo['message'] ?>"> </td>

                              <td><?php echo date("F j Y", strtotime($todo['createddate'])) ?></td>

                              <td><input type="datetime-local" class="form-control" name="due-date" value="<?php echo date("Y-m-d\TH:i", strtotime($todo['duedate'])) ?>"></td>
                              <td>
                                  <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i></button>
                                </form>
                                <form style="display:inline" action="." method="POST">
                                  <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-ban" aria-hidden="true"></i></button>
                                </form>
                              </td>
                 
                 <?php else: 
                          ?>
                            <td><?php echo $todo['message'] ?></td>
                            <td><?php echo date("F j Y", strtotime($todo['createddate'])) ?></td>
                            <td><?php echo date("m/d/Y g:ia", strtotime($todo['duedate'])) ?></td>

                            <td>

                              <form style="display:inline" action="." method="POST">
                                <input type="hidden" name="action" value="delete_todo">
                                <input type="hidden" name="todo-id" value="<?php echo $todo['id'] ?>">
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                              </form>

                              <form style="display:inline" action="." method="POST">
                                <input type="hidden" name="action" value="set_edit_todo">
                                <input type="hidden" name="todo-id" value="<?php echo $todo['id'] ?>">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                              </form>

                              <form style="display:inline" action="." method="POST">
                                <input type="hidden" name="action" value="toggle_todo">
                                <input type="hidden" name="todo-id" value="<?php echo $todo['id'] ?>">
                                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                             </form>
                             
                                 </td>
                          <?php endif;
                           ?>
                        </tr>
                      <?php endif; 
                      ?>
                    <?php endforeach; 
                    ?>
                  </tbody>
              </table>
          </div>
          <div id="complete-todos">

                <h3>Completed Todos</h3>

                <table class="table table-hover">

                  <thead>
                    <th class="w-25">Title</th>
                    <th>Created on</th>
                    <th>Due date</th>
                    <th>Actions</th>
                  </thead>
                 
                 
                  <tbody>
                    <?php foreach($todos as $todo): 
                    ?>
                      <?php if($todo['isdone']): 
                      ?>
                        <tr>
                          <?php if((int)$todo['id'] == $edit_id):
                           ?>
                            <form class="form" action="." method="POST">

                              <input type="hidden" name="action" value="edit_todo">
                              <input type="hidden" name="todo-id" value="<?php echo $todo['id'] ?>">
                              <td>
                                <input type="text" class="form-control" name="title" value="<?php echo $todo['message'] ?>">
                              </td>
                              <td><?php echo date("F j Y", strtotime($todo['createddate'])) ?></td>
                              <td>
                                <input type="datetime-local" class="form-control" name="due-date" value="<?php echo date("Y-m-d\TH:i", strtotime($todo['duedate'])) ?>">
                              </td>
                              <td>
                                  <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i></button>
                                </form>
                                <form style="display:inline" action="." method="POST">
                                  <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-ban" aria-hidden="true"></i></button>

