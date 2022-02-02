---
{"category_name":"easy","problem_code":"INVZCNT","problem_name":"Counting Inversions Again!","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n4 4\n3 1 2 0\n0\n1\n2\n3","output":"5\n3\n3\n1","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"jafarbadour","problem_tester":null,"date_added":"24-10-2019","tags":{"0":"jafarbadour","1":"jafarbadour","2":"ltime77"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/INVZCNT","time":{"view_start_date":1572111000,"submit_start_date":1572111000,"visible_start_date":1572111000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=INVZCNT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME77/hindi/INVZCNT.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME77/bengali/INVZCNT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME77/mandarin/INVZCNT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME77/russian/INVZCNT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME77/vietnamese/INVZCNT.pdf) as well.

You are given a sequence of non-negative integers $A_1, A_2, \ldots, A_N$. A pair $(x, y)$, where $1 \le x \lt y \le N$, is an *inversion* if $A_x \gt A_y$.

You should answer $Q$ queries (numbered $1$ through $Q$). For each valid $i$, in the $i$-th query:
- You are given a non-negative integer $K_i$.
- Consider a sequence $B_1, B_2, \ldots, B_N$, where $B_j = A_j \oplus K$ for each valid $j$.
- You should find the number of inversions in the sequence $B$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- each of the next $Q$ lines describes a query with a single integer $K_i$.

### Output
For each test case, print $Q$ lines. For each valid $i$, the $i$-th of these lines should contain a single integer ― the answer to the $i$-th query.

### Constraints
- $1 \le T \le 10$
- $1 \le N, Q \le 10^6$
- $0 \le K_i \lt 2^{31}$ for each valid $i$
- $0 \le A_i \lt 2^{31}$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$
- the sum of $Q$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $1 \le Q \le 5$
- $1 \le N \le 10^5$
- the sum of $N$ over all test cases does not exceed $10^5$
- the sum of $Q$ over all test cases does not exceed $5$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
4 4
3 1 2 0
0
1
2
3

```

### Example Output
```
5
3
3
1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>