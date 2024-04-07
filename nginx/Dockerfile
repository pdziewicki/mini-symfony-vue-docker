FROM nginx:1.25-alpine

RUN rm /etc/nginx/conf.d/default.conf

COPY front.conf /etc/nginx/conf.d/front.conf
COPY back.conf /etc/nginx/conf.d/back.conf
