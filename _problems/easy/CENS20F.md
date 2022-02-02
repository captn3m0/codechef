---
{"category_name":"easy","problem_code":"CENS20F","problem_name":"Traversing Trees","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"aert","problem_tester":"","date_added":"13-07-2020","tags":{"0":"aert","1":"cens2020","2":"saurabhshadow"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CENS20F","time":{"view_start_date":1597860000,"submit_start_date":1597860000,"visible_start_date":1597860000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CENS20F","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a tree rooted at node $1$ with $N$ vertices. The $i$<sup>$th$</sup> vertex initially has value $A_i (1 \leq i \leq N)$. You are also given $Q$ queries. 

In each query you are given a vertex $V$.  Let $S = \{ S_1 , S_2 , ... S_x \} $ denote the set of vertices such that $S_i$ is in the subtree of $V$, distance between $S_i$ and $V$ is even and $S_i \neq V$ for all $i$. For all $S_i$ , add $A$<sub>$S_i$</sub> to $A_V$ and change the value of $A$<sub>$S_i$</sub> to zero.

Find the values of all the vertices after all queries are performed. 

**Note**-The distance between two vertices is defined as the number of edges
traversed on the shortest path from one vertex to the other.

### Input:
- The first line contains an integer $T$ denoting the number of test cases.
- The first line of each test case contain two integers $N$ and $Q$.
- The second line contains $N$ space separated integers, $A_1, A_2, ..., A_n$ denoting the initial values of the vertices.
- The next $N-1$ lines contain two integers $u$ and $v$ denoting an edge between $u$and $v$.
- The next $Q$ lines contain a single integer which is the query.

### Output:
- Print a single line containing $N$ integers for each test case which is the final values of the vertices.

###Constraints:

- $1\leq T \leq 10$
- $1 \leq N \leq 200000$
- $1 \leq Q \leq 200000$
- $0 \leq A_i \leq 10^9$
- The sum of $N$ over all test cases does not exceed $200000$.
- The sum of $Q$ over all test cases does not exceed $200000$.


###Sample Input
    1
    4 3
    6 2 7 3
    1 2
    2 3
    3 4
    3
    2
    1

###Sample Output
    13 5 0 0

###Explanation

Node $3$ has no child in its subtree which is at  an even distance so there is no change in the values. Values of nodes after $1st$ query: $6, 2, 7, 3$.

Node $4$ is at an even distance in the subtree of node $2$ so $A_4$ gets added to $A_2$ and $A_4$ becomes 0. Values of nodes after $2nd$ query: $6, 5, 7, 0$.

Node $3$ is at an even distance in the subtree of node $1$ so $A_3$ gets added to $A_1$ and $A_3$ becomes 0. Values of nodes after $3rd$ query: $13, 5, 0, 0$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>