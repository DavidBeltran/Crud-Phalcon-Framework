{%if(resp!=0) %}
    {% for value in resp %}
        <div class="row">
            <div class='col-sm-12'>
                <div class='col-sm-5'>
                    <div class = 'alert alert-info'> 
                        {{ value.nombre }}
                    </div>
                </div>
                <div class='col-sm-7'>
                    <div class='alert alert-success'> 
                        {{ value.mensaje }}
                    </div>
                </div>    
            </div>
        </div>        
    {% endfor %}
{% else %}    
    No hay Mensajes
{% endif %}    