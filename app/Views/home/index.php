<!-- app/Views/home/index.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($titulo ?? 'Sem título') ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($titulo ?? '') ?></h1>
    <p><?= htmlspecialchars($mensagem ?? '') ?></p>

    <p>
        <a href="https://localhost/proto/pilotoads/public/home/sobre/Wildney">Ir para /home/sobre/Wildney</a>
    </p>
</body>
</html>
