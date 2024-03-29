git --version
	to check git version or checking that git is working successfully
	
git config --global user.name "Irfan Gondal" 
	to set git username globally
	
git config --global user.email "irfan@gmail.com"	
	to set git email globally
	
	Note: Use global to set the username and e-mail for every 
	repository on your computer. If you want to set the username/ 
	e-mail for just the current repo, you can remove --global.

mkdir myproject	
	to create a new folder/directory
	mkdir makes a new directory.

cd myproject	
	to go to myproject folder
	cd changes the current working directory.
				
git init 		
	to initalize empty git repository

ls
	list of all files

git status
	to check the status of current repository

git add index.html
	to add index.html to stagaging area

git add --all
	to stage all files in pwd
	Note: The shorthand command for "git add --all" is "git add -A"

git status --short
	to check status with short/compact version 
	
	Note: Short status flags are:
		?? - Untracked files
		A - Files added to stage
		M - Modified files
		D - Deleted files

git commit -a -m "Message about commit"
	to commit without staging area

	Warning: Skipping the Staging Environment is not generally 
	recommended. Skipping the stage step can sometimes make you 
	include unwanted changes.

git log
	to view commits history/ log
	SHIFT + G to jump the end of the list, then q to exit the view.

git command -help
	to See all the available options for the specific command

git help --all
	to See all possible commands
	Note: You can also use --help instead of -help to open the 
	relevant Git manual page
	
	Warning: This will display a very long list of commands
	Note: If you find yourself stuck in the list view, 
	SHIFT + G to jump the end of the list, then q to exit the view.

git branch hello-world
	to create a new branch name of 'hello-world', 
	with the copy of same code where you create a new branch
						
git branch
	to see the list of all branch in the repository

	We can see the new branch with the name "hello-world",
	but the * beside master specifies that we are currently 
	on that branch.

	checkout is the command used to check out a branch. Moving us 
	from the current branch, to the one specified at the end of 
	the command:

git checkout hello-world
	Switched to branch 'hello-world'
	Note: Using the -b option on checkout will create a new branch, 
	and move to it, if it does not exist


git merge branchName
	to merge branchName into master branch
	this command should be run from master branch
	
git branch -d branchName
	to delete branch "branchName"
	
git remote rm origin
	to delete/ remove origin
	
git remote add origin https://github.com/fakelucky60/learn-git.git
	to add origin in git repository
	Add a remote repository as an origin
	
git push --set-upstream origin master
	to first time code push on github
	
git fetch origin
	to gets all the change history of a tracked branch/repo.
	
git merge origin/master
	to combines the current branch, with a specified branch.
	
git pull origin
	to update our local Git:
	
git branch
	to show branch list in your repository

git branch -r
	to show only remote branches
	
git branch -a
	to show all local and remote branches
