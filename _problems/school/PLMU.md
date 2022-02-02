---
{"category_name":"school","problem_code":"PLMU","problem_name":"Plus Multiply","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n2 4 2\r\n3\r\n0 2 3","output":"1\r\n0","explanation":"**Example case 1:** The only valid pair is $(1, 3)$.\r\n\r\n**Example case 2:** We can see that no valid pair exists.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/A91J6Z1y2EM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vivek_1998299","problem_tester":"","date_added":"30-08-2019","tags":{"0":"arithmetic","1":"cakewalk","2":"dec19","3":"melfice","4":"vivek_1998299"},"problem_difficulty_level":"Cakewalk","best_tag":"Arithmetic Progression","editorial_url":"https://discuss.codechef.com/problems/PLMU","time":{"view_start_date":1576488720,"submit_start_date":1576488720,"visible_start_date":1576488720,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PLMU","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC19/hindi/PLMU.pdf), [Bengali](https://www.codechef.com/download/translated/DEC19/bengali/PLMU.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC19/mandarin/PLMU.pdf), [Russian](https://www.codechef.com/download/translated/DEC19/russian/PLMU.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC19/vietnamese/PLMU.pdf) as well.

Chef has a sequence $A_1, A_2, \ldots, A_N$. He needs to find the number of pairs $(i, j)$ ($1 \le i \lt j \le N$) such that $A_i + A_j = A_i \cdot A_j$. However, he is busy, so he asks for your help.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the desired number of pairs.

### Constraints
- $1 \le T \le 20$
- $1 \le N \le 40,000$
- $0 \le A_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** $1 \le N \le 500$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
3
2 4 2
3
0 2 3
```

### Example Output
```
1
0
```

### Explanation
**Example case 1:** The only valid pair is $(1, 3)$.

**Example case 2:** We can see that no valid pair exists.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>