---
{"category_name":"hard","problem_code":"LLLGRAPH","problem_name":"Line Line Line Graph","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4 6 2\r\n1 2\r\n1 3\r\n1 4\r\n2 3\r\n2 4\r\n3 4","output":3,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gainullinildar","problem_tester":null,"date_added":"8-03-2020","tags":{"0":"april20","1":"gainullinildar","2":"hard","3":"matching","4":"observation","5":"taran_1407"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/LLLGRAPH","time":{"view_start_date":1586779202,"submit_start_date":1586779202,"visible_start_date":1586779202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LLLGRAPH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/APRIL20/hindi/LLLGRAPH.pdf), [Bengali](https://www.codechef.com/download/translated/APRIL20/bengali/LLLGRAPH.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL20/mandarin/LLLGRAPH.pdf), [Russian](https://www.codechef.com/download/translated/APRIL20/russian/LLLGRAPH.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL20/vietnamese/LLLGRAPH.pdf) as well.

Consider an undirected graph $G$ with $N$ vertices and $M$ edges. A *line graph* $L(G)$ of this graph is a graph with $M$ vertices; each of these vertices corresponds to an edge in $G$ and two vertices in $L(G)$ are connected by an edge if the corresponding edges in $G$ have a common vertex.

Let $L^k(G)$ denote the result of performing the operation "replace $G$ by $L(G)$" $k$ times, i.e. $L^1(G) = L(G)$, $L^2(G) = L(L(G))$, $L^3(G)=L(L(L(G)))$ and so on.

You are given an undirected simple graph $G$ with $N$ vertices (numbered $1$ through $N$) and $M$ edges, and a positive integer $K$. Find the size of the largest independent set in $L^K(G)$. Since this value may be very large, compute it modulo $998,244,353$.

### Input
- The first line of the input contains three space-separated integers $N$, $M$ and $K$.
- Each of the next $M$ lines contains two space-separated integers $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge.

### Output
Print a single line containing one integer ― the number of vertices in the largest independent set in $L^K(G)$, modulo $998,244,353$.

### Constraints
- $2 \le N, M \le 2,000$
- $1 \le K \le 7$
- $1 \le u, v \le N$
- $G$ does not contain any self-loops or parallel edges

### Subtasks
**Subtask #1 (30 points):** $K = 1$

**Subtask #2 (70 points):** original constraints

### Example Input

```
4 6 2
1 2
1 3
1 4
2 3
2 4
3 4
```

### Example Output
```
3
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>