---
{"category_name":"easy","problem_code":"TREEDIST","problem_name":"Tree Distance Sum","problemComponents":{"constraints":"- $1 \\leq T \\leq 2000$\n- $1 \\leq N \\leq 10^5$\n- $1 \\le u_i, v_i \\leq N$\n- It is guaranteed that the given nodes and edges construct a tree.\n- The sum of $N$ over all test cases does not exceed $10^6$\n\n\n","constraintsState":true,"subtasks":"","subtasksState":true,"inputFormat":"- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.\n- The first line of each test contains an integer $N$, denoting the number of nodes in the tree.\n- $N - 1$ lines follow. The $i^{th}$ of these lines contains two space-separated integers $u_i$ and $v_i$, denoting an edge between the nodes $u_i$ and $v_i$.\n\n","inputFormatState":true,"outputFormat":"For each test case, output in a single line the sum obtained modulo $(10^9 + 7)$.\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"4\n3\n1 2\n2 3\n3\n1 2\n1 3\n5\n1 2\n2 3\n3 4\n2 5\n6\n1 2\n1 3\n3 4\n2 5\n2 6\n\n","output":"0\n2\n8\n54\n","explanation":"**Test case $1$:** There is no such tuple satisfying the constraints.\n\n**Test case $2$:**  $(2, 3, 2, 3)$ is the only valid tuple and distance between node $2$ and node $3$ is $2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/TOTKSEDeX6s","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"satyam_343","problem_tester":"","date_added":"26-08-2021","tags":{"0":"dynamic","1":"easy","2":"satyam_343","3":"start10","4":"tree"},"problem_difficulty_level":"Unavailable","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/TREEDIST","time":{"view_start_date":1630243804,"submit_start_date":1630243804,"visible_start_date":1630243804,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TREEDIST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a tree consisting of $N$ nodes. The nodes are numbered from $1$ to $N$. The tree is rooted at the node $1$. 

A tree is a connected undirected graph with $N − 1$ edges.

Find the sum of the distance between nodes $x$ and $y$ over all tuples ($u, v, x, y$) satisfying the following conditions:

$1)$ $u \lt v$

$2)$ $u$ is the ancestor of node $x$ and $v$ is the ancestor of node $y$.

$3)$ Neither of $u$ or $v$ is the ancestor of the other.

Since the sum can be enormous, print it modulo $(10^9 + 7)$.

**Note**:
- The distance between two nodes of a tree is the number of edges in the shortest path between these two nodes.

- Node $x$ is considered to be the ancestor of $y$ if $x$ lies on the path from $1$ to $y$.

- Usually, there is no bound on the stack memory and is equal to the total memory limit of 1.5 GB. But due to a system configuration issue, the stack limit for C++ is temporarily set to 8 MB. So, if you believe that your code requires a larger stack limit, please include [this](https://codeforces.com/blog/entry/15866) in your code.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>