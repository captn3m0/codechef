---
{"category_name":"easy","problem_code":"XORIT","problem_name":"Xor It","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n1 10\r\n3 6\r\n4 10\r\n10 17\r\n100 159","output":"28\r\n9\r\n28\r\n79\r\n7485","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"15-12-2019","tags":{"0":"bitwise","1":"cook113","2":"easy","3":"kmaaszraa","4":"kmaaszraa"},"problem_difficulty_level":"Easy","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/XORIT","time":{"view_start_date":1577041202,"submit_start_date":1577041202,"visible_start_date":1577041202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=XORIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK113/hindi/XORIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK113/mandarin/XORIT.pdf), [Russian](https://www.codechef.com/download/translated/COOK113/russian/XORIT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK113/vietnamese/XORIT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK113/bengali/XORIT.pdf) as well.

The XOR pair representation (XPR) of a positive integer $N$ is defined as a pair of integers $(A, B)$ such that:
- $1 \le A \le B \le N$
- $A \oplus B = N$
- if there is no way to choose $A$ and $B$ satisfying the above conditions, $A = B = -1$
- otherwise, the value of $A$ should be the smallest possible

These conditions uniquely define the XPR. Next, we define a function $F(N)$ = the value of $B$ in $XPR(N)$, and a function $G(L, R) = \sum\limits_{i=L}^R F(i)$.

You are given $L$ and $R$. Compute $G(L, R)$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $L$ and $R$.

### Output
For each test case, print a single line containing one integer — the value of the function $G(L, R)$.

### Constraints 
- $1 \le T \le 10^5$
- $1 \le L \le R \le 10^9$

### Example Input
```
5
1 10
3 6
4 10
10 17
100 159
```

### Example Output
```
28
9
28
79
7485
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>