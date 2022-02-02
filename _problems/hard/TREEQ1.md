---
{"category_name":"hard","problem_code":"TREEQ1","problem_name":"Tree Query","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5 2\r\n5 5 5 5 10\r\n1 2\r\n2 3\r\n3 4\r\n3 5\r\n1 5 -5\r\n2 4 50","output":"3\r\n4","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":null,"date_added":"25-12-2019","tags":{"0":"chemthan"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"","time":{"view_start_date":1577552402,"submit_start_date":1577552402,"visible_start_date":1577552402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TREEQ1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME79/hindi/TREEQ1.pdf),[Bengali](https://www.codechef.com/download/translated/LTIME79/bengali/TREEQ1.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME79/mandarin/TREEQ1.pdf), [Russian](https://www.codechef.com/download/translated/LTIME79/russian/TREEQ1.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME79/vietnamese/TREEQ1.pdf) as well.


You are given a tree with $N$ vertices (numbered $1$ through $N$); vertex $1$ is the root. Initially, for each valid $i$, the $i$-th vertex has a weight $w_i$. You should perform a sequence of $Q$ operations of the following two types:
1. Add $x$ to the weight of vertex $v$.
2. Add $x$ to the weight of each vertex in the subtree of vertex $v$ (including $v$).

Let's define a function $f(u) = \sum_{i=1}^N w_i \cdot d(i, u)$, where $d(i, u)$ denotes the distance between vertices $i$ and $u$. After each operation, find an integer $u$ such that $f(u)$ is minimum amoung $f(1), f(2), \ldots, f(N)$, if there are multiple values of $u$ find smallest one.

### Input
- The first line of the input contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $w_1, w_2, \ldots, w_N$.
- $N-1$ lines follow. Each of these lines contains two space-separated integers $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge.
- Each of the next $Q$ lines contains three space-separated integers $t$, $v$ and $x$ describing one operation, where $t$ denotes the type of the operation.

### Output
Print $Q$ lines. For each valid $i$, the $i$-th of these lines should contain one integer $u$ such that $f(u)$ is minimum among $f(1), f(2), \ldots, f(N)$ after the $i$-th operation, if there are multiple values of $u$ find smallest one.

### Constraints
- $1 \le N, Q \le 10^5$
- $1 \le w_i \le 10^7$ for each valid $i$
- $|x| \le 10^7$
- the weights of all vertices remain positive after each operation

### Subtasks
**Subtask #1 (50 points):** $N, Q \le 10^3$

**Subtask #2 (50 points):** original constraints

### Example Input
```
5 2
5 5 5 5 10
1 2
2 3
3 4
3 5
1 5 -5
2 4 50
```

### Example Output
```
3
4
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>