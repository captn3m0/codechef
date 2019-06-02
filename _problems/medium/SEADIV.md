---
category_name: medium
problem_code: SEADIV
problem_name: 'Sereja and Dividing'
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
problem_author: sereja
problem_tester: xcwgf666
date_added: 15-09-2013
tags:
    - dec15
    - division
    - inverse
    - medium
    - modular
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEADIV'
time:
    view_start_date: 1450085400
    submit_start_date: 1450085400
    visible_start_date: 1450085400
    end_date: 1735669800
    current: 1493557899
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC15/mandarin/SEADIV.pdf), [Russian](http://www.codechef.com/download/translated/DEC15/russian/SEADIV.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC15/vietnamese/SEADIV.pdf) as well.

Sereja has two integers — **A** and **B** — in *7*-ary system. He wants to calculate the number **C**, such that **B \* C = A**. It is guaranteed that **B** is a divisor of **A**.

Please, help Sereja calculate the number **C** modulo **7L**.

### Input

First line of input contains an integer **T** — the number of test cases. **T** tests follow.

For each test case, the first line contains the integer **A**, and the second line contains the integer **B**, and the third line contains the integer **L**. **A** and **B** are given in *7*-ary system.

### Output

Output the answer in *7*-ary system. ### Constraints

- **1** ≤ **T** ≤ **10**
- **A** and **B** are both positive integers.
- Length of **A** is a positive integer and doesn't exceed **106**.
- **L** and length of **B** are positive integers and do not exceed **10000**.

### Subtasks

- **Sub task #1 (20 points):** Length of **A** is a positive integer and doesn't exceed **20**.
- **Sub task #2 (30 points):** Length of **A** is a positive integer and doesn't exceed **2000**.
- **Sub task #3 (50 points):** Original constraints.

### Example

<pre><b>Input:</b>
<tt>3
21
5
10
202
13
1
202
13
2</tt>

<b>Output:</b>
<tt>3
3
13</tt>
</pre>