---
{"category_name":"medium","problem_code":"XORTABLE","problem_name":"Xor Table","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"24-05-2018","tags":{"0":"backtracking","1":"bitwise","2":"constructive","3":"graph","4":"kingofnumbers","5":"medium","6":"snckel19","7":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/XORTABLE","time":{"view_start_date":1544295600,"submit_start_date":1544295600,"visible_start_date":1544295600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S19ELTST/hindi/XORTABLE.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/S19ELTST/mandarin/XORTABLE.pdf), [Russian](http://www.codechef.com/download/translated/S19ELTST/russian/XORTABLE.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19ELTST/vietnamese/XORTABLE.pdf) and [Bengali](http://www.codechef.com/download/translated/S19ELTST/bengali/XORTABLE.pdf) as well.

There are two integer sequences $A_1, A_2, \dots, A_N$ and $B_1, B_2, \dots, B_M$. You do not know the exact values of their elements, but you know that $L_i \le A_i \le R_i$ for each valid $i$ and $P_i \le B_i \le Q_i$ for each valid $i$.

You also have a matrix $C$ with $N$ rows and $M$ columns. Some elements of $C$ are missing. For each element $C_{i, j}$ ($1 \le i \le N$, $1 \le j \le M$) that is not missing, you know that $C_{i, j} = A_i \oplus B_j$ ($\oplus$ denotes bitwise XOR).

Your task is to find two sequences $A$ and $B$ satisfying all given conditions. If multiple solutions exist, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$. 
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains two space-separated integers $L_i$ and $R_i$.
- $M$ lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains two space-separated integers $P_i$ and $Q_i$.
- $N$ more lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $M$ space-separated integers $C_{i, 1}, C_{i, 2}, \dots, C_{i, M}$. Missing elements are denoted by $-1$.

### Output
For each test case:
- If no solution exists, print a single line containing the string `"NO"`.
- Otherwise, print three lines. The first line should contain the string `"YES"`. The second line should contain $N$ space-separated integers $A_1, A_2, \dots, A_N$. The third line should contain $M$ space-separated integers $B_1, B_2, \dots, B_M$.

### Constraints 
- $1 \le T \le 100$
- $1 \le N, M \le 10^3$
- the sum of $N \cdot M$ over all test cases does not exceed $10^6$
- $0 \le L_i \le R_i \lt 2^{30}$ for each valid $i$
- $0 \le P_i \le Q_i \lt 2^{30}$ for each valid $i$
- $-1 \le C_{i, j} \lt 2^{30}$ for each valid $i, j$

### Example Input
```
2
3 3
2 4
3 4
4 6
1 3
4 7
6 8
2 7 4
5 0 3
4 1 2
2 2
4 6
5 7
3 9
2 4
3 6
6 5
```

### Example Output
```
YES
3 4 5
1 4 7
NO
```