---
{"category_name":"easy","problem_code":"KCOMPRES","problem_name":"Coordinate Compression ","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"likecs","problem_tester":null,"date_added":"20-09-2017","tags":{"0":"aug18","1":"binary","2":"likecs","3":"likecs","4":"medium","5":"segment"},"editorial_url":"https://discuss.codechef.com/problems/KCOMPRES","time":{"view_start_date":1534152605,"submit_start_date":1534152605,"visible_start_date":1534152605,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/AUG18/hindi/KCOMPRES.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/AUG18/mandarin/KCOMPRES.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/AUG18/russian/KCOMPRES.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/AUG18/vietnamese/KCOMPRES.pdf" target="_blank">Vietnamese</a> as well.</h3>

You are given a sequence of integers $A_1, A_2, \dots, A_N$. For an integer $K$, let's define a *$K$-compressed* sequence $B_1, B_2, \dots, B_N$ as follows:
- for each valid $i$, $B_i$ is a positive integer
- for each valid $i$, if there are exactly $X$ numbers smaller than or equal to $A_i$ in the subsequence $A_{\mathop{max}(1, i-K)}, \dots, A_{\mathop{min}(N, i+K)}$, then there must be exactly $X$ numbers smaller than or equal to $B_i$ in the subsequence $B_{\mathop{max}(1, i-K)}, \dots, B_{\mathop{min}(N, i+K)}$
- $B_1 + B_2 + \dots + B_N$ is minimum possible

You may notice that for $K = N-1$ or $K = N$, this becomes the well-known technique of coordinate compression.

For example, consider the sequence $A = [4, 2, 8, 1, 4, 3, 8, 1]$. If we choose $K = 1$, then the $K$-compressed sequence will be $B = [2, 1, 2, 1, 2, 1, 2, 1]$. The sum of its elements is $12$, which is the minimum.

For a given integer $S$, find the number of values of $K$ ($0 \le K \le N$) such that the sum of elements of the $K$-compressed sequence does not exceed $S$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $S$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing one integer — the number of values of $K$ such that the sum of the compressed sequence is $\le S$.

### Constraints
- $1 \le T \le 3$
- $1 \le N \le 10^5$
- $1 \le S \le 10^9$
- $0 \le A_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (10 points):** $1 \le N \le 100$

**Subtask #2 (30 points):** $1 \le N \le 1,000$

**Subtask #3 (60 points):** original constraints


### Example Input
```
2
4 8
2 7 1 12
8 20
4 2 8 1 4 3 8 1
```

### Example Output
```
2
4
```

### Explanation
**Example case 1:** The possible values of $K$ are $0$ and $1$.
