---
{"category_name":"easy","problem_code":"XORCOMP","problem_name":"Xor Compare","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1 2 10\r\n2 1 10\r\n0 0 7","output":"6\r\n5\r\n0","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Omh_nPbKV1I","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"27-11-2020","tags":{"0":"bitwise","1":"easy","2":"ildar_adm","3":"ltime90"},"problem_difficulty_level":"Easy","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/XORCOMP","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=XORCOMP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME90/hindi/XORCOMP.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME90/bengali/XORCOMP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME90/mandarin/XORCOMP.pdf), [Russian](https://www.codechef.com/download/translated/LTIME90/russian/XORCOMP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME90/vietnamese/XORCOMP.pdf) as well.

You are given three non-negative integers $X$, $Y$ and $N$. Find the number of integers $Z$ such that $0 \le Z \le N$ and $(X \oplus Z) \lt (Y \oplus Z)$, where $\oplus$ denotes the bitwise XOR operation.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $X$, $Y$ and $N$.

### Output
For each test case, print a single line containing one integer ― the number of integers $Z$ which satisfy all conditions.

### Constraints
- $1 \le T \le 1,000$
- $0 \le X, Y, N \le 2^{30} - 1$

### Subtasks
**Subtask #1 (5 points):** $X, Y, N \le 2^6 - 1$

**Subtask #2 (95 points):** original constraints

### Example Input
```
3
1 2 10
2 1 10
0 0 7
```

### Example Output
```
6
5
0
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>