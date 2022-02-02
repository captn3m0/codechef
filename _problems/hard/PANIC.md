---
{"category_name":"hard","problem_code":"PANIC","problem_name":"Panic! at the Disco","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1 0 2 4\r\n1\r\n2 3 4 5\r\n1 0\r\n0 1\r\n3 23 45 107\r\n5 7 2\r\n1 8 9\r\n3 4 5","output":"33\r\n33552 0\r\n0 33552\r\n601338635 934201293 356700741\r\n960409891 125261415 197093893\r\n136328022 287118456 122438416","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/PuQ-HZZE_2w","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"16-07-2020","tags":{"0":"berlekamp","1":"cayley","2":"hard","3":"math","4":"matrix","5":"nov20","6":"number","7":"randomized","8":"recurrence","9":"sjshohag","10":"sjshohag"},"problem_difficulty_level":"Hard","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/PANIC","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PANIC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV20/hindi/PANIC.pdf), [Bengali](https://www.codechef.com/download/translated/NOV20/bengali/PANIC.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV20/mandarin/PANIC.pdf),[Russian](https://www.codechef.com/download/translated/NOV20/russian/PANIC.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV20/vietnamese/PANIC.pdf) as well.

You are given a $K \times K$ matrix $M$. For each $r$ and $c$ ($1 \le r, c \le K$), let's denote the element in the $r$-th row and $c$-th column by $M_{r, c}$. You are also given three integers $N$, $a$ and $d$. Let's define a $K \times K$ matrix
$$S = \sum_{i=0}^N F_{a + i \cdot d} \cdot M^i \,.$$
Here, $M^0$ is the identity matrix and for any non-negative integer $i$, $F_i$ is the $i$-th Fibonacci number ― formally, $F_0 = 0$, $F_1 = 1$ and $F_i = F_{i-1} + F_{i-2}$ for $i \gt 1$.

Let's denote elements of the matrix $S$ in the same way as for $M$. For each valid $r$ and $c$, compute $S_{r, c}$ modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains four space-separated integers $K$, $a$, $d$ and $N$.
- $K$ lines follow. For each valid $i$, the $i$-th of these lines contains $K$ space-separated integers $M_{i, 1}, M_{i, 2}, \ldots, M_{i, K}$.

### Output
For each test case, print $K$ lines. For each valid $i$, the $i$-th of these lines should contain $K$ space-separated integers $S_{i, 1}, S_{i, 2}, \ldots, S_{i, K}$ modulo $998,244,353$.

### Constraints
- $1 \le T \le 100$
- $1 \le K \le 100$
- $0 \le a, d \le 10^9$
- $0 \le N \le 10^{1,000}$
- $0 \le M_{i, j} \lt 998,244,353$ for each valid $i$ and $j$
- the sum of $K$ over all test cases does not exceed $100$

### Subtasks
**Subtask #1 (10 points):**
- $K = 1$
- $N \le 10^{18}$

**Subtask #2 (30 points):**
- $K \le 20$
- $N \le 10^{18}$

**Subtask #3 (60 points):** original constraints

### Example Input
```
3
1 0 2 4
1
2 3 4 5
1 0
0 1
3 23 45 107
5 7 2
1 8 9
3 4 5
```

### Example Output
```
33
33552 0
0 33552
601338635 934201293 356700741
960409891 125261415 197093893
136328022 287118456 122438416
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>