---
{"category_name":"medium","problem_code":"KTH97","problem_name":"Kth Numbers","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n1 2 3\r\n3\r\n1 1 1","output":"11 10 3\r\n7 4 1","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"jafarbadour","problem_tester":null,"date_added":"26-10-2019","tags":{"0":"fast","1":"jafarbadour","2":"jafarbadour","3":"ltime77"},"problem_difficulty_level":"Medium","best_tag":"Fast Fourier Transform","editorial_url":"https://discuss.codechef.com/problems/KTH97","time":{"view_start_date":1572111000,"submit_start_date":1572111000,"visible_start_date":1572111000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=KTH97","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME77/bengali/KTH97.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME77/mandarin/KTH97.pdf), [Russian](https://www.codechef.com/download/translated/LTIME77/russian/KTH97.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME77/vietnamese/KTH97.pdf) as well.

You are given a sequence $A_1, A_2, \ldots, A_N$. We want to generate a sequence $F_1, F_2, \ldots, F_N$ using the following process:
- initially, $F_i = 0$ for each valid $i$.
- $A$ has $2^N-1$ non-empty subsequences. For each of these subsequences (let's denote it by $S_1, S_2, \ldots, S_L$, where $L$ is the length of this subsequence), perform the following assignment: for each $i$ ($1 \le i \le L$), add $S_i$ to $F_i$.

Find the final sequence $F$. Since its elements could be large, calculate them modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing $N$ space-separated integers $F_1, F_2, \ldots, F_N$.

### Constraints 
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $3 \cdot 10^5$

### Subtasks
**Subtask #1 (50 points):**
- $1 \le N \le 2,000$
- the sum of $N$ over all test cases does not exceed $6,000$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
3
1 2 3
3
1 1 1
```

### Example Output
```
11 10 3
7 4 1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>