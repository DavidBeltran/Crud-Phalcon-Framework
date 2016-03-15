<?php if (($resp != 0)) { ?>
    <div class="row" <?php echo $overflow; ?>>
        <?php foreach ($resp as $value) { ?>
            <div class='col-sm-12'>
                <div class='col-sm-5'>
                    <div class = 'alert alert-info'> 
                        <?php echo $value->nombre; ?>
                    </div>
                </div>
                <div class='col-sm-7'>
                    <div class='alert alert-success'> 
                        <?php echo $value->mensaje; ?>
                    </div>
                </div>    
            </div>
        <?php } ?>
    </div>
<?php } else { ?>    
    No hay Mensajes
<?php } ?>    