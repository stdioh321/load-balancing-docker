FROM nginx
RUN apt update
RUN apt install -y vim
COPY nginx.conf /etc/nginx/nginx.conf
COPY default.conf /etc/nginx/conf.d/default.conf
