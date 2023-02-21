# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [0.4.0] - 2023-02-21

StarredProjects now requires Kanboard version 1.2.14 or greater

### Changed

- Use template hooks instead of overriding template 'dashboard/overview'
  (contributed by @alfredbuehler, #17)
- Sort starred projects by modification time, recently modified first
  (contributed by @alfredbuehler, #15)

## [0.3.0] - 2022-01-20

### Added

- Added foreign key constraints on `starred_projects.user_id` and
  `starred_projects.project_id`

## [0.2.0] - 2020-03-04

### Added

- Show starred projects first in project selector
- Add user option to show only starred projects in project selector

### Fixed

- Fix schema for SQLite
- Make it work when URL rewriting is disabled

## [0.1.1] - 2018-09-28

Initial release

[0.4.0]: https://github.com/biblibre/kanboard-plugin-StarredProjects/releases/tag/v0.4.0
[0.3.0]: https://github.com/biblibre/kanboard-plugin-StarredProjects/releases/tag/v0.3.0
[0.2.0]: https://github.com/biblibre/kanboard-plugin-StarredProjects/releases/tag/v0.2.0
[0.1.1]: https://github.com/biblibre/kanboard-plugin-StarredProjects/releases/tag/v0.1.1
