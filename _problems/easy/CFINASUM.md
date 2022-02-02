---
{"category_name":"easy","problem_code":"CFINASUM","problem_name":"Chefina and Sums","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n6\r\n1 2 1 1 3 1\r\n3\r\n4 1 4","output":"6\r\n2","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"13-01-2020","tags":{"0":"cook114","1":"rishup_nitdgp"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CFINASUM","time":{"view_start_date":1579458602,"submit_start_date":1579458602,"visible_start_date":1579458602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CFINASUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK114/hindi/CFINASUM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK114/mandarin/CFINASUM.pdf), [Russian](https://www.codechef.com/download/translated/COOK114/russian/CFINASUM.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK114/vietnamese/CFINASUM.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK114/bengali/CFINASUM.pdf) as well.

You are given a sequence $A_1, A_2, \ldots, A_N$. For each $k$ ($1 \le k \le N$), let's define a function $f(k)$ in the following way:
- Consider a sequence $B_1, B_2, \ldots, B_N$, which is created by setting $A_k = 0$. Formally, $B_k = 0$ and $B_i = A_i$ for each valid $i \neq k$.
- $f(k)$ is the number of ways to split the sequence $B$ into two non-empty contiguous subsequences with equal sums.

Find the sum $S = f(1) + f(2) + \ldots + f(N)$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the sum $S$.

### Constraints
- $1 \le T \le 10$
- $2 \le N \le 2 \cdot 10^5$
- $1 \le |A_i| \le 10^9$ for each valid $i$

### Example Input
```
2
6
1 2 1 1 3 1
3
4 1 4
```

### Example Output
```
6
2
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>