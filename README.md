# Minimal dockerized `Symfony-Vue-Postgres-Nginx` setup

## Start :rocket:

```shell
$ docker compose up --build -d
$ docker compose exec back php bin/console doctrine:migrations:migrate -q
$ docker compose exec back php bin/console doctrine:fixtures:load -q
```

### Verify

1. **Frontend**
    - Go to [localhost:80](http://localhost:80).
    - *Vue3* default landing page should be accessible.
    - White-background component is rendered displaying data fetched from Backend.

2. **Backend**
    - Go to [localhost:8000](http://localhost:8000).
    - *Symfony* default landing page should be accessible.
    - Endpoints `/hello` and `/contact` return dummy data.

## Stop :skull:

```shell
$ docker compose down --remove-orphans -v
```

## TODO :wrench:
- [x] backend stub
- [x] frontend stub
- [x] basic nginx config
- [x] database setup
- [x] communication between services
- [ ] nix reproducible dev environment
- [ ] separate `dev`/`prod` environments
- [ ] downsize `back` image
