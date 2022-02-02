---
{"category_name":"medium","problem_code":"SMTOUR","problem_name":"F - Beautiful Walk","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"10-12-2019","tags":{"0":"graphs","1":"jtnydv25","2":"medium"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"","time":{"view_start_date":1576781100,"submit_start_date":1576781100,"visible_start_date":1576781100,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SMTOUR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a directed graph with $n$ vertices and $m$ edges. A walk is defined as a sequence of vertices, such that there is an edge from every vertex in the walk to the next vertex in the walk.

Formally, a walk with $t$ edges is a sequence $v_1, v_2, \ldots v_{t+1}$, where for each $1 \leq i \leq t$, there is an edge from $v_i$ to $v_{i + 1}$. 

The vertices $v_i$ of a walk do *not* have to be distinct. A single edge can occur multiple times in a walk.

Call a walk beautiful if it has atmost $ \left \lfloor \frac{n^2}{4}  \right \rfloor $ edges and each vertex is present in it at least once.

There are multiple independent testcases. For each testcase, find a beautiful walk in the given graph or claim that it doesn't exist.

### Input
- First line will contain $T$, number of testcases. Then the testcases follow. 
- The first line of each testcase contains of $n$ and $m$, the number of vertices and the number of edges in the graph respectively.
- The next $m$ lines describe the edges of the graph. Each line consists of two integers $a$ and $b$ denoting a directed edge from $a$ to $b$.

### Output
For each testcase:
- If there doesn't exist a beautiful walk, print $-1$ on a newline.
- If there exists a beautiful walk, find any such walk. Say it has $l \leq \frac{n^2}{4}$ edges, and the sequence of vertices is $\{v_1, v_2, \ldots v_{l + 1} \}$. Print $l$ followed by $v_1, v_2, \ldots v_{l + 1}$ on a new line.

### Constraints 
- $1 \leq T \leq 1000$
- $2 \leq n \leq 1000$
- $ 0 \leq m \leq \min(n (n - 1), 10^4)$
- The sum of $n$ over all testcases doesn't exceed $1000$.
- There are no multiple edges in the input. Note that it is allowed to have an edge from $i$ to $j$ and another from $j$ to $i$ though.

### Example Input
```
2
5 6
1 2
2 3
3 1
1 4
4 5
5 1
3 2
1 2
1 3
```

### Example Output
```
5 1 2 3 1 4 5
-1
```

### Explanation
In the first testcase, the walk $1 \rightarrow 2 \rightarrow 3 \rightarrow1 \rightarrow 4 \rightarrow 5$ is a beautiful walk, as it visits all vertices and has $5 \leq \frac{5^2}{4}$ edges.
Note that `5 1 4 5 1 2 3` is also a valid output.

In the second test case, there is no beautiful walk, so you sould print $-1$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>