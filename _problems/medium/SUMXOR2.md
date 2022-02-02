---
{"category_name":"medium","problem_code":"SUMXOR2","problem_name":"XOR Sums","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n1 3 5 2\r\n2\r\n1\r\n2","output":"11\r\n34","explanation":"In the first query, the answer is just the sum of elements of $A$ (modulo $998,244,353$), which is $1+3+5+2 = 11$.\r\n\r\nIn the second query, the answer is the sum of bitwise XORs for all subsequences with length $1$ or $2$, which is $1+3+5+2 + (1 \\oplus 3) + (1 \\oplus 5) + (1 \\oplus 2) + (3 \\oplus 5) + (3 \\oplus 2) + (5 \\oplus 2) = 34$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/SK3KhQhGiSs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"samarth2017","problem_tester":"","date_added":"22-01-2021","tags":{"0":"bitwise","1":"feb21","2":"medium","3":"number","4":"samarth2017"},"problem_difficulty_level":"Medium","best_tag":"Bitwise Xor","editorial_url":"https://discuss.codechef.com/problems/SUMXOR2","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUMXOR2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB21/hindi/SUMXOR2.pdf), [Bengali](https://www.codechef.com/download/translated/FEB21/bengali/SUMXOR2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB21/mandarin/SUMXOR2.pdf), [Russian](https://www.codechef.com/download/translated/FEB21/russian/SUMXOR2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB21/vietnamese/SUMXOR2.pdf) as well.

You are given a sequence of positive integers $A_1, A_2, \ldots, A_N$. You should answer $Q$ queries. In each query:
- You are given a positive integer $M$.
- Consider all non-empty subsequences of $A$ with length $\le M$. Recall that a subsequence is any sequence that can be created by deleting zero or more elements without changing the order of the remaining elements.
- For each of these subsequences, compute the [bitwise XOR](https://en.wikipedia.org/wiki/Bitwise_operation#XOR) of its elements. Your task is to determine the sum of these values. Since this sum can be very large, compute it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains a single integer $Q$.
- $Q$ lines follow. Each of these lines contains a single integer $M$ describing a query.

### Output
For each query, print a single line containing one integer ― the sum of bitwise XORs for all subsequences of $A$ with length $\le M$, modulo $998,244,353$.

### Constraints
- $1 \leq N, Q \leq 2 \cdot 10^5$
- $1 \leq A_i \lt 2^{30}$ for each valid $i$
- $1 \leq M \leq N$

### Subtask
**Subtask #1 (10 points):** $1 \leq N, Q \leq 1,000$

**Subtask #2 (90 points):** original constraints

### Example Input
```
4
1 3 5 2
2
1
2
```

### Example Output
```
11
34
```

### Explanation
In the first query, the answer is just the sum of elements of $A$ (modulo $998,244,353$), which is $1+3+5+2 = 11$.

In the second query, the answer is the sum of bitwise XORs for all subsequences with length $1$ or $2$, which is $1+3+5+2 + (1 \oplus 3) + (1 \oplus 5) + (1 \oplus 2) + (3 \oplus 5) + (3 \oplus 2) + (5 \oplus 2) = 34$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>