---
{"category_name":"easy","problem_code":"UWCOI20D","problem_name":"Base Plans","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"socho","problem_tester":null,"date_added":"17-02-2020","tags":{"0":"socho","1":"uwcoi20"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UWCOI20D","time":{"view_start_date":1582655400,"submit_start_date":1582655400,"visible_start_date":1582655400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UWCOI20D","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
After fixing the mercury leak, Kim has arrived in the planning room, where he finds a square map of a field, with $N$ rows and $N$ columns. Each cell in the field is either empty, or has a lookout tower on it. Using his notes, he immediately realises that this field is where the JSA will build their new base!

Kim knows that Soum is a fan of symmetric base design, and will only approve of a base to be built if it is square. Furthermore, Soum also requires that all the rows in the base, and all the columns in the base have exactly one tower square in them. 

This means that a base plan is valid if and only if:

* It is square in shape
* Every row in the base has exactly one lookout tower in it.
* Every column in the base has exactly one lookout tower in it.

Kim notices that all the rows and all the columns in the field have exactly one tower square in them, but he knows that some of them could have been built to throw him off! Can you help Kim find how many valid base plans are possible in this field? Two base plans are considered different if one contains a cell in the grid that the other does not.


Please refer to the samples for more details.

###Input:

- The first line of input contains $T$, the number of testcases.
- The first line of each testcase contains a single integer, $N$, representing the side length of the field.
- The next $N$ lines of each testcase contain a string of length $N$, consisting of only 0 and 1. If position $j$ in string $i$ is 0, it means that this the field has no tower at $[i][j]$, and if it is 1, then this cell does have a tower at $[i][j]$.

It is guaranteed that every row in the input will have exactly one tower, and every column in the input will also have exactly one tower.

###Output:
For each testcase, output a single integer $K$, representing the number of different base plans possible.


###Subtasks

- For all subtasks, $N \leq 2500$ and $T \leq 10$. 
- In addition, the sum of $N$ in any testfile is at most $2500$.

Subtask 1 [28 points] : All the towers will be on the diagonal from the top-left to the bottom-right positions. Formally, all positions where $i = j$ have a tower. And no other position has a tower

Subtask 2 [39 points] : $N \leq 600$

Subtask 3 [33 points] : $N \leq 2500$

###Sample Input:
	2
	2
	10
	01
	4
	1000
	0010
	0100
	0001

###Sample Output:
	3
	8
	
###Explanation:

![fig1](https://s3.amazonaws.com/codechef_shared/uploads/2020/BS2.png =100x100)

In the first testcase, there are three valid base plans: The entire 2x2 square, the 1x1 square which contains only the cell (1, 1) and the 1x1 square which contains only the cell (2, 2).

![fig1](https://s3.amazonaws.com/codechef_shared/uploads/2020/BS1.png =300x100)

In the second testcase, 

![fig1](https://s3.amazonaws.com/codechef_shared/uploads/2020/BS4.png =150x150)

There are eight valid base plans:
- The 4x4 square with top left corner at (1, 1)
- The 3x3 square with top left corner at (1, 1)
- The 3x3 square with top left corner at (2, 2)
- The 3x3 square with top left corner at (1, 1)
- The 2x2 square with top left corner at (2, 2)
- The 1x1 square which contains only the cell (1, 1)
- The 1x1 square which contains only the cell (2, 3)
- The 1x1 square which contains only the cell (3, 2)
- The 1x1 square which contains only the cell (4, 4)

![fig1](https://s3.amazonaws.com/codechef_shared/uploads/2020/BS3.png =400x200)
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>