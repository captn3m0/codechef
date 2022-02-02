---
{"category_name":"hard","problem_code":"XORSORT2","problem_name":"Unusual Sorting","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"isaf27","problem_tester":null,"date_added":"23-06-2018","tags":{"0":"binary","1":"bitwise","2":"isaf27","3":"isaf27","4":"likecs","5":"ltime61","6":"medium","7":"meet"},"editorial_url":"https://discuss.codechef.com/problems/XORSORT2","time":{"view_start_date":1530378005,"submit_start_date":1530378005,"visible_start_date":1530378005,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME61/mandarin/XORSORT2.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME61/russian/XORSORT2.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME61/vietnamese/XORSORT2.pdf">Vietnamese</a> as well.</h3>


You are given a sequence of distinct non-negative integers $A_1, A_2, \dots, A_N$.

For every non-negative integer $x \lt 2^K$, let's define a function $f(x)$ as the number of inversions in the sequence $A_1 \oplus x, A_2 \oplus x, \dots, A_N \oplus x$. (An inversion in a sequence $X_1, X_2, \dots, X_N$ is a pair of indices $(i, j)$ such that $i \lt j$ and $X_i \gt X_j$.)

Consider the sorted sequence of pairs $(f(x), x)$ for all integers $x \in [0, 2^K - 1]$; a pair $(f(x_1), x_1)$ is earlier than $(f(x_2), x_2)$ in this sequence if $f(x_1) \lt f(x_2)$, or if $f(x_1) = f(x_2)$ and $x_1 \lt x_2$. You should find the second element (i.e. the number $x$) of the $P$-th pair in this sequence. The sequence is indexed from 1.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $K$ and $P$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing one integer — the number $x$ generating the $P$-th pair in the sorted sequence.

### Constraints
- $1 \le T \le 20$
- $1 \le N \le 10^6$
- $1 \le K \le 30$
- $1 \le P \le 2^K$
- $0 \le A_i \lt 2^K$ for each valid $i$
- the elements of $A$ are pairwise distinct
- the sum of $N$ for all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (10 points):**
- $1 \le T \le 10$
- $1 \le K \le 10$
- $1 \le N \le 100$

**Subtask #2 (20 points):**
- $1 \le T \le 10$
- $1 \le K \le 18$
- the sum of $N$ for all test cases does not exceed $10^5$

**Subtask #3 (20 points):**
- $1 \le T \le 5$
- $1 \le K \le 30$
- the sum of $N$ for all test cases does not exceed $10^5$

**Subtask #4 (50 points):** original constraints

### Example Input
```
2
4 3 5
2 0 3 7
2 2 1
2 0
```

### Example Output
```
4
2
```

### Explanation
**Example case 1:** The values of $f(x)$ for all $0 \le x \le 7$ are as follows:
- $x = 0$: $f(0) =$ number of inversions in $[2, 0, 3, 7] = 1$
- $x = 1$: $f(1) =$ number of inversions in $[3, 1, 2, 6] = 2$
- $x = 2$: $f(2) =$ number of inversions in $[0, 2, 1, 5] = 1$
- $x = 3$: $f(3) =$ number of inversions in $[1, 3, 0, 4] = 2$
- $x = 4$: $f(4) =$ number of inversions in $[6, 4, 7, 3] = 4$
- $x = 5$: $f(5) =$ number of inversions in $[7, 5, 6, 2] = 5$
- $x = 6$: $f(6) =$ number of inversions in $[4, 6, 5, 1] = 4$
- $x = 7$: $f(7) =$ number of inversions in $[5, 7, 4, 0] = 5$

The sorted sequence of pairs $(f(x), x)$ is $[(1, 0), (1, 2), (2, 1), (2, 3), (4, 4), (4, 6), (5, 5), (5, 7)]$. We should find the $P=5$-th pair, which is $(4, 4)$, so the answer is $4$.
