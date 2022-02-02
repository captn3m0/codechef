---
{"category_name":"medium","problem_code":"FEWDIFF","problem_name":"Few Different Elements","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n6\r\n1 1 1 2 2 2\r\n4\r\n1 100 10000 1000000\r\n5\r\n1 2 3 2 1","output":"0\r\n1\r\n1","explanation":"**Example case 1:** All contiguous subsequences are already good.\r\n\r\n**Example case 2:** For example, $(1, 100, 10000)$ is not good. It is enough to change the sequence to $(1, 100, 100, 1000000)$, though.\r\n\r\n**Example case 3:** For example, $(1, 2, 3)$ is not good. It is enough to change the sequence to $(1, 2, 1, 2, 1)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anton_trygub","problem_tester":"","date_added":"22-09-2020","tags":{"0":"anton_trygub","1":"dynamic","2":"ltime88","3":"medium","4":"observation"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/FEWDIFF","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FEWDIFF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME88/hindi/FEWDIFF.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME88/bengali/FEWDIFF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME88/mandarin/FEWDIFF.pdf), [Russian](https://www.codechef.com/download/translated/LTIME88/russian/FEWDIFF.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME88/vietnamese/FEWDIFF.pdf) as well.

Let's call a sequence with length $K$ *good* if there are at most $\frac{K}{2} + 1$ distinct elements in it. For example, the sequence $(3, 3, 2, 1, 3)$ is good, since it contains $3 \le \frac{5}{2} + 1$ distinct elements, while the sequence $(1, 4, 8, 8, 2)$ is not good, since it contains $4 \gt \frac{5}{2} + 1$ distinct elements.

You are given a sequence of integers $A_1, A_2, \ldots, A_N$. You may perform any number of operations (including zero) on this sequence. In one operation, you should choose one element of the sequence and replace it by any integer you choose. You want all contiguous subsequences of the resulting sequence to be good. What is the smallest number of operations you need to perform to achieve this?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the smallest number of operations needed to make all contiguous subsequences good.

### Constraints
- $1 \le T \le 40$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (20 points):** the sum of $N$ over all test cases does not exceed $200$

**Subtask #2 (30 points):** the sum of $N$ over all test cases does not exceed $5,000$

**Subtask #3 (50 points):** original constraints

### Example Input
```
3
6
1 1 1 2 2 2
4
1 100 10000 1000000
5
1 2 3 2 1
```

### Example Output
```
0
1
1
```

### Explanation
**Example case 1:** All contiguous subsequences are already good.

**Example case 2:** For example, $(1, 100, 10000)$ is not good. It is enough to change the sequence to $(1, 100, 100, 1000000)$, though.

**Example case 3:** For example, $(1, 2, 3)$ is not good. It is enough to change the sequence to $(1, 2, 1, 2, 1)$. 

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>