#!/usr/bin/env sh
rm -rf ./src/*
./vendor/bin/openapi-code-generator generate -f ./openapi.json -c ./.config.openapi-generator.php