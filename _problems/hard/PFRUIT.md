---
{"category_name":"hard","problem_code":"PFRUIT","problem_name":"Picking Fruit for Chefs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"ohweonfire","problem_tester":null,"date_added":"20-06-2018","tags":{"0":"hard","1":"july18","2":"ohweonfire"},"editorial_url":"https://discuss.codechef.com/problems/PFRUIT","time":{"view_start_date":1531733410,"submit_start_date":1531733410,"visible_start_date":1531733410,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/mandarin/PFRUIT.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/russian/PFRUIT.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/vietnamese/PFRUIT.pdf">Vietnamese</a> as well.</h3>

The chefs are making fruit salads today! There are $k$ chefs in total, each making a different type of salad. However, the chefs have run out of fruit, so they sent $m$ workers to pick fruit for them.

Some workers are fast, but some are really slow. Specifically, for each worker, we know two integers $a$ and $b$, which mean that this worker can pick between $a$ and $b$ units of fruit today (inclusive). There are $n$ groups of workers; all workers in each group have the same $a, b$.

The workers don't care about the number of units of fruit they pick, so they choose these numbers randomly. A worker with parameters $a$, $b$ will choose an integer between $a$ and $b$ uniformly randomly and pick this number of units of fruit today.

If the number of units of fruit picked by all workers together at the end of the day is $S$, the chefs define the *goodness* of the day as $F(S)=S^k$ for some reason. They would like you to find the expected value of $F$. It can be proven that this expected value can be written as a fraction $P/Q$, where $P \ge 0$ and $Q \gt 0$ are coprime integers. You should calculate $P\cdot Q^{-1}$ modulo $998244353$, where $Q^{-1}$ denotes the modular inverse of $Q$ modulo $998244353$. (It is guaranteed that this inverse exists and is unique.)

### Input
- The first line of the input contains two space-separated integers $k$ and $m$.
- The second line contains a single integer $n$.
- Each of the following $n$ lines contains three space-separated integers $A$, $B$ and $C$ denoting a group of workers; there are $C$ workers in this group, with $a=A$ and $b=B$ for each of them.

### Output
Print a single line containing one integer - the value of $P\cdot Q^{-1}$ modulo $998244353$.

### Constraints
- $1 \le n\cdot k \le 10^5$
- $1 \le A \le B \le 10^9$
- $1 \le C \lt 998244353$
- the sum of all $C$ is equal to $m$

### Subtasks
**Subtask #1 (20 points):** $n, k \le 50$

**Subtask #2 (30 points):** $n, k \le 200$

**Subtask #3 (50 points):** original constraints

### Example Input
```
2 2
2
1 1 1
1 2 1
```

### Example Output
```
499122183
```

### Explanation
There are two workers. The first worker always picks $1$ unit of fruit. The second worker can pick $1$ or $2$ units. If he picks $1$ unit, $S=2$ and $F=4$. If he picks $2$ units, $S=3$ and $F=9$. Each situation happens with probability $1/2$, so the expected value is $4/2+9/2=13/2$. This means $P=13$ and $Q=2$, so $Q^{-1}=499122177$.
