---
{"category_name":"easy","problem_code":"PRFCTN","problem_name":"Perfection","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5\r\n5 9 8 3 12\r\n2\r\n19 19","output":"4\r\n0","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"30-11-2019","tags":{"0":"deadwing97","1":"kmaaszraa","2":"ltime78"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PRFCTN","time":{"view_start_date":1575133202,"submit_start_date":1575133202,"visible_start_date":1575133202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PRFCTN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME78/bengali/PRFCTN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME78/mandarin/PRFCTN.pdf), [Russian](https://www.codechef.com/download/translated/LTIME78/russian/PRFCTN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME78/vietnamese/PRFCTN.pdf) as well.

You are given a sequence of positive integers $A_1, A_2, \ldots, A_N$. You should make all its elements equal by performing a sequence of operations.

In one operation, you may choose any contiguous subsequence $A_l, A_{l+1}, \ldots, A_r$ such that for each $i$ ($l+1 \le i \le r$), $A_i = A_l$, i.e. a sequence of identical elements, then choose any integer $x \lt A_l$, and for each $i$ ($l \le i \le r$), replace $A_i$ by $x$. The integers $x$ chosen in different operations may be different.

Find the smallest number of operations necessary to make all elements of the given sequence equal.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
Print a single line containing one integer ― the smallest number of operations.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 5 \cdot 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (50 points):**
- $A_i \le N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5,000$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
5
5 9 8 3 12
2
19 19
```

### Example Output
```
4
0
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>