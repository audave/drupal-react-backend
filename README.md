## Dev environment setup
Install lando
https://docs.lando.dev/install/macos.html

## Getting Started
To install a dev portal using this profile.
- Clone Repo
- _Lando start_
  - For local development only
- Run composer install
  - Either within your lando container or on whatever server you want to install this on
- Install drupal based on install profile


## Commands for getting started on Lando

```
lando start
lando composer install
lando drush site:install drupal_react_backend  --site-name="Apigee API Portal" --db-url=mysql://drupal10:drupal10@database/drupal10 -y
```
