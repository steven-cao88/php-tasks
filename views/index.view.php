<?php require 'partials/head.view.php'; ?>

<ul>
    <?php foreach ($tasks as $task): ?>
        <?php if ($task->isComplete()): ?>
            <li><s><?php echo $task->getDescription(); ?></s></li>
        <?php else: ?>
            <li><?php echo $task->getDescription(); ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

<h1>Add new task</h1>

<form method="POST" action="/tasks">
    <label for="description">Description: </label>
    <input type="text" name="description" id="description" />
    <button type="submit">Submit</button>
</form>

<?php require 'partials/footer.view.php'; ?>