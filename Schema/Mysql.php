<?php

namespace Kanboard\Plugin\StarredProjects\Schema;

use PDO;

const VERSION = 1;

function version_1(PDO $pdo)
{
    $pdo->exec('
        CREATE TABLE IF NOT EXISTS starred_projects (
          id INT PRIMARY KEY AUTO_INCREMENT,
          user_id INT NOT NULL,
          project_id INT NOT NULL,
          FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE CASCADE,
          FOREIGN KEY(project_id) REFERENCES projects(id) ON DELETE CASCADE,
          UNIQUE(user_id, project_id)
        ) ENGINE=InnoDB CHARSET=utf8
    ');
}
