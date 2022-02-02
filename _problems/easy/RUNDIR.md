---
{"category_name":"easy","problem_code":"RUNDIR","problem_name":"Run Direction","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"15-04-2018","tags":{"0":"alei","1":"binary","2":"cook93","3":"easy","4":"greedy"},"editorial_url":"https://discuss.codechef.com/problems/RUNDIR","time":{"view_start_date":1524421800,"submit_start_date":1524421800,"visible_start_date":1524421800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problem statement in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK93/mandarin/RUNDIR.pdf">Mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK93/vietnamese/RUNDIR.pdf">Vietnamese</a>.</h3>

Suzumo is the coach of the ChefLand OI team. Physical condition is very important in any olympiad, so he wants to make the children run a bit as a warmup.

The team consists of $N$ children numbered $1$ through $N$ standing at some positions on the $x$-axis. For each valid $i$, the initial $x$-coordinate of the $i$-th kid is $x_i$, the running velocity of the $i$-th kid is constant and equal to $v_i$.

Suzumo wants to assign a running direction (left or right, i.e. in the direction of decreasing or increasing $x$-coordinate) to each kid; the children start running at time $0$ in the assigned directions. Afterwards, Suzumo will measure the smallest time $t$ at which some kid passes another one. Help Suzumo compute the maximum time $t$ if he can assign the directions arbitrarily!

**Note:** Child $i$ *passes* child $j$ at time $t_{ij}$ if their coordinates satisfy $x_i < x_j$ at any time $t < t_{ij}$ and $x_i > x_j$ at any time $t > t_{ij}$, or if they satisfy $x_i > x_j$ at any time $t < t_{ij}$ and $x_i < x_j$ at any time $t > t_{ij}$.

### Input

- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $x_i$ and $v_i$.

### Output

For each test case, print a single line containing one real number — the maximum possible time $t$, or $-1$ if it is possible to assign directions in such a way that no kid ever passes another. Your answer will be considered correct if it has an absolute or relative error less than or equal to $10^{-6}$.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 50$
- $1 \le x_i, v_i \le 10^9$ for each valid $i$
- no two children have the same initial positions

### Example Input
```
1
3
10 10
20 30
30 10
```

### Example Output
```
0.5
```
	
### Explanation

**Example case 1:** One optimal assignment of directions is left, right, right.
