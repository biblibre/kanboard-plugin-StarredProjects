<span class="star-project" data-url="<?= $this->url->href('StarredProjectsController', 'starProject', array('plugin' => 'StarredProjects', 'project_id' => $project['id'])) ?>">
	<?php if($this->app->starredProjectsModel->find($project['id'], $this->user->getId())): ?>
		★
	<?php else: ?>
		☆
	<?php endif; ?>
</span>
