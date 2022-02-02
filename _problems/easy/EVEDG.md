---
{"category_name":"easy","problem_code":"EVEDG","problem_name":"Even Edges","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/xSopj_5MfJc","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aa98","problem_tester":"","date_added":"29-04-2019","tags":{"0":"aa98","1":"easy","2":"graphs","3":"oct19","4":"r_64"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EVEDG","time":{"view_start_date":1571045400,"submit_start_date":1571045400,"visible_start_date":1571045400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EVEDG","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT19/hindi/EVEDG.pdf), [Bengali](https://www.codechef.com/download/translated/OCT19/bengali/EVEDG.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT19/mandarin/EVEDG.pdf), [Russian](https://www.codechef.com/download/translated/OCT19/russian/EVEDG.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT19/vietnamese/EVEDG.pdf) as well.

Chef has a simple undirected graph with $N$ vertices (numbered $1$ through $N$) and $M$ edges. He wants to divide it into $K$ parts (subgraphs) for some integer $K$.

First, Chef divides the vertices in the graph into $K$ sets such that each vertex belongs to exactly one set; the subgraphs and sets are numbered $1$ through $K$ such that for each valid $i$, vertices from the $i$-th set belong to the $i$-th subgraph. Then, Chef checks all the edges in the graph. For an edge connecting vertices $u$ and $v$, if $u$ and $v$ are both in the $i$-th set, then this edge belongs to the $i$-th subgraph. Otherwise, this edge does not belong to any of these $K$ subgraphs.

At the end, Chef checks these $K$ subgraphs. If each subgraph contains an even number of edges, then Chef thinks that this way of dividing the graph is *delicious*.

Chef wants to divide the graph in a delicious way such that $K$ is the smallest possible. Find the minimum $K$ and one such way to divide the graph.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- Each of the next $M$ lines contains two space-separated integers $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge.

### Output
For each test case, print two lines. The first of these lines should contain a single integer ― the minimum $K$. The second line should contain $N$ space-separated integers, where for each valid $i$, the $i$-th integer denotes the subgraph that vertex $i$ belongs to.

If there are multiple solutions, you may output any one.

### Constraints 
- $1 \le T \le 3,000$
- $1 \le M \le 100,000$
- $2 \le N \le 100,000$
- $1 \le u \neq v \le N$
- the graph contains no duplicate edges or self-loops
- the sum of $N$ over all test cases does not exceed $10^6$
- the sum of $M$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (30 pts):** $2 \le N \le 10$

**Subtask #2 (70 pts):** original constraints

### Example Input
```
1
5 5
1 2
1 3
2 3
2 4
3 4
```

### Example Output
```
2
1 2 1 1 2
```

### Explanation
**Example case 1:** Subgraph $1$ contains vertices $1$, $3$, $4$ and edges $(1,3)$ and $(3,4)$. Subgraph $2$ contains vertices $2$ and $5$, but no edges.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>