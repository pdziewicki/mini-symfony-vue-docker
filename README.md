# Minimal dockerized `Symfony-Vue-Postgres-Nginx` setup

## :rocket: Start

```shell
$ docker compose up --build -d
```

### Verify:
1. Go to [localhost:8000](http://localhost:8000).
2. Symfony's default landing page should be accessible.

## :skull: Stop

```shell
$ docker compose down --remove-orphans -v
```
