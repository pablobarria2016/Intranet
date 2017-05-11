<div class="col-sm-8">

  <div class="alert alert-success bg-faded" role="alert">
  <h4 class="alert-heading"></h4><hr>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<?php foreach($posts as $post){?>
     <tr>
         <td><?php echo $post->Apoderados_nombre;?></td>
         <td><?php echo $post->Apoderados_apellido;?></td>

      </tr>
     <?php }?>

</div>
</div>
</div>

</body>
