---
{"category_name":"school","problem_code":"WATSCORE","problem_name":"That Is My Score!","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5\r\n2 45\r\n9 100\r\n8 0\r\n2 15\r\n8 90\r\n1\r\n11 1","output":"135\r\n0","explanation":"**Example case 1:** The scorable problems with at least one submission are problems $2$ and $8$. For problem $2$, there are two submissions and the maximum score among them is $45$. For problem $8$, there are also two submissions and the maximum score is $90$. Hence, the total score is $45 + 90 = 135$.\r\n\r\n**Example case 2:** No scorable problem is attempted, so the total score is $0$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/aIFZmZtUyDI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vijju123_adm","problem_tester":"","date_added":"27-11-2019","tags":{"0":"array","1":"cakewalk","2":"dec19","3":"maximum","4":"melfice","5":"sum","6":"vijju123_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/WATSCORE","time":{"view_start_date":1576488720,"submit_start_date":1576488720,"visible_start_date":1576488720,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WATSCORE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC19/hindi/WATSCORE.pdf), [Bengali](https://www.codechef.com/download/translated/DEC19/bengali/WATSCORE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC19/mandarin/WATSCORE.pdf), [Russian](https://www.codechef.com/download/translated/DEC19/russian/WATSCORE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC19/vietnamese/WATSCORE.pdf) as well.

You are participating in a contest which has $11$ problems (numbered $1$ through $11$). The first eight problems (i.e. problems $1, 2, \ldots, 8$) are *scorable*, while the last three problems ($9$, $10$ and $11$) are *non-scorable* ― this means that any submissions you make on any of these problems do not affect your total score.

Your total score is the sum of your best scores for all scorable problems. That is, for each scorable problem, you look at the scores of all submissions you made on that problem and take the maximum of these scores (or $0$ if you didn't make any submissions on that problem); the total score is the sum of the maximum scores you took.

You know the results of all submissions you made. Calculate your total score.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$ denoting the number of submissions you made.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains two space-separated integers $p_i$ and $s_i$, denoting that your $i$-th submission was on problem $p_i$ and it received a score $s_i$.

### Output
For each test case, print a single line containing one integer ― your total score.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 1,000$
- $1 \le p_i \le 11$ for each valid $i$
- $0 \le s_i \le 100$ for each valid $i$

### Subtasks
**Subtask #1 (15 points):** all submissions are on the same problem, i.e. $p_1 = p_2 = \ldots = p_N$

**Subtask #2 (15 points):** there is at most one submission made on each problem, i.e. $p_i \neq p_j$ for each valid $i, j$ ($i \neq j$)

**Subtask #3 (70 points):** original constraints

### Example Input
```
2
5
2 45
9 100
8 0
2 15
8 90
1
11 1
```

### Example Output
```
135
0
```

### Explanation
**Example case 1:** The scorable problems with at least one submission are problems $2$ and $8$. For problem $2$, there are two submissions and the maximum score among them is $45$. For problem $8$, there are also two submissions and the maximum score is $90$. Hence, the total score is $45 + 90 = 135$.

**Example case 2:** No scorable problem is attempted, so the total score is $0$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>