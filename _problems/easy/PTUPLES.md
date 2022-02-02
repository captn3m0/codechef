---
{"category_name":"easy","problem_code":"PTUPLES","problem_name":"Prime Tuples","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n6","output":"0\r\n1","explanation":"**Example case 1:** There are no good tuples. $(1, 2, 3)$ is not a good tuple since $1$ is not prime.\r\n\r\n**Example case 2:** $(2, 3, 5)$ is a good tuple since $2$, $3$ and $5$ are prime and $2 + 3 = 5$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/qpC2KAFCGmY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"14-01-2021","tags":{"0":"cook","1":"cook126","2":"daanish_adm","3":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PTUPLES","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PTUPLES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK126/hindi/PTUPLES.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK126/mandarin/PTUPLES.pdf), [Russian](https://www.codechef.com/download/translated/COOK126/russian/PTUPLES.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK126/vietnamese/PTUPLES.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK126/bengali/PTUPLES.pdf) as well.

A tuple $(a, b, c)$ is considered good if it consists of three **prime numbers** $a$, $b$ and $c$ such that $a \lt b \lt c \leq N$ and $a + b = c$.

Two tuples are considered different if they differ in at least one position. Given $N$, find the number of good tuples that can be formed by integers from $1$ to $N$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The following $T$ lines contain a single integer $N$.

### Output
For each test case, print a single line containing one integer — the number of good tuples which can be formed using integers from $1$ to $N$.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N \le 10^6$

### Example Input
```
2
3
6
```

### Example Output
```
0
1
```

### Explanation
**Example case 1:** There are no good tuples. $(1, 2, 3)$ is not a good tuple since $1$ is not prime.

**Example case 2:** $(2, 3, 5)$ is a good tuple since $2$, $3$ and $5$ are prime and $2 + 3 = 5$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>