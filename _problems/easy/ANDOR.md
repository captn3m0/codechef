---
{"category_name":"easy","problem_code":"ANDOR","problem_name":"AND Plus OR","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/i44DVPiqhxg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mohammed200218","problem_tester":"","date_added":"9-10-2020","tags":{"0":"basic","1":"bitwise","2":"ltime89","3":"mohammed200218","4":"mohammed200218","5":"simple"},"problem_difficulty_level":"Simple","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/ANDOR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ANDOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME89/hindi/ANDOR.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME89/bengali/ANDOR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME89/mandarin/ANDOR.pdf), [Russian](https://www.codechef.com/download/translated/LTIME89/russian/ANDOR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME89/vietnamese/ANDOR.pdf) as well.

Given an integer $x$, find two non-negative integers $a$ and $b$ such that $(a \wedge b) + (a \vee b) = x$, where $\wedge$ is the bitwise AND operation and $\vee$ is the bitwise OR operation.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $x$.

### Output
If there is no valid pair $(a, b)$, print a single line containing the integer $-1$. Otherwise, print a single line containing two space-separated integers $a$ and $b$.

If there are multiple solutions, you may print any one of them.

### Constraints
- $1 \le T \le 10^5$
- $1 \le x \le 10^{18}$

### Subtasks
**Subtask #1 (30 points):**
- $1 \le T \le 200$
- $1 \le x \le 200$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
1
8
```

### Example Output
```
0 1
5 3
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>