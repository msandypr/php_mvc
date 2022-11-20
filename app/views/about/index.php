<div class="container mb-5">
    <h1 class="mt-3 mb-3">About Me</h1>
    <hr class="my-4">
    <img src="<?= BASEURL; ?>/img/profile.jpg" alt="Muhammad Sandy Putra Riyadi" width="200" class="rounded-circle shadow">
    <p class="mt-3">Hello, My Name is <?= $data['name']; ?>, I'm <?= $data['age']; ?> years old, Currently Working as <?= $data['work'] ?>.</p>
    <a href="<?= BASEURL; ?>" class="btn btn-success" tabindex="-1" role="button">Home</a>
    <a href="<?= BASEURL; ?>/about/page" class="btn btn-success" tabindex="-1" role="button">Page</a>
</div>