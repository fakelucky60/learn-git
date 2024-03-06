*agar ap master branch se doosri branch main switch hoe, wahan kuch 
changing ki is ko save kia, lekin us ko stage nhi kia ya stage kar 
bhi dia, lekin commit nhi kia to phir jab ap master branch main 
switch kren ge to wo changing wahan bhi show hogi. Is liye doosri 
branch mian switch hone se pehle commit lazmi kren.

*Jab ap kisi repositry ko GitHub pe push karna chahain to sab se 
pehle github pe login hon, aur wahan aik repositry banain, phir 
ka link copy kar ke ye command apne local system pe run karain:
git remote add origin https://github.com/fakelucky60/learn-git.git
is ke bad apna Code push karain:
git push --set-upstream origin master
oper wali command first time run karain us ke bad jab bhi koi 
changing ho to sirf
git push 
command run karain.

*agar ap apne origin ka address change karna chahain to pehle ye 
command run karain
git remote rm origin
us ke bad uper wale tarike se new origin add karain.

This line is edited on github directly for learing purpose

This is line is added from on github from new branch, that branch also created from github too.

*ap github par directly branch create kar sakte hain, lekin jab ap apne local system pe 'git pull' karain gay to ap ke pas code pull ho jay ga lekin jab ap 'git branch' ki command lagain gay to us main wo new branch show nhi hogi, leking jab ap 'git branch -a' lagain gay to wo branch red color main show ho jay gi, us ke bad jab 'git checkout new-branch' karian gay to wo new branch ap ke local system main update ho jay gi.

This line is added from local system from new branch, that branch also created from ls too.

a