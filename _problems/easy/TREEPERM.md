---
{"category_name":"easy","problem_code":"TREEPERM","problem_name":"Tree Permutations","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n3 2\r\n1 2\r\n2 3\r\n4 5 6\r\n4 6 5\r\n6 2\r\n1 2\r\n1 3\r\n2 4\r\n3 5\r\n3 6\r\n10 20 30 40 50 60\r\n10 40 50 20 30 60\r\n6 1\r\n1 2\r\n1 3\r\n2 4\r\n3 5\r\n3 6\r\n10 20 30 40 50 60\r\n10 40 50 20 30 60\r\n1 2\r\n1\r\n2","output":"2\r\n3\r\n1\r\n0","explanation":"**Example case 1:** The good vertical partitions are $\\{[1], [2, 3]\\}$ and $\\{[1, 2, 3]\\}$.\r\n\r\n**Example case 2:** The good vertical partitions are:\r\n- $\\{[1, 2, 4], [3, 5], [6]\\}$\r\n- $\\{[1], [2, 4], [3, 5], [6]\\}$\r\n- $\\{[1, 3, 5], [2, 4], [6]\\}$\r\n\r\n**Example case 3:** The same as example case 2, but with $S=1$.\r\n\r\n**Example case 4:** There is no good vertical partition.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/0iTcn-Bf4m4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 2","source_sizelimit":50000,"problem_author":"a7med1080","problem_tester":"","date_added":"26-01-2021","tags":{"0":"a7med1080","1":"april21","2":"dynamic","3":"easy","4":"greedy","5":"trees"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/TREEPERM","time":{"view_start_date":1618219800,"submit_start_date":1618219800,"visible_start_date":1618219800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TREEPERM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/APRIL21/bengali/TREEPERM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL21/mandarin/TREEPERM.pdf), [Russian](https://www.codechef.com/download/translated/APRIL21/russian/TREEPERM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL21/vietnamese/TREEPERM.pdf) as well.

You are given a tree with $N$ nodes (numbered $1$ through $N$), rooted at node $1$. For each valid $i$, node $i$ has a value $a_i$ written on it.

An undirected simple path between any two nodes $u$ and $v$ is said to be vertical if $u=v$ or $u$ is an ancestor of $v$ or $v$ is an ancestor of $u$. Let's define a *vertical partition* of the tree as a set of vertical paths such that each node belongs to exactly one of these paths.

You are also given a sequence of $N$ integers $b_1, b_2, \ldots, b_N$. A vertical partition is *good* if, for each of its paths, we can permute the values written on the nodes in this path, and this can be done in such a way that we reach a state where for each valid $i$, the value written on node $i$ is $b_i$.

The difficulty of your task is described by a parameter $S$. If $S=1$, your task is only to determine whether at least one good vertical partition exists. If $S=2$, you are required to find the number of good vertical partitions modulo $1,000,000,007$ ($10^9+7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $S$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that nodes $u$ and $v$ are connected by an edge.
- The next line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- The line after that contains $N$ space-separated integers $b_1, b_2, \ldots, b_N$.

### Output
For each test case, print a single line containing one integer:
- If $S=1$, this integer should be $1$ if a good vertical partition exists or $0$ if it does not exist.
- If $S=2$, this integer should be the number of good vertical partitions modulo $1,000,000,007$ ($10^9+7$).

### Constraints
- $1 \le T \le 10^6$
- $1 \leq N \leq 10^5$
- $S \in \{1, 2\}$
- $1 \leq u, v \leq N$
- the graph described on the input is a tree
- $1 \leq a_i, b_i \leq 10^6$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (40 points, time limit 1 seconds):** the sum of $N$ over all test cases does not exceed $1,000$

**Subtask #2 (30 points, time limit 2 seconds):** $S = 1$

**Subtask #3 (30 points, time limit 2 seconds):** original constraints

### Example Input
```
4
3 2
1 2
2 3
4 5 6
4 6 5
6 2
1 2
1 3
2 4
3 5
3 6
10 20 30 40 50 60
10 40 50 20 30 60
6 1
1 2
1 3
2 4
3 5
3 6
10 20 30 40 50 60
10 40 50 20 30 60
1 2
1
2
```

### Example Output
```
2
3
1
0
```

### Explanation
**Example case 1:** The good vertical partitions are $\{[1], [2, 3]\}$ and $\{[1, 2, 3]\}$.

**Example case 2:** The good vertical partitions are:
- $\{[1, 2, 4], [3, 5], [6]\}$
- $\{[1], [2, 4], [3, 5], [6]\}$
- $\{[1, 3, 5], [2, 4], [6]\}$

**Example case 3:** The same as example case 2, but with $S=1$.

**Example case 4:** There is no good vertical partition.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>