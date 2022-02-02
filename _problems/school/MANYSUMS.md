---
{"category_name":"school","problem_code":"MANYSUMS","problem_name":"Distinct Pair Sums","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2 2\r\n2 3","output":"1\r\n3","explanation":"**Example case 1:** The only reachable integer is $2 + 2 = 4$.\r\n\r\n**Example case 2:** $4$, $5$ and $6$ are reachable, since $2+2=4$, $2+3=5$ and $3+3=6$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/c-TnzWnEeYk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"the_hyp0cr1t3","problem_tester":"","date_added":"18-01-2021","tags":{"0":"cakewalk","1":"cook126","2":"the_hyp0cr1t3"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MANYSUMS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MANYSUMS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK126/hindi/MANYSUMS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK126/mandarin/MANYSUMS.pdf), [Russian](https://www.codechef.com/download/translated/COOK126/russian/MANYSUMS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK126/vietnamese/MANYSUMS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK126/bengali/MANYSUMS.pdf) as well.

You are given a range of integers $\{L, L+1, \ldots, R\}$. An integer $X$ is said to be *reachable* if it can be represented as a sum of two **not necessarily distinct** integers in this range. Find the number of distinct reachable integers.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $L$ and $R$.

### Output
For each test case, print a single line containing one integer — the number of reachable integers.

### Constraints
- $1 \leq T \leq 10^5$
- $1 \leq L \leq R \leq 10^6$

### Example Input
```
2
2 2
2 3
```

### Example Output
```
1
3
```
	
### Explanation
**Example case 1:** The only reachable integer is $2 + 2 = 4$.

**Example case 2:** $4$, $5$ and $6$ are reachable, since $2+2=4$, $2+3=5$ and $3+3=6$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>