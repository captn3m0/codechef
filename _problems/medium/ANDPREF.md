---
{"category_name":"medium","problem_code":"ANDPREF","problem_name":"Prefix And","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n0 1 2\r\n4\r\n1 3 1 2","output":"2\r\n5","explanation":"**Example case 1:** The optimal order is $[2, 1, 0]$. Then, $AND(2) + AND(2, 1) + AND(2, 1, 0) = 2 + 0 + 0 = 2$.\r\n\r\n**Example case 2:** The optimal order is $[3, 1, 1, 2]$. Then, $AND(3) + AND(3, 1) + AND(3, 1, 1) + AND(3, 1, 1, 2) = 3 + 1 + 1 + 0 = 5$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/ynWKqvxLktI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ashishgup","problem_tester":"","date_added":"15-12-2020","tags":{"0":"ashishgup","1":"bitmasking","2":"cook","3":"cook126","4":"dynamic","5":"medium"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/ANDPREF","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ANDPREF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK126/hindi/ANDPREF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK126/mandarin/ANDPREF.pdf), [Russian](https://www.codechef.com/download/translated/COOK126/russian/ANDPREF.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK126/vietnamese/ANDPREF.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK126/bengali/ANDPREF.pdf) as well.

After learning about the <a href="https://en.wikipedia.org/wiki/Bitwise_operation#AND">bitwise AND</a> operation, Ridbit challenged Ashishgup to solve the following problem.

Let's denote the bitwise AND of one or more integers $a_1, a_2, \ldots, a_k$ by $AND(a_1, a_2, \ldots, a_k)$. For example, $AND(7, 3, 5) = 1$. In particular, for an integer $x$, $AND(x) = x$.

Given a sequence of integers $A_1, A_2, \ldots, A_N$, Ridbit wants Ashishgup to reorder its elements (possibly leaving the sequence unchanged) in such a way that in the resulting sequence $A$, the sum of the values of bitwise AND for all prefixes of the sequence, i.e. $\sum_{i=1}^N AND(A_1, A_2, \ldots A_i)$, is maximum possible.

Find the maximum value of this sum.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the maximum possible value of the sum of values of bitwise AND for all prefixes.

### Constraints
- $1 \leq T \leq 1,000$
- $1 \leq N \leq 2^{20}$
- $0 \leq A_i \lt N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2^{20}$

### Example Input
```
2
3
0 1 2
4
1 3 1 2
```

### Example Output
```
2
5
```

### Explanation
**Example case 1:** The optimal order is $[2, 1, 0]$. Then, $AND(2) + AND(2, 1) + AND(2, 1, 0) = 2 + 0 + 0 = 2$.

**Example case 2:** The optimal order is $[3, 1, 1, 2]$. Then, $AND(3) + AND(3, 1) + AND(3, 1, 1) + AND(3, 1, 1, 2) = 3 + 1 + 1 + 0 = 5$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>