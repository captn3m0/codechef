---
{"category_name":"easy","problem_code":"GOLOMB","problem_name":"Golomb Sequence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1 5\r\n2 4\r\n100 100","output":"27\r\n17\r\n441","explanation":"**Example case 1:** $1^2 + 2^2 + 2^2 + 3^2 + 3^2 = 27$\r\n\r\n**Example case 2:** $2^2 + 2^2 + 3^2 = 17$\r\n\r\n**Example case 3:** $21^2 = 441$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"codemaster3840","problem_tester":"","date_added":"26-05-2020","tags":{"0":"binary","1":"codemaster3840","2":"easy","3":"greedy","4":"ltime86","5":"prefix","6":"rajarshi_basu"},"problem_difficulty_level":"Easy-Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/GOLOMB","time":{"view_start_date":1595696400,"submit_start_date":1595696400,"visible_start_date":1595696400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GOLOMB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME86/hindi/GOLOMB.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME86/bengali/GOLOMB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME86/mandarin/GOLOMB.pdf), [Russian](https://www.codechef.com/download/translated/LTIME86/russian/GOLOMB.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME86/vietnamese/GOLOMB.pdf) as well.

The Golomb sequence $G_1, G_2, \ldots$ is a non-decreasing integer sequence such that for each positive integer $n$, $G_n$ is the number of occurrences of $n$ in this sequence. The first few elements of $G$ are $[1, 2, 2, 3, 3, 4, 4, 4, 5, \ldots]$. Do you know the recurrence relation for the Golomb sequence? It is $G_1 = 1$ and $G_{n+1} = 1+G_{n+1-G_{G_n}}$ for each $n \ge 1$. A self-describing sequence, isn't it?

Mr. Strange wants to learn CP, so he asked Chef, who is one of the best competitive programmers in the world, to teach him. Chef decided to test his ability by giving him the following task.

Find the sum of squares of the $L$-th through $R$-th term of the Golomb sequence, i.e. $S = \sum_{i=L}^R G_i^2$. Since the sum can be quite large, compute it modulo $10^9+7$.

Can you help Mr. Strange carry out this task given to him by his teacher?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $L$ and $R$.

### Output
For each test case, print a single line containing one integer $S$ modulo $10^9+7$.

### Constraints
- $1 \le T \le 10^5$
- $1 \le L \le R \le 10^{10}$

### Subtasks
**Subtask #1 (50 points):**
- $T \le 10^2$
- $R \le 10^9$

**Subtask #2 (50 points):** original constraints

### Example Input
```
3
1 5
2 4
100 100
```

### Example Output
```
27
17
441
```

### Explanation
**Example case 1:** $1^2 + 2^2 + 2^2 + 3^2 + 3^2 = 27$

**Example case 2:** $2^2 + 2^2 + 3^2 = 17$

**Example case 3:** $21^2 = 441$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>