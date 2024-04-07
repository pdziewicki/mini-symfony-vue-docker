# Minimal dockerized `Symfony-Vue-Postgres-Nginx` setup

## Start :rocket:

```shell
$ docker compose up --build -d
```

### Verify

1. **Frontend**
    - Go to [localhost:80](http://localhost:80).
    - *Vue3* default landing page should be accessible.

2. **Backend**
    - Go to [localhost:8000](http://localhost:8000).
    - *Symfony* default landing page should be accessible.

## Stop :skull:

```shell
$ docker compose down --remove-orphans -v
```

## TODO
- [x] backend stub
- [x] frontend stub
- [x] basic nginx config
- [ ] database setup
- [ ] communication between services
- [ ] nix reproducible dev environment
