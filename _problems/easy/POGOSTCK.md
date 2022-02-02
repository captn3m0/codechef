---
{"category_name":"easy","problem_code":"POGOSTCK","problem_name":"Pogo Stick Competition","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"28-03-2019","tags":{"0":"array","1":"kingofnumbers","2":"ltime70","3":"observations","4":"simple","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/POGOSTCK","time":{"view_start_date":1553965202,"submit_start_date":1553965202,"visible_start_date":1553965202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME70/mandarin/POGOSTCK.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME70/bengali/POGOSTCK.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME70/hindi/POGOSTCK.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME70/russian/POGOSTCK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME70/vietnamese/POGOSTCK.pdf) as well.

Chef is participating in a pogo stick race. In this competition, there are $N$ squares (numbered $1$ through $N$) in a row. Chef must choose a starting square, enter this square and start jumping on his pogo stick. In each jump, if Chef is at a square $s$, then he can only jump to the square $s+K$. If square $s+K$ does not exist, Chef jumps out of the row of squares and the race ends for him. It is not allowed to stop jumping any earlier.

Each square has a value; let's denote the value of the $i$-th square by $A_i$. Initially, Chef has $0$ points. When he jumps in some square (including the initial square), he is awarded a number of points equal to the value of this square, exactly once. Note that if this value is negative, the number of Chef's points is decreased.

Determine the maximum possible total number of points Chef can get if he selects the initial cell optimally.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the maximum number of points.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $1 \le K \le 10^5$
- $|A_i| \le 10,000$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (30 points):**
- $N \le 1,000$
- the sum of $N$ over all test cases does not exceed $10,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
5 2
3 6 4 7 2
5 3
3 -5 6 3 10
```

### Example Output
```
13
10
```
