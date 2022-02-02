---
{"category_name":"medium","problem_code":"INVXOR","problem_name":"Inverse of a Function","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2 2 7\r\n4 3 17\r\n3 5 13","output":"6\r\n-1\r\n28","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":null,"date_added":"24-01-2020","tags":{"0":"combinatorics","1":"discrete","2":"march20","3":"medium","4":"sjshohag","5":"tmwilliamlin"},"problem_difficulty_level":"Medium-Hard","best_tag":"Discrete Logarithm","editorial_url":"https://discuss.codechef.com/problems/INVXOR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=INVXOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MARCH20/hindi/INVXOR.pdf), [Bengali](https://www.codechef.com/download/translated/MARCH20/bengali/INVXOR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH20/mandarin/INVXOR.pdf), [Russian](https://www.codechef.com/download/translated/MARCH20/russian/INVXOR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH20/vietnamese/INVXOR.pdf) as well.

The *beauty* of a sequence of non-negative integers is computed in the following way: for each of its non-empty (not necessarily contiguous) subsequences, compute the XOR of all elements of this subsequence; then, sum up all the XORs you obtained.

Let $F(N, B)$ denotes the number of non-negative integer sequences with length $N$ which have beauty $B$. You are given three integers $N$, $X$ and $M$. Find the smallest non-negative integer $B$ such that $F(N, B) \bmod M = X$, or determine that there is no such $B$. Since even the smallest such $B$ might be very large, compute its remainder modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $N$, $X$ and $M$.

### Output
For each test case, print a single line containing one integer ― the smallest valid $B$ (modulo $998,244,353$), or $-1$ if there is no valid $B$.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 10^{10,000}$
- $1 \le M \le 10^9$
- $0 \le X \lt M$

### Subtasks
**Subtask #1 (45 points):**
- $N \le 10^9$
- $M \le 10^5$

**Subtask #2 (55 points):** original constraints

### Example Input
```
3
2 2 7
4 3 17
3 5 13
```

### Example Output
```
6
-1
28
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>