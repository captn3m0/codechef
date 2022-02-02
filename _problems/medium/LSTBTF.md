---
{"category_name":"medium","problem_code":"LSTBTF","problem_name":"Smallest Beautiful Number","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1\r\n2","output":"1\r\n34","explanation":"**Example case 1:** It is obvious that $1$ is the smallest beautiful number.\r\n\r\n**Example case 2:** $34$ is beautiful because $3^2 + 4^2 = 9 + 16 = 25 = 5^2$. On the other hand, we can prove that this is the smallest beautiful number.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"bohdan","problem_tester":null,"date_added":"3-08-2019","tags":{"0":"bohdan","1":"challenge","2":"dynamic","3":"nov19","4":"watcher"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/LSTBTF","time":{"view_start_date":1573464602,"submit_start_date":1573464602,"visible_start_date":1573464602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LSTBTF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV19/hindi/LSTBTF.pdf), [Bengali](https://www.codechef.com/download/translated/NOV19/bengali/LSTBTF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV19/mandarin/LSTBTF.pdf), [Russian](https://www.codechef.com/download/translated/NOV19/russian/LSTBTF.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV19/vietnamese/LSTBTF.pdf) as well.

Let's call a positive integer $M$ a *beautiful number* if the following conditions are satisfied:
- The decimal representation of $M$ (without leading zeros) does not contain any zeros.
- The sum of squares of all decimal digits of $M$ is a perfect square.

For example, $1$, $4$ and $221$ are beautiful, but $10$ and $333$ are not.

You are given a positive integer $N$. Find the smallest $N$-digit beautiful number or determine that all $N$-digit integers are not beautiful.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case, print a single line containing one integer ― the smallest $N$-digit beautiful number, or $-1$ if there is no such number.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10^6$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (10 points):** $1 \le N \le 100$

**Subtask #2 (90 points):** $1 \le T \le 10$

### Example Input
```
2
1
2
```

### Example Output
```
1
34
```

### Explanation
**Example case 1:** It is obvious that $1$ is the smallest beautiful number.

**Example case 2:** $34$ is beautiful because $3^2 + 4^2 = 9 + 16 = 25 = 5^2$. On the other hand, we can prove that this is the smallest beautiful number.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>