---
{"category_name":"medium","problem_code":"LCMCONST","problem_name":"LCM Constraints","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2 0\r\n2 2\r\n1 2 0\r\n2 1 0\r\n2 2\r\n1 2 0\r\n2 1 1 2 1","output":"-1\r\n1\r\n0","explanation":"**Example case 1:** Both elements of $A$ can be any positive integers, so there is an infinite number of valid sequences.\r\n\r\n**Example case 2:** There are two constraints, but they are actually identical: $\\mathrm{lcm}(A_1, A_2) = 1$. The only sequence that satisfies this is $A = [1, 1]$.\r\n\r\n**Example case 3:** The two constraints contradict each other, so there is no valid sequence.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"2 - 4.5","source_sizelimit":50000,"problem_author":"noureldin","problem_tester":"","date_added":"25-12-2019","tags":{"0":"july20","1":"medium","2":"meet","3":"noureldin","4":"noureldin","5":"number","6":"subset","7":"vertex"},"problem_difficulty_level":"Medium-Hard","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/LCMCONST","time":{"view_start_date":1594632600,"submit_start_date":1594632600,"visible_start_date":1594632600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LCMCONST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY20/hindi/LCMCONST.pdf), [Bengali](https://www.codechef.com/download/translated/JULY20/bengali/LCMCONST.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY20/mandarin/LCMCONST.pdf), [Russian](https://www.codechef.com/download/translated/JULY20/russian/LCMCONST.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY20/vietnamese/LCMCONST.pdf) as well.

You are given $M$ triplets $(X_1, Y_1, B_1), (X_2, Y_2, B_2), \ldots, (X_M, Y_M, B_M)$. Find the number of sequences of positive integers $A_1, A_2, \ldots, A_N$ such that for each valid $i$, $\mathrm{lcm}(A_{X_i},A_{Y_i}) = B_i$, or determine that there is an infinite number of such sequences.

Since the answer can be very large, compute it modulo $1,000,000,007$ ($10^9 + 7$). Note that the values $B_1, B_2, \ldots, B_M$ can also be very large ― you are given their prime decompositions.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $M$ lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains three space-separated integers $X_i$, $Y_i$ and $R_i$, followed by a space and $2R_i$ space-separated integers $p_1, e_1, p_2, e_2, \ldots, p_{R_i}, e_{R_i}$, denoting that $B_i = \prod_{r=1}^{R_i} p_r^{e_r}$.

### Output
For each test case, print a single line containing one integer ― the number of valid sequences modulo $1,000,000,007$, or $-1$ if there are infinitely many valid sequences.

### Constraints
- $1 \le T \le 3$
- $0 \le M \le 10^4$
- $1 \le N \le 38$
- $1 \le X_i, Y_i \le N$ for each valid $i$
- $0 \le R_i \le 200$ for each valid $i$
- $p_r$ is a prime for each valid $r$
- $p_r \le 10^6$ for each valid $r$
- the total number of different primes $p_r$ in each test case does not exceed $5$
- $1 \le e_r \le 10^6$ for each valid $r$

### Subtasks
**Subtask #1 (20 points, time limit 2 seconds):** $N \le 20$

**Subtask #2 (35 points, time limit 4 seconds):** $N \le 30$

**Subtask #3 (45 points, time limit 4.5 seconds):** $T = 1$

### Example Input
```
3
2 0
2 2
1 2 0
2 1 0
2 2
1 2 0
2 1 1 2 1
```

### Example Output
```
-1
1
0
```

### Explanation
**Example case 1:** Both elements of $A$ can be any positive integers, so there is an infinite number of valid sequences.

**Example case 2:** There are two constraints, but they are actually identical: $\mathrm{lcm}(A_1, A_2) = 1$. The only sequence that satisfies this is $A = [1, 1]$.

**Example case 3:** The two constraints contradict each other, so there is no valid sequence.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>