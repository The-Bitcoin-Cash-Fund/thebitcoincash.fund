FROM nginx

RUN apt-get update \
    && apt-get install --no-install-recommends --no-install-suggests -y libyaml-perl

COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY html/ /usr/share/nginx/html/
COPY i18n/ /usr/share/nginx/i18n/

RUN for f in `ls /usr/share/nginx/i18n/*.yml`; do \
        /usr/share/nginx/i18n/translate.pl /usr/share/nginx/i18n/en.yml $f /usr/share/nginx/html/index.html \
      > /usr/share/nginx/html/index.`basename -s .yml $f`.html ; \
    done \
    && rm /usr/share/nginx/html/index.html
