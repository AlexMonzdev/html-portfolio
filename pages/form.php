
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h3>Formulario contacto</h3>
    <form method="GET" action="get.php">
        <div>
            <label>Nombre</label>
            <input type="text" name="nombre">
        </div>
        <p>Opciones:</p>
        <div>
            <label>Opcion_1</label>
            <input type="checkbox" name="opcion_1">
        </div>
        <div>
            <label>Opcion_2</label>
            <input type="checkbox" name="opcion_2">
        </div>
        <br/>
        <div>
            <label for="Tipo">Tipo</label>
            <select class= "form-control" name="tipo_documento">
                <option value="Pasaporte">Pasaporte</option>
                <option value="DNI">DNI</option>
                <option value="Otros">Otros</option>
            </select>
        </div>
        <br/>
        <div>
            <label for="vehiculo">Vehiculo</label>
            <select multiple class= "form-control" name="vehiculo" id="vehiculo">
                <option value="Coche">Coche</option>
                <option value="Moto">Moto</option>
                <option value="Otros">Bicicleta/Otros</option>
            </select>
        </div>
        <br/>
        <div>
            <label for="Observaciones">Observaciones:</label>
            <textarea class="form-control" name="observacion" id="observacion" rows="10"></textarea>
        </div>
        <br/>
        <div>
          <label for="foto">Foto</label>
          <input type="file" class="form-control-file" name="foto">
        </div>
        <h4>Genero</h4>
        <div>
            <input type="radio" class="form-check-input" name="genero">
            <label for="masculino">Masculino</label>
        </div>
        <div>
            <input type="radio" class="form-check-input" name="genero">
            <label for="femenino">Femenino</label>
        </div>
        <br/>
        <input type="hidden" value="44">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>