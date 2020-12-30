<?php
 if (! empty($errors)): ?>
    <ul style="background-color: red;color: #ffffff">
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach;?>
    </ul>
<?php endif; ?>
<form method="post">
    <div>
        <label for="title">Title</label>
        <input id="title" name="title" placeholder="Enter Article Title" value="<?= htmlspecialchars($title) ?>">
    </div>
    <div>
        <label for="content">Content</label>
        <textarea id="content" name="content" rows="5" cols="50" placeholder="Enter Article Title"><?= htmlspecialchars($content) ?></textarea>
    </div>
    <div>
        <label for="datetime">Published Date and Time</label>
        <input id="datetime" type="datetime" name="published_at" value="<?= htmlspecialchars($published_at) ?>">
    </div>
    <button>Save</button>
</form>