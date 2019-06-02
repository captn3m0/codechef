---
category_name: school
problem_code: TRACE
problem_name: 'Trace of Matrix'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.6'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - PYP3
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 23-05-2018
tags:
    - '2'
    - cakewalk
    - kingofnumbers
    - ltime60
    - math
editorial_url: 'https://discuss.codechef.com/problems/TRACE'
time:
    view_start_date: 1527354000
    submit_start_date: 1527354000
    visible_start_date: 1527354000
    end_date: 1735669800
    current: 1559472931
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME60/mandarin/TRACE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME60/vietnamese/TRACE.pdf) as well.

Chef is learning linear algebra. Recently, he learnt that for a square matrix $M$, $\\mathop{\\rm trace}(M)$ is defined as the sum of all elements on the main diagonal of $M$ (an element lies on the main diagonal if its row index and column index are equal). Now, Chef wants to solve some excercises related to this new quantity, so he wrote down a square matrix $A$ with size $N\\times N$. A square \*submatrix\* of $A$ with size $l\\times l$ is a contiguous block of $l\\times l$ elements of $A$. Formally, if $B$ is a submatrix of $A$ with size $l\\times l$, then there must be integers $r$ and $c$ ($1\\le r, c \\le N+1-l$) such that $B\_{i,j} = A\_{r+i-1, c+j-1}$ for each $1 \\le i, j \\le l$. Help Chef find the maximum trace of a square submatrix of $A$. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of these lines contains $N$ space-separated integers $A\_{i,1}, A\_{i,2}, \\dots, A\_{i, N}$ denoting the $i$-th row of the matrix $A$. ### Output For each test case, print a single line containing one integer — the maximum possible trace. ### Constraints - $1 \\le T \\le 100$ - $2 \\le N \\le 100$ - $1 \\le A\_{i,j} \\le 100$ for each valid $i, j$ ### Subtasks \*\*Subtask #1 (100 points):\*\* original constraints ### Example Input ``` 1 3 1 2 5 6 3 4 2 7 1 ``` ### Example Output ``` 13 ``` ### Explanation \*\*Example case 1:\*\* The submatrix with the largest trace is ``` 6 3 2 7 ``` which has trace equal to $6 + 7 = 13$. (This submatrix is obtained for $r=2, c=1, l=2$.)
