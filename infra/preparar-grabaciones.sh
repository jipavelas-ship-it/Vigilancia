#!/usr/bin/env bash
# Crea la carpeta de grabaciones con los permisos correctos. Ejecutar con sudo.
set -euo pipefail
DIR=/var/lib/mediamtx/recordings
mkdir -p "$DIR"
# Ajusta el usuario si tu servicio mediamtx corre con otro (ver: systemctl cat mediamtx)
chown -R mediamtx:mediamtx "$DIR" 2>/dev/null || chown -R "$(whoami)" "$DIR"
echo "Carpeta lista: $DIR"
df -h "$DIR"
