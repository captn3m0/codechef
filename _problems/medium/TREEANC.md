---
{"category_name":"medium","problem_code":"TREEANC","problem_name":"Common Ancestors","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1\r\n-1\r\n-1\r\n3\r\n2 -1 2\r\n2 -1 1\r\n7\r\n2 3 -1 2 2 4 4\r\n6 -1 4 5 2 4 4","output":"1\r\n2\r\n2","explanation":"**Example case 1:** There is only one pair $(u_1, v_2) = (1_1, 1_2)$ and only one common ancestor.\r\n\r\n**Example case 2:** If $u = 1$, then $1$ and $2$ are common ancestors for any $v$.\r\n\r\n**Example case 3:** The maximum number of common ancestors is $2$, e.g. $4$ and $6$ for $(u_1, v_2) = (6, 1)$, as shown in the figure in the statement.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/vnDaNQj1-Zk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"the_hyp0cr1t3","problem_tester":"","date_added":"21-01-2021","tags":{"0":"cook","1":"cook126","2":"lazy","3":"medium","4":"segment","5":"the_hyp0cr1t3","6":"trees"},"problem_difficulty_level":"Medium-Hard","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/TREEANC","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TREEANC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK126/hindi/TREEANC.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK126/mandarin/TREEANC.pdf), [Russian](https://www.codechef.com/download/translated/COOK126/russian/TREEANC.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK126/vietnamese/TREEANC.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK126/bengali/TREEANC.pdf) as well.

Ayush has two rooted trees. Each of them contains $N$ vertices (numbered $1$ through $N$); let's denote a vertex $v$ in tree $1$ by $v_1$ and a corresponding vertex $v$ in tree $2$ by $v_2$.

For each tree $t$, any vertex on the path from the root to a vertex $v_t$ (including $v_t$) is an ancestor of $v_t$ and the depth of $v_t$ is the distance of $v_t$ from the root of tree $t$.

For any integer $w$ ($1 \le w \le N$) and vertices $u_1$ and $v_2$, $w$ is said to be a *common ancestor* of $u_1$ and $v_2$ if:
- in tree $1$, $w_1$ is an ancestor of $u_1$
- in tree $2$, $w_2$ is an ancestor of $v_2$
- the depths of vertices $w_1$ and $w_2$ (from their respective roots) are the same

<img src="https://codechef_shared.s3.amazonaws.com/download/Images/COOK126/TREEANC/TREEANC.png" class="center" width="400" height="250">

For example, in the figure above, the pair $(u_1, v_2) = (6, 1)$ has two common ancestors — $4$ and $6$. Although vertex $2$ is an ancestor for each of them, the depths of $2_1$ and $2_2$ are not the same.

Help Ayush find the maximum number of common ancestors for a pair of vertices, i.e. the largest integer $c$ such that there is a pair of vertices $(u_1, v_2)$ (possibly $u = v$) with $c$ common ancestors.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $p_1, p_2, \ldots, p_N$. For each valid $i$, $p_i$ is the parent of the vertex $i_1$ or $-1$ if the vertex $i_1$ is the root of tree $1$.
- The third line contains $N$ space-separated integers $q_1, q_2, \ldots, q_N$. Similarly, for each valid $i$, $q_i$ is the parent of the vertex $i_2$ or $-1$ if the vertex $i_2$ is the root of tree $2$.

### Output
For each test case, print a single line containing one integer — the maximum number of common ancestors for a pair $(u_1, v_2)$.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N \le 10^6$
- $1 \leq p_i, q_i \leq N$ for each valid $i$
- $p_1, p_2, \ldots, p_N$ describe a tree with exactly one root
- $q_1, q_2, \ldots, q_N$ describe a tree with exactly one root
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
3
1
-1
-1
3
2 -1 2
2 -1 1
7
2 3 -1 2 2 4 4
6 -1 4 5 2 4 4
```

### Example Output
```
1
2
2
```

### Explanation
**Example case 1:** There is only one pair $(u_1, v_2) = (1_1, 1_2)$ and only one common ancestor.

**Example case 2:** If $u = 1$, then $1$ and $2$ are common ancestors for any $v$.

**Example case 3:** The maximum number of common ancestors is $2$, e.g. $4$ and $6$ for $(u_1, v_2) = (6, 1)$, as shown in the figure in the statement.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>