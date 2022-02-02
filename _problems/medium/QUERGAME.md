---
{"category_name":"medium","problem_code":"QUERGAME","problem_name":"Query Game","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3 2\r\n3 2 1\r\n1 2\r\n1\r\n2\r\n1 1\r\n4\r\n1 5\r\n1","output":"2 0\r\n2 2\r\n4 0","explanation":"**Example case 1:** In the first turn, the sequence is $A = [3, 2, 1]$ and Chef can delete the first or last element with equal probability $\\frac{1}{2}$. Therefore, Chef\u0027s expected sum for $K = 1$ is $\\frac{1}{2} \\cdot 3 + \\frac{1}{2} \\cdot 1 = 2$. Also, since Chefina has not done anything yet, her expected sum is $0$.\r\n\r\nIn the next turn, Chefina has to choose an element. Since Chef could have chosen $3$ or $1$ in the first turn, we have $2$ possible sequences for Chefina now: $[2, 1]$ or $[3, 2]$, each with the same probability $\\frac{1}{2}$. Chefina\u0027s expected sums after this turn individually for these two sequences are $\\frac{3}{2}$ and $\\frac{5}{2}$ respectively. Therefore, the expected sum of elements deleted by Chefina for $K = 2$ is $\\frac{1}{2} \\cdot (\\frac{3}{2} + \\frac{5}{2}) = 2$. Also, Chef\u0027s expected sum for $K = 2$ is the same as for $K = 1$.\r\n\r\n**Example case 2:** We have only $1$ element, so Chef deletes it in the first turn. The expected sum is $4$ for Chef and $0$ for Chefina.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"samarth2017","problem_tester":"","date_added":"27-02-2021","tags":{"0":"march21","1":"medium","2":"number","3":"samarth2017"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/QUERGAME","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=QUERGAME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MARCH21/bengali/QUERGAME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH21/mandarin/QUERGAME.pdf), [Russian](https://www.codechef.com/download/translated/MARCH21/russian/QUERGAME.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH21/vietnamese/QUERGAME.pdf) as well.

You are given a sequence of positive integers $A_1, A_2, \ldots, A_N$ and a fraction $p = x/y$. Chef and Chefina play a game on this sequence. They alternate turns; Chef plays first.

In each turn, the current player must choose either the first element (with probability $p$) or the last element (with probability $1-p$) of the current sequence and delete that element. The game continues for $K$ turns (e.g. if $K = N$, it continues until the sequence becomes empty).

Chef wants to know the expected value of the sum of integers he deletes and the expected value of the sum of integers Chefina deletes. It can be proved that each expected sum can be represented as a fraction $\frac{P}{Q}$, where $P$ and $Q$ are non-negative integers and $Q$ is coprime with $998,244,353$. You need to compute $P \cdot Q^{-1}$ modulo $998,244,353$, where $Q^{-1}$ denotes the multiplicative inverse of $Q^{-1}$ modulo $998,244,353$.

You need to answer $Q$ queries. In each query, you are given a different value of $K$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains two space-separated integers $x$ and $y$.
- $Q$ lines follow. Each of these lines contains a single integer $K$ describing a query.

### Output
For each query, print a single line containing two space-separated integers ― the values of $P \cdot Q^{-1}$ modulo $998,244,353$ for the expected sums of numbers deleted by Chef and Chefina respectively.

### Constraints
- $1 \leq T \leq 1,000$
- $1 \leq N, Q \leq 5 \cdot 10^5$
- $1 \leq A_i \lt 998,244,353$ for each valid $i$
- $0 \leq x \leq y \lt 998,244,353$
- $y \gt 0$
- $1 \leq K \leq N$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$
- the sum of $Q$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (2 points):** $N, Q \leq 15$

**Subtask #2 (3 points):** $N, Q \leq 100$

**Subtask #3 (5 points):** $N, Q \leq 1,000$

**Subtask #4 (20 points):** $N, Q \leq 10^5$

**Subtask #5 (70 points):** original constraints

### Example Input
```
2
3 2
3 2 1
1 2
1
2
1 1
4
1 5
1
```

### Example Output
```
2 0
2 2
4 0
```
	
### Explanation
**Example case 1:** In the first turn, the sequence is $A = [3, 2, 1]$ and Chef can delete the first or last element with equal probability $\frac{1}{2}$. Therefore, Chef's expected sum for $K = 1$ is $\frac{1}{2} \cdot 3 + \frac{1}{2} \cdot 1 = 2$. Also, since Chefina has not done anything yet, her expected sum is $0$.

In the next turn, Chefina has to choose an element. Since Chef could have chosen $3$ or $1$ in the first turn, we have $2$ possible sequences for Chefina now: $[2, 1]$ or $[3, 2]$, each with the same probability $\frac{1}{2}$. Chefina's expected sums after this turn individually for these two sequences are $\frac{3}{2}$ and $\frac{5}{2}$ respectively. Therefore, the expected sum of elements deleted by Chefina for $K = 2$ is $\frac{1}{2} \cdot (\frac{3}{2} + \frac{5}{2}) = 2$. Also, Chef's expected sum for $K = 2$ is the same as for $K = 1$.

**Example case 2:** We have only $1$ element, so Chef deletes it in the first turn. The expected sum is $4$ for Chef and $0$ for Chefina.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>