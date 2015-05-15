#!/bin/sh
pushd "`dirname "$0"`" >/dev/null
while true; do
  git pull origin master
  git submodule foreach git pull origin master
  sleep 60s
done
popd
