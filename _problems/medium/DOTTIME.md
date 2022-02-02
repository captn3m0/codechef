---
{"category_name":"medium","problem_code":"DOTTIME","problem_name":"Dot Time","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5 2 1\r\n3 2 4 1 5\r\n2 4","output":340,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"s_h_shahin","problem_tester":null,"date_added":"18-04-2020","tags":{"0":"algebra","1":"lazy","2":"ltime83","3":"medium","4":"s_h_shahin","5":"segment","6":"taran_1407"},"problem_difficulty_level":"Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/DOTTIME","time":{"view_start_date":1587834602,"submit_start_date":1587834602,"visible_start_date":1587834602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DOTTIME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME83/bengali/DOTTIME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME83/mandarin/DOTTIME.pdf), and [Russian](https://www.codechef.com/download/translated/LTIME83/russian/DOTTIME.pdf) as well. 

You are given a sequence of integers $A_1, A_2, \ldots, A_N$ and an integer $M$.

For any valid integers $p, q$, let's define $F(p, q)$ as the dot product of the subsequences $A_p, A_{p+1}, \ldots, A_{p+M-1}$ and $A_q, A_{q+1}, \ldots, A_{q+M-1}$, i.e. $F(p, q) = \sum_{i=0}^{M-1} A_{p+i} \cdot A_{q+i}$.

You should process $Q$ queries. In each query:
- You are given two integers $pos$ and $val$. Change the value of $A_{pos}$ to $val$.
- Then, find the sum $S = \sum_{i=1}^{N-M+1} \sum_{j=1}^{N-M+1}F(i, j)$. Since this sum could be very large, compute it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $Q$.
- The second line of each test case contains $N$ space-separated integers representing $A_1,A_2,...A_N$.
- $Q$ lines follow. Each of these lines contains two space-separated integers $pos$ and $val$ describing a query.

### Output
For each query, print a single line containing one integer $S$ modulo $998,244,353$.

### Constraints
- $1 \le T \le 100$
- $1 \le M \le N \le 5 \cdot 10^5$
- $1 \le A_i \le 5 \cdot 10^5$ for each valid $i$
- $1 \le Q \le 5 \cdot 10^5$
- $1 \le pos \le N$
- $1 \le \left.\right. val \le 5 \cdot 10^5$
- the sum of $N$ over all test cases does not exceed $10^6$
- the sum of $Q$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):** $Q = 1$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
5 2 1
3 2 4 1 5
2 4
```

### Example Output
```
340
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>