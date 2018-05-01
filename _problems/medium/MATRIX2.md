---
category_name: medium
problem_code: MATRIX2
problem_name: Matrix
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: Rubanenko
date_added: 20-07-2013
tags:
    - dynamic
    - ltime03
    - simple
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/MATRIX2'
time:
    view_start_date: 1377419508
    submit_start_date: 1377419508
    visible_start_date: 1377419423
    end_date: 1735669800
    current: 1493557777
layout: problem
---
All submissions for this problem are available.You are given a matrix **A** that consists of **N** rows and **M** columns. Every number in the matrix is either zero or one. Calculate the number of such triples (**i**, **j**, **h**) where for all the pairs (**x**, **y**), where both **x** and **y** belong to \[**1**; **h**\] if **y >= x**, **A\[i+x-1\]\[j+y-1\]** equals to one. Of course, the square (**i**, **j**, **i+h-1**, **j+h-1**) should be inside of this matrix. In other words, we're asking you to calculate the amount of square submatrices of a given matrix which have ones on and above their main diagonal.

### Input

The first line of the input consists of two integers - **N** and **M**.

The following **N** lines describe the matrix. Each line consists of **M** characters that are either zero or one.

### Output

Output should consist of a single integer - the answer to the problem.

### Example

<pre><b>Input:</b>
2 3
011
111

<b>Output:</b>
6
</pre>### Scoring

Subtask 1 (9 points): 1 <= **N,M** <= 2000, All the numbers in the matrix are equal to one.

Subtask 2 (12 points): 1 <= **N,M** <= 10. 

Subtask 3 (34 points): 1 <= **N,M** <= 30. 

Subtask 4 (17 points): 1 <= **N,M** <= 150. 

Subtask 5 (28 points): 1 <= **N,M** <= 2000.
