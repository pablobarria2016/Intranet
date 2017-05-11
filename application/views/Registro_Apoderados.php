<div class="container centrartexto menuizquierdo">
<?php

echo form_open('Welcome/insertar');
        echo form_label('Nombre', 'nombredeapoderado');
        echo form_input(['name'=>'nombre','class'=>'form-control','id'=>'nombre']);echo '<br>';
        echo form_label('Apellido', 'nombredeapellido');
        echo form_input(['name'=>'Apellido','id'=>'Apellido','class'=>'form-control']);echo '<br>';
        echo form_label('Rut');
        echo form_input(['name'=>'Rut','id'=>'Rut','class'=>'form-control']);
        ?>
        <br><?php
        echo form_submit(['class'=>'btn-success','value'=>'Registrar','type'=>'submit']);
        echo form_close();

 ?>
</div>
