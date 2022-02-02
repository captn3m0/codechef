---
{"category_name":"school","problem_code":"XORAGN","problem_name":"Xor Again","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"deadcode4","problem_tester":null,"date_added":"3-04-2018","tags":{"0":"deadcode4","1":"easy","2":"may18","3":"xor"},"editorial_url":"https://discuss.codechef.com/problems/XORAGN","time":{"view_start_date":1526290200,"submit_start_date":1526290200,"visible_start_date":1526290200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/MAY18/mandarin/XORAGN.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/MAY18/russian/XORAGN.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/MAY18/vietnamese/XORAGN.pdf" target="_blank">Vietnamese</a> as well.</h3>

Chef recently discovered a function $XOR()$, which computes the XOR of all elements of a sequence:
$$XOR(a_{1..n}) = a_1 \oplus a_2 \oplus \dots \oplus a_n\,.$$

Chef has a sequence $A$ with size $N$. He generated a new sequence $B$ with size $N^2$ using the following formula:
$$B_{iN+j+1} = (A_{i+1} + A_{j+1}) \quad \forall\; 0 \le i, j \lt N\,.$$

Compute the value of $XOR(B)$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \dots, A_N$.

### Output
For each test case, print a single line containing one integer — the answer to the problem.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 10^5$
- $2^0 \le A_i \lt 2^{30}$ for each valid $i$

### Subtasks

**Subtask #1 (30 points):**
- $1 \le N \le 500$ 
- $2^0 \le A_i \lt 2^{10}$ for each valid $i$
                  
**Subtask #2 (70 points):** $1 \le N \le 10^5$

### Example Input
```
1
2
1 2
```

### Example Output
```
6
```

### Explanation
**Example case 1:** The sequence $B$ is $\{A_1 + A_1, A_1 + A_2, A_2 + A_1, A_2 + A_2\} = \{2, 3, 3, 4\}$. The XOR of its elements is $B_1 \oplus B_2 \oplus B_3 \oplus B_4 = 6$.
