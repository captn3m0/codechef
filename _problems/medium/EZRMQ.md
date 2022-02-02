---
{"category_name":"medium","problem_code":"EZRMQ","problem_name":"Carry Bed","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5 3\r\n1 2 3 4 5","output":14,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tasmeemreza","problem_tester":null,"date_added":"14-06-2020","tags":{"0":"cook119","1":"dynamic","2":"medium","3":"taran_1407","4":"tasmeemreza"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/EZRMQ","time":{"view_start_date":1592764202,"submit_start_date":1592764202,"visible_start_date":1592764202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EZRMQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK119/hindi/EZRMQ.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK119/mandarin/EZRMQ.pdf), [Russian](https://www.codechef.com/download/translated/COOK119/russian/EZRMQ.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK119/vietnamese/EZRMQ.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK119/bengali/EZRMQ.pdf) as well.

Chef has a sequence $A_1, A_2, \ldots, A_N$. Let's define a function $f(l, r)$ in the following way:
- If $1 \le l \le r \le N$, then $f(l, r)$ is the maximum of $A_l, A_{l+1}, \ldots, A_r$.
- Otherwise, $f(l, r)$ is $0$.

Chef wants to choose a subset $S$ of the set of indices $\{1, 2, \ldots, N\}$ such that $|S| \ge K$. Let's define $C = \sum_{i \in S}\sum_{j \in S} f(i, j)$.

Can you help Chef find the smallest value of $C$ he can get?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the minimum value of $C$.

### Constraints
- $1 \le T \le 1,000$
- $1 \le K \le N \le 5,000$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10,000$

### Example Input
```
1
5 3
1 2 3 4 5
```

### Example Output
```
14
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>