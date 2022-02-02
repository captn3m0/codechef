---
{"category_name":"easy","problem_code":"BPS","problem_name":"Beats and Pieces","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nots0fast","problem_tester":null,"date_added":"24-11-2018","tags":{"0":"easy","1":"ltime66","2":"nots0fast"},"editorial_url":"https://discuss.codechef.com/problems/BPS","time":{"view_start_date":1543078801,"submit_start_date":1543078801,"visible_start_date":1543078801,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME66/mandarin/BPS.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME66/bengali/BPS.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME66/hindi/BPS.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME66/russian/BPS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME66/vietnamese/BPS.pdf) as well.

Chef has an array of $N$ integers $[A_1, A_2, \dots, A_N]$. He wants to perform $M$ operations; for each $i$ ($1 \le i \le M$), the $i$-th operation consists of reversing the subarray $[A_{l_i}, \dots, A_{r_i}]$.

Each operation should be applied exactly once. However, Chef does not remember the order in which they should be applied, so he wants to choose a uniformly random permutation of the $M$ operations and apply them in that order.

Let's denote by $B$ the resulting array if the operations are unpermuted, i.e. applied in the order $1$ through $M$. Find the probability that the resulting array (after Chef applies all operations in a random order) is equal to $B$. Specifically, this probability can be expressed as a fraction $P/Q$, where $P$ and $Q$ are coprime positive integers; compute $P$ and $Q$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $l_i$ and $r_i$.

### Output
Print a single line containing two integers $P$ and $Q$, separated by a slash (the character '/').

### Constraints 
- $1 \le T \le 10$
- $1 \le N \le 10$
- $1 \le M \le 9$
- $1 \le A_i \le 10^9$ for each valid $i$
- $1 \le l_i \le r_i \le N$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
1
3 3
1 2 1
1 3
1 1
3 3
```

### Example Output
```
1/1
```	

### Explanation
**Example case 1:** Each order of the operations results in the same array $B = [1, 2, 1]$. 
