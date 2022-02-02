---
{"category_name":"medium","problem_code":"PRIMECYC","problem_name":"Prime Cycle","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3 3\r\n    1 2 4 5 6 7 10\r\n    1 3 7","output":"6\r\n    -1\r\n    -1","explanation":"In the first query, we choose nodes $1,3$ and $6$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"minh2345","problem_tester":"","date_added":"2-01-2021","tags":{"0":"graphs","1":"ltime94","2":"medium","3":"minh2345","4":"pigeonhole"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PRIMECYC","time":{"view_start_date":1616864402,"submit_start_date":1616864402,"visible_start_date":1616864402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PRIMECYC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/LTIME94/russian/PRIMECYC.pdf)

You are given a full binary tree of height $n$. Node $1$ is the root, and for $i \leq 2^{n-1}-1$, node $i$ is the parent of node $2i$ and node $2i+1$. For each node $i$, there is a positive integer $a_i$ written on it.

A primeful cycle is a group of $k>2$ nodes $x_1,x_2,\ldots,x_k$ such that:

- $k$ is a prime number,
-  gcd($a_{x_1},a_{x_2}$) mod $k=$ gcd($a_{x_2},a_{x_3}$) mod $k= \ldots =$ gcd($a_{x_{k-1}},a_{x_k}$) mod $k=$ gcd($a_{x_k},a_{x_1}$) mod $k$ .

Let the height of each node be $1$ plus the distance from that node to node $1$. Note that by this definition, the height of node $1$ is $1$. Let the beauty value of a primeful cycle of nodes be the sum of the height of each node.

There are $q$ queries. In each query, you are given a node $x$. Considering all the nodes in the subtree of node $x$ (including node $x$), find the smallest possible beauty value of a primeful cycle of nodes taken from these nodes only. If there is no such group, print $-1$ instead.

###Input:
- The first line contains two integers, $n$ and $q$.
- The second line contains $2^n-1$ integers, $a_1,a_2,\ldots,a_{2^n-1}$.
- The third line contains $q$ integers, the $i$-th of which is the integer $x$ for the $i$-th query. 

###Output:
For each test case, print a single line containing the answer to the test case. Print the answer to the test cases on separate lines.

###Constraints 
- $1 \le n \le 20$
- $1 \le x \le 2^n-1$
- $1 \le q \le 10^5$
- $1 \le a_i \le 10^9$

###Subtasks:
**Subtask #1 (70 points):** $q \le 10$

**Subtask #2 (30 points):** original constraints

###Sample Input:
    3 3
    1 2 4 5 6 7 10
    1 3 7
###Sample Output:
    6
    -1
    -1
	
###Explanation:
In the first query, we choose nodes $1,3$ and $6$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>