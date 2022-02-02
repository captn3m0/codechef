---
{"category_name":"medium","problem_code":"FRCTNS","problem_name":"Fractions","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":5,"output":8,"explanation":"The following eight pairs $(i, j)$ give good fractions: $(1,2)$, $(1,3)$, $(2,3)$, $(2,4)$, $(2,5)$, $(3,4)$, $(3,5)$ and $(4,5)$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/wJ0BBKKBlyU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"27-11-2020","tags":{"0":"ildar_adm","1":"ltime90","2":"medium","3":"number"},"problem_difficulty_level":"Medium","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/FRCTNS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FRCTNS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME90/hindi/FRCTNS.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME90/bengali/FRCTNS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME90/mandarin/FRCTNS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME90/russian/FRCTNS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME90/vietnamese/FRCTNS.pdf) as well.

For positive integers $a$ and $b$, we say that a fraction $\frac{a}{b}$ is *good* if it is equal to $\frac{m}{m+1}$ for some positive integer $m$.

You are given an integer $N$. Find the number of pairs of integers $i, j$ such that $1 \le i, j \le N$ and the fraction $\frac{i}{i+1} \cdot \frac{j+1}{j}$ is good.

### Input
The first and only line of the input contains a single integer $N$.

### Output
Print a single line containing one integer ― the number of pairs of integers $i, j$ ($1 \le i, j \le N$) such that $\frac{i}{i + 1} \cdot \frac{j+1}{j}$ is good.

### Constraints
- $1 \le N \le 1,000,000$

### Subtasks
**Subtask #1 (5 points):** $1 \le N \le 2,000$

**Subtask #2 (10 points):** $1 \le N \le 100,000$

**Subtask #3 (85 points):** original constraints

### Example Input
```
5
```

### Example Output
```
8
```

### Explanation
The following eight pairs $(i, j)$ give good fractions: $(1,2)$, $(1,3)$, $(2,3)$, $(2,4)$, $(2,5)$, $(3,4)$, $(3,5)$ and $(4,5)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>