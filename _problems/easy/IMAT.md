---
{"category_name":"easy","problem_code":"IMAT","problem_name":"Intersection Matrix","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n    3 3 6\r\n    1 2 3\r\n    7 5 6\r\n    2 1 2","output":4,"explanation":"There are $4$ ways to select subsets of rows and columns to get happiness equal to $6$.\r\n\r\nSelect rows $\\{1,3\\}$ and columns $\\{1,2\\}$. The elements at the intersections are $\\{1,2,2,1\\}$. So, the happiness is $1 + 2 + 2 + 1 = 6$.\r\n\r\nSelect rows $\\{1\\}$ and columns $\\{1,2,3\\}$. The elements at the intersections are $\\{1,2,3\\}$. So, the happiness is $1 + 2 + 3 = 6$.\r\n\r\nSelect rows $\\{2\\}$ and columns $\\{3\\}$. The elements at the intersections are $\\{6\\}$. So, the happiness is $6$.\r\n\r\nSelect rows $\\{2,3\\}$ and columns $\\{2\\}$. The elements at the intersections are $\\{5,1\\}$. So, the happiness is $5 + 1 = 6$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/RQT8nSfLX8w","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"zankanotachi","problem_tester":"","date_added":"19-04-2021","tags":{"0":"easy","1":"knapsack","2":"ltime95","3":"meet","4":"zankanotachi"},"problem_difficulty_level":"Easy-Medium","best_tag":"Meet In Middle","editorial_url":"https://discuss.codechef.com/problems/IMAT","time":{"view_start_date":1619802000,"submit_start_date":1619802000,"visible_start_date":1619802000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=IMAT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a matrix $A$ with $N$ rows and $M$ columns. We can select some non-empty subset of rows and some non-empty subset of columns of the given matrix and add all the elements which occur at the intersection of selected rows and columns. This value is called the *happiness* of the selected rows and columns. For example, let the matrix be the following:

$1$  $2$  $3$  
$7$  $5$  $6$  
$2$  $1$  $2$  

Let rows be numbered $1$ to $N$ from top to bottom and columns numbered $1$ to $M$ from left to right. If we select rows $1$ and $3$ and columns $1$ and $2$, we get a happiness of $1 + 2 + 2 + 1 = 6$. 

We are also given an integer $B$. We need to tell the number of ways to select some non-empty subset of rows and some non-empty subset of columns so that their happiness is $B$. Since the answer can be large, find it modulo $10^9+7$.


###Input

- The first line contains an integer $T$, the number of test cases.
- The first line of each test case contains three integers $N$, $M$ and $B$ - the number of rows, the number of columns, and the intended happiness, respectively.
- Each of the next $N$ lines of the test case contains $M$ space-separated integers. The $j$-th element in the $i$-th line represents the element $A[i][j]$ in the $i$-th row and $j$-th column.

###Output
For each test case, output in a separate line, the number of ways to select some non-empty subset of rows and some non-empty subset of columns so that their happiness is $B$, modulo $10^9+7$.

###Constraints 
- $1 \leq T \leq 3$
- $1 \leq N\cdot M \leq 200$
- $1 \leq A[i][j] , B \leq 10^5$

###Subtasks
**Subtask #1 (15 points):**
- $1 \leq N\cdot M \leq 10$

**Subtask #2 (25 points):**
- $1 \leq N\cdot M \leq 40$

**Subtask #3 (35 points):**
- $1 \leq N\cdot M \leq 144$

**Subtask #4 (25 points):**
- original constraints




###Sample Input
    1
    3 3 6
    1 2 3
    7 5 6
    2 1 2

###Sample Output
    4	
###Explanation
There are $4$ ways to select subsets of rows and columns to get happiness equal to $6$.

Select rows $\{1,3\}$ and columns $\{1,2\}$. The elements at the intersections are $\{1,2,2,1\}$. So, the happiness is $1 + 2 + 2 + 1 = 6$.

Select rows $\{1\}$ and columns $\{1,2,3\}$. The elements at the intersections are $\{1,2,3\}$. So, the happiness is $1 + 2 + 3 = 6$.

Select rows $\{2\}$ and columns $\{3\}$. The elements at the intersections are $\{6\}$. So, the happiness is $6$.

Select rows $\{2,3\}$ and columns $\{2\}$. The elements at the intersections are $\{5,1\}$. So, the happiness is $5 + 1 = 6$. 


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>