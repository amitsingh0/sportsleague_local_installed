api = 2
core = 8.x
; Include the definition for how to build Drupal core directly, including patches:
includes[] = drupal-org-core.make
projects[sportsleague][profile] = "sportsleague"
projects[sportsleague][download[type] = "git"
projects[sportsleague][download[url] = "https://git.drupal.org/project/sportsleague.git"
projects[sportsleague][download][branch] = 8.x-1.x
