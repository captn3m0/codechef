---
{"category_name":"medium","problem_code":"MODPARRS","problem_name":"Linear Combination","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1 1 1","output":56406,"explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/lCZFYs_288I","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"29-11-2020","tags":{"0":"dec20","1":"dynamic","2":"ildar_adm","3":"medium"},"problem_difficulty_level":"Medium-Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/MODPARRS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MODPARRS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC20/hindi/MODPARRS.pdf), [Bengali](https://www.codechef.com/download/translated/DEC20/bengali/MODPARRS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC20/mandarin/MODPARRS.pdf), [Russian](https://www.codechef.com/download/translated/DEC20/russian/MODPARRS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC20/vietnamese/MODPARRS.pdf) as well.

You are given an integer sequence $A_1, A_2, \ldots, A_N$. Find the number of integer sequences $X_1, X_2, \ldots, X_N$ such that
- $0 \le X_i \lt 239$ for each valid $i$
- $X_i \neq X_j$ for each valid $i \neq j$
- $(X_1 \cdot A_1) + (X_2 \cdot A_2) + \ldots + (X_N \cdot A_N)$ is divisible by $239$

Since the answer may be large, compute it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
Print a single line containing one integer ― the number of sequences satisfying all conditions modulo $998,244,353$.

### Constraints
- $1 \le N \le 20$
- $0 \le A_i \lt 239$ for each valid $i$

### Subtasks
**Subtask #1 (10 points):** $N \le 10$

**Subtask #2 (10 points):** $N \le 15$

**Subtask #3 (80 points):** original constraints

### Example Input
```
3
1 1 1
```

### Example Output
```
56406
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>