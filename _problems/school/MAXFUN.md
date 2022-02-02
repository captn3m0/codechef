---
{"category_name":"school","problem_code":"MAXFUN","problem_name":"Maximise Function","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3\r\n2 7 5\r\n3\r\n3 3 3\r\n5\r\n2 2 2 2 5","output":"10\r\n0\r\n6","explanation":"**Example case 1:** The value of the expression is always $10$. For example, let $x = 1$, $y = 2$ and $z = 3$, then it is $|2 - 7| + |7 - 5| + |5 - 2| = 5 + 2 + 3 = 10$.\r\n\r\n**Example case 2:** Since all values in the sequence are the same, the value of the expression is always $0$.\r\n\r\n**Example case 3:** One optimal solution is $x = 1$, $y=2$ and $z = 5$, which gives $|2 - 2| + |2 - 5| + |5 - 2| = 0 + 3 + 3 = 6$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/MmSBZGzt3x0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"24-01-2021","tags":{"0":"algebra","1":"cakewalk","2":"daanish_adm","3":"feb21","4":"observation","5":"vichitr"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MAXFUN","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAXFUN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB21/hindi/MAXFUN.pdf), [Bengali](https://www.codechef.com/download/translated/FEB21/bengali/MAXFUN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB21/mandarin/MAXFUN.pdf), [Russian](https://www.codechef.com/download/translated/FEB21/russian/MAXFUN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB21/vietnamese/MAXFUN.pdf) as well.

You are given a sequence $A_1, A_2, \ldots, A_N$. Find the maximum value of the expression $|A_x-A_y| + |A_y-A_z| + |A_z-A_x|$ over all triples of pairwise distinct valid indices $(x, y, z)$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the maximum value of $|A_x-A_y| + |A_y-A_z| + |A_z-A_x|$.

### Constraints
- $1 \leq T \leq 5$
- $3 \leq N \leq 10^5$
- $|A_i| \leq 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** $N \leq 500$

**Subtask #2 (70 points):** original constraints

### Example Input
```
3
3
2 7 5
3
3 3 3
5
2 2 2 2 5
```

### Example Output
```
10
0
6
```
	
### Explanation
**Example case 1:** The value of the expression is always $10$. For example, let $x = 1$, $y = 2$ and $z = 3$, then it is $|2 - 7| + |7 - 5| + |5 - 2| = 5 + 2 + 3 = 10$.

**Example case 2:** Since all values in the sequence are the same, the value of the expression is always $0$.

**Example case 3:** One optimal solution is $x = 1$, $y=2$ and $z = 5$, which gives $|2 - 2| + |2 - 5| + |5 - 2| = 0 + 3 + 3 = 6$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>