---
{"category_name":"hard","problem_code":"DRE3HGF","problem_name":"Dream and the Multiverse","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"8 2\r\n1 2 5 1 4 3 3\r\n2 4\r\n4 7\r\n3\r\n4 6\r\n5 7\r\n1 8","output":"2\r\n2\r\n18","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/cqjyJK9Pn3s","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"piggydan","problem_tester":"","date_added":"25-01-2021","tags":{"0":"feb21","1":"piggydan","2":"super"},"problem_difficulty_level":"Super-Hard","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DRE3HGF","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DRE3HGF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB21/hindi/DRE3HGF.pdf), [Bengali](https://www.codechef.com/download/translated/FEB21/bengali/DRE3HGF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB21/mandarin/DRE3HGF.pdf), [Russian](https://www.codechef.com/download/translated/FEB21/russian/DRE3HGF.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB21/vietnamese/DRE3HGF.pdf) as well.

Dream abstracts the fabric of spacetime as a directed rooted tree (arborescence) with $N$ nodes (numbered $1$ through $N$). Node $1$ is the root and for each $i$ ($1 \le i \le N-1$), the parent of node $i+1$ is $f_i$. All edges of this tree are directed away from the root.

Then, Dream employs a magical superpower and adds $M$ directed edges to this tree in such a way that the resulting directed graph remains acyclic (a DAG).

Let's call a node of this DAG an *event* and further call a simple path on this DAG an *era*. Dream considers a pair of events $(i,j)$ to be *plausible* if there is an era whose first event is $i$ and last event is $j$. Note that $i \lt j$ does not have to hold for a plausible pair.

Dream now wants you to answer $Q$ queries. In each query, he gives you two positive integers $l$ and $r$, where $l \leq r$, and he wishes to know the number of plausible pairs of events $(i,j)$ such that $l \leq i \lt j \leq r$.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- The second line contains $N-1$ space-separated integers $f_1, f_2, \ldots, f_{N-1}$.
- $M$ lines follow. Each of these lines contains two space-separated integers $u$ and $v$ describing an additional edge from node $u$ to node $v$.
- The following line contains a single integer $Q$.
- $Q$ lines follow. Each of these lines contains two space-separated integers $l$ and $r$ describing a query.

### Output
For each query, print a single line containing one integer ― the number of plausible pairs $(i,j)$ such that $l \leq i \lt j \leq r$.

### Constraints 
- $2 \leq N \leq 3 \cdot 10^5$
- $1 \leq Q \leq 3 \cdot 10^5$
- $0 \leq M \leq 20$
- $1 \le f_i \le N$ for each valid $i$
- $1 \le u, v \le N$
- the graph described on the input is acyclic
- $1 \le l \le r \le N$

### Subtasks
**Subtask #1 (10 points):** the graph is a line ― that is, $M = 0$ and there is a permutation $p_1,p_2,\ldots,p_N$ such that $p_1=1$ and nodes $p_1,p_2,\ldots,p_N$ form a directed path in the tree

**Subtask #2 (20 points):** $M = 0$

**Subtask #3 (30 points):** $N,Q \leq 2 \cdot 10^5$

**Subtask #4 (40 points):** original constraints

### Example Input
```
8 2
1 2 5 1 4 3 3
2 4
4 7
3
4 6
5 7
1 8
```

### Example Output
```
2
2
18
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>