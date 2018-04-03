<?php 
require_once 'header.view.php';
?>


	<h1>Excersises</h1>
	<ul>
		
	<?php foreach($tasks as $task) : ?>
		<li>
			<?php if ($task->getStatus()) : ?>
				<strike><?= "{$task->getDescription()} : {$task->getDate()}"?></strike>
			<?php else : ?>
				<b><?= "{$task->getDescription()} : {$task->getDate()}" ?></b>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
	
	</ul>

<?php require_once 'footer.view.php' ?>
