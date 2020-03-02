<?php
    $starred_projects = $this->app->starredProjectsModel->findAllProjects($this->user->getId());
    foreach ($starred_projects as $project) {
        $id = $project['id'];
        if (array_key_exists($id, $board_selector)) {
            $board_selector[$id] = " ★ " . $board_selector[$id];
        }
    }
?>

<?= $this->app->component('select-dropdown-autocomplete', array(
    'name' => 'boardId',
    'placeholder' => t('Display another project'),
    'items' => $board_selector,
    'redirect' => array(
        'regex' => 'PROJECT_ID',
        'url' => $this->url->to('BoardViewController', 'show', array('project_id' => 'PROJECT_ID')),
    ),
    'onFocus' => array(
        'board.selector.open',
    )
)) ?>
