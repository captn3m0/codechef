---
{"category_name":"school","problem_code":"SMOL","problem_name":"Smallest Possible Whole Number","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5 2\r\n4 4\r\n2 5","output":"1\r\n0\r\n2","explanation":"**Example case 1:**\r\n- First, we change $N = 5$ to $N - K = 5 - 2 = 3$.\r\n- Then, we have $N = 3$ and we change it to $N - K = 3 - 2 = 1$.\r\n\r\nSince $1 \\lt K$, the process stops here and the smallest value is $1$.\r\n\r\n**Example case 2:** We change $N = 4$ to $N - K = 4 - 4 = 0$. Since $0 \\lt K$, the process stops here and the smallest value is $0$.\r\n\r\n**Example case 3:** Since $2 \\lt K$ initially, we should not perform any operations and the smallest value is $2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/EeH94q5wQoI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ashishgup","problem_tester":"","date_added":"17-02-2021","tags":{"0":"ashishgup","1":"cakewalk","2":"ltime93"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SMOL","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SMOL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME93/bengali/SMOL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME93/mandarin/SMOL.pdf), [Russian](https://www.codechef.com/download/translated/LTIME93/russian/SMOL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME93/vietnamese/SMOL.pdf) as well.

You are given two integers $N$ and $K$. You may perform the following operation any number of times (including zero): change $N$ to $N-K$, i.e. subtract $K$ from $N$. Find the smallest non-negative integer value of $N$ you can obtain this way.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $K$.

### Output
For each test case, print a single line containing one integer — the smallest value you can get.

### Constraints
- $1 \leq T \leq 10^5$
- $1 \leq N \leq 10^9$
- $0 \leq K \leq 10^9$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
5 2
4 4
2 5
```

### Example Output
```
1
0
2
```

### Explanation
**Example case 1:**
- First, we change $N = 5$ to $N - K = 5 - 2 = 3$.
- Then, we have $N = 3$ and we change it to $N - K = 3 - 2 = 1$.

Since $1 \lt K$, the process stops here and the smallest value is $1$.

**Example case 2:** We change $N = 4$ to $N - K = 4 - 4 = 0$. Since $0 \lt K$, the process stops here and the smallest value is $0$.

**Example case 3:** Since $2 \lt K$ initially, we should not perform any operations and the smallest value is $2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>