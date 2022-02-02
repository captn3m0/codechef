---
{"category_name":"medium","problem_code":"COUNTIT","problem_name":"Count Arrays","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2 2 2\r\n2 3 2\r\n41 42 2","output":"10\r\n22\r\n903408624","explanation":"**Example case 1:**\r\nThere are $16$ possible matrices, listed below along with the sequences they generate. There are $10$ different sequences among them: $(0, 0, 0, 0)$, $(0, 1, 0, 1)$, $(0, 1, 1, 0)$, $(1, 0, 0, 1)$, $(1, 0, 1, 0)$, $(1, 1, 1, 0)$, $(1, 0, 1, 1)$, $(0, 1, 1, 1)$, $(1, 1, 0, 1)$ and $(1, 1, 1, 1)$.\r\n\r\n```\r\n[0, 0]\r\n[0, 0] = (0, 0, 0, 0)\r\n\r\n[0, 0]\r\n[0, 1] = (0, 1, 0, 1)\r\n\r\n[0, 0]\r\n[1, 0] = (0, 1, 1, 0)\r\n\r\n[0, 1]\r\n[0, 0] = (1, 0, 0, 1)\r\n\r\n[1, 0]\r\n[0, 0] = (1, 0, 1, 0)\r\n\r\n[1, 0]\r\n[1, 0] = (1, 1, 1, 0)\r\n\r\n[1, 1]\r\n[0, 0] = (1, 0, 1, 1)\r\n\r\n[0, 0]\r\n[1, 1] = (0, 1, 1, 1)\r\n\r\n[0, 1]\r\n[0, 1] = (1, 1, 0, 1)\r\n\r\n[1, 0]\r\n[0, 1] = (1, 1, 1, 1)\r\n\r\n[0, 1]\r\n[1, 0] = (1, 1, 1, 1)\r\n\r\n[1, 1]\r\n[1, 0] = (1, 1, 1, 1)\r\n\r\n[1, 1]\r\n[0, 1] = (1, 1, 1, 1)\r\n\r\n[1, 1]\r\n[0, 1] = (1, 1, 1, 1)\r\n\r\n[1, 0]\r\n[1, 1] = (1, 1, 1, 1)\r\n\r\n[1, 1]\r\n[1, 1] = (1, 1, 1, 1)\r\n```\r\n\r\n**Example case 2:**\r\nThere are $22$ different sequences. One of them is $(1, 1, 0, 1, 1)$, generated e.g. by the matrix \r\n```\r\n[0, 1, 0] \r\n[0, 0, 1]\r\n```\r\n\r\n**Example case 3:** Don\u0027t forget about modulo!","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"filyan","problem_tester":null,"date_added":"24-04-2019","tags":{"0":"filyan","1":"june19","2":"junechallenge"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/COUNTIT","time":{"view_start_date":1560763800,"submit_start_date":1560763800,"visible_start_date":1560763800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COUNTIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE19/hindi/COUNTIT.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE19/bengali/COUNTIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE19/mandarin/COUNTIT.pdf), [Russian](https://www.codechef.com/download/translated/JUNE19/russian/COUNTIT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE19/vietnamese/COUNTIT.pdf) as well.

Consider all matrices with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$) containing only integers between $0$ and $K-1$ (inclusive). For each such matrix $A$, let's form a sequence $L_1, L_2, \ldots, L_{N+M}$:
- For each $i$ ($1 \le i \le N$), $L_i$ is the maximum of all elements in the $i$-th row of $A$.
- For each $i$ ($1 \le i \le M$), $L_{N+i}$ is the maximum of all elements in the $i$-th column of $A$.

Find the number of different sequences formed this way. Since this number may be very large, compute it modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $N$, $M$ and $K$.

### Output
For each test case, print a single line containing one integer — the number of different sequences, modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $1 \le M \le 10^5$
- $1 \le K \le 10^9$
- the sum of $N$ over all test cases does not exceed $10^5$
- the sum of $M$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (10 points):**
- $1 \le K \le 50$
- the sum of $N$ over all test cases does not exceed $50$
- the sum of $M$ over all test cases does not exceed $50$

**Subtask #2 (20 points):**
- $1 \le K \le 10^5$
- the sum of $N$ over all test cases does not exceed $10^5$
- the sum of $M$ over all test cases does not exceed $10^5$

**Subtask #3 (20 points):**
- $1 \le K \le 10^9$
- the sum of $N$ over all test cases does not exceed $200$
- the sum of $M$ over all test cases does not exceed $200$

**Subtask #4 (20 points):**
- $K$ is the same for all test cases
- $1 \le K \le 10^9$
- the sum of $N$ over all test cases does not exceed $10^5$
- the sum of $M$ over all test cases does not exceed $10^5$

**Subtask #5 (30 points):**
- $1 \le K \le 10^9$
- the sum of $N$ over all test cases does not exceed $10^5$
- the sum of $M$ over all test cases does not exceed $10^5$

### Example Input
```
3
2 2 2
2 3 2
41 42 2
```

### Example Output
```
10
22
903408624
```

### Explanation
**Example case 1:**
There are $16$ possible matrices, listed below along with the sequences they generate. There are $10$ different sequences among them: $(0, 0, 0, 0)$, $(0, 1, 0, 1)$, $(0, 1, 1, 0)$, $(1, 0, 0, 1)$, $(1, 0, 1, 0)$, $(1, 1, 1, 0)$, $(1, 0, 1, 1)$, $(0, 1, 1, 1)$, $(1, 1, 0, 1)$ and $(1, 1, 1, 1)$.

```
[0, 0]
[0, 0] = (0, 0, 0, 0)

[0, 0]
[0, 1] = (0, 1, 0, 1)

[0, 0]
[1, 0] = (0, 1, 1, 0)

[0, 1]
[0, 0] = (1, 0, 0, 1)

[1, 0]
[0, 0] = (1, 0, 1, 0)

[1, 0]
[1, 0] = (1, 1, 1, 0)

[1, 1]
[0, 0] = (1, 0, 1, 1)

[0, 0]
[1, 1] = (0, 1, 1, 1)

[0, 1]
[0, 1] = (1, 1, 0, 1)

[1, 0]
[0, 1] = (1, 1, 1, 1)

[0, 1]
[1, 0] = (1, 1, 1, 1)

[1, 1]
[1, 0] = (1, 1, 1, 1)

[1, 1]
[0, 1] = (1, 1, 1, 1)

[1, 1]
[0, 1] = (1, 1, 1, 1)

[1, 0]
[1, 1] = (1, 1, 1, 1)

[1, 1]
[1, 1] = (1, 1, 1, 1)
```

**Example case 2:**
There are $22$ different sequences. One of them is $(1, 1, 0, 1, 1)$, generated e.g. by the matrix 
```
[0, 1, 0] 
[0, 0, 1]
```

**Example case 3:** Don't forget about modulo!

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>