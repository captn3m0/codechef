---
{"category_name":"school","problem_code":"HDIVISR","problem_name":"Highest Divisor","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/HsCQabmq4EA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"3-02-2021","tags":{"0":"brute","1":"cakewalk","2":"daanish_adm","3":"feb21","4":"vichitr"},"problem_difficulty_level":"Cakewalk","best_tag":"Brute Force","editorial_url":"https://discuss.codechef.com/problems/HDIVISR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HDIVISR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB21/hindi/HDIVISR.pdf), [Bengali](https://www.codechef.com/download/translated/FEB21/bengali/HDIVISR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB21/mandarin/HDIVISR.pdf), [Russian](https://www.codechef.com/download/translated/FEB21/russian/HDIVISR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB21/vietnamese/HDIVISR.pdf) as well.

You are given an integer $N$. Find the largest integer between $1$ and $10$ (inclusive) which divides $N$.

### Input
The first and only line of the input contains a single integer $N$. 

### Output
Print a single line containing one integer ― the largest divisor of $N$ between $1$ and $10$.

### Constraints
- $2 \leq N \leq 1,000$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input 1
```
24
```

### Example Output 1
```
8
```

### Explanation
The divisors of $24$ are $1, 2, 3, 4, 6, 8, 12, 24$, out of which $1, 2, 3, 4, 6, 8$ are in the range $[1, 10]$. Therefore, the answer is $\max(1, 2, 3, 4, 6, 8) = 8$.

### Example Input 2
```
91
```

### Example Output 2
```
7
```

### Explanation
The divisors of $91$ are $1, 7, 13, 91$, out of which only $1$ and $7$ are in the range $[1, 10]$. Therefore, the answer is $\max(1, 7) = 7$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>