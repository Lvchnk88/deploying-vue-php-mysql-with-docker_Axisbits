FROM ubuntu
RUN apt -y update && apt -y install nginx
COPY default.conf /etc/nginx/sites-available/default
EXPOSE 80/tcp
CMD ["/usr/sbin/nginx", "-g", "daemon off;"]