---
{"category_name":"hard","problem_code":"TSEQ","problem_name":"Tree Sequences","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"8 3\n1 2 3 -1 -1 -1 -1 -1\n1 2\n2 3\n2 5\n2 6\n4 5\n5 7\n5 8\nINCREASING 1 5 1 10\nUPDATE 1 -1\nNON-DECREASING 1 5 0 10","output":"8\n27","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"daniel_1999","problem_tester":null,"date_added":"1-05-2019","tags":{"0":"aug19","1":"combinatorics","2":"daniel_1999","3":"hard","4":"heavy","5":"segment","6":"vijju123"},"problem_difficulty_level":"Hard","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/TSEQ","time":{"view_start_date":1565602202,"submit_start_date":1565602202,"visible_start_date":1565602202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TSEQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG19/hindi/TSEQ.pdf), [Bengali](https://www.codechef.com/download/translated/AUG19/bengali/TSEQ.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG19/mandarin/TSEQ.pdf), [Russian](https://www.codechef.com/download/translated/AUG19/russian/TSEQ.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG19/vietnamese/TSEQ.pdf) as well.

You are given a tree with $N$ vertices numbered $1$ through $N$. For each valid $i$, initially, vertex $i$ has value $W_i$. The value of each vertex can be either $-1$ or a non-negative integer.

At any time, let's denote the sequence of values of vertices on the path from vertex $u$ to vertex $v$ by $S(u, v)$. We are interested in replacing each element $-1$ in such a sequence by a non-negative integer (not necessarily the same for each $-1$).

You should process $Q$ queries of five types:
- `UPDATE U X`: Change the value of vertex $U$ to $X$.
- `INCREASING U V A B`: Find the number of ways to replace each $-1$ in the sequence $S(U, V)$ by an integer such that the resulting sequence is **strictly increasing** and contains only integers between $A$ and $B$ (inclusive).
- `DECREASING U V A B`: Find the number of ways to replace each $-1$ in the sequence $S(U, V)$by an integer such that the resulting sequence is **strictly decreasing** and contains only integers between $A$ and $B$ (inclusive).
- `NON-DECREASING U V A B`: Find the number of ways to replace each $-1$ in the sequence $S(U, V)$ by an integer such that the resulting sequence is **non-decreasing** and contains only integers between $A$ and $B$ (inclusive).
- `NON-INCREASING U V A B`: Find the number of ways to replace each $-1$ in the sequence $S(U, V)$ by an integer such that the resulting sequence is **non-increasing** and contains only integers between $A$ and $B$ (inclusive).

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $W_1, W_2, \ldots, W_N$.
- Each of the next $N-1$ lines contains two space-separated integers $U$ and $V$ denoting that vertices $U$ and $V$ are connected by an edge.
- $Q$ lines follow. Each of these lines describes one query in the format given above.

### Output
For each query except the `UPDATE` queries, print a single line containing one integer ― the number of ways to replace each $-1$, modulo $10^9 + 7$.

### Constraints
- $1 \le N, Q \le 10^5$
- $1 \le U, V \le N$
- $-1 \le W_i \le 10^6$ for each valid $i$
- $0 \le A \le B \le 10^6$
- $-1 \le X \le 10^6$

### Subtasks
**Subtask #1 (10 points):** $1 \le N, Q \le 1,000$

**Subtask #2 (10 points):**
- $W_i = -1$ for each valid $i$
- $X = -1$

**Subtask #3 (80 points):** original constraints

### Example Input
```
8 3
1 2 3 -1 -1 -1 -1 -1
1 2
2 3
2 5
2 6
4 5
5 7
5 8
INCREASING 1 5 1 10
UPDATE 1 -1
NON-DECREASING 1 5 0 10
```

### Example Output
```
8
27
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>