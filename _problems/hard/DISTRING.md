---
{"category_name":"hard","problem_code":"DISTRING","problem_name":"Distinct Rows in Submatrices","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"24-09-2018","tags":{"0":"dsu","1":"hard","2":"jtnydv25","3":"lcp","4":"oct18","5":"suffix"},"editorial_url":"https://discuss.codechef.com/problems/DISTRING","time":{"view_start_date":1540027803,"submit_start_date":1540027803,"visible_start_date":1540027803,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/OCT18/hindi/DISTRING.pdf) ,[Bengali](http://www.codechef.com/download/translated/OCT18/bengali/DISTRING.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/OCT18/mandarin/DISTRING.pdf) , [Russian](http://www.codechef.com/download/translated/OCT18/russian/DISTRING.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT18/vietnamese/DISTRING.pdf) as well.

Let's define the *strength* of a matrix as the number of distinct rows in it. Two rows $a_1, a_2, \dots, a_n$ and $b_1, b_2, \dots, b_n$ are distinct if there is an index $i$ such that $a_i \neq b_i$.

You are given an integer matrix $A$ with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). A submatrix of $A$ is formed as the intersection of rows $r_1$ through $r_2$ and columns $c_1$ through $c_2$ for any $r_1 \le r_2, c_1 \le c_2$. Find the sum of the strengths of all submatrices of $A$.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $M$ space-separated integers $A_{i, 1}, A_{i, 2}, \dots, A_{i, M}$.

### Output
Print a single line containing one integer — the sum of strengths of all the submatrices.

### Constraints 
- $1 \le N \cdot M \le 500,000$
- $ 1 \le A_{i,j} \le 10^9$ for each valid $i, j$

### Subtasks
**Subtask #1 (20 points):** $1 \le N \cdot M \le 1,000$

**Subtask #2 (80 points):** original constraints

### Example Input
```
2 2
1 1
1 2
```

### Example Output
```
11
```

### Explanation
The submatrices are
```
1

1

1

2

1 1

1 2

1
1

1
2

1 1
1 2
```
with strengths $1, 1, 1, 1, 1, 1, 1, 2, 2$ respectively. The sum of these strengths is $11$.
