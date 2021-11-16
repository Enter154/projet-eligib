<?php
    require_once 'database.php';
    require_once 'post.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Blog MVC Miage</title>
        <link rel="stylesheet" href="./assets/vendor/bootstrap-grid.min.css">
        <link rel="stylesheet" href="./assets/vendor/bootstrap.min.css">
    </head>

    <body>
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Module dev web</h1>
                <p class="col-md-8 fs-4">Site pour utiliser php + sql.</p>
                <button class="btn btn-primary btn-lg" type="button">Je ne sert a rien.</button>

                <?php
                    $post = new Post();
                    $posts = $post->getPosts()->fetchAll();
                    ?>
                <div class="row">
                <?php
                    foreach ($posts as $post) {
                    ?>
                        <div class="col-sm">
                            <div class="card btn" style="width: 18rem; margin-top : 2%;">
                                <div class="card-header">
                                    <?php echo $post['title']; ?>
                                </div>
                                <div class="card-body">
                                    <img class="card-img-top" src="https://via.placeholder.com/150x75" alt="Card image cap">
                                    <?php $date = new \DateTime($post['createdAt']); ?>
                                    <p class="card-text"> <?php echo $date->format('d/m/Y'); ?></p>
                                    <p class="card-text"> <?php echo $post['content']; ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                ?>
            </div>
            </div>
        </div>
    </body>
    <footer class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        <p>Author: Léon Van Linden</p>
        <p><a href="mailto:leon7502045@gmail.com">leon7502045@gmail.com</a></p>
    </footer>
</html>