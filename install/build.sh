FILE=.flame
if test -f "$FILE"; then
    rm -r applications/junction;
    mkdir applications/junction;
    cd applications/junction;
    ember init;
    yes | ember install ember-tribe;
    yes | ember install ember-junction;
    php sync-types.php;
    ember build -prod;
    php sync-dist.php;
    rm .gitignore;
    cd ../../;
    rm build.sh;
else
    echo "This is not a Flame folder."
fi