<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?= BASEURL; ?>">Home</a>
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/user">Users</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Detail Pengguna</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($data['user']['name']); ?></h5>
                        <p class="card-text">
                            <strong>ID:</strong> <?= htmlspecialchars($data['user']['id']); ?><br>
                            <strong>Email:</strong> <?= htmlspecialchars($data['user']['email']); ?>
                        </p>
                        <a href="<?= BASEURL; ?>/user" class="btn btn-secondary">Kembali ke Daftar</a>
                        <a href="<?= BASEURL; ?>/user/ubah/<?= $data['user']['id']; ?>" class="btn btn-warning">Ubah Data</a>
                        <a href="<?= BASEURL; ?>/user/hapus/<?= $data['user']['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>