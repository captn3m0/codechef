---
category_name: easy
problem_code: QMAXTRIX
problem_name: 'Query over Matrix'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: amitpandeykgp
problem_tester: pushkarmishra
date_added: 3-11-2015
tags:
    - amitpandeykgp
    - implementation
    - ltime30
    - precomputation
editorial_url: 'http://discuss.codechef.com/problems/QMAXTRIX'
time:
    view_start_date: 1448785800
    submit_start_date: 1448785800
    visible_start_date: 1448785800
    end_date: 1735669800
    current: 1493558178
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME31/mandarin/SVNTR.pdf), [Russian](http://www.codechef.com/download/translated/LTIME31/russian/SVNTR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME31/vietnamese/SVNTR.pdf) as well.

###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME30/mandarin/QMAXTRIX.pdf), [Russian](http://www.codechef.com/download/translated/LTIME30/russian/QMAXTRIX.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME30/vietnamese/QMAXTRIX.pdf)

There is a **N\*N** square matrix. You have been given **N** specifications, one per row of the matrix. The **ith** specifications is represented by a pair of integers **L\[i\]** and **R\[i\]**, denoting that all element belonging to columns between **L\[i\]** and **R\[i\]** (both inclusive) in row **i** are 1, while the rest of the elements of the **i**th row are 0.

Now you will be given an integer **Q**, followed by **Q** operations: Each query is described by two integers **x** and **y**, which asks what will be the parity of the sum of the matrix if the **x**th row and the **y**th column are removed from the matrix.

### Input

- First line of the input contains an integer **N**, followed by **N** lines: each containing a pair of integers. **i**th pair of integers denotes the value of **L\[i\]** and **R\[i\]**.
- The next line contains the value of **Q**, and the following **Q** lines contain the queries.

### Output

**Q** lines, each containing a single character "E" or "O" (no quotes needed), indicating whether the sum is even or odd.

### Constraints

**Subtask #1: 20 points**

- **1 ≤ N,Q ≤ 1000, 1 ≤ L\[i\] ≤ R\[i\] ≤ N,1 ≤ x,y ≤ N**

**Subtask #2: 80 points**

- **1 ≤ N,Q ≤ 105, 1 ≤ L\[i\] ≤ R\[i\] ≤ N, 1 ≤ x,y ≤ N**

### Example

<pre><b>Input:</b>
3
1 3
2 2
1 3
2
2 2
3 2

<b>Output:</b>
E
E

</pre>### Explanation
The given array is:
1 1 1
0 1 0
1 1 1
It's easy to see that the sum is even in both the queries.
