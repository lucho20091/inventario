<!DOCTYPE html>
<html>
<head>
    <script>
    function confirmDelete() {
        var result = confirm("¿Está seguro de que desea eliminar este registro?");
        if (result) {
            return true;
        } else {
            return false;
        }
    }
    function confirmAceptar(){
        var result = confirm("¿Está seguro de que desea confirmar esta solicitud?");
        if (result) {
            return true;
        } else {
            return false;
        }    
    }
    function confirmDenegar(){
        var result = confirm("¿Está seguro de que desea denegar esta solicitud?");
        if (result) {
            return true;
        } else {
            return false;
        }
    }
    function confirmActualizar(){
        var result = confirm("¿Está seguro de que desea actualizar la informacion?");
        if (result) {
            return true;
        } else {
            return false;
        }
    }
    </script>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale-1.0">
<title>Inventario</title>
<!--bootstrap CSS link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- font awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--css file-->
<link rel="stylesheet" href="./style.css">
	<style>
        table{
            height: 50%;
        }
		table, th, td {
			border: 1px solid black;
		}
		th {
			background-color: lightgray;
		}
	</style>
</head>
<body>
    <div class="d-flex">
    <div class="primeroform">
        <h2>Panel de administrador</h2>
        <h3>Ingrese productos</h3>
        <form method="post" id="ingrese" action="./guardardatos.php">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="categoria">Categoria: </label>
            <input type="text" id="categoria" name="categoria" required>
            <label for="nombre">Cantidad: </label>
            <input type="number" id="cantidad" name="cantidad" required>
            <label for="nombre">Precio: </label>
            <input type="number" id="precio" name="precio" required>
            <button type="submit" class="btn espacio btn-primary">Guardar</button>
        </form>
    </div>  
    </div>




	<?php
		include 'crud.php';
	?>
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- bootstrap js link---->
</body>
</html>

