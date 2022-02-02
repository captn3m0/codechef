---
{"category_name":"medium","problem_code":"KPERFMAT","problem_name":"K Perfect Matchings","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"20-06-2018","tags":{"0":"admin2"},"time":{"view_start_date":1529692200,"submit_start_date":1529692200,"visible_start_date":1529692200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are given a bipartite graph $G = (U, V , E)$, and an integer $K$. $U$ and $V$ are the two bipartitions of the graph such that |$U$| = |$V$| = $N$ , and $E$ is the edge set. The vertices of $U$ are {$1, 2, . . . , N$ } and that of $V$ are {$N + 1, N + 2, . . . , 2N$ }. You need to find out whether the total number of different perfect matchings in $G$ is strictly greater than $K$ or not.

Recall that a perfect matching is a subset of $E$ such that every vertex of the graph belongs to exactly one edge in the subset. Two perfect matchings are considered to be different even if one edge is different.

###Input

First line of the input contains three integers: $N$, $M$ and $K$, which represent |$U$| (which is also equal to |$V$|), |$E$| and the queried threshold respectively.
The i-th of the next $E$ lines contains two numbers $L_i$ and $R_i$ which denote the i-th edge is between the vertices $L_i$ and $R_i$.

###Output

A single line containing “Yes” if the number of perfect matchings is greater than $K$, and “No” othewise. 

###Constraints
- $1 \leq N \leq 100$
- $1 \leq M \leq 600$
- $0 \leq K \leq 10^5$
- $1 \leq L_i \leq N \lt R_i \leq 2 * N$

###Subtasks

###Subtask 1 (10 Points): 
- $K = 0$

###Subtask 2 (30 Points): 
- $1 \leq N \leq 50$
- $1 \leq M \leq 100$
- $0 \leq K \leq 300$

###Subtask 3 (60 Points):
- No further constraints.

###Sample Input 1
	3 5 2
	1 4
	2 6
	2 5
	3 5
	3 6

###Sample Output 1
	No

###Sample Input 2
	3 5 1
	1 4
	2 6
	2 5
	3 5
	3 6

###Sample Output 2
	Yes

###Explanation:
*Explanation 1:* The graph is as follows:

<img src="https://codechef_shared.s3.amazonaws.com/download/upload/IOITC181/Image1.png" alt="drawing" style="width:250px;"/>

There are exactly two perfect matchings in this graph: {(1, 4), (2, 5), (3, 6)} and {(1, 4), (2, 6), (3, 5)}. The number of perfect matchings is not $\gt K$, and hence the output is “No”.

*Explanation 2:* The graph is the same as previous one, and the same 2 perfect matchings are present. But now, $K$ is 1. Therefore, the number of perfect matchings is > $K$, and hence the output is “Yes”.