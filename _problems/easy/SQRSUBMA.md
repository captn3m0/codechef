---
{"category_name":"easy","problem_code":"SQRSUBMA","problem_name":"Square Submatrices","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5 36\r\n1 2 3 1 12\r\n4 54\r\n3 3 3 3","output":"6\r\n4","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"26-06-2020","tags":{"0":"admin3","1":"easy","2":"ltime85","3":"observation","4":"sliding","5":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"Sliding Window","editorial_url":"https://discuss.codechef.com/problems/SQRSUBMA","time":{"view_start_date":1593277202,"submit_start_date":1593277202,"visible_start_date":1593277202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SQRSUBMA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME85/hindi/SQRSUBMA.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME85/bengali/SQRSUBMA.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME85/mandarin/SQRSUBMA.pdf), [Russian](https://www.codechef.com/download/translated/LTIME85/russian/SQRSUBMA.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME85/vietnamese/SQRSUBMA.pdf) as well.

You are given an integer sequence $A_1, A_2, \ldots, A_N$ and an integer $X$. Consider a $N \times N$ matrix $B$, where $B_{i,j} = A_i + A_j$ for each valid $i$ and $j$.

You need to find the number of square submatrices of $B$ such that the sum of their elements is $X$. Formally, find the number of quartets $(x_1, y_1, x_2, y_2)$ such that $1 \le x_1 \le x_2 \le N$, $1 \le y_1 \le y_2 \le N$, $x_2-x_1 = y_2-y_1$ and $\sum_{i=x_1}^{x_2}\sum_{j=y_1}^{y_2} B_{i,j} = X$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $X$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the number of square submatrices with sum $X$.

### Constraints
- $1 \le T \le 100$
- $1 \le X \le 10^6$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^6$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):** the sum of $N$ over all test cases does not exceed $1,000$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
5 36
1 2 3 1 12
4 54
3 3 3 3
```

### Example Output
```
6
4
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>