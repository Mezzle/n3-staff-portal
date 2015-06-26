### Doctrine Mapping Files

Generic Application Mapping files go here.

For example

User.User.orm.yml
```yaml
Application\User\User:
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
