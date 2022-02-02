---
{"category_name":"medium","problem_code":"PART","problem_name":"Partition Ways","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2 2 1 2","output":"1 748683266","explanation":"**Example case 1:** For $n = 1$, we have $P([1]) = P([2]) = 1$ and $P(A) = 0$ for any other sequence. Hence, the expected value is $2 / 2 = 1$.\r\n\r\nFor $n = 2$, there are four valid sequences $[1,1]$, $[1,2]$, $[2,1]$ and $[2,2]$. Each of them can be split into one-element subsequences. In addition, $[1,1]$ can be left unchanged (split into only one subsequence), so $P([1,1]) = 2$. The expected value is $(2+1+1+1) / 4 = 5/4 = 748,683,266$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/HW5N822GAgk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"krikti","problem_tester":"","date_added":"18-01-2021","tags":{"0":"cook126","1":"dynamic","2":"fast","3":"krikti","4":"medium","5":"number"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/PART","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PART","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK126/hindi/PART.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK126/mandarin/PART.pdf), [Russian](https://www.codechef.com/download/translated/COOK126/russian/PART.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK126/vietnamese/PART.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK126/bengali/PART.pdf) as well.

Let's define a function $P(A)$ for a sequence $A$ as the number of ways to divide $A$ into contiguous subsequences such that each element of $A$ belongs to exactly one of these subsequences and the sum of elements of each subsequence is between $L$ and $R$ inclusive.

For each integer $n$ between $1$ and $N$ inclusive, solve the following problem: Consider a random sequence $A$ with length $n$ where each element is an integer between $1$ and $K$ chosen uniformly randomly and independently. Find the expected value of $P(A)$.

For each valid $n$, it can be proved that the expected value can be expressed as a fraction $P / Q$, where $P$ and $Q$ are positive integers and $Q$ is coprime with $998,244,353$. You should compute $P \cdot Q^{-1}$ modulo $998,244,353$, where $Q^{-1}$ is the multiplicative inverse of $Q$ modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $N$, $K$, $L$ and $R$.

### Output
For each test case, print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should be $P \cdot Q^{-1}$ modulo $998,244,353$ for $n = i$.

### Constraints
- $1 \leq T \leq 20$
- $1 \leq N \leq 5 \cdot 10^5$
- $1 \leq L \leq R \leq K \leq 10^6$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$
- the sum of $K$ over all test cases does not exceed $10^6$

### Example Input
```
1
2 2 1 2
```

### Example Output
```
1 748683266
```

### Explanation
**Example case 1:** For $n = 1$, we have $P([1]) = P([2]) = 1$ and $P(A) = 0$ for any other sequence. Hence, the expected value is $2 / 2 = 1$.

For $n = 2$, there are four valid sequences $[1,1]$, $[1,2]$, $[2,1]$ and $[2,2]$. Each of them can be split into one-element subsequences. In addition, $[1,1]$ can be left unchanged (split into only one subsequence), so $P([1,1]) = 2$. The expected value is $(2+1+1+1) / 4 = 5/4 = 748,683,266$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>