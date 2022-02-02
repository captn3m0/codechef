---
{"category_name":"medium","problem_code":"DIVPERMS","problem_name":"Permutations","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n10001","output":"96 24 0 0 0","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/rkASWZGqPI0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"29-11-2020","tags":{"0":"bitmasking","1":"dec20","2":"dynamic","3":"ildar_adm","4":"inclusion","5":"medium"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/DIVPERMS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DIVPERMS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC20/hindi/DIVPERMS.pdf), [Bengali](https://www.codechef.com/download/translated/DEC20/bengali/DIVPERMS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC20/mandarin/DIVPERMS.pdf), [Russian](https://www.codechef.com/download/translated/DEC20/russian/DIVPERMS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC20/vietnamese/DIVPERMS.pdf) as well.

You are given a set $S$, which is a subset of $\{1, 2, \ldots, N\}$.

Consider a permutation $P_1, P_2, \ldots, P_N$ of the integers $1$ through $N$. The cost of this permutation is the number of indices $i \gt 1$ such that $P_i$ is divisible by $P_{i-1}$ and $\frac{P_i}{P_{i-1}} \in S$.

For each $k$ between $0$ and $N-1$ (inclusive), find the number of permutations with cost $k$. Since these numbers may be large, compute them modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $N$.
- The second line contains a binary string $T$ with length $N$. For each valid $i$, the $i$-th character of $T$ is '1' if $i \in S$ or '0' otherwise.

### Output
Print a single line containing $N$ space-separated integers. For each $k$ ($0 \le k \lt N$), the $k+1$-th of these integers should be the number of permutations with cost $k$, modulo $998,244,353$.

### Constraints 
- $1 \le N \le 40$
- $T$ contains only characters '0' and '1'

### Subtasks
**Subtask #1 (10 points):** $N \le 15$

**Subtask #2 (90 points):** original constraints

### Example Input
```
5
10001
```

### Example Output
```
96 24 0 0 0
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>