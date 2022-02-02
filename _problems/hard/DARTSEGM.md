---
{"category_name":"hard","problem_code":"DARTSEGM","problem_name":"Darts","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"gainullinildar","problem_tester":"kingofnumbers","date_added":"21-04-2018","tags":{"0":"gainullinildar"},"editorial_url":"https://discuss.codechef.com/problems/DARTSEGM","time":{"view_start_date":1524934802,"submit_start_date":1524934802,"visible_start_date":1524934802,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/mandarin/DARTSEGM.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/russian/DARTSEGM.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/vietnamese/DARTSEGM.pdf">Vietnamese</a> as well.</h3>

Alice and Bob are playing a game.

First, Alice throws $N$ darts at a board with dimensions $10^9 \times 10^9$ at random. Each dart hits the board at a point (some of these points may coincide). Then, Bob should answer Alice's $Q$ questions. In each question, Alice chooses two integers $l$ and $r$; Bob should only consider all points hit in throws $l$ through $r$ (inclusive) and compute the distance between the farthest pair of these points.

Help Bob find the answers to all queries.

### Input
- The first line of the input contains a single integer $N$ denoting the number of points.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $x_i$ and $y_i$ denoting the coordinates of the point hit with the $i$-th dart.
- The next line contains a single integer $Q$ denoting the number of queries.
- Each of the following $Q$ lines contains two space-separated integers $l$ and $r$ describing one query.

### Output
For each query, print a single line containing one integer — the square of the maximum distance. (It is guaranteed that this number is an integer.)

### Constraints 
- $1 \le N, Q \le 50,000$
- $1 \le x_i, y_i \le 10^9$ for each $i$
- $1 \le l \le r \le N$

### Subtasks
**Subtask #1 (20 points):** $1 \le N, Q \le 200$

**Subtask #2 (30 points):** $1 \le N, Q \le 2000$

**Subtask #3 (50 points):** original constraints

### Example Input
```
2
1 1
2 2
1
1 2
```

### Example Output
```
2
```


### Test Case Generation
In each test case, the points $(x_1, y_1), (x_2, y_2), \dots, (x_N, y_N)$ are generated randomly uniformly from the $10^9 \times 10^9$ square.
