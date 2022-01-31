
installation git:
sudo apt-get install git

git --version


merge 

master (main ou origin):branche principal d'un projet

git commit: enregistrer le travail sur le local

git push : maitre le travail sur le serveur 

git add: pour rendre un fichier suivie par git 

git fetch : upload fichier pour comparer 

git pull : uload et ecraser 



git status : lister les fichiers modifié et non commités 

git log: historique des commits faits 

git branch: lister les branches locales 

git branch -av: lister toutes les branches local et distants 

git branch my_branch : créer une nv branch

//je ne peut pas merger une branche active je vais à l'autre branche si je suis dans la branche_a
//je merge a dans b 
git checkout branche_b 
git merge branche_a 

//puis on peut supprimer la branche a 
git branch_a --d

//initialiser un project 
git init

// créer et modifier un fichier 
git commit -m "create index.html file"
git commit -m "update index.html file"

// lister les modifications sur les fichiers 
git log





