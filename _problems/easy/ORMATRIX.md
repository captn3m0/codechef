---
{"category_name":"easy","problem_code":"ORMATRIX","problem_name":"OR Matrix","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"20-07-2018","tags":{"0":"array","1":"cook96","2":"implementation","3":"kingofnumbers","4":"simple"},"editorial_url":"https://discuss.codechef.com/problems/ORMATRIX","time":{"view_start_date":1532284205,"submit_start_date":1532284205,"visible_start_date":1532284205,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK96/mandarin/ORMATRIX.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK96/russian/ORMATRIX.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK96/vietnamese/ORMATRIX.pdf" target="_blank">Vietnamese</a> as well.</h3>

You are given a matrix of integers $A$ with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). Each element of this matrix is either $0$ or $1$.

A *move* consists of the following steps:
- Choose two different rows $r_1$ and $r_2$ or two different columns $c_1$ and $c_2$.
- Apply the bitwise OR operation with the second row/column on the first row/column. Formally, if you chose two rows, this means you should change $A_{r_1, k}$ to $A_{r_1, k} \lor A_{r_2, k}$ for each $1 \le k \le M$; if you chose two columns, then you should change $A_{k, c_1}$ to $A_{k, c_1} \lor A_{k, c_2}$ for each $1 \le k \le N$.

For each element of the matrix, compute the minimum number of moves required to make it equal to $1$ or determine that it is impossible. Note that these answers are independent, i.e. we are starting with the initial matrix for each of them.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $M$ integers $A_{i, 1}, A_{i, 2}, \dots, A_{i, M}$ NOT separated by spaces.

### Output
For each test case, print $N$ lines. For each valid $i$, the $i$-th of these lines should contain $M$ space-separated integers; for each valid $j$, the $j$-th of these integers should be the minimum number of moves required to make $A_{i, j}$ equal to $1$, or $-1$ if it is impossible.

###Constraints 
- $1 \le T \le 100$
- $1 \le N, M \le 1,000$
- $A_{i, j} \in \{0, 1\}$ for each valid $i, j$
- the sum of $N \cdot M$ for all test cases does not exceed $1,000,000$

### Example Input
```
1
3 3
010
000
001
```

### Example Output
```
1 0 1
2 1 1
1 1 0
```
