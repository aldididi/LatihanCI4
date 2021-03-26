<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Upload</title>
</head>

<body>
    <div class="container">
        <br> <br>
        <div class="col-6">

            <?php if (session()->has('success')) : ?>
                <p class="text-success"> <?= session()->getFlashdata('success') ?> </p>
            <?php endif; ?>
            <?php $validation = session()->getFlashdata('validation'); ?>


            <div class="card">
                <div class="card-header"> image file upload </div>
                <div class="card-body">
                    <form action="<?= current_url() ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">keterangan</label>
                            <input type="text" name="keterangan" value="<?= old('keterangan') ?>" id="keterangan" class="form-controll <?= $validation && isset($validation['keterangan']) ? 'is-invalid' : '' ?>">
                            <?php if ($validation && isset($validation['keterangan'])) : ?>
                                <div class="invalid-feedback"><?= $validation['keterangan'] ?> </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="">pilih..</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= $validation && isset($validation['image']) ? 'is-invalid' : '' ?>" name="image" id="image">
                                <label class="custom-file-label">pilih file</label> <br><br>
                                <?php if ($validation && $validation['image']) : ?>
                                    <div class="invalid-feedback"><?= $validation['image'] ?> </div>
                                <?php endif; ?>
                                <button class="btn btn-success" type="submit">SIMPAN</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>