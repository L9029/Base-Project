<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <main>
        <section>
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
                <div class="container">
                    <a href="/" class="navbar-brand h1">Home</a>
                    <a href="service" class="navbar-brand h1">Servicios</a>
                    <a href="contact" class="navbar-brand h1">Contactos</a>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <?= $content ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>