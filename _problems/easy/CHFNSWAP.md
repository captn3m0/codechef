---
{"category_name":"easy","problem_code":"CHFNSWAP","problem_name":"Chefina and Swap","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n1\r\n2\r\n3\r\n4\r\n7","output":"0\r\n0\r\n2\r\n2\r\n3","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/HOSOoDM8G6s","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":"","date_added":"28-01-2020","tags":{"0":"easy","1":"maths","2":"number","3":"rishup_nitdgp","4":"rishup_nitdgp","5":"sept20","6":"tncks0121"},"problem_difficulty_level":"Easy","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/CHFNSWAP","time":{"view_start_date":1600075802,"submit_start_date":1600075802,"visible_start_date":1600075802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFNSWAP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT20/hindi/CHFNSWAP.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT20/bengali/CHFNSWAP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT20/mandarin/CHFNSWAP.pdf), [Russian](https://www.codechef.com/download/translated/SEPT20/russian/CHFNSWAP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT20/vietnamese/CHFNSWAP.pdf) as well.

You are given a positive integer $N$. Consider the sequence $S = (1, 2, \ldots, N)$. You should choose two elements of this sequence and swap them.

A swap is *nice* if there is an integer $M$ ($1 \le M \lt N$) such that the sum of the first $M$ elements of the resulting sequence is equal to the sum of its last $N-M$ elements. Find the number of nice swaps.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case, print a single line containing one integer ― the number of nice swaps.

### Constraints 
- $1 \le T \le 10^6$
- $1 \le N \le 10^9$

### Subtasks
**Subtask #1 (10 points):**
- $T \le 10$
- $N \le 10^3$

**Subtask #2 (30 points):**
- $T \le 10$
- $N \le 10^6$

**Subtask #3 (60 points):** original constraints

### Example Input
```
5
1
2
3
4
7
```

### Example Output
```
0
0
2
2
3
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>