---
{"category_name":"medium","problem_code":"GRAPHCON","problem_name":"Special Graph Construction","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"25-11-2019","tags":{"0":"jtnydv25"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GRAPHCON","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
If you are not familiar with graph theory terminology, please visit the end of the problem to see definitions.

You are in the graph construction business. A client of yours has asked for a special graph. A graph is called special if it satisfies the following properties:
- It has $\le 10^5$ vertices.
- It is a simple, undirected, connected 3-regular graph.
- It has exactly $k$ bridge edges, ($k$ given as input).

For a graph $G$, define $f(G)$ to be the minimum number of edges to be removed from it to make it bipartite. The client doesn't like graphs with a high value of $f$, so he asks you to minimize it.

If there doesn't exist any special graph, print $-1$. Otherwise, find a special graph $G$ with the minimum possible value of $f(G)$ and also find a subset of its edges of size $f(G)$ whose removal makes it bipartite . In case there are multiple such graphs, you can output any of those.

### Input
- The only line of the input contains a single integer $k$, the required number of bridge edges.

### Output
If there are no special graphs, print a single line containing the integer $-1$. Otherwise, let $G$ be your graph with $n$ vertices numbered $1, 2, \ldots n$ and $m$ edges numbered $1, 2, \ldots m$. Let $X$ be a subset of edges of size $f(G)$ whose removal makes the graph bipartite. If there are multiple choices for $X$, you can choose any one of them.

- In the first line, print $n$ and $m$.
- In $i^{\text{th}}$ of the next $m$ lines, print the edge numbered $i$ as its endpoints separated by a space.
- In the last line, print $f(G)$ followed by the indices of the edges in $X$. You can print the indices in any order.

For example if $f(G) = 4$, and removing edges with indices $\{2, 4, 5, 7\}$ makes the graph bipartite, you can print `4 5 2 7 4`.

Your answer is considered correct if and only if it is a special graph and of all the special graphs, it has the minimum possible $f$ value, and removing edges in $X$, the remaining graph is bipartite.

### Constraints 
- $0 \le k \le 10^4$

### Example Input
```
0
```

### Example Output
```
6 9
1 4
1 5
1 6
2 4
2 5
2 6
3 4
3 5
3 6
0
```

### Explanation
The graph printed is a bipartite graph with 3 nodes on both sides. Each node is connected to every node on the opposite side. Every node has a degree $3$; there is no bridge edge. Since it is a bipartite graph, it has a $f$ value of $0$, which is the minimum possible.

If you already know the graph theory terms used in the statement, you can skip  reading the 
following definitions:

**Connected graph** - A graph is said to be connected if, for every two nodes, you can reach one from the other using the edges of the graph.

**Simple graph** - A graph $G$ is called simple if there are no self-loops (edge from a node to itself) or multiple edges( more than one edge between a pair of vertices).

**3-regular graph** -  A 3-regular graph is one in which every vertex is an endpoint of exactly $3$ edges.

**Bipartite graph** - A bipartite graph is a graph whose vertices can be divided into two disjoint sets $U$ and $V$ such that every edge connects a vertex in $U$ to one in $V$.

**Bridge edge** - An edge is called a bridge edge if on removing it, the graph is no longer connected.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>