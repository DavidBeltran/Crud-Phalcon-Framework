<?php if (($resp != 0)) { ?>
    <?php foreach ($resp as $value) { ?>
        <div class="row">
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
        </div>        
    <?php } ?>
<?php } else { ?>    
    No hay Mensajes
<?php } ?>    