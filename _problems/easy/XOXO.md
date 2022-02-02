---
{"category_name":"easy","problem_code":"XOXO","problem_name":"The In-XOR-able Task","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n4 3 3\r\n5 8 1\r\n10 8 2\r\n19 100 34\r\n69 100 45","output":"YES\r\nNO\r\nYES\r\nNO\r\nYES","explanation":"**Example case 1:** For example, $A = [2, 2, 1, 2]$ satisfies the given condition, since there are exactly $3$ pairs $(i, j)$ such that $A_i \\oplus A_j = 3$.\r\n\r\n**Example case 3:** For example, $A = [8, 12, 3, 14, 8, 15, 10, 10, 8, 14]$ satisfies the given condition, since there are exactly $8$ pairs with XOR equal to $2$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"5-10-2020","tags":{"0":"cook123","1":"dynamic","2":"medium","3":"psychik","4":"sjshohag","5":"sjshohag"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/XOXO","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=XOXO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK123/hindi/XOXO.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK123/mandarin/XOXO.pdf), [Russian](https://www.codechef.com/download/translated/COOK123/russian/XOXO.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK123/vietnamese/XOXO.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK123/bengali/XOXO.pdf) as well.

You are given three integers $N$, $K$ and $X$. Is it possible to find a sequence of non-negative integers $A_1, A_2, \ldots, A_N$ such that the number of pairs of indices $(i, j)$ ($1 \le i \le j \le N$) satisfying $A_i \oplus A_j = X$ is equal to $K$? Here, $\oplus$ is the bitwise XOR operator.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $N$, $K$ and $X$.

### Output
For each query, print a single line containing the string `"YES"` if it is possible to find a sequence satisfying the given condition or `"NO"` if it is impossible (without quotes).

### Constraints
- $1 \le T \le 4 \cdot 10^5$
- $1 \le N, K, X \le 3 \cdot 10^5$

### Example Input
```
5
4 3 3
5 8 1
10 8 2
19 100 34
69 100 45
```

### Example Output
```
YES
NO
YES
NO
YES
```

### Explanation
**Example case 1:** For example, $A = [2, 2, 1, 2]$ satisfies the given condition, since there are exactly $3$ pairs $(i, j)$ such that $A_i \oplus A_j = 3$.

**Example case 3:** For example, $A = [8, 12, 3, 14, 8, 15, 10, 10, 8, 14]$ satisfies the given condition, since there are exactly $8$ pairs with XOR equal to $2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>