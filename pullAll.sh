#!/usr/bin/env bash

pushd "`dirname "$0"`" >/dev/null
git pull origin master
git submodule foreach git pull origin master
for SUBM in ./wordpress/wp-content/themes/wordpress-inning-theme; do
  pushd $SUBM >/dev/null
  git submodule update --remote --merge
  popd
  git add $SUBM
  git commit -m "update submodule $(basename $SUBM)" $SUBM
done
popd
