---
{"category_name":"hard","problem_code":"BLUECHIP","problem_name":"Escape the Blue Chips","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n4 5 3 2\r\n1 2\r\n2 3\r\n2 4\r\n3 4\r\n3 3\r\n4 4\r\n5 4\r\n6 4\r\n2 1 3 0\r\n1 2\r\n1 2\r\n4 5 6 3\r\n2 1\r\n3 2\r\n4 2\r\n1 4\r\n1 3\r\n4 4\r\n5 4\r\n7 3","output":"7\r\n2\r\n8","explanation":"**Example case 1:** One of the possible solutions is shown below.\r\n\r\n\u003Cimg src=\u0022https://espresso.codeforces.com/1ee257d1ceb6898126a6d81c7d1d72626871030e.png\u0022 class=\u0022center\u0022 width=\u0022550\u0022 height=\u0022250\u0022\u003E\r\n\r\nAt $t = 3$, you may use $3$-teleport from $2$ to $1$, arriving at vertex $1$ at the time $t = 7$, since $3 \\cdot \\mathrm{dist}(2, 1) = 3$ and $3+3 \\leq 7$.\r\n\r\n**Example case 2:** One of the possible solutions is shown below.\r\n\r\n\u003Cimg src=\u0022https://espresso.codeforces.com/122baf46b0be9bc50cf7aacbd4445a01a923a199.png\u0022 class=\u0022center\u0022 width=\u0022300\u0022 height=\u0022100\u0022\u003E\r\n\r\n**Example case 3:** One of the possible solutions is shown below.\r\n\r\n\u003Cimg src=\u0022https://espresso.codeforces.com/3661369ca54f3e7fb8751e386d521f9ff3338a93.png\u0022 class=\u0022center\u0022 width=\u0022625\u0022 height=\u0022275\u0022\u003E\r\n\r\nAt $t = 4$, you may use $6$-teleport from $3$ to $3$, arriving at vertex $3$ at the time $t = 6$, since $6 \\cdot \\mathrm{dist}(3, 3) = 0$ and $4+0 \\leq 6$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/f6IXBls4M6c","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3.5,"source_sizelimit":50000,"problem_author":"fairy_winx","problem_tester":"","date_added":"21-03-2021","tags":{"0":"cook127","1":"dynamic","2":"fairy_winx","3":"medium","4":"treap"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/BLUECHIP","time":{"view_start_date":1616351402,"submit_start_date":1616351402,"visible_start_date":1616351402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BLUECHIP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK127/mandarin/BLUECHIP.pdf), [Russian](https://www.codechef.com/download/translated/COOK127/russian/BLUECHIP.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK127/vietnamese/BLUECHIP.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK127/bengali/BLUECHIP.pdf) as well.

You are given a tree with $N$ vertices (numbered $1$ through $N$) rooted at vertex $1$. There are $M$ blue tokens (numbered $1$ through $M$) and $1$ red token. For each valid $i$, the $i$-th blue token appears at the root at an integer time $t_i$ seconds and moves to a leaf vertex $v_i$, crossing one edge per second. In the next second after reaching $v_i$, this token disappears.

You control the red token. First, given a starting time $S$, you must choose some leaf vertex of the tree and place it at this vertex at some integer time $t$ seconds such that $t \geq S$. In one second, you can move the red token to any vertex adjacent to its current vertex. Your aim is to move the red token to vertex $1$.

At each integer moment in time, the red token is not allowed to be in the same vertex as any blue token.

Additionally, you have a hidden ability called $K$-*teleport*, which can be used any number of times. Whenever $K$-teleport is used to move the red token from its current vertex $u$ to some vertex $v$ of your choice (possibly $u$ itself), it phases out of existence (so it cannot clash with any blue token) and appears in $v$ at an integer moment in time of your choice which is **at least** $K \cdot \mathrm{dist}(u, v)$ seconds later. Here, $\mathrm{dist}(u, v)$ denotes the shortest distance between vertices $u$ and $v$.

Find the minimum time at which the red token can reach the root without clashing with any blue token.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains four space-separated integers $N$, $M$, $K$ and $S$.
- Each of the next $N - 1$ lines contains two space-separated integers $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge.
- $M$ more lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $t_i$ and $v_i$.

### Output
For each test case, print a single line containing one integer ― the minimum time at which you can reach the root.

### Constraints
- $1 \leq T \leq 10^5$
- $2 \leq N \leq 2 \cdot 10^5$
- $1 \leq M \leq 2 \cdot 10^5$
- $1 \leq K \leq 10^9$
- $0 \leq S \leq 10^9$
- $1 \le u, v \le N$
- the graph described on the input is a tree
- $0 \leq t_i \leq 10^9$ for each valid $i$
- $1 \leq v_i \leq N$ for each valid $i$
- $v_i$ is a leaf vertex for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$
- the sum of $M$ over all test cases does not exceed $2 \cdot 10^5$

### Example Input
```
3
4 5 3 2
1 2
2 3
2 4
3 4
3 3
4 4
5 4
6 4
2 1 3 0
1 2
1 2
4 5 6 3
2 1
3 2
4 2
1 4
1 3
4 4
5 4
7 3
```

### Example Output
```
7
2
8
```

### Explanation
**Example case 1:** One of the possible solutions is shown below.

<img src="https://espresso.codeforces.com/1ee257d1ceb6898126a6d81c7d1d72626871030e.png" class="center" width="550" height="250">

At $t = 3$, you may use $3$-teleport from $2$ to $1$, arriving at vertex $1$ at the time $t = 7$, since $3 \cdot \mathrm{dist}(2, 1) = 3$ and $3+3 \leq 7$.

**Example case 2:** One of the possible solutions is shown below.

<img src="https://espresso.codeforces.com/122baf46b0be9bc50cf7aacbd4445a01a923a199.png" class="center" width="300" height="100">

**Example case 3:** One of the possible solutions is shown below.

<img src="https://espresso.codeforces.com/3661369ca54f3e7fb8751e386d521f9ff3338a93.png" class="center" width="625" height="275">

At $t = 4$, you may use $6$-teleport from $3$ to $3$, arriving at vertex $3$ at the time $t = 6$, since $6 \cdot \mathrm{dist}(3, 3) = 0$ and $4+0 \leq 6$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>