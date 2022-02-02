---
{"category_name":"hard","problem_code":"BINOFEV","problem_name":"Binomial Fever","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1 10 2\r\n10 2 5","output":"45\r\n644687652","explanation":"**Example case 1:** The sum is $\\binom{10^0}{2} + \\binom{10^1}{2} = 0 + 45 = 45$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rezwanarefin01","problem_tester":null,"date_added":"16-09-2019","tags":{"0":"combinatorics","1":"dec19","2":"fast","3":"medium","4":"melfice","5":"number","6":"polynomial","7":"rezwanarefin01"},"problem_difficulty_level":"Medium-Hard","best_tag":"Fast Fourier Transform","editorial_url":"https://discuss.codechef.com/problems/BINOFEV","time":{"view_start_date":1576488720,"submit_start_date":1576488720,"visible_start_date":1576488720,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BINOFEV","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC19/hindi/BINOFEV.pdf), [Bengali](https://www.codechef.com/download/translated/DEC19/bengali/BINOFEV.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC19/mandarin/BINOFEV.pdf), [Russian](https://www.codechef.com/download/translated/DEC19/russian/BINOFEV.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC19/vietnamese/BINOFEV.pdf) as well.

Chef loves dealing with binomial coefficients. Today, he came across an interesting problem, but he is currently busy in the kitchen. Can you help Chef solve this problem?

You are given three positive integers $N$, $p$ and $r$. Calculate the sum
$$S = \sum\limits_{i=0}^{N} \binom{p^i}{r} \,.$$

Since this sum could be very large, calculate it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $N$, $p$ and $r$.

### Output
For each test case, print a single line containing one integer ― the sum $S$ modulo $998,244,353$.

### Constraints
- $1 \le N \le 10^9$
- $1 \le p \lt 998,244,353$
- $1 \le r \le 10^6$

### Subtasks
**Subtask #1 (5 points):**
- $T = 10$
- $N \le 10^5$
- $r \le 100$

**Subtask #2 (10 points):**
- $T = 100$
- $r = 2$

**Subtask #3 (25 points):**
- $T = 5$
- $r \le 1,000$

**Subtask #4 (40 points):**
- $T = 5$
- $r \le 10^5$

**Subtask 5 (20 points):**
- $T = 2$

### Example Input
```
2
1 10 2
10 2 5
```

### Example Output
```
45
644687652
```

### Explanation
**Example case 1:** The sum is $\binom{10^0}{2} + \binom{10^1}{2} = 0 + 45 = 45$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>