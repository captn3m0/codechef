---
{"category_name":"medium","problem_code":"PPDIV","problem_name":"Perfect Power Divisors","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n1\r\n2\r\n4\r\n14\r\n23","output":"1\r\n2\r\n8\r\n43\r\n93","explanation":"**Example case 3:** We have $f(4) = 1 + 4 = 5$, so $f(1) + f(2) + f(3) + f(4) = 1 + 1 + 1 + 5 = 8$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"bohdan","problem_tester":null,"date_added":"4-01-2020","tags":{"0":"april20","1":"bohdan","2":"easy","3":"inclusion","4":"number","5":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/PPDIV","time":{"view_start_date":1586779202,"submit_start_date":1586779202,"visible_start_date":1586779202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PPDIV","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/APRIL20/hindi/PPDIV.pdf), [Bengali](https://www.codechef.com/download/translated/APRIL20/bengali/PPDIV.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL20/mandarin/PPDIV.pdf), [Russian](https://www.codechef.com/download/translated/APRIL20/russian/PPDIV.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL20/vietnamese/PPDIV.pdf) as well.

For a positive integer $m$, let's define a function $f(m)$ as the sum of all perfect powers which divide $m$. We call a positive integer $k$ a perfect power if there are integers $x$ and $y$ such that $k = x^y$ and $y \gt 1$.

You need to calculate the sum $f(1) + f(2) + \ldots + f(N)$. Since the answer might be quite big, compute it modulo $1,000,000,007$ ($10^9 + 7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case, print a single line containing one integer ― the sum modulo $1,000,000,007$ ($10^9 + 7$).

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10^{18}$

### Subtasks
**Subtask #1 (5 points):** $N \le 100$

**Subtask #2 (10 points):** $N \le 10^6$

**Subtask #3 (15 points):** $N \le 10^{12}$

**Subtask #4 (30 points):** $T \le 3$

**Subtask #5 (40 points):** $T \le 15$

### Example Input
```
5
1
2
4
14
23
```

### Example Output
```
1
2
8
43
93
```

### Explanation
**Example case 3:** We have $f(4) = 1 + 4 = 5$, so $f(1) + f(2) + f(3) + f(4) = 1 + 1 + 1 + 5 = 8$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>