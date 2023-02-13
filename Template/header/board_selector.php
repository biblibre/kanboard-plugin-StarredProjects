<?php
    $starred_projects = $this->app->starredProjectsModel->findAllProjects($this->user->getId());
    $starred_projects = array_column($starred_projects, 'name', 'id');
    $only_starred = $this->app->userMetadataModel->get($this->user->getId(), 'starredprojects_only_starred_in_project_selector', '0');
    foreach ($board_selector as $id => $project) {
        if (array_key_exists($id, $starred_projects)) {
            $board_selector[$id] = " ★ " . $board_selector[$id];
        } elseif ($only_starred) {
            unset($board_selector[$id]);
        }
    }
?>
<?= $this->render('kanboard:header/board_selector', array('board_selector' => $board_selector)) ?>
