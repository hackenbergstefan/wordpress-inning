#!/usr/bin/env bash

pushd "`dirname "$0"`" >/dev/null
for SUBM in ./wordpress/wp-content/themes/wordpress-inning-theme; do
  git add $SUBM
  git commit -m "update submodule $(basename $SUBM)" $SUBM
done
git push
