<?php if(isset($status)):
 ?>
    <?php if($status['success']):
     ?>

        <div class="alert alert-success mt-3" role="alert">
            <?php echo $status['msg']
            ?>
        </div>

    <?php else: 
    ?>

        <div class="alert alert-danger mt-3" role="alert">
            <?php echo $status['msg']
             ?>
        </div>

    <?php endif; 
    ?>
<?php endif; 
?>
