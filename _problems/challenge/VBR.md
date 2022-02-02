---
{"category_name":"challenge","problem_code":"VBR","problem_name":"Vibrating Paths (Challenge)","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"16-08-2020","tags":{"0":"alei","1":"alei","2":"challenge","3":"graph","4":"graphs","5":"sept20"},"problem_difficulty_level":"Unavailable","best_tag":"Graph Coloring","editorial_url":"https://discuss.codechef.com/problems/VBR","time":{"view_start_date":1600075802,"submit_start_date":1600075802,"visible_start_date":1600075802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=VBR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT20/hindi/VBR.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT20/bengali/VBR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT20/mandarin/VBR.pdf), [Russian](https://www.codechef.com/download/translated/SEPT20/russian/VBR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT20/vietnamese/VBR.pdf) as well.

You are given an undirected weighted graph with $N$ vertices (numbered $1$ through $N$) and $M$ edges (numbered $1$ through $M$). For each valid $i$, the $i$-th edge has weight $S_i$ and connects vertices $u_i$ and $v_i$. The weights of all edges are pairwise distinct.

Let's denote an edge that connects vertices $u$ and $v$ by $(u,v)$. A *vibrating path* is a sequence of distinct vertices $V_1, V_2, \ldots, V_K$ such that the following conditions are satisfied:
- $1 \le K \le 256$
- For each valid $i$, the edge $(V_i, V_{i+1})$ exists in the graph.
- For each valid $i$ and $j \le i-2$, the edge $(V_i, V_j)$ does not exist in the graph.
- For each valid $i$: If $i \gt 1$, let's consider the graph without the edge $(V_{i-1}, V_i)$; otherwise, consider the original graph. In this graph, the weight of the edge $(V_i, V_{i+1})$ is the minimum of weights of all edges adjacent to $V_i$.

A graph is $K$-*vertex-colourable* if is possible to paint its vertices using at most $K$ distinct colours in such a way that no edge connects two vertices with the same colour.

Your task is to make the graph $K$-vertex-colourable by hitting the vertices. When a vertex $u$ is hit, all the edges on the vibrating path with maximum length that starts at $u$ are removed (note that this path is unique). You may hit vertices any number of times and in any order. However, each time you hit a vertex, at least one edge must be removed. For each valid $i$, the cost of hitting the $i$-th vertex is $C_i$.

You should make the graph $K$-vertex-colourable and find one valid way to paint its vertices using $K$ colours (numbered $1$ through $K$). If there are multiple solutions, you may find any one. Then, the sum of costs of all hits you perform should be as small as possible.

### Input
- The first line of the input contains three space-separated integers $N$, $M$ and $K$.
- The second line contains $N$ space-separated integers $C_1, C_2, \ldots, C_N$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains three space-separated integers $u_i$, $v_i$ and $S_i$.

### Output
Print three lines.
- The first of these lines should contain a single integer $Q$ ― the number of hits you want to perform.
- The second line should contain $Q$ space-separated integers ― the vertices you want to hit, in order.
- The third line should contain $N$ space-separated integers $x_1, x_2, \ldots, x_N$ denoting that for each valid $i$, the $i$-th vertex should have the colour $x_i$ ($1 \le x_i \le K$).

### Example Input
```
8 10 1
1 2 3 4 5 6 7 8
1 2 1
1 3 7
2 3 2
3 4 8
3 5 3
4 6 9
5 6 4
6 7 5
6 8 10
7 8 6
```

### Example Output
```
3
1 2 7
1 1 1 1 1 1 1 1
```

### Explanation
The following picture describes the graph:

<img src="https://codechef_shared.s3.amazonaws.com/download/Images/SEPT20/VBR/VBR.png"></img>

- In the first hit, the edge $(1, 2)$ is removed.
- In the second hit, the edges on the path $(2, 3, 5, 6, 7)$ are removed.
- In the third hit, the edges on the path $(7, 8, 6, 4, 3, 1)$ are removed.

### Test generation and constraints
- $N$ is either $10^3$ or $10^4$
- $M = 10^5$
- $K$ is either $1$, $2$, $3$ or $4$

There are eight test files, one for each combination of $N$, $M$ and $K$. For each test file:
- The costs $C_1, C_2, \ldots, C_N$ are chosen uniformly randomly and independently between $1$ and $512$ inclusive.
- $M$ distinct undirected edges are chosen uniformly randomly and independently from the $N \cdot (N-1)/2$ possibilities.
- $S_1, S_2, \ldots, S_M$ is a uniformly randomly chosen permutation of the integers $1$ through $M$.

### Scoring
If you perform a hit where no edge is removed, or if there is an edge connecting two vertices with the same colour after performing all hits, you will receive the Wrong Answer verdict. Otherwise, the score of a test file is the sum of costs of all hits you perform. The score of a submission is the sum of scores of all test files. Your goal is to minimise the score of your submission.

There are 8 test files. During the contest, the displayed score will account for exactly 4 test files, i.e. your score reflects your submission's performance on 50% of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 4 test files.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>