---
{"category_name":"medium","problem_code":"FCTRE","problem_name":"Factor Tree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5\r\n1 2\r\n1 3\r\n2 4\r\n2 5\r\n2 6 4 3 5\r\n2\r\n1 4\r\n2 2","output":"9\r\n4","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":7.5,"source_sizelimit":50000,"problem_author":"dvyn01","problem_tester":null,"date_added":"19-01-2020","tags":{"0":"april20","1":"dvyn01","2":"medium","3":"number","4":"sieve","5":"sqrt","6":"taran_1407"},"problem_difficulty_level":"Medium","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/FCTRE","time":{"view_start_date":1586779202,"submit_start_date":1586779202,"visible_start_date":1586779202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FCTRE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/APRIL20/hindi/FCTRE.pdf), [Bengali](https://www.codechef.com/download/translated/APRIL20/bengali/FCTRE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL20/mandarin/FCTRE.pdf), [Russian](https://www.codechef.com/download/translated/APRIL20/russian/FCTRE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL20/vietnamese/FCTRE.pdf) as well.

Chef lives in a country called ChefLand. The country can be represented as a tree of $N$ cities (numbered $1$ through $N$) connected by $N-1$ roads. For each valid $i$, the cost of a house in city $i$ is $A_i$.

You should answer $Q$ queries. In each query, you are given cities $u$ and $v$ (possibly identical); Chef is planning to buy houses in these cities. Chef's *happiness quotient* is equal to the product of the costs of houses in all cities which lie on the simple path between $u$ and $v$ (both inclusive). Since Chef loves playing with factors, he is asking you to tell him the number of factors of his happiness quotient, modulo $1,000,000,007$ ($10^9+7$).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the next $N-1$ lines contains two space-separated integers $x$ and $y$ denoting that cities $x$ and $y$ are connected by a road.
- The following line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The following line contains a single integer $Q$.
- Each of the next $Q$ lines contains two space-separated integers $u$ and $v$ describing a query.

### Output
For each query, print a single line containing one integer ― the number of factors of the happiness quotient modulo $1,000,000,007$ ($10^9+7$).

### Constraints
- $1 \le T \le 3$
- $1 \le N, Q \le 10^5$
- $1 \le A_i \le 10^6$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (10 points):** $N, Q \le 10^3$

**Subtask #2 (30 points):** $N \le 10^3$

**Subtask #3 (60 points):** original constraints

### Example Input
```
1
5
1 2
1 3
2 4
2 5
2 6 4 3 5
2
1 4
2 2
```

### Example Output
```
9
4
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>