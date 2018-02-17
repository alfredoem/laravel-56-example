<html>
<body>
<h2>Formulario nueva canción.</h2>

<form id="frm-crear">

    <label for="nombre">Canción</label>
    <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre de la canción" value="Lazerhawk">
    <button type="button" id="btn-guardar" class="btn">Guardar</button>
</form>

<script>

    $('#btn-guardar').on('click', function(){

        // if (confirm('Estas seguro?')) {

            var nombreCancion = $('#nombre').val();
            var listadoCanciones = $('#listado-canciones');
            var nuevaCancion = '<li>' + nombreCancion + '</li>';

            listadoCanciones.append(nuevaCancion);

            var datos = {
                'cancion': nombreCancion
            };

            $.ajax('/canciones', {type: 'POST', data: datos})
                .done(function (respuesta) {
                    alert(respuesta);
                });

        // }


     });

</script>
</body>
</html>