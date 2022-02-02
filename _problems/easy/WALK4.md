---
{"category_name":"easy","problem_code":"WALK4","problem_name":"Walk 4 steps","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"msi_cse_buet","problem_tester":null,"date_added":"17-12-2019","tags":{"0":"msi_cse_buet"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1578249000,"submit_start_date":1578249000,"visible_start_date":1578249000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WALK4","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a weighted undirected graph consisting of $n$ nodes and $m$ edges. The nodes are numbered from $1$ to $n$. The graph does not contain any multiple edges or self loops.

A walk $W$ on the graph is a sequence of vertices (with repetitions of vertices and edges allowed) such that every adjacent pair of vertices in the sequence is an edge of the graph. We define the cost of a walk $W$, $Cost(W)$, as the maximum over the weights of the edges along the walk. 

You will be given $q$ queries. In each query, you will be given an integer $X$.   
You have to count the number of different walks $W$ of length $4$ such that $Cost(W)$ = $X$.    
Two walks are considered different if they do not represent the same edge sequence.

###Input:
- First line contains 2 integers : the number of nodes $n$ and number of edges $m$.
- Next $m$ lines each describe $u$, $v$ and $w$, describing an edge between $u$ and $v$ with weight $w$.
- Next line contains $q$, the number of queries.
- Next $q$ lines each describe an integer $X$ - the cost of the walk in the query.

###Output:
For each query, output in a single line the number of different possible walks.

###Constraints 
- $1 \leq n \leq 100$
- $1 \leq m \leq \frac{n (n-1)}{2}$
- $1 \leq u, v \leq n$
- $1 \leq w \leq 100$
- $1 \leq q \leq 100$
- $1 \leq X \leq 100$

###Sample Input:
	3 3
	1 2 1
	2 3 2
	3 1 3
	3
	1
	2
	3

###Sample Output:
	2
	10
	36

###EXPLANATION:
For $X = 2$, all possible $10$ walks are listed below :
- 1 -> 2 -> 1 -> 2 -> 3
- 1 -> 2 -> 3 -> 2 -> 1
- 1 -> 2 -> 3 -> 2 -> 3
- 2 -> 1 -> 2 -> 3 -> 2
- 2 -> 3 -> 2 -> 1 -> 2
- 2 -> 3 -> 2 -> 3 -> 2
- 3 -> 2 -> 1 -> 2 -> 1
- 3 -> 2 -> 1 -> 2 -> 3
- 3 -> 2 -> 3 -> 2 -> 1
- 3 -> 2 -> 3 -> 2 -> 3
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>