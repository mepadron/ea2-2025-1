<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?> - Sistema de Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .resultado-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="resultado-container">
            <h2 class="mb-4"><?= $titulo ?></h2>
            
            <div class="alert alert-<?= $tipo ?> mb-4">
                <?= $mensaje ?>
            </div>
            
            <div class="mt-4">
                <a href="/login" class="btn btn-secondary">Volver al login</a>
                <?php if($tipo == 'success'): ?>
                <p>Hola user <?= $nombre; ?></p>
                <a href="/" class="btn btn-primary">Ir al inicio</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
