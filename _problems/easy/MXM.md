---
{"category_name":"easy","problem_code":"MXM","problem_name":"Maximize It","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nots0fast","problem_tester":null,"date_added":"21-11-2018","tags":{"0":"binary","1":"easy","2":"ltime66","3":"nots0fast"},"editorial_url":"https://discuss.codechef.com/problems/MXM","time":{"view_start_date":1543078801,"submit_start_date":1543078801,"visible_start_date":1543078801,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME66/mandarin/MXM.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME66/bengali/MXM.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME66/hindi/MXM.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME66/russian/MXM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME66/vietnamese/MXM.pdf) as well.

You are given a sequence of $N$ powers of an integer $k$; let's denote the $i$-th of these powers by $k^{A_i}$. You should partition this sequence into two non-empty **contiguous** subsequences; each element of the original sequence should appear in exactly one of these subsequences. In addition, the product of (the sum of elements of the left subsequence) and (the sum of elements of the right subsequence) should be maximum possible.

Find the smallest position at which you should split this sequence in such a way that this product is maximized.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $k$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing one integer — the size of the left subsequence. If there is more than one possible answer, print the smallest possible one.

### Constraints 
- $1 \le T \le 10$
- $2 \le N \le 10^5$
- $2 \le k \le 10^9$
- $0 \le A_i \le 10^5$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):**
- $2 \le N \le 1,000$
- $0 \le A_i \le 1,000$ for each valid $i$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
5 2
1 1 3 3 5
```

### Example Output
```
4
```

### Explanation
**Example case 1:** The actual sequence of powers is $[2^1, 2^1, 2^3, 2^3, 2^5] = [2, 2, 8, 8, 32]$. The maximum product is $20 \cdot 32 = 640$. In the optimal solution, the sequence is partitioned into $[2, 2, 8, 8]$ and $[32]$.
