---
{"category_name":"medium","problem_code":"MDIVSET","problem_name":"Minimum Divisibility Set","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"zoooma13","problem_tester":"","date_added":"21-02-2021","tags":{"0":"bitmasking","1":"ltime93","2":"medium","3":"zoooma13"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/MDIVSET","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MDIVSET","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME93/hindi/MDIVSET.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME93/bengali/MDIVSET.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME93/mandarin/MDIVSET.pdf), [Russian](https://www.codechef.com/download/translated/LTIME93/russian/MDIVSET.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME93/vietnamese/MDIVSET.pdf) as well.

Consider any two sets of integers strictly larger than $1$, denoted by $P$ and $Q$. The set $P$ is said to be *divisible* by $Q$ if each integer in $P$ is divisible by at least one (not necessarily the same for each of them) integer in $Q$.

You are given a set $A = \{A_1, A_2, \ldots, A_N\}$, where $A_i \le C$ for each valid $i$ (note that $C$ does not necessarily equal $\max(A)$). Find any set $B = \{B_1, B_2, \ldots, B_M\}$ such that:
- $A$ is divisible by $B$
- $2 \le B_i \le C$ for each valid $i$
- $M$ is the smallest positive integer such that there is at least one set satisfying the previous two conditions

If there are multiple answers, you may find any one of them.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $C$.
- The second line contains $N$ distinct space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print two lines. The first of these lines should contain a single integer $M$. The second line should contain $M$ space-separated integers $B_1, B_2, \ldots, B_M$ satisfying the given conditions.

### Constraints
- $1 \leq T \leq 1,000$
- $1 \leq N \lt C \le 7,500$
- $2 \leq A_i \leq C$ for each valid $i$
- the sum of $C$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (15 points):** $C \leq 50$

**Subtask #2 (15 points):**
- $C \leq 1,500$
- there are at most $10$ test cases where $C \gt 750$
- it is guaranteed that $M \leq 2$

**Subtask #3 (30 points):**
- $C \leq 1,500$
- there are at most $10$ test cases where $C \gt 750$

**Subtask #4 (40 points):** there is at most $1$ test case where $C \gt 3,000$

### Example Input
```
2
5 30
8 5 25 27 20
5 35
34 28 25 14 35
```

### Example Output
```
3
4 5 9
2
2 5
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>