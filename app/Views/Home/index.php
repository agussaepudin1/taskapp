<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Home<?= $this->endSection() ?>

<?= $this->section("content") ?>
    
    <h1>Welcome</h1>

    <h2><a href="<?= site_url("/signup") ?>">Sign up</a></h2>

    

    <?php if(current_user()): ?>

        <p>User is logged in</p>

        Hello, <?= esc(current_user()->name) ?>

        <h2><a href="<?= site_url("/logout") ?>">Logout</a></h2>

    <?php else: ?>

        <p>User is not logged in</p>

        <h2><a href="<?= site_url("/login") ?>">Login</a></h2>

    <?php endif; ?>

<?= $this->endSection() ?>