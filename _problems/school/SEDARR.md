---
{"category_name":"school","problem_code":"SEDARR","problem_name":"Sed Sequences","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 2\r\n1 1 1\r\n3 3\r\n1 1 1\r\n5 5\r\n1 2 3 4 5","output":"1\r\n0\r\n0","explanation":"**Example case 1:** Initially, $1 + 1 + 1 = 3$ is not divisible by $K = 2$. We can change $A_1$ to $2$. Now, $2 + 1 + 1 = 4$ is divisible by $K$.\r\n\r\n**Example case 2:** For the initial sequence $A$, $1 + 1 + 1 = 3$ is already divisible by $K = 3$, so no operations are required.\r\n\r\n**Example case 3:** Again, for the initial sequence $A$, $1 + 2 + 3 + 4 + 5 = 15$ is already divisible by $K = 5$, so no operations are required.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/DmLXVflJlQc","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"bhvdsi","problem_tester":"","date_added":"24-12-2020","tags":{"0":"bhvdsi","1":"cakewalk","2":"ltime91","3":"taran_1407"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SEDARR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SEDARR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME91/hindi/SEDARR.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME91/bengali/SEDARR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME91/mandarin/SEDARR.pdf), [Russian](https://www.codechef.com/download/translated/LTIME91/russian/SEDARR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME91/vietnamese/SEDARR.pdf) as well.

The special task force Sed managed to obtain a sequence of positive integers $A_1, A_2, \ldots, A_N$.

You may perform the following operation any number of times (possibly zero): 
- Choose any element of the current sequence and replace it by any positive integer.

You need to make the sum of the elements of the sequence divisible by a given positive integer $K$. Find the minimum number of operations you need to perform to achieve this.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the minimum required number of operations.

### Constraints
- $1 \leq T \leq 1,000$
- $1 \leq N \leq 100$
- $1 \leq K \leq 10^5$
- $1 \leq A_i \leq 10^5$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
3 2
1 1 1
3 3
1 1 1
5 5
1 2 3 4 5
```

### Example Output
```
1
0
0
```

### Explanation
**Example case 1:** Initially, $1 + 1 + 1 = 3$ is not divisible by $K = 2$. We can change $A_1$ to $2$. Now, $2 + 1 + 1 = 4$ is divisible by $K$.

**Example case 2:** For the initial sequence $A$, $1 + 1 + 1 = 3$ is already divisible by $K = 3$, so no operations are required.

**Example case 3:** Again, for the initial sequence $A$, $1 + 2 + 3 + 4 + 5 = 15$ is already divisible by $K = 5$, so no operations are required.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>