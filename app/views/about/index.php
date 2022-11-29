<div class="container mb-5">
    <h1 class="mt-3 mb-3">About Me</h1>
    <hr class="my-4">
</div>

<div class="container">
    <div class="text-center">
        <img class="rounded-circle" src="<?= BASEURL; ?>/img/profile.jpg" width="200" />
    </div>
    <div class="text-center mt-5">
        <h3 class="display-6 fw-semi-bold">Muhammad Sandy Putra Riyadi</h1>
    </div>
    <div class="text-center">
        <p class="mt-3">Hello, My Name is <?= $data['name']; ?>, I'm <?= $data['age']; ?> years old, Currently Working as <?= $data['work'] ?>.</p>
    </div>
    <div class="text-center mb-10">
        <a href="<?= BASEURL; ?>" class="btn btn-primary" tabindex="-1" role="button">Home</a>
        <a href="<?= BASEURL; ?>/about/page" class="btn btn-primary" tabindex="-1" role="button">Page</a>
    </div>
</div>