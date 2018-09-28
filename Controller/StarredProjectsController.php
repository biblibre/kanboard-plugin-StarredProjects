<?php

namespace Kanboard\Plugin\StarredProjects\Controller;

use Kanboard\Controller\BaseController;

class StarredProjectsController extends BaseController
{
    public function starProject()
    {
        $project = $this->getProject();
        $user = $this->getUser();

        $starred = $this->starredProjectsModel->find($project['id'], $user['id']);
        if ($starred) {
            $status = $this->starredProjectsModel->unstar($starred['id']);
        } else {
            $status = $this->starredProjectsModel->star($project['id'], $user['id']);
        }

        $this->response->json(array('status' => $status));
    }
}
