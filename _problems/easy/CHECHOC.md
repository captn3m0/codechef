---
{"category_name":"easy","problem_code":"CHECHOC","problem_name":"Maximum Candies","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4 4 4 6\r\n3 4 4 5","output":"48\r\n30","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cherry0697","problem_tester":"","date_added":"22-07-2020","tags":{"0":"cherry0697","1":"easy","2":"greedy","3":"ltime86","4":"math","5":"observation","6":"rajarshi_basu"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHECHOC","time":{"view_start_date":1595696400,"submit_start_date":1595696400,"visible_start_date":1595696400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHECHOC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME86/hindi/CHECHOC.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME86/bengali/CHECHOC.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME86/mandarin/CHECHOC.pdf), [Russian](https://www.codechef.com/download/translated/LTIME86/russian/CHECHOC.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME86/vietnamese/CHECHOC.pdf) as well.

You are given a matrix $A$ with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$).

You need to fill the matrix with candies in such a way that:
- For each cell, the number of candies in this cell is an integer between $0$ and $X$ inclusive.
- For each pair of adjacent cells, the number of candies in one cell plus the number of candies in the other cell does not exceed $Y$. Two cells are considered adjacent if they share a side.

Find the maximum number of candies you can place in the given matrix.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $N$, $M$, $X$ and $Y$.

### Output
For each test case, print a single line containing one integer ― the maximum number of candies.

### Constraints
- $1 \le T \le 100$
- $1 \le N, M \le 100$
- $1 \le X, Y \le 10^4$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
4 4 4 6
3 4 4 5
```

### Example Output
```
48
30 
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>