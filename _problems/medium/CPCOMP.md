---
{"category_name":"medium","problem_code":"CPCOMP","problem_name":"Coprime Components","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":null,"date_added":"16-09-2018","tags":{"0":"bciobanu","1":"dsu","2":"graphs","3":"medium","4":"number","5":"oct18"},"editorial_url":"https://discuss.codechef.com/problems/CPCOMP","time":{"view_start_date":1540027803,"submit_start_date":1540027803,"visible_start_date":1540027803,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/OCT18/hindi/CPCOMP.pdf) ,[Bengali](http://www.codechef.com/download/translated/OCT18/bengali/CPCOMP.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/OCT18/mandarin/CPCOMP.pdf) , [Russian](http://www.codechef.com/download/translated/OCT18/russian/CPCOMP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT18/vietnamese/CPCOMP.pdf) as well.


Consider an undirected graph $G$ with $N$ vertices, numbered $1$ through $N$. You are given an integer sequence $A_1, A_2, \dots, A_N$ describing the edges of this graph — for each pair of vertices $u$ and $v$, there is an edge between those vertices if and only if $A_u$ and $A_v$ are coprime. Find the number of connected components of $G$. 

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
Print a single line containing one integer — the number of connected components.

### Constraints 
- $1 \le N \le 2 \cdot 10^5$
- $1 \le A_i \le 2 \cdot 10^5$ for each valid $i$

### Subtasks
**Subtask #1 (5 points):** $1 \le N \le 500$

**Subtask #2 (25 points):** $1 \le N \le 5,000$

**Subtask #3 (70 points):** original constraints

### Example Input
```
5
6 2 3 24 10
```

### Example Output
```
3
```

### Explanation
There are two edges $(2, 3)$ and $(3, 5)$. There are $3$ connected components $(1)$, $(2, 3, 5)$ and $(4)$.
