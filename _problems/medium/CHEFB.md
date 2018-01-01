---
category_name: medium
problem_code: CHEFB
problem_name: 'Chef and easy problem 2'
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
problem_author: furko
problem_tester: stzgd
date_added: 17-09-2014
tags:
    - furko
    - ltime16
    - maths
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHEFB'
time:
    view_start_date: 1411893000
    submit_start_date: 1411893000
    visible_start_date: 1411893000
    end_date: 1735669800
    current: 1493557513
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME16/mandarin/CHEFB.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME16/russian/CHEFB.pdf).

Roma gave Chef an array of intergers.
Chef wants to make all integers in the array equal to 1.
In a single operation, he can select a prime number **p** and a subset of the integers, and then divide all of the integers in the subset by **p**.
Chef can make this operation only if every integer in the selected subset is divisible by **p**.

Please help Chef to make all the integers in the array equal to 1 with minimum number of operations.

### Input

The first line of input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the length of the array that Roma gave Chef.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the integers in the array.

### Output

For each test case, output a single line containing one integer - the minimum number of operations needed to make all numbers equal to 1.

### Constraints

- Subtask 1 (10 points): **T** = 5, 1 ≤ **N** ≤ 105, 1 ≤ **Ai** ≤ 3
- Subtask 2 (40 points): **T** = 3, 1 ≤ **N** ≤ 10, 1 ≤ **Ai** ≤ 106
- Subtask 3 (50 points): **T** = 3, 1 ≤ **N** ≤ 105, 1 ≤ **Ai** ≤ 106

### Example

<pre><b>Input:</b>
1
3
1 2 4

<b>Output:</b>
2

</pre>