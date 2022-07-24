<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Bootsrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="mystyle.css" rel="stylesheet">

    <title>Portofolio</title>

</head>

<body>
    <?= $this->include('layout/navbar') ?>
    <?= $this->include('layout/header') ?>

    <?= $this->renderSection('content') ?>

    <!-- Tinggalkan Pesan -->
    <section class="container">
        <section class="py-5 container">
            <h1 class="fw-light">Tinggalkan Pesan</h1>
        </section>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="container ms-auto text-end pb-5">
            <button class="btn btn-primary">Submit</button>
        </div>
    </section>

    <?= $this->include('layout/footer') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- <script href="assets/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>