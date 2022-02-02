---
{"category_name":"easy","problem_code":"XORIER","problem_name":"War of XORs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"priyanshi_","problem_tester":null,"date_added":"23-08-2018","tags":{"0":"easy","1":"observations","2":"priyanshi_","3":"sept18","4":"xor"},"editorial_url":"https://discuss.codechef.com/problems/XORIER","time":{"view_start_date":1537176602,"submit_start_date":1537176602,"visible_start_date":1537176602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>
###Read problems statements [Hindi](http://www.codechef.com/download/translated/SEPT18/hindi/CHEFZERO.pdf) ,[Bengali](http://www.codechef.com/download/translated/SEPT18/bengali/XORIER.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/SEPT18/mandarin/XORIER.pdf) , [Russian](http://www.codechef.com/download/translated/SEPT18/russian/XORIER.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT18/vietnamese/XORIER.pdf) as well.


Chef is stuck at the following problem. Help him solve it!

Chef has a sequence of integers $A_1, A_2, \dots, A_N$. He should find the number of pairs $(i, j)$ such that $1 \le i \lt j \le N$ and the bitwise XOR of $A_i$ and $A_j$ can be written as a sum of two (not necessarily different) prime numbers with the same parity (both odd or both even).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$. 
- The second line contains $N$ space-seprated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing one integer — the number of valid pairs.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^6$ for each valid $i$

### Subtasks
**Subtask #1 (10 points):** $1 \le N \le 10^3$

**Subtask #2 (90 points):** original constraints

### Example Input
```
1
5
2 4 8 1 3
```

### Example Output
```
3
```

### Explanation 
**Example case 1:** The three valid pairs are $(1, 2)$, $(1, 3)$ and $(2, 3)$. For example, $A_1 \oplus A_2 = 2 \oplus 4 = 6 = 3+3$.
