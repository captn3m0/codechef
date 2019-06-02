---
category_name: easy
problem_code: HUNGALGO
problem_name: 'Chef Learning Hungarian Algorithm'
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
    - R
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 19-04-2019
tags:
    - cakewalk
    - cook105
    - cookoff
    - kingofnumbers
    - matrix
editorial_url: 'https://discuss.codechef.com/problems/HUNGALGO'
time:
    view_start_date: 1555871402
    submit_start_date: 1555871402
    visible_start_date: 1555871402
    end_date: 1735669800
    current: 1559472947
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/COOK105/hindi/HUNGALGO.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/COOK105/mandarin/HUNGALGO.pdf), \[Russian\](http://www.codechef.com/download/translated/COOK105/russian/HUNGALGO.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/COOK105/vietnamese/HUNGALGO.pdf) and \[Bengali\](http://www.codechef.com/download/translated/COOK105/bengali/HUNGALGO.pdf) as well. Chef is studying computer science. Tomorrow, he has an exam on algorithms and data structures. One of the algorithms he is required to study is the Hungarian algorithm (you do not have to know this algorithm to solve this problem). In the Hungarian algorithm, you start with a matrix of positive integers with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$). The algorithm proceeds in steps. In the first step, for each row of the matrix, you should find the smallest element in this row (let's denote it by $A$) and subtract $A$ from each element of the matrix in this row. In the second step, for each column of the matrix, you should find the smallest element in this column (let's denote it by $A$) and subtract $A$ from each element in this column. The remaining steps of the algorithm are not relevant in this problem. Currently, Chef is practicing implementation of the first two steps of the algorithm. He wants you to check if he is doing these two steps correctly or not. You are given a matrix with $N$ rows and $N$ columns; let's denote the element of this matrix in the $i$-th row and $j$-th column by $a\_{i, j}$. Determine if this matrix can be the result of applying the first two steps of the Hungarian algorithm on some matrix. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first line of each test case contains a single integer $N$. - $N$ lines follow. For each $i$ ($1 \\le i \\le N$), the $i$-th of the following $N$ lines contains $N$ space-separated integers $a\_{i, 1}, a\_{i, 2}, \\ldots, a\_{i, N}$. ### Output For each test case, print a single line containing the string `"YES"` (without quotes) if the given matrix can be a result of the first two steps or `"NO"` (without quotes) if it cannot. ### Constraints - $1 \\le T \\le 10,000$ - $2 \\le N \\le 500$ - $0 \\le a\_{i, j} \\le 10^3$ for each valid $i, j$ - the sum of $N^2$ over all test cases does not exceed $2 \\cdot 10^6$ ### Example Input ``` 5 3 0 0 4 3 0 1 0 1 0 2 0 5 3 2 2 1 3 5 0 3 0 3 4 4 0 5 6 5 0 4 3 0 2 4 0 2 3 5 3 4 3 0 3 4 0 3 ``` ### Example Output ``` YES NO NO YES YES ``` ### Explanation \*\*Example case 1:\*\* Let's consider the matrix ``` 3 1 5 7 2 3 5 4 3 ``` and apply the first two steps of the Hungarian algorithm on it. In the first step: - the smallest integer in row $1$ is $1$ - the smallest integer in row $2$ is $2$ - the smallest integer in row $3$ is $3$ After subtracting, the matrix becomes ``` 2 0 4 5 0 1 2 1 0 ``` and the second step is performed on this matrix. In the second step: - the smallest integer in column $1$ is $2$ - the smallest integer in column $2$ is $0$ - the smallest integer in column $3$ is $0$ After subtracting, the resulting matrix is ``` 0 0 4 3 0 1 0 1 0 ``` and this is the matrix given on the input, so the answer is YES. \*\*Example case 2:\*\* It is impossible to find a matrix such that after applying the first two steps of the Hungarian algorithm, it becomes the matrix given on the input, so the answer is NO.
