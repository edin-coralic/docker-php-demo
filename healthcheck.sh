#!/bin/sh

if [ -f /app/unhealthy ]; then
  exit 1
fi

STATUS=$(curl -s -o /dev/null -w "%{http_code}" -f -I -m 4 -A "HEALTHCHECK" http://localhost/)

if [ $STATUS -eq 200 ]; then
	exit 0
else
  exit 1
fi
