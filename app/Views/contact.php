<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

    <!-- Contact -->
    <section class="py-4 container">
        <div class="py-5 container" id="contact">
            <div class="col-lg-5 col-sm-2 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <h1 class="fw-light">Hello <?= $name ?>!</h1>
            <h1 class="fw-light">Contact Info</h1>
                <address>
                    <p><i class="bi bi-house-fill"></i> Address : Jl. Pancasila Selatan No. 2A</p>
                    <p><i class="bi bi-building"></i> City : Parepare</p>
                    <p><i class="bi bi-telephone-fill"></i> HP : 08218719xxxx</p>
                    <p><i class="bi bi-envelope-fill"></i> Email : imanmustika02@gmail.com</p>
                </address>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>