<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

    <!-- Profile -->
    <section class="py-5 text-center container" id="profile">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">My Profile</h1>
                <p class="lead text-muted">Nama saya Iman Mustika Ismail, <br>mahasiswa Sistem Informasi di Universitas Hasanuddin.</p>
                <p>
                    <!-- Button Trigger Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#moreInfo">
                        More Information
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="moreInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">More Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Nama        : Iman Mustika Ismail<br>
                                        NIM         : H071201050<br>
                                        Jurusan     : Sistem Informasi<br>
                                        Universitas : Universitas Hasanuddin
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>