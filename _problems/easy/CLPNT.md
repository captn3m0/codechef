---
{"category_name":"easy","problem_code":"CLPNT","problem_name":"Doof on Cartesian","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/ga5jzMwP2HQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sarthakmanna","problem_tester":"","date_added":"18-06-2020","tags":{"0":"binary","1":"cole2020","2":"geometry","3":"math","4":"sarthakmanna","5":"souradeep1999"},"problem_difficulty_level":"Easy","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/CLPNT","time":{"view_start_date":1594838700,"submit_start_date":1594838700,"visible_start_date":1594838700,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CLPNT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You may have helped Chef and prevented Doof from destroying the even numbers. But, it has only angered Dr Doof even further. However, for his next plan, he needs some time. Therefore, Doof has built $N$ walls to prevent Chef from interrupting him. You have to help Chef by telling him the number of walls he needs to destroy in order to reach Dr Doof.

Formally, the whole area can be represented as the first quadrant with the origin at the bottom-left corner. Dr. Doof is located at the origin $(0, 0)$. There are $N$ walls, the i-th wall is a straight line segment joining the points $(a_i, 0)$ and $(0, a_i)$. For every initial position of Chef $(x_j, y_j)$, find the number of walls he needs to break before reaching Doof. Obviously, chef can't start from a point on the wall. Therefore, if $(x_j, y_j)$ lies on any of the given walls, print $-1$ in a new line.

###Input

- First line contains $T$, denoting the number of testcases.
- The first line of every test case contains a single integer $N$ denoting the number of walls Dr Doof has built.
- The next line contains $N$ space separated distinct integers each denoting $a_i$.
- The next line contains a single integer $Q$ denoting the number of times Chef asks for your help.
- The next $Q$ lines contains two space separated integers $x_j$ and $y_j$, each denoting the co-ordinates of the starting point of Chef.

###Output

For each query, print the number of walls Chef needs to break in order to reach Dr Doof in a separate line. If Chef tries to start from a point on any of the walls, print $-1$.

###Constraints 
- $1 \leq T \leq 2 * 10^2$
- $1 \leq N, Q \leq 2 * 10^5$
- $1 \leq a_i \leq 10^9$
- $0 \leq x_j, y_j \leq 10^9$
- $a_1 < a_2 < a_3 < .... < a_N$
- Sum of $N$ and $Q$ over all testcases for a particular test file does not exceed $2 * 10^5$

###Sample Input
	1
	2
	1 3
	5
	0 0
	2 0
	0 4
	1 1
	1 2

###Sample Output
	0
	1
	2
	1
	-1

	
###Explanation

The sample input can be represented by the graph given below:

<img src="https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/COLE2020/image5.png" alt="test case 1" width="300" height="300">

If Chef starts from $(0, 0)$, he can reach Dr Doof without destroying any wall.  
If Chef starts from $(2, 0)$, he has to destroy the $1st$ wall.  
If Chef starts from $(0, 4)$, he has to destroy both the walls.  
If Chef starts from $(1, 1)$, he has to destroy the $1st$ wall.  
As $(1, 2)$ lies on the second wall, the answer is $-1$ for the last query.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>