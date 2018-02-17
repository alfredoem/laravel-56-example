<html>

<style>
    .btn {border: solid #2ab27b 2px}
</style>
<body>
<h1>Listado de canciones.</h1>

<ul id="listado-canciones">
    <?php foreach($canciones as $elemento): ?>
        <li><?php echo $elemento ?></li>
    <?php endforeach ?>
</ul>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

@include('canciones-crear')

</body>
</html>


