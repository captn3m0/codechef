---
{"category_name":"medium","problem_code":"WRKWAYS","problem_name":"Ways to Work","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sanroylozan","problem_tester":"mgch","date_added":"11-05-2018","tags":{"0":"combinatorics","1":"factorization","2":"june18","3":"likecs","4":"medium","5":"observsations","6":"sanroylozan","7":"sanroylozan"},"time":{"view_start_date":1528709405,"submit_start_date":1528709405,"visible_start_date":1528709405,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/JUNE18/mandarin/WRKWAYS.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/JUNE18/russian/WRKWAYS.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/JUNE18/vietnamese/WRKWAYS.pdf" target="_blank">Vietnamese</a> as well.</h3>

Chef is working at his dream workplace with $N-1$ of his friends! Like any dream workplace, this one also has dream work conditions. To ensure absolute happiness of the employees, there are the following rules at the company:
- Each worker works on exactly one day! You heard it right: no more, no less.
- On each day, at most one worker may work. This provides the perfect work conditions: no crowd, just the work and you.
- Every worker has a *deadline*; let's denote the deadline of the $i$-th worker by $d_i$. (This means that the day on which the $i$-th worker works must not be later than day $d_i$; the days are numbered starting from $1$.) You thought there weren't any limitations, eh?

However, sooner or later, all dream workplaces have to fall. The CLO (Chefland Labour Office) demands that there should be exactly $C$ ways to schedule the work such that the above conditions are fulfilled. Two schedulings are different if there is an employee that works at different days in these schedulings.

Chef is asking for your help, since he can't spare any workdays at this company. You should find a sequence of employees' deadlines $d_1 \le d_2 \le \dots \le d_N$ such that there are exactly $C$ ways to schedule the work. If there are multiple sequences satisfying this condition, do another little favour for Chef: minimise $d_N$ (his deadline).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $C$. 

### Output
For each test case, print a single line containing $N$ space-separated integers $d_1, d_2, \dots, d_N$ that describe your chosen sequence. If there are multiple sequences satisfying all conditions, you may output any one.

### Constraints
- $1 \le T \le 100$
- the sum of $N$ over all test cases does not exceed $10^7$
- $1 \le C \le 10^9$

### Subtasks
**Subtask #1 (10 points):**
- $1 \le N \le 10$
- $1 \le C \le 100$

**Subtask #2 (20 points):** $1 \le N \le 100$

**Subtask #3 (70 points):** $1 \le N \le 10^6$

### Example Input
```
1
2 12
```

### Example Output
```
4 4
```

### Explanation
**Example case 1:** Each worker can work on any day from day $1$ to day $4$. The 12 possible schedulings (pairs of days on which they work) are $[1, 2]$, $[1, 3]$, $[1, 4]$, $[2, 3]$, $[2, 4]$, $[3, 4]$, $[2, 1]$, $[3, 1]$, $[4, 1]$, $[3, 2]$, $[4, 2]$, $[4, 3]$.
