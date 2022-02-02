---
{"category_name":"easy","problem_code":"TRGRPH","problem_name":"Rooted Tree Graph","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"24-12-2019","tags":{"0":"jtnydv25"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1577730600,"submit_start_date":1577730600,"visible_start_date":1577730600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TRGRPH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Suppose that we have a rooted tree $T$ with vertices $1, \ldots, n$. We construct an undirected ancestor graph $G$ of $T$ with the same set of vertices. A pair of distinct vertices $v, u$ is adjacent in $G$ if and only if $v$ is an ancestor of $u$ in $T$, or vice versa.

You are given a graph $G$ with $n$ vertices. Construct any rooted tree $T$ such that $G$ is the ancestor graph of $T$, or determine that no such $T$ exists.

###Input:
- The first line contains a single integer $Q$, the number of test cases. $Q$ test case descriptions follow.
- Each test case description starts with a line containing two integers, $n$ and $m$, the number of vertices and edges of the graph $G$ respectively.
- The $i$-th of the following $m$ lines describes the $i$-th edge of $G$. It contains two integers, $u_i, v_i$ ($1 \leq u_i, v_i \leq n$), the endpoints of the $i$-th edge.

###Output:
For each test case:

- If there is no suitable rooted tree $T$, print a single line containing the word `NO`. 
- Otherwise, on the first line print `YES`, and in the next line, print $n$ integers $p_1, \ldots, p_n$ describing the tree $T$. $p_i$ should be equal to the index of the parent vertex of $i$, or $0$ if vertex $i$ is the root. The numbers should describe a valid rooted tree, that is, there should be exactly one root vertex which should be an ancestor of any other vertex. If there are multiple suitable trees, output any of them.

###Constraints:
- $1 \leq Q \leq 10^5$
- $1 \leq n \leq 10^5$
-  $0 \leq m \leq 10^5$
- The sum of $n$ over all testcases doesn't exceed $5 \cdot 10^5$
- The sum of $m$ over all testcases doesn't exceed $5 \cdot 10^5$
- The graphs described in the input do not contain self-loops or multiple edges.

###Sample Input:
    5
    1 0
    3 2
    1 2
    2 3
    3 3
    1 2
    1 3
    2 3
    4 2
    1 4
    2 3
    7 10
    1 2
    1 3
    2 4
    2 5
    3 6
    3 7
    1 4
    1 5
    1 6
    1 7

###Sample Output:
    YES
    0 
    YES
    2 0 2 
    YES
    0 1 2 
    NO
    YES
    0 1 1 2 2 3 3
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>