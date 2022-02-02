---
{"category_name":"easy","problem_code":"BOOLGAME","problem_name":"Boolean Game","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4 2 3\r\n-4 -2 5 2\r\n1 3 0\r\n1 4 -3","output":"7 5 5","explanation":"**Example case 1:** The best assignment is $x = (0,0,1,1)$, with score $7$. The second and third best assignments are $(0,0,1,0)$ and $(0,1,1,1)$, each with score $5$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/roniWCIXQLs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"theoneyouwant","problem_tester":"","date_added":"31-03-2021","tags":{"0":"april21","1":"brute","2":"dynamic","3":"easy","4":"theoneyouwant"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/BOOLGAME","time":{"view_start_date":1618219800,"submit_start_date":1618219800,"visible_start_date":1618219800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BOOLGAME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/APRIL21/bengali/BOOLGAME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL21/mandarin/BOOLGAME.pdf), [Russian](https://www.codechef.com/download/translated/APRIL21/russian/BOOLGAME.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL21/vietnamese/BOOLGAME.pdf) as well.

Consider $N$ binary variables $x_1, x_2, \ldots, x_N$. For each valid $i$, the $i$-th of these variables can be $x_i = 0$ or $x_i = 1$; therefore, there are $2^N$ possible assignments of values to the variables. For each valid $i$, setting $x_i = 1$ gives you score $g_i$.

In addition, there are $M$ special intervals (numbered $1$ through $M$). For each valid $i$, the $i$-th interval is $[u_i, v_i]$ and if $x_{u_i} = x_{u_i+1} = \ldots = x_{v_i} = 1$, then your score increases by $d_i$.

Note that both $g_i$ and $d_i$ can be negative (setting more variables to $1$ can decrease your score), and your score can also be negative. Formally, the score of an assignment of values to the binary variables is
$$\sum_{i=1}^N g_i \cdot x_i + \sum_{i=1}^M d_i \cdot \prod_{j=u_i}^{v_i} x_j \,.$$

Find the $K$ highest scores among all assignments on these variables. Formally, if we computed the scores of all $2^N$ assignments and sorted them in non-increasing order, you should find the first $K$ of these values.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $K$.
- The second line contains $N$ space-separated integers $g_1, g_2, \ldots, g_N$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains three space-separated integers $u_i$, $v_i$ and $d_i$.

### Output
For each test case, print a single line containing $K$ space-separated integers ― the $K$ highest scores of assignments on the binary variables, in decreasing order.

### Constraints
- $1 \leq T \leq 10$
- $1 \leq N \leq 60$
- $1 \leq M \leq \min(N \cdot (N-1) / 2, 1,000)$
- $1 \leq K \leq \min(2^N, 200)$
- $|g_i| \leq 10^9$ for each valid $i$
- $1 \leq u_i \lt v_i \leq N$ for each valid $i$
- for each valid $i$ and $j$ ($i \neq j$), $u_i \neq u_j$ or $v_i \neq v_j$
- $|d_i| \leq 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $60$

### Subtasks
**Subtask #1 (5 points):** the sum of $N$ over all test cases does not exceed $18$

**Subtask #2 (20 points):** $K = 1$

**Subtask #3 (75 points):** original constraints

### Example Input
```
1
4 2 3
-4 -2 5 2
1 3 0
1 4 -3
```

### Example Output
```
7 5 5
```

### Explanation
**Example case 1:** The best assignment is $x = (0,0,1,1)$, with score $7$. The second and third best assignments are $(0,0,1,0)$ and $(0,1,1,1)$, each with score $5$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>