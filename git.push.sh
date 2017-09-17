#!/bin/bash
m=$1
root=$(pwd)
cd $root
project=${root##*/}
remoteURl[0]="git@github.com:opensmarty/$project.git"
remoteURl[1]="git@git.oschina.net:opensmarty/$project.git"

push(){
    index=0
    for val in ${remoteURl[@]}
    do
        domain=`expr ${val%:*} | cut -d"@" -f2`
        if [[ $(git remote -v) =~ $val ]]
        then
            echo "分支[$index]:$domain"
            git pull $domain master
            git add .
            git status
            git commit -m $m
            git push $domain master
        else
            git remote add $domain $val
        fi
        ((index++))
        echo ""
    done
}

echo "项目【$project】开始更新"
push
echo "更新结束"