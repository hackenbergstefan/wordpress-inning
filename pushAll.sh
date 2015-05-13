#!/usr/bin/env bash

pushd "`dirname "$0"`"
for SUBM in ./wp-content/themes/wordpress-inning-theme; do
  git add $SUBM
  git commit -m "update submodule $(basename $SUBM)" $SUBM
done
git push
