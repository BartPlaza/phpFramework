<?php require_once 'header.view.php' ?>

<h1>Tasks</h1>

<h2>Add Task</h2>

<form action="/tasks" method="POST">
	<input type="text" name="description" placeholder="enter task">
	<input type="hidden" name="status" value="0">
    <input type="date" name="date">
	<input type="checkbox" name="status" value="1"> Is done?
	<button type="submit">Send</button>
</form>

<?php require_once 'footer.view.php' ?>