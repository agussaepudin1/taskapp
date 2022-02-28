<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Tasks<?= $this->endSection() ?>

<?= $this->section("content") ?>
    
    <h1>Tasks</h1>

    <h2><a href="<?= site_url("/tasks") ?>">&#8592; back to index</a></h2>

    <ul>
        <dt>ID</dt>
        <dd><?= $task->id ?></dd>

        <dt>Description</dt>
        <dd><?= esc($task->description) ?></dd>

        <dt>Created At</dt>
        <dd><?= $task->created_at ?></dd>

        <dt>Updated At</dt>
        <dd><?= $task->updated_at ?></dd>

    </ul>

    <h2><a href="<?= site_url("/tasks/edit/".$task->id) ?>">Edit</a></h2>
    <h2><a href="<?= site_url("/tasks/delete/".$task->id) ?>">Delete</a></h2>

<?= $this->endSection() ?>