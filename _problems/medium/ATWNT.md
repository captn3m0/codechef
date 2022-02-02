---
{"category_name":"medium","problem_code":"ATWNT","problem_name":"Another Tree with Number Theory","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n1 1 2 2\r\n2\r\n1 10\r\n1 20","output":"5\r\n0","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/EvQo8UNGM8E","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dimash241","problem_tester":"","date_added":"29-12-2020","tags":{"0":"depth","1":"dimash241","2":"feb21","3":"graphs","4":"medium","5":"sieve","6":"trees","7":"vichitr"},"problem_difficulty_level":"Medium","best_tag":"Depth First Search","editorial_url":"https://discuss.codechef.com/problems/ATWNT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ATWNT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB21/hindi/ATWNT.pdf), [Bengali](https://www.codechef.com/download/translated/FEB21/bengali/ATWNT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB21/mandarin/ATWNT.pdf), [Russian](https://www.codechef.com/download/translated/FEB21/russian/ATWNT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB21/vietnamese/ATWNT.pdf) as well.

You are given a rooted tree with $N$ nodes (numbered $1$ through $N$; node $1$ is the root). For each $i$ ($1 \le i \le N-1$), the parent of the node $i+1$ is $p_i$.

You need to answer $Q$ queries. (Sounds quite familiar!) For each query, first, $W$ tasks are given to node $V$. These tasks are processed in the tree in the following way:
- When a node receives $a$ tasks and it has no children, all $a$ tasks are executed by this node.
- Otherwise, i.e. if the node has $K \gt 0$ children, where $K$ is a divisor of $a$, then this node gives $a/K$ of these tasks to each of its children. This process is performed recursively by each child on the tasks it receives.
- Otherwise, i.e. if the node has $K \gt 0$ children, but $K$ is not a divisor of $a$, all $a$ tasks are ignored and none of this node's children receive any tasks.

For each query, find the number of tasks that are not executed, i.e. end up ignored, possibly after passing down the tree.

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $N-1$ space-separated integers $p_1, p_2, \ldots, p_{N-1}$.
- The third line contains a single integer $Q$.
- $Q$ lines follow. Each of these lines contains two space-separated integers $V$ and $W$ describing a query.

### Output
For each query, print a single line containing one integer ― the number of tasks that are not executed.

### Constraints
- $1 \leq N, Q \leq 10^5$
- $1 \le p_i \le N$ for each valid $i$
- the graph described on the input is a tree
- $1 \leq V \leq N$
- $1 \leq W \leq 10^6$

### Subtasks
**Subtask #1 (20 points):** $N \leq 100$

**Subtask #2 (80 points):** original constraints

### Example Input
```
5
1 1 2 2
2
1 10
1 20
```

### Example Output
```
5
0
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>