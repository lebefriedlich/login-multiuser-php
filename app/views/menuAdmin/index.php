<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="">
                Hai, <?= $data['admin']['name'] ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <h2 class="">
                Role: <?= $data['admin']['role'] ?>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a class="btn btn-danger text-dark text-decoration-none" href="<?= BASEURL; ?>menuAdmin/logout">
                <i class="bi bi-door-closed"></i> Log out
            </a>
        </div>
    </div>
</div>