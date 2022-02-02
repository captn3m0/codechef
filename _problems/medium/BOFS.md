---
{"category_name":"medium","problem_code":"BOFS","problem_name":"Beauty of Segments","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n4 3 3 4\n3 5\n3 5\n1 3\n2 5\n4 4\n4 5\n1 4","output":"7\n0\n3","explanation":"**Example case 1:** One of the strategies that use the minimum number of coins is:\n- Pay $3$ coins and play a game with $(3, 4)$.\n- In the game with $(3, 4)$, you just play a game with $(2, 4)$, since $4$ is outside the $3$-rd segment.\n- In the game with $(2, 4)$, pay $4$ coins and play games with $(1, 3)$ and $(1, 5)$.\n- Both of these games end without paying any more coins. The only thing left is playing games with $(0, 3)$ and $(0, 5)$, which end immediately, also without paying any coins.\n\nThe total number of coins used in this strategy is $7$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"farhod_farmon","problem_tester":null,"date_added":"21-06-2019","tags":{"0":"farhod_farmon","1":"lazy","2":"ltime75","3":"medium","4":"segment","5":"taran_1407"},"problem_difficulty_level":"Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/BOFS","time":{"view_start_date":1567272600,"submit_start_date":1567272600,"visible_start_date":1567272600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BOFS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME75/hindi/BOFS.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME75/bengali/BOFS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME75/mandarin/BOFS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME75/russian/BOFS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME75/vietnamese/BOFS.pdf) as well.

You are given $N$ segments $(l_1, r_1), (l_2, r_2), (l_N, r_N)$ and two integers $A$ and $B$. Let's define *playing a game* with two parameters $(x, y)$, where $0 \le x \le N$, as the following recursive process:
- If $x = 0$, the game ends immediately.
- Otherwise, if $y \le l_x$ or $r_x \le y$, end this game and play a game with $(x-1, y)$.
- Otherwise (if $l_x \lt y \lt r_x$), you must choose one of the following options:
    - Pay $A$ coins, end this game and play a game with $(x-1, y)$.
    - Pay $B$ coins, end this game and play two independent games — a game with $(x-1, l_x)$ and a game with $(x-1, r_x)$.

You should answer $Q$ independent queries. In each query, you are given two integers $x$ and $y$ and you should start by playing a game with parameters $(x, y)$. Your goal is to reach a state when you should not play any games, since you have successfully ended every game you should have played. Find the minimum number of coins required for reaching this state.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains four space-separated integers $N$, $Q$, $A$ and $B$.
- For each $i$ ($1 \le i \le N$), the $i$-th of the next $N$ lines contains two space-separated integers $l_i$ and $r_i$.
- $Q$ lines follow. Each of these lines contains two space-separated integers $x$ and $y$ describing a query.

### Output
For each query, print a single line containing one integer — the minimum number of coins.

### Constraints
- $1 \le T \le 100$
- $1 \le N, Q \le 2 \cdot 10^5$
- $1 \le l_i \le r_i \le 2 \cdot 10^5$ for each valid $i$
- $1 \le x \le N$
- $1 \le y \le 2 \cdot 10^5$
- $1 \le A, B \le 2 \cdot 10^5$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$
- the sum of $Q$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (40 points):** $Q, N \le 10^3$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^3$
- the sum of $Q$ over all test cases does not exceed $5 \cdot 10^3$

**Subtask #2 (60 points):** original constraints

### Example Input
```
1
4 3 3 4
3 5
3 5
1 3
2 5
4 4
4 5
1 4
```

### Example Output
```
7
0
3
```

### Explanation
**Example case 1:** One of the strategies that use the minimum number of coins is:
- Pay $3$ coins and play a game with $(3, 4)$.
- In the game with $(3, 4)$, you just play a game with $(2, 4)$, since $4$ is outside the $3$-rd segment.
- In the game with $(2, 4)$, pay $4$ coins and play games with $(1, 3)$ and $(1, 5)$.
- Both of these games end without paying any more coins. The only thing left is playing games with $(0, 3)$ and $(0, 5)$, which end immediately, also without paying any coins.

The total number of coins used in this strategy is $7$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>