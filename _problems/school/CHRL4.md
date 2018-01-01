---
category_name: school
problem_code: CHRL4
problem_name: 'Chef and Way'
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
problem_tester: xcwgf666
date_added: 21-01-2014
tags:
    - dynamic
    - easy
    - furko
    - ltime08
editorial_url: 'http://discuss.codechef.com/problems/CHRL4'
time:
    view_start_date: 1390725000
    submit_start_date: 1390725000
    visible_start_date: 1390725000
    end_date: 1735669800
    current: 1492506714
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Russian](http://www.codechef.com/download/translated/LTIME08/russian/CHRL4.pdf) also.

After visiting a childhood friend, Chef wants to get back to his home. Friend lives at the first street, and Chef himself lives at the **N**-th (and the last) street. Their city is a bit special: you can move from the **X**-th street to the **Y**-th street if and only if 1 <= **Y** - **X** <= **K**, where **K** is the integer value that is given to you. Chef wants to get to home in such a way that the product of all the visited streets' special numbers is minimal (including the first and the **N**-th street). Please, help him to find such a product.

### Input

The first line of input consists of two integer numbers - **N** and **K** - the number of streets and the value of **K** respectively. The second line consist of **N** numbers - **A1**, **A2**, ..., **AN** respectively, where **Ai** equals to the special number of the **i**-th street.

### Output

Please output the value of the minimal possible product, modulo **1000000007**.

### Constraints

- **1** ≤ **N** ≤ **10^5**
- **1** ≤ **Ai** ≤ **10^5**
- **1** ≤ **K** ≤ **N**

### Example

<pre><b>Input:</b>
4 2
1 2 3 4.

<b>Output:</b>
8


</pre>### Scoring
Subtask 1 (30 points): **N** <= 80 

Subtask 2 (70 points): See the constraints.
