---
{"category_name":"medium","problem_code":"BENDSPF5","problem_name":"5 - Minimum Cost Direction","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"arcane810","problem_tester":"","date_added":"1-12-2020","tags":{"0":"arcane810"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1612018800,"submit_start_date":1612018800,"visible_start_date":1612018800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BENDSPF5","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Okabe wants to visit all of the $N$ distinct points $(x_{i},y_{i})$, $1 \leq i \leq N$ in the $2D$ plane. 

To do this he has to pick two vectors (or directions) $A$ and $B$ such that $A$ and $B$ are perpendicular. He can move along $A$ and $-A$ for a cost of $1$ per unit distance and move along $B$ and $-B$ for no cost at all (He can move real units too in these directions). He cannot move in any other directions. 

What is the minimum cost to visit all the points assuming he can start at any one of the points and chooses the optimal direction $A$.

For Example, let the point set in the following image be the points $(1,0)$, $(0,0)$, $(0,1)$, $(2,2)$
<img src = "https://codechef_shared.s3.amazonaws.com/download/Images/BENDSP03/MCDIR/MCDIR.png">

In the image we have chosen $A$,$B$ in the directions of vectors $(1,1)$ and $(1,-1)$ (not the optimal choice)
- Okabe can start at $(0,0)$ then go in the direction of $A$ till $(0.5, 0.5)$ with cost of $1$ per unit.
- Then he can go to $(0,1)$ and to $(1,0)$ and back to $(0.5,0.5)$ using paths in the direction of $B$ and opposite to it. This will be of $0$ cost.
- After that he can go to $(2,2)$ which is in the direction of $A$ with cost of $1$ per unit.
Here the total cost will be $2\cdot \sqrt{2}$ .  (This is not the optimal solution though)


###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- The 1st line of each testcase contains a single integer $N$.
- In the next $N$ lines, the $i^{th}$ line contains $2$ integers each, $x_{i}$ and $y_{i}$.

###Output:
Print $T$ lines, each line should contain a single number, the minimum cost of visiting all points if optimal starting point and $A$ are chosen. (The relative and absolute errors should be less than $10^{-6}$)

###Constraints 
- $1 \leq T \leq 500$
- $1 \leq N \leq 5\times 10^{5}$
- $-10^9 \leq x_{i}, y_{i} \leq 10^9$
- Sum of $N$ over all testcases does not exceed $5\times 10^{5}$

###Subtasks
**Subtask \#1 \(5 Points\)**
- $1 \leq T \leq 20$
- $1 \leq N \leq 50$

**Subtask \#2 \(10 Points\)**
- $1 \leq T \leq 20$
- $1 \leq N \leq 100$

**Subtask \#3 \(20 Points\)**
- $1 \leq T \leq 20$
- $1 \leq N \leq 2000$
- Sum of $N$ over all testcases does not exceed 10000

**Subtask \#4 \(65 Points\)**
- $1 \leq T \leq 500$
- $1 \leq N \leq 5\times 10^{5}$
- Sum of $N$ over all testcases does not exceed $5\times 10^{5}$

###Sample Input:
	3
	2
	1 2
	2 3
	4
	0 0
	0 2
	1 2
	1 0
	3
	0 0
	0 1
	1 0

###Sample Output:
	0
	1
	0.707106781186548
	
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>