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
