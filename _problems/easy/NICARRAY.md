---
{"category_name":"easy","problem_code":"NICARRAY","problem_name":"Niceness of the Arrays","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"26-10-2018","tags":{"0":"admin2","1":"backtracking","2":"combinatorics","3":"easy","4":"ltime65","5":"modular","6":"permutation","7":"taran_1407"},"time":{"view_start_date":1540659601,"submit_start_date":1540659601,"visible_start_date":1540659601,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME65/mandarin/NICARRAY.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME65/bengali/NICARRAY.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME65/hindi/NICARRAY.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME65/russian/NICARRAY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME65/vietnamese/NICARRAY.pdf) as well.

Let's define the *niceness* of a sequence of positive integers $X_1, X_2, \dots, X_N$ as the sum of greatest common divisors of all pairs of its elements, i.e.
$$\sum_{i=1}^N \sum_{j=i+1}^N \mathrm{gcd}(X_i, X_j)\;.$$

For example, the niceness of the sequence $[1, 2, 2]$ is $gcd(1, 2) + gcd(1, 2) + gcd(2, 2) = 4$.

You are given a sequence $A_1, A_2, \dots, A_N$; each of its elements is either a positive integer or missing.

Consider all possible ways to replace each missing element of $A$ by a positive integer (not necessarily the same for each element) such that the sum of all elements is equal to $S$. Your task is to find the total niceness of all resulting sequences, i.e. compute the niceness of each possible resulting sequence and sum up all these values. Since the answer may be very large, compute it modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $S$. 
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$. Missing elements in this sequence are denoted by $-1$.

### Output
For each test case, print a single line containing one integer — the total niceness modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 20$
- $1 \le N, S \le 50$
- $1 \le A_i \le 50$ or $A_i = -1$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):**
- $1 \le N, S \le 18$
- $1 \le A_i \le 18$ or $A_i = -1$ for each valid $i$

**Subtask #2 (70 points):** original constraints

### Example Input
```
3
3 3
1 1 -1
4 8
1 -1 -1 3
3 10
-1 -1 -1
```

### Example Output
```
3
23
150
```

### Explanation
**Example case 1**: There is only one possible way to fill in the missing element; the resulting sequence is $[1, 1, 1]$. Its niceness is $3$.

**Example case 2**: There is only three possible ways to fill in the missing elements; the resulting sequences are $[1, 1, 3, 3]$, $[1, 3, 1, 3]$, and $[1, 2, 2, 3]$. The sum of their niceness is $8 + 8 + 7 = 23$.
