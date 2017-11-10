# Modules Drupal7 Effenti #

## Requires ##

Les modules suivants sont publiques, mais sont absolument nécessaires au bon fonctionnement de notre application mobile (Guide Antipoison):
* https://ftp.drupal.org/files/projects/registry_autoload-7.x-1.3.tar.gz
* https://ftp.drupal.org/files/projects/plug-7.x-1.1.tar.gz
* https://ftp.drupal.org/files/projects/conditional_fields-7.x-3.0-alpha2.tar.gz
* https://ftp.drupal.org/files/projects/restful-7.x-2.16.tar.gz

## Modules ##
Contient les modules Drupal7 développés par Effenti. Ils doivent être importés en entiers:
* import_centre_content_type

## Patches ##
Contient les patch pour d'autres modules:
* restful.patch (pour le module RESTful)

## Template ##
Template pour les antidotes (node--antidote.tpl). Il doit être copié-collé dans le répertoire:
```sites/all/themes/absolunet/template/```
