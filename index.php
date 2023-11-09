<?php
$array = isset($_POST['numero']) ? $_POST['numero'] : array();
$array = array();
if (!empty($_POST['numero']) && !in_array($_POST['numero'], $array) && $_POST['numero'] != 2 && $_POST['numero'] != 5 && $_POST['numero'] != 9 && $_POST['numero'] != 11) {
    $array[] = $_POST['numero'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz B</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">

        <h3 class="text-center">Quiz Tipo B</h3>
        <p>Desarrollar una Aplicación Web, que permita registrar un número, y el mismo sea tomado en cuenta para imprimirlo y luego no imprimir el siguiente, pero, imprimir el próximo número. De este modo, será impreso un número sí y otro número no, y adicionalmente los números 2, 5, 9 y 11 no deben ser mostrados nunca.</p>

        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($array as $numero) : ?>
                            <tr>
                                <th scope="row"><?php echo $numero; ?></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Impresión de Números</h5>
                        <p class="card-text">
                            <form action="#" method="post">
                                <div class="mb-3 row">
                                    <label for="numeroID" class="form-label">Ingrese Número:</label>
                                    <input type="number" id="numeroID" name="numero" class="form-control">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3" name="btn">Registrar</button>
                                </div>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>