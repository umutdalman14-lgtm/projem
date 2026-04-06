<?php 
        require_once('baglanti.php')
?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.png">
    <title>MVCde MODEL Katmanı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="album.css" rel="stylesheet">
</head>

<body>


    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">PDO ile Database İşlemleri Uygulaması</h1>
                <p class="lead text-muted">Uygulama yeni özellikler eklenerek genişletilecektir. Gördüğünüzün aynısı olacak şekilde kodlayınız.</p>
                <p>
                  
                  
                </p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
            <?php
            $listesorgu = $db -> prepare('SELECT * FROM urunler');
            $listesorgu->execute();
            while ($veri=$listesorgu->fetch(PDO:: FETCH_ASSOC)) {?> 
                <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="img/<?php echo $veri['urunler_foto']?>" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"><?php echo $veri['urunler_aciklama']?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">İncele</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Sepete Ekle</button>
                                    </div>
                                    <small class="text-muted">Durum <?php echo $veri['urunler_adet'] ?></small>
                                </div>
                            </div>
                        </div>
                    </div> 
            <?php } ?>
                </div>     
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Başa dön.</a>
            </p>
            <p>Bu tema &copy; Bootstrap examplestan indirilmiştir.!</p>
            <p>Farklı seçenekleri mutlaka inceleyiniz.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
</body>

</html>
