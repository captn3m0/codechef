---
{"category_name":"medium","problem_code":"ADIMAT","problem_name":"Adi and the Matrix","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"andrei1998","problem_tester":null,"date_added":"3-12-2018","tags":{"0":"andrei1998"},"time":{"view_start_date":1544295600,"submit_start_date":1544295600,"visible_start_date":1544295600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/S19ELTST/hindi/ADIMAT.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/S19ELTST/mandarin/ADIMAT.pdf), [Russian](http://www.codechef.com/download/translated/S19ELTST/russian/ADIMAT.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19ELTST/vietnamese/ADIMAT.pdf) and [Bengali](http://www.codechef.com/download/translated/S19ELTST/bengali/ADIMAT.pdf) as well.

Adi likes binary matrices, i.e. matrices containing only elements $0$ and $1$. Adi is wondering how many binary matrices with $N$ rows and $M$ columns there are. Everyone knows the answer to this question - it is just $2^{N \cdot M}$. What most people do not know, however, is that Adi considers two matrices identical if and only if one of them can be turned into the other by first suitably permuting the $N$ rows of this matrix and then suitably permuting the $M$ columns of the resulting matrix.

The problem is much harder now and Adi does not know how to solve it anymore! Help Adi by finding the number of binary $N \times M$ matrices which are distinct according to his definition. Since the answer may be quite large, compute it modulo $10^9 + 7$.

### Input
The first and only line of the input contains two space-separated integers $N$ and $M$.
 
### Output
Print a single line containing one integer — the number of matrices modulo $10^9 + 7$.

### Constraints
- $1 \le N, M, N \cdot M \le 550$

### Example Input
```
1 5
```

### Example Output
```
6
```

### Explanation
According to Adi's definition, there are $6$ different binary matrices. This is because the number of $1$-s uniquely identifies a $1 \times 5$ matrix and the number of $1$-s can take any value between $0$ and $5$ inclusive.

### Example Input
```
10 10
```

### Example Output
```
508361223
```
