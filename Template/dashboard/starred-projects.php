<?php $starredProjects = $this->app->starredProjectsModel->findAllProjects($this->user->getId()); ?>
<?php if(!empty($starredProjects)): ?>
    <div class="table-list">
        <div class="table-list-header">
            <div class="table-list-header-count"><?= t('Starred projects') ?></div>
            <div class="table-list-header-menu">&nbsp;</div>
        </div>
        <?php foreach ($starredProjects as $project): ?>
            <div class="table-list-row table-border-left">
                <div>
                    <?php if ($this->user->hasProjectAccess('ProjectViewController', 'show', $project['id'])): ?>
                        <?= $this->render('project/dropdown', array('project' => $project)) ?>
                    <?php else: ?>
                        <strong><?= '#'.$project['id'] ?></strong>
                    <?php endif ?>

                    <span class="star-project" data-url="<?= $this->url->href('StarredProjectsController', 'starProject', array('plugin' => 'StarredProjects', 'project_id' => $project['id'])) ?>">
                        <?php if($this->app->starredProjectsModel->find($project['id'], $this->user->getId())): ?>
                            ★
                        <?php else: ?>
                            ☆
                        <?php endif; ?>
                    </span>

                    <span class="table-list-title <?= $project['is_active'] == 0 ? 'status-closed' : '' ?>">
                        <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
                    </span>

                    <?php if ($project['is_private']): ?>
                        <i class="fa fa-lock fa-fw" title="<?= t('Private project') ?>"></i>
                    <?php endif ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
