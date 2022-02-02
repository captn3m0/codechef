---
{"category_name":"easy","problem_code":"POSPREFS","problem_name":"Positive Prefixes","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 3","output":"1 2 3","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/z3X4HWmmwgg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"2-12-2020","tags":{"0":"constructive","1":"dec20","2":"easy","3":"ildar_adm"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/POSPREFS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=POSPREFS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC20/hindi/POSPREFS.pdf), [Bengali](https://www.codechef.com/download/translated/DEC20/bengali/POSPREFS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC20/mandarin/POSPREFS.pdf), [Russian](https://www.codechef.com/download/translated/DEC20/russian/POSPREFS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC20/vietnamese/POSPREFS.pdf) as well.

You are given two positive integers $N$ and $K$, where $K \le N$. Find a sequence $A_1, A_2, \ldots, A_N$ such that:
- for each valid $i$, $A_i$ is either $i$ or $-i$
- there are exactly $K$ values of $i$ such that $1 \le i \le N$ and $A_1 + A_2 + \ldots + A_i \gt 0$

If there are multiple solutions, you may print any one of them. It can be proved that at least one solution always exists.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $K$.

### Output
For each test case, print a single line containing $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Constraints
- $1 \le T \le 1,000$
- $1 \le K \le N \le 1,000$

### Subtasks
**Subtask #1 (10 points):** $N \le 10$

**Subtask #2 (90 points):** original constraints

### Example Input
```
1
3 3
```

### Example Output
```
1 2 3
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>