---
{"category_name":"medium","problem_code":"JMPFVR","problem_name":"Jumping Fever","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sajib_readd","problem_tester":null,"date_added":"20-04-2020","tags":{"0":"convex","1":"dsu","2":"ltime83","3":"medium","4":"sajib_readd","5":"taran_1407"},"problem_difficulty_level":"Medium-Hard","best_tag":"Convex Hull","editorial_url":"https://discuss.codechef.com/problems/JMPFVR","time":{"view_start_date":1587834602,"submit_start_date":1587834602,"visible_start_date":1587834602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=JMPFVR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME83/hindi/JMPFVR.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME83/bengali/JMPFVR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME83/mandarin/JMPFVR.pdf), [Russian](https://www.codechef.com/download/translated/LTIME83/russian/JMPFVR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME83/vietnamese/JMPFVR.pdf) as well.

Chef has a tree with $N$ nodes (numbered $1$ through $N$). Each node has a value; let's denote the value of node $i$ by $v_i$. Chef likes to travel in this tree. For each pair of nodes $(u, v)$, he defines the score of the path from $u$ to $v$ in the following way:
- Suppose that the simple path from node $u$ to node $v$ is a sequence of nodes $u = a_0, a_1, \ldots, a_L = v$, where $L$ is the length of this path.
- Let's denote the values of the nodes on this path by a sequence $A_0, A_1, \ldots, A_L$, where for each valid $i$, $A_i = v_{a_i}$.
- Next, let's denote the suffix sums of the sequence $A$ by $S_0, S_1, \ldots, S_L$, i.e. for each valid $i$, $S_i = \sum_{j=i}^L A_j$.
- The score $f(u, v)$ of the path from node $u$ to node $v$ is the sum of all these suffix sums, i.e. $f(u, v) = \sum_{i=0}^L S_i$.

Chef wants to choose some nodes $u$ and $v$ ($u \neq v$) and travel along the simple path from $u$ to $v$. However, he can treat it as several consecutive paths, which affects the score of the resulting trip. Specifically, if the simple path from node $u$ to node $v$ is a sequence of nodes $u = a_0, a_1, \ldots, a_L = v$, then Chef may choose any non-negative integer $m$ and any sequence $k_1, k_2, \ldots, k_m$ such that $1 \le k_1 \lt k_2 \lt \ldots k_m \lt L$; then, the score of the trip from $u$ to $v$ is $f(u, a_{k_1}) + f(a_{k_1}, a_{k_2}) + \ldots + f(a_{k_m}, v)$. Specifically, if $m=0$, the score of the trip is simply $f(u, v)$.

Find the maximum possible score of Chef's trip if the nodes $u$ and $v$ (such that $u \neq v$) and the sequence $k$ are chosen optimally.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $v_1, v_2, \ldots, v_N$.
- $N-1$ lines follow. Each of these lines contains two space-separated integers $a$ and $b$ denoting that nodes $a$ and $b$ are connected by an edge.

### Output
For each test case, print a single line containing one integer ― the maximum possible score.

### Constraints
- $1 \le T \le 100$
- $2 \le N \le 3 \cdot 10^5$
- $|val_i| \le 10^5$ for each valid $i$
- $1 \le a, b \le N$
- the graph described on the input is a tree
- the sum of $N$ over all test cases does not exceed $3 \cdot 10^5$

### Subtasks
**Subtask #1 (50 points):** the sum of $N$ over all test cases does not exceed $10^3$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
3
-10 2 4
1 2
1 3
```

### Example Ouput
```
-2
```

### Explanation
**Example case 1:** We have $f(1, 2) = -6$, $f(2, 1) = -18$, $f(1, 3) = -2$, $f(3, 1) = -16$, $f(2, 3) = -6$ and $f(3, 2) = -10$. A trip from node $2$ to node $3$ can be split into the paths $2 \rightarrow 1 \rightarrow 3$ with score $-20$, and a trip from node $3$ to node $2$ can be split into the paths $3 \rightarrow 1 \rightarrow 2$ with score $-22$. Each trip can also be treated as one path. The maximum score is $-2$ for the trip from node $1$ to node $3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>