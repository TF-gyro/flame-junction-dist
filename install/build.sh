#!/usr/bin/env bash

# Check if the shell is Bash
if [ -z "$BASH_VERSION" ]; then
    echo "Re-running script with Bash..."
    /bin/bash "$0" "$@"
    exit $?
fi

# check if it's a flame folder
if [ ! -f ".flame" ];
then
    echo "This is not a Flame folder."
    exit 1;
fi

# All's fine, proceed optimistically
_PROOT=$(pwd)

# remove existing junction and start fresh
[[ -e "applications/junction" ]] && rm -r applications/junction
mkdir applications/junction
cd applications/junction

# create new ember-junction instance
ember init
yes | ember install ember-tribe
yes | ember install ember-junction

# build for production
php sync-types.php
npm run build
php sync-dist.php

# project cleanup
rm .gitignore
cd $_PROOT
[[ -e build.sh ]] && rm build.sh

##################
##################

# git push and increment version of flame-junction-dist

##################
##################

# Function to check if we're in a git repository
check_git_repo() {
    if ! git rev-parse --git-dir > /dev/null 2>&1; then
        echo "Error: Not a git repository"
        exit 1
    fi
}

# Function to check if there are any changes to commit
check_changes() {
    git_status=$(git status -s)
    [[ -n "$git_status" ]]
}

# Function to get the latest tag from a directory
get_latest_tag() {
    local dir=$1
    (cd "$dir" && git describe --tags --abbrev=0 2>/dev/null) || echo "0.0.0"
}

# Main execution starts here
echo "Starting version synchronization process..."

# Check if current directory is a git repository
check_git_repo

# Get reference tag first (we'll need it for the commit message)
reference_tag=$(get_latest_tag "../flame-junction-src")

# Save changes in master branch and push to origin
if check_changes; then
    echo "Changes detected, committing..."
    git add .
    commit_message="latest validated build ${reference_tag}"
    echo "Using commit message: $commit_message"
    git commit -m "$commit_message"

    echo "Pushing changes to origin/master..."
    git push origin master
else
    echo "No changes to commit in current repository"
fi

# Get tags from both repositories
current_tag=$(get_latest_tag ".")

echo "Current repository tag: $current_tag"
echo "Reference repository tag: $reference_tag"

# Compare and update tags if necessary
if [ "$current_tag" != "$reference_tag" ]; then
    echo "Tags are different. Updating current repository tag to match reference..."

    # Delete the current tag locally and remotely if it exists
    if [ -n "$current_tag" ]; then
        git tag -d "$current_tag" 2>/dev/null
        git push origin ":refs/tags/$current_tag" 2>/dev/null
    fi

    # Create new tag and push it
    git tag "$reference_tag"
    git push origin "$reference_tag"

    echo "Tag $reference_tag has been created and pushed to origin"
else
    echo "Tags are already synchronized"
fi

echo "Version synchronization completed successfully"
