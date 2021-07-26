#!/usr/bin/env bash

case "$(uname -s)" in
    Darwin)
        echo 'Mac OS X'
        sed -i '' 's/repeatable//g' schema-directives.graphql
        ;;
    Linux)
        echo 'Linux'
        sed -i 's/repeatable//g' schema-directives.graphql
        ;;
    *)
        echo 'Other OS'
        ;;
esac

