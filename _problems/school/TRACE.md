---
{"category_name":"school","problem_code":"TRACE","problem_name":"Trace of Matrix","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"23-05-2018","tags":{"0":2,"1":"cakewalk","2":"kingofnumbers","3":"ltime60","4":"math"},"editorial_url":"https://discuss.codechef.com/problems/TRACE","time":{"view_start_date":1527354000,"submit_start_date":1527354000,"visible_start_date":1527354000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME60/mandarin/TRACE.pdf">Mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME60/vietnamese/TRACE.pdf">Vietnamese</a> as well.</h3>

Chef is learning linear algebra. Recently, he learnt that for a square matrix $M$, $\mathop{\rm trace}(M)$ is defined as the sum of all elements on the main diagonal of $M$ (an element lies on the main diagonal if its row index and column index are equal).

Now, Chef wants to solve some excercises related to this new quantity, so he wrote down a square matrix $A$ with size $N\times N$. A square *submatrix* of $A$ with size $l\times l$ is a contiguous block of $l\times l$ elements of $A$. Formally, if $B$ is a submatrix of $A$ with size $l\times l$, then there must be integers $r$ and $c$ ($1\le r, c \le N+1-l$) such that $B_{i,j} = A_{r+i-1, c+j-1}$ for each $1 \le i, j \le l$.

Help Chef find the maximum trace of a square submatrix of $A$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $N$ space-separated integers $A_{i,1}, A_{i,2}, \dots, A_{i, N}$ denoting the $i$-th row of the matrix $A$.

### Output
For each test case, print a single line containing one integer — the maximum possible trace.

### Constraints 
- $1 \le T \le 100$
- $2 \le N \le 100$
- $1 \le A_{i,j} \le 100$ for each valid $i, j$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
1
3
1 2 5
6 3 4
2 7 1
```

### Example Output
```
13
```

### Explanation

**Example case 1:** The submatrix with the largest trace is 
```
6 3
2 7
```
which has trace equal to $6 + 7 = 13$. (This submatrix is obtained for $r=2, c=1, l=2$.)
