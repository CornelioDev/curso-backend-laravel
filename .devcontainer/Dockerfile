FROM mcr.microsoft.com/devcontainers/php:1-8.3-bookworm

# La imagen base trae un repo APT de Yarn cuya llave GPG ya no es válida
# (NO_PUBKEY 62D54FD4003F6525), lo que rompe cualquier `apt-get update`.
# No lo necesitamos: Node/Yarn se gestionan vía la feature de Node + corepack.
# Lo eliminamos para que las siguientes capas puedan actualizar APT sin error.
RUN rm -f /etc/apt/sources.list.d/yarn.list /usr/share/keyrings/yarnkey.gpg

RUN apt-get update && apt-get install -y sqlite3 libsqlite3-dev && rm -rf /var/lib/apt/lists/*

RUN sed -i 's/xdebug.mode = debug/xdebug.mode = coverage/' /usr/local/etc/php/conf.d/xdebug.ini
