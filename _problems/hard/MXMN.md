---
{"category_name":"hard","problem_code":"MXMN","problem_name":"Maximum and Minimum","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3 6\r\n1 2 3\r\n2 3 1\r\n3 1 2\r\n1 2 4\r\n2 3 5\r\n3 1 6\r\n1 2 2\r\n2 3 1\r\n3 1 3\r\n1 2 5\r\n2 3 4\r\n3 1 6","output":9,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"nqiiii","problem_tester":null,"date_added":"14-06-2019","tags":{"0":"auxiliary","1":"centroid","2":"hard","3":"july19","4":"nqiiii","5":"trees"},"problem_difficulty_level":"Hard","best_tag":"Centroid Decomposition","editorial_url":"https://discuss.codechef.com/problems/MXMN","time":{"view_start_date":1563183002,"submit_start_date":1563183002,"visible_start_date":1563183002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MXMN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY19/hindi/MXMN.pdf), [Bengali](https://www.codechef.com/download/translated/JULY19/bengali/MXMN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY19/mandarin/MXMN.pdf), [Russian](https://www.codechef.com/download/translated/JULY19/russian/MXMN.pdf) and [Vietnamese](https://www.codechef.com/download/translated/JULY19/vietnamese/MXMN.pdf) as well.

Chef loves graphs. To express his love, he defines a function $f(G, x, y)$ for an undirected connected graph $G$ with weighted edges and two of its vertices $x$, $y$. $f(G, x, y)$ is defined as the minimum of weights of all paths in $G$ between the vertices $x$ and $y$, where the weight of a path is the maximum of weights of edges in this path.

Chef has two connected graphs $G_1$ and $G_2$. Each of these graphs has $N$ vertices (labelled $1$ through $N$) and $M$ edges. Calculate $$S = \sum_{i=1}^{N-1} \sum_{j=i+1}^N f(G_1, i, j) \cdot f(G_2, i, j)$$ modulo $998,244,353$.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- $M$ lines follow. Each of these lines contains three space-separated integers $u$, $v$ and $w$ denoting that vertices $u$ and $v$ in $G_1$ are connected by an edge with weight $w$.
- $M$ more lines follow. Each of these lines contains three space-separated integers $u$, $v$ and $w$ denoting that vertices $u$ and $v$ in $G_2$ are connected by an edge with weight $w$.

### Output
Print a single line containing one integer — the sum $S$ modulo $998,244,353$.

### Constraints
- $1 \le N \le 10^5$
- $M = 2N$
- $1 \le u, v \le N$
- $1 \le w \le 10^8$
- $G_1$ and $G_2$ are connected graphs

### Subtasks
**Subtask #1 (20 points):** $N = 2,000$

**Subtask #2 (30 points):**
- $N = 10^5$
- $G_1$ and $G_2$ are identical graphs

**Subtask #3 (50 points):** original constraints

### Example Input
```
3 6
1 2 3
2 3 1
3 1 2
1 2 4
2 3 5
3 1 6
1 2 2
2 3 1
3 1 3
1 2 5
2 3 4
3 1 6
```

### Example Output
```
9
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>