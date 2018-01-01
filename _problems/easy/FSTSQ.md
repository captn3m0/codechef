---
category_name: easy
problem_code: FSTSQ
problem_name: 'Fast squarer'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: xcwgf666
date_added: 27-09-2015
tags:
    - ad
    - easy
    - implementation
    - ltime29
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/FSTSQ'
time:
    view_start_date: 1445761800
    submit_start_date: 1445761800
    visible_start_date: 1445761800
    end_date: 1735669800
    current: 1493558148
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME29/mandarin/FSTSQ.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME29/russian/FSTSQ.pdf)

A squarer is a simple and convenient device. You give it some positive integer **X** and it calculates its square.

Leha is implementing a module of this device which is responsible for squaring the numbers consisting of multiple repetitions of one digit. But it turned out that it's not as simple as he thought.

Please help him now!

### Input

The first line contains one integer **T** denoting the number of testcases. The descriptions of **T** test cases follow.

Each of the following **T** lines contain **2** space-separated integers - **N** and **D**, respectively. It means that the number **X** in the corresponding testcase consists of the digit **D** repeated **N** times (in decimal representation).

### Output

As the answer can be very large, we ask you to output its hash which is computed in the following way:

Let's consider the integer answer **Y** as a 0-indexed array starting from its leftmost digit. The hash function is calculated as:
 **p0\*Y\[0\] + p1\*Y\[1\] + ... + pM-1\*Y\[M-1\] modulo 109 + 7** 
where **M** is the length of the array representation of **Y** and **p** equals **23**.

### Constraints

- **1** ≤ **T** ≤ **20**
- **1** ≤ **D** ≤ **9**
- Subtask 1 (16 points): **1** ≤ **N** ≤ **9**
- Subtask 2 (25 points): **1** ≤ **N** ≤ **100**
- Subtask 3 (27 points): **1** ≤ **N** ≤ **2 × 104**
- Subtask 4 (32 points): **1** ≤ **N** ≤ **106**

### Example

<pre><b>Input:</b>
<tt>3
1 4
3 6
3 5</tt>

<b>Output:</b>
<tt>139
40079781
32745632</tt>


</pre>### Explanation
In the first test case, **X = 4** and **Y = 16**. Its hash equals **1\*1 + 23\*6 = 139**.
