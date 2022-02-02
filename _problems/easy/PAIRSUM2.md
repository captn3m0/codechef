---
{"category_name":"easy","problem_code":"PAIRSUM2","problem_name":"Find the Sum","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n5 3\n4 5 6 7\n1 2\n1 3\n4 1","output":"4\nUNKNOWN\n5","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"27-09-2019","tags":{"0":"deadwing97","1":"kingofnumbers","2":"ltime76"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PAIRSUM2","time":{"view_start_date":1569690002,"submit_start_date":1569690002,"visible_start_date":1569690002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PAIRSUM2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME76/hindi/PAIRSUM2.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME76/bengali/PAIRSUM2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME76/mandarin/PAIRSUM2.pdf), [Russian](https://www.codechef.com/download/translated/LTIME76/russian/PAIRSUM2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME76/vietnamese/PAIRSUM2.pdf) as well.

There is a secret sequence $A_1, A_2, \ldots, A_N$. We do not know the elements of this sequence, but we know another sequence $B_1, B_2, \ldots, B_{N-1}$ such that $B_i = A_i + A_{i+1}$ for each valid $i$.

You should process $Q$ queries. In each query, you are given two indices $p$ and $q$; your task is to compute $A_p + A_q$ or determine that there is not enough information to uniquely determine this sum.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N-1$ space-separated integers $B_1, B_2, \ldots, B_{N-1}$.
- Each of the following $Q$ lines contains two space-separated integers $p$ and $q$ describing a query.

### Output
For each query, if it is impossible to determine the required sum, print a single line containing the string `"UNKNOWN"`. Otherwise, print a single line containing one integer — the required sum.

### Constraints
- $1 \le T \le 100$
- $2 \le N \le 10^5$
- $1 \le Q \le 10^5$
- $1 \le p, q \le N$
- $1 \le B_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$
- the sum of $Q$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (50 points)**:
- $2 \le N \le 1,000$
- $1 \le Q \le 1,000$
- the sum of $N$ over all test cases does not exceed $5,000$
- the sum of $Q$ over all test cases does not exceed $5,000$

**Subtask #2 (50 points)**: original constraints

### Example Input
```
1
5 3
4 5 6 7
1 2
1 3
4 1
```

### Example Output
```
4
UNKNOWN
5
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>