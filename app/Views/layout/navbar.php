<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top navbar-light " style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url() ?>">
		<i class="bi bi-globe"></i>
		Iman Mustika Ismail
		</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
				<li class="nav-item">
                    <a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('project') ?>">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>