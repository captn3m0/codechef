---
category_name: medium
problem_code: CNPIIM
problem_name: 'Counting Matrices'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: kuruma
problem_tester: shiplu
date_added: 2-12-2013
tags:
    - april14
    - easy
    - kuruma
    - maths
editorial_url: 'http://discuss.codechef.com/problems/CNPIIM'
time:
    view_start_date: 1397468002
    submit_start_date: 1397468002
    visible_start_date: 1397467741
    end_date: 1735669800
    current: 1493557588
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL14/mandarin/CNPIIM.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL14/russian/CNPIIM.pdf).

Lira loves Linear Algebra and she is especially keen about matrix :).

Today, she learnt some properties about matrices, namely, she learnt about what the trace of a matrix is, as her teacher gave her many exercises for her to practice.

As we know she is pretty clever, she rapidly came up with some definitions of her own and devised a somewhat harder version of the problem initially proposed by her teacher.

Namely, she defines a **Positive Invertible Integer Matrix** as being an invertible 2x2 matrix composed only of positive (i.e. greater than 0) integer elements and whose determinant is greater than 0.

Now, she is interested in counting how many such matrices are there, such that their trace is equal to **N** .

It's your turn to solve Lira's problem :D

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. 

Each test case consist of single integer **N**, the trace of the matrix.

### Output

For each test case, output a single line containing the number of **Positive Invertible Integer Matrices** such that their trace is equal to **N** and determinant is positive.

Read here for additional info:

[http://en.wikipedia.org/wiki/Trace\_(linear\_algebra)](http://en.wikipedia.org/wiki/Trace_(linear_algebra))

<http://en.wikipedia.org/wiki/Determinant>

### Constraints:

- **1** ≤ **T** ≤ **50**
- **3** ≤ **N** ≤ **2500**

### Example

<pre><b>Input:</b>
1
3

<b>Output:</b>
2	
</pre>### Explanation

The only two matrices that exist with trace equal to 3 and that satisfy all the given conditions are:

![Matrices](/download/extimages/0a3c6a4adf4feefa0ff7eb3765ac8959.gif)
