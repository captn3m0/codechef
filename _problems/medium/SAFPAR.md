---
{"category_name":"medium","problem_code":"SAFPAR","problem_name":"Safe Partition","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"allllekssssa","problem_tester":null,"date_added":"22-07-2018","tags":{"0":"allllekssssa"},"time":{"view_start_date":1534152605,"submit_start_date":1534152605,"visible_start_date":1534152605,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/AUG18/hindi/SAFPAR.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/AUG18/mandarin/SAFPAR.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/AUG18/russian/SAFPAR.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/AUG18/vietnamese/SAFPAR.pdf" target="_blank">Vietnamese</a> as well.</h3>

It's summer — the time for holidays! Chef finally finished all university exams. Now he can rest and play with sequences.

Today, Chef took a sequence $A$ with $N$ elements. He wants to partition this sequence into an arbitrary number of non-empty contiguous subsequences (i.e. each of the subsequences has to consist of one or more consecutive elements of the original sequence). Each element of the original sequence must belong to exactly one subsequence.

This would be easy for Chef, so he is only interested in *safe partitions* of $A$. A safe partition is a partition into subsequences $S_1, S_2, \dots, S_K$ such that for each valid $i$, $\mathrm{min}(S_i) \le |S_i| \le \mathrm{max}(S_i)$ — that is, for each subsequence in this partition, its length is greater or equal to its smallest element and smaller or equal to its largest element.

Finding one safe partition would still be easy for Chef, so he wants to find the number of safe partitions of $A$. Since this number could be very big, please compute it modulo $1000000007$ ($10^9 + 7$).

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
Print a single line containing one integer — the number of safe partitions of $A$ modulo $10^9+7$.

### Constraints 
- $1 \le N \le 5 \cdot 10^5$
- $1 \le A_i \le N$ for each valid $i$

### Subtasks
**Subtask #1 (10 points):** $1 \le N \le 1,000$

**Subtask #2 (10 points):**
- $1 \le N \le 10^5$
- $1 \le A_i \le 500$ for each valid $i$

**Subtask #3 (15 points):** there are exactly two different values of elements of $A$

**Subtask #4 (25 points):** $A_{2i}=N$ for each valid $i$

**Subtask #5 (40 points):** original constraints

### Example Input
```
7
1 6 2 3 4 3 4
```

### Example Output
```
6
```

### Explanation
The six safe partitions are:
- $[1], [6, 2, 3, 4, 3, 4]$
- $[1, 6, 2], [3, 4, 3, 4]$
- $[1, 6, 2, 3], [4, 3, 4 ]$
- $[1], [6, 2], [3, 4, 3, 4]$
- $[1], [6, 2, 3], [4, 3, 4]$
- $[1, 6], [2, 3], [4, 3, 4]$
