---
{"category_name":"easy","problem_code":"GCDSUM","problem_name":"GCD Sum","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"fekete","problem_tester":null,"date_added":"25-07-2018","tags":{"0":"counting","1":"easy","2":"fekete","3":"fekete","4":"gcd","5":"inclusn","6":"likecs","7":"ltime62"},"editorial_url":"https://discuss.codechef.com/problems/GCDSUM","time":{"view_start_date":1532797200,"submit_start_date":1532797200,"visible_start_date":1532797200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/LTIME62/hindi/GCDSUM.pdf" target="_blank">Hindi,</a>
<a href="http://www.codechef.com/download/translated/LTIME62/mandarin/GCDSUM.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/LTIME62/russian/GCDSUM.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/LTIME62/vietnamese/GCDSUM.pdf" target="_blank">Vietnamese</a> as well.</h3>


You are given $n$ sequences $a_1, a_2, \dots, a_n$. Each of these sequences contains $m$ integers; let's denote the $j$-th element of the $i$-th sequence by $a_{i,j}$. Chef must perform the following operation exactly once:
- choose an integer $k$ ($2 \le k \le n$)
- choose $k$ **increasing** valid indices of sequences $1 \leq i_1 < i_2 < \dots < i_k \leq n$
- choose $k$ arbitrary valid indices of elements $1 \leq j_1, j_2, \dots, j_k \leq m$
- calculate $G = gcd(a_{i_1, j_1}, a_{i_2, j_2}, \dots, a_{i_k, j_k})$

Chef considered all possible ways to perform this operation, computed the number $G$ for each of them and calculated the sum of all these numbers modulo $10^9+7$. Can you find this sum?

### Input
- The first line of the input contains two space-separated integers $n$ and $m$.
- $n$ lines follow. For each $i$ ($1 \le i \le n$), the $i$-th of these lines contains $m$ space-separated integers $a_{i,1}, a_{i,2}, \dots, a_{i,m}$ denoting the $i$-th sequence.

### Output
Print a single line containing one integer — the sum of all possible results modulo $10^9 + 7$.

### Constraints 
- $2 \le n \le 20$
- $1 \le m \le 10^5$
- $1 \le a_{i, j} \le 10^5$ for each valid $i, j$

### Subtasks
**Subtask #1 (5 points):**
- $2 \le n \le 10$
- $1 \le m \le 5$

**Subtask #2 (15 points):**
- $n = 2$
- each sequence is a permutation of the numbers $\{1, 2, \dots, m\}$


**Subtask #3 (20 points):**
- $n = 3$
- each sequence is a permutation of the numbers $\{1, 2, \dots, m\}$


**Subtask #4 (60 points):** original constraints

### Example Input
```
2 3
5 15 8
3 12 10
```

### Example Output
```
25
```

### Explanation
The answer is $gcd(5, 3) + gcd(5, 12) + gcd(5, 10) + gcd(15, 3) + gcd(15, 12) + gcd(15, 10) + gcd(8, 3) + gcd(8, 12) + gcd(8, 10) = 1 + 1 + 5 + 3 + 3 + 5 + 1 + 4 + 2 = 25$.
