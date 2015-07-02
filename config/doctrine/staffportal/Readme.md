### Doctrine Mapping Files

Generic Nerd3\StaffPortal Mapping files go here.

For example

User.User.orm.yml
```yaml
Nerd3\StaffPortal\User\User:
  type: entity
  table: user
  id:
    id:
      type: integer
      generator:
        strategy: AUTO
  fields:
    name:
      type: string
``` 
