<?php

namespace Kanboard\Plugin\StarredProjects\Model;

use Kanboard\Core\Base;

class StarredProjectsModel extends Base
{
    const TABLE = 'starred_projects';

    public function findAllProjects($user_id)
    {
        $starredProjects = $this->db->table(self::TABLE)
            ->eq('user_id', $user_id)
            ->findAll();

        $projects = array();
        foreach ($starredProjects as $starredProject) {
            $projects[] = $this->projectModel->getById($starredProject['project_id']);
        }

        return $projects;
    }

    public function findAllProjectsForBoardSelector($user_id, $all_boards)
    {
        $starred_projects = array_column($this->findAllProjects($user_id), 'name', 'id');        
        return count($starred_projects) > 0 ? $starred_projects : $all_boards;
    }

    public function find($project_id, $user_id)
    {
        $starredProject = $this->db->table(self::TABLE)
            ->eq('user_id', $user_id)
            ->eq('project_id', $project_id)
            ->findOne();

        return $starredProject;
    }

    public function star($project_id, $user_id)
    {
        $status = $this->db->table(self::TABLE)->insert(array(
            'project_id' => $project_id,
            'user_id' => $user_id,
        ));

        error_log("STATUS = $status aaaa");

        return $status;
    }

    public function unstar($starred_id)
    {
        $status = $this->db->table(self::TABLE)
            ->eq('id', $starred_id)
            ->remove();

        error_log("STATUS = $status bbbb");

        return !$status;
    }
}
