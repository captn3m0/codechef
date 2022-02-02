---
{"category_name":"school","problem_code":"MAXREM","problem_name":"Maximum Remaining","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"raj1238","problem_tester":null,"date_added":"23-03-2019","tags":{"0":"april19","1":"cakewalk","2":"raj1238"},"editorial_url":"https://discuss.codechef.com/problems/MAXREM","time":{"view_start_date":1555320602,"submit_start_date":1555320602,"visible_start_date":1555320602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/APRIL19/hindi/MAXREM.pdf), [Bengali](http://www.codechef.com/download/translated/APRIL19/bengali/MAXREM.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL19/mandarin/MAXREM.pdf), [Russian](http://www.codechef.com/download/translated/APRIL19/russian/MAXREM.pdf), and [Vietnamese](http://www.codechef.com/download/translated/APRIL19/vietnamese/MAXREM.pdf) as well.

Chef and Dhyey have become friends recently. Chef wants to test Dhyey's intelligence by giving him a puzzle to solve.

The puzzle contains an integer sequence $A_1, A_2, \ldots, A_N$. The answer to the puzzle is the maximum of $A_i \% A_j$, taken over all valid $i$, $j$.

Help Dhyey solve this puzzle.

### Input
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the answer to the puzzle.

### Constraints 
- $2 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** $2 \le N \le 1,000$

**Subtask #2 (70 points):** $2 \le N \le 10^5$

### Example Input 1
```
5  
1 2 3 4 5  
```

### Example Output 1
```
4  
```

### Example Input 2
```
6  
5 5 5 2 3 8
```

### Example Output 2
```
5
```
