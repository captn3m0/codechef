---
{"category_name":"hard","problem_code":"TRDST","problem_name":"Yet Another Tree Problem","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"daniel_1999","problem_tester":null,"date_added":"27-01-2019","tags":{"0":"centroid","1":"daniel_1999","2":"euler","3":"feb19","4":"hard","5":"lca","6":"partial"},"editorial_url":"https://discuss.codechef.com/problems/TRDST","time":{"view_start_date":1550050202,"submit_start_date":1550050202,"visible_start_date":1550050202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/FEB19TST/hindi/TRDST.pdf), [Bengali](http://www.codechef.com/download/translated/FEB19TST/bengali/TRDST.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/FEB19TST/mandarin/TRDST.pdf), [Russian](http://www.codechef.com/download/translated/FEB19TST/russian/TRDST.pdf), and [Vietnamese](http://www.codechef.com/download/translated/FEB19TST/vietnamese/TRDST.pdf) as well.

You are given a connected graph with $N$ vertices (numbered $1$ through $N$) and $N - 1$ bidirectional edges. Also, you are given a sequence $K_1, K_2, \ldots, K_N$.

Let's denote the distance between vertices $u$ and $v$ by $d(u, v)$. Next, for each valid $i$, let's define $D_i$ as the maximum integer such that there are at least $K_i$ vertices $v$ with $d(i, v) \gt D_i$. (It can be proven that such integers exist for the given constraints.)

Your task is to find the values of $D_1, D_2, \ldots, D_N$.

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $K_1, K_2, \ldots, K_N$.
- Each of the next $N - 1$ lines contains two space-separated integeres $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge.

### Output
Print a single line containing $N$ space-separated integers $D_1, D_2, \ldots, D_N$.

### Constraints 
- $1 \le N \le 10^5$
- $1 \le K_i \le N - 1$ for each valid $i$
- $1 \le u, v \le N$

### Subtasks
**Subtask #1 (20 points):** $1 \le N \le 10^3$

**Subtask #2 (80 points):** original constraints

### Example Input
```
8
1 2 3 6 6 4 5 2
1 2
2 3
2 5
2 6
4 5
5 7
5 8
```

### Example Output
```
2 1 2 1 0 1 1 2 
```
