---
{"category_name":"medium","problem_code":"GPHLBL","problem_name":"Graph Labelling","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4 4 1\r\n1 2\r\n2 3\r\n1 3\r\n3 4\r\n10 20\r\n3 1 1 1 1","output":50,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"manishtanwar","problem_tester":"","date_added":"7-09-2020","tags":{"0":"cook122","1":"manishtanwar","2":"manishtanwar","3":"maximum","4":"rahuldugar","5":"rishup_nitdgp","6":"strongly"},"problem_difficulty_level":"Medium","best_tag":"Strongly Connected Components","editorial_url":"https://discuss.codechef.com/problems/GPHLBL","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GPHLBL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK122/hindi/GPHLBL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK122/mandarin/GPHLBL.pdf), [Russian](https://www.codechef.com/download/translated/COOK122/russian/GPHLBL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK122/vietnamese/GPHLBL.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK122/bengali/GPHLBL.pdf) as well.

You are given a directed graph $G$ with $N$ vertices (numbered $1$ through $N$) and $M$ edges. Let's denote the set of its vertices by $V$, the set of its edges by $E$ and an edge from a vertex $u$ to a vertex $v$ by $(u, v)$. Then, let's define:
- For each $u, v \in V$, $R(u, v)$ is true if $v$ can be reached from $u$ or false otherwise. Specifically, if $u = v$, it is always true.
- For each $v \in V$, a set of vertices $N(v) = \{u \in V \mid R(u, v) \wedge R(v, u)\}$.
- For each subset $U \subseteq V$, two sets of edges $Out(U) = \{(u,v) \in E \mid u \in U\}$ and $In(U) = \{(v,u) \in E \mid u \in U\}$.

You need to assign a label to each edge in $E$; you may only use labels $1$ and $2$. The costs of labelling an edge are $c_1$ and $c_2$ for the labels $1$ and $2$ respectively.

In the resulting graph, $Q$ constraints (numbered $1$ through $Q$) need to be satisfied. For each valid $i$, the $i$-th constraint is that the number of edges in a set $S_i$ with the label $x_i$ should be between $l_i$ and $r_i$ (inclusive); $S_i$ is determined by a given vertex $w_i$ and the type of this constraint $t_i$ as follows:
- $t_i = 1$: $S_i = Out(N(w_i))$
- $t_i = 2$: $S_i = In(N(w_i))$
- $t_i = 3$: $S_i = Out(\{w_i\})$
- $t_i = 4$: $S_i = In(\{w_i\})$

Find the smallest cost of labelling all the edges in such a way that these $Q$ constraints are satisfied or determine that there is no solution satisfying all constraints.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $Q$.
- Each of the following $M$ lines contains two space-separated integers $u$ and $v$ denoting a directed edge $(u, v)$.
- The next line contains two space-separated integers $c_1$ and $c_2$.
- $Q$ lines follow. For each valid $i$, the $i$-th of these lines contains five space-separated integers $t_i$, $w_i$, $x_i$, $l_i$ and $r_i$.

### Output
For each test case, print a single line containing one integer ― the smallest cost of labelling the edges or $-1$ if it is impossible to label the edges in such a way that all constraints are satisfied.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 3 \cdot 10^4$
- $0 \le M \le 3 \cdot 10^4$
- $0 \le Q \le 3 \cdot 10^5$
- $1 \le u, v \le N$
- $1 \le c_1, c_2 \le 10^9$
- $1 \le t_i \le 4$ for each valid $i$
- $1 \le w_i \le N$ for each valid $i$
- $x_i \in \{1, 2\}$ for each valid $i$
- $0 \le l_i \le r_i \le M$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $6 \cdot 10^4$
- the sum of $M$ over all test cases does not exceed $6 \cdot 10^4$
- the sum of $Q$ over all test cases does not exceed $6 \cdot 10^5$

### Example Input
```
1
4 4 1
1 2
2 3
1 3
3 4
10 20
3 1 1 1 1
```

### Example Output
```
50
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>