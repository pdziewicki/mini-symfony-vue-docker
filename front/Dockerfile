FROM node:21-alpine AS base

ENV PNPM_HOME="/pnpm"
ENV PATH="$PNPM_HOME:$PATH"

RUN corepack enable

WORKDIR /app

COPY . .

FROM base AS deps
RUN --mount=type=cache,id=pnpm,target=/pnpm/store pnpm install --prod --frozen-lockfile

FROM base AS build
RUN --mount=type=cache,id=pnpm,target=/pnpm/store pnpm install --frozen-lockfile
RUN pnpm run build

# FROM base as runner
#
# COPY --from=deps /app/node_modules /app/node_modules
# COPY --from=build /app/dist /app/dist
#
# EXPOSE 8000
#
# CMD [ "pnpm", "start" ]

FROM busybox

COPY --from=deps /app/node_modules /var/www/front/node_modules
COPY --from=build /app/dist /var/www/front

# COPY --from=deps /app/node_modules /usr/share/nginx/node_modules
# COPY --from=build /app/dist /usr/share/nginx/html
#
# EXPOSE 80
#
# CMD ["nginx", "-g", "daemon off;"]