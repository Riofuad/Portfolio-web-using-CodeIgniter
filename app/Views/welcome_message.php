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

    <!-- Projects -->
    <div class="album py-5 bg-light" id="projects">
        <section class="py-5 text-center container">
            <h1 class="fw-light">Projects</h1>
        </section>
        <section class="container align-content-center">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://i.kym-cdn.com/entries/icons/original/000/028/232/hamster.jpg" class="card-img-top" alt="image not found" width="18rem;" height="350rem">
                        <div class="card-body">
                            <h5 class="card-title">Staring Hamster</h5>
                            <p class="card-text ">Gambar reaksi hamster melihat langsung ke kamera, penggunaan reaksi hamster digunakan pada 13 Januari 2019 oleh pengguna TikTok @beanboy22. Postingan tersebut menerima lebih dari 124.000 reaksi dan 13.000 kali dibagikan dalam satu minggu.</p>
                            <form action="https://knowyourmeme.com/memes/staring-hamster">
                                <section class="container text-center">
                                    <input class="btn btn-primary" type="submit" value="KnowYourMeme">
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://c.tenor.com/ubqSq1SZilUAAAAd/ace-attorney-phoenix-wright.gif" class="card-img-top" alt="image not found" width="18rem;" height="350rem">
                        <div class="card-body">
                            <h5 class="card-title">Phoenix Wright: Ace Attorney</h5>
                            <p class="card-text">Game petualangan visual novel yang dikembangkan oleh Capcom Production Studio 4 dan diterbitkan oleh Capcom. Ini dirilis pada tahun 2001 untuk Game Boy Advance di Jepang dan telah porting ke berbagai platform.</p>
                            <form action="https://en.wikipedia.org/wiki/Phoenix_Wright:_Ace_Attorney">
                                <section class="container text-center">
                                    <input class="btn btn-primary" type="submit" value="Wikipedia">
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://i.kym-cdn.com/photos/images/newsfeed/001/488/512/a52.jpg" class="card-img-top" alt="image not found" width="18rem;" height="350rem">
                        <div class="card-body">
                            <h5 class="card-title">Unsettled Tom</h5>
                            <p class="card-text">Mengacu pada gambar Paint karakter Tom dari serial kartun Tom and Jerry yang mengenakan ekspresi keprihatinan. Berasal dari komik Tails Gets Trolled dan beredar sebagai gambar reaksi di 4chan, sering digunakan untuk merujuk pada perilaku mengejutkan.</p>
                            <form action="https://knowyourmeme.com/memes/unsettled-tom">
                                <section class="container text-center">
                                    <input class="btn btn-primary" type="submit" value="KnowYourMeme">
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://c.tenor.com/zoGCSlNH5J4AAAAC/anime-dizzy.gif" class="card-img-top" alt="image not found" width="18rem;" height="350rem">
                        <div class="card-body">
                            <h5 class="card-title">Pusing</h5>
                            <p class="card-text">Sebuah keadaan dimana seseorang mengalami gangguan dalam keseimbangan serasa keadaan sekitar berputar.</p>
                            <form action="https://id.wikipedia.org/wiki/Pusing">
                                <section class="container text-center">
                                    <input class="btn btn-primary" type="submit" value="Wikipedia">
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://i1.wp.com/hargaticket.com/wp-content/uploads/2021/06/alok-ff.jpg" class="card-img-top" alt="image not found" width="18rem;" height="350rem">
                        <div class="card-body">
                            <h5 class="card-title">Top-up Diamond Murah</h5>
                            <p class="card-text">Sedia jasa top-up Diamond Free Fire Aman, Murah Dan Terpercaya!!! Alok pernah top-up disini! Ayo buruan top-up! </p>
                            <form action="https://youtu.be/dQw4w9WgXcQ">
                                <section class="container text-center">
                                    <input class="btn btn-primary" type="submit" value="Free Diamond!">
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" class="card-img-top" alt="image not found" width="18rem;" height="350rem">
                        <div class="card-body">
                            <h5 class="card-title">GitHub</h5>
                            <p class="card-text">Source code dari tugas praktikum pemrograman web semester 3, jurusan Sistem Informasi Universitas Hasanuddin.</p>
                            <form action="https://github.com/Riofuad/web-dev-assign">
                                <section class="container text-center">
                                    <input class="btn btn-primary" type="submit" value="Source Code">
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?= $this->endSection() ?>