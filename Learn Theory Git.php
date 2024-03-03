Learn Git

What is Git?

	Git is a popular version control system. It was created by 
	Linus Torvalds in 2005, and has been maintained by Junio Hamano 
	since then. 

	It is used for:
		Tracking code changes
		Tracking who made changes
		Coding collaboration

What does Git do?
	*Manage projects with Repositories
	*Clone a project to work on a local copy
	*Control and track changes with Staging and Committing
	*Branch and Merge to allow for work on different parts 
	and versions of a project
	*Pull the latest version of the project to a local copy
	*Push local updates to the main project

Working with Git
	Initialize Git on a folder, making it a Repository
	Git now creates a hidden folder to keep track of changes in that folder
	When a file is changed, added or deleted, it is considered modified
	You select the modified files you want to Stage
	The Staged files are Committed, which prompts Git to store a permanent snapshot of the files
	Git allows you to see the full history of every commit.
	You can revert back to any previous commit.
	Git does not store a separate copy of every file in every commit, but keeps track of changes made in each commit!

Why Git?
	Over 70% of developers use Git!
	Developers can work together from anywhere in the world.
	Developers can see the full history of the project.
	Developers can revert to earlier versions of a project.

What is GitHub?
	Git is not the same as GitHub.
	GitHub makes tools that use Git.
	GitHub is the largest host of source code in the world, and has been owned by Microsoft since 2018.
	In this tutorial, we will focus on using Git with GitHub.
	
Git status
	Now Git is aware of the file, but has not added it to our 
	repository!
	Files in your Git repository folder can be in one of 2 states:
		Tracked - files that Git knows about and are added to the 
		repository
		Untracked - files that are in your working directory, but 
		not added to the repository

git add --all
	Using --all instead of individual filenames will stage all 
	changes (new, modified, and deleted) files.

Git Commit
	Since we have finished our work, we are ready move from stage to 
	commit for our repo.
	Adding commits keep track of our progress and changes as we work. 
	Git considers each commit change point or "save point". 
	It is a point in the project you can go back to if you find a 
	bug, or want to make a change.
	When we commit, we should always include a message.
	By adding clear messages to each commit, it is easy for 
	yourself (and others) to see what has changed and when.
	The commit command performs a commit, and the -m "message" 
	adds a message.

Git Commit without Stage
	Sometimes, when you make small changes, using the staging 
	environment seems like a waste of time. It is possible to 
	commit changes directly, skipping the staging environment. 
	The -a option will automatically stage every changed, 
	already tracked file.

Working with Git Branches
	In Git, a branch is a new/separate version of the main 
	repository.
	Let's say you have a large project, and you need to update the 
	design on it.
	Branches allow you to work on different parts of a project 
	without impacting the main branch.
	When the work is complete, a branch can be merged with the main 
	project.
	You can even switch between branches and work on different 
	projects without them interfering with each other.
	Branching in Git is very lightweight and fast!

Merge Branches
	to merge a branch first all changes to be commited before 
	merging.
	Then checkout/switch to master branch and run this Command:
		git merge branchName

Merge Conflict
	Git can handle most merges on its own with automatic merging 
	features. A conflict arises when two separate branches have 
	made edits to the same line in a file, or when a file has been 
	deleted in one branch but edited in the other. Conflicts will 
	most likely happen when working in a team environment.