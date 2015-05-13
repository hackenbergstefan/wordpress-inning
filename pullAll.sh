#!/usr/bin/env bash

pushd "`dirname "$0"`"
git pull
git submodule foreach git pull
popd
