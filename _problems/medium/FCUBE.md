---
category_name: medium
problem_code: FCUBE
problem_name: 'The First Cube'
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
problem_author: xcwgf666
problem_tester: furko
date_added: 24-01-2015
tags:
    - ltime21
    - medium
    - prime
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/FCUBE'
time:
    view_start_date: 1424593800
    submit_start_date: 1424593800
    visible_start_date: 1424593800
    end_date: 1735669800
    current: 1493557656
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME21/mandarin/FCUBE.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME21/russian/FCUBE.pdf).

This problem's statement is really a short one.

You are given an integer **S**. Consider an infinite sequence **S, 2S, 3S, ...** . Find the first number in this sequence that can be represented as **Q3**, where **Q** is some positive integer number. As the sought number could be very large, please print modulo **(109 + 7)**.

The number **S** will be given to you as a product of **N** positive integer numbers **A1, A2, ..., AN**, namely **S = A1 \* A2 \* ... \* AN**

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains an integer **N**.

Then there is a line, containing **N** space separated integers, denoting the numbers **A1, A2, ..., AN**.

### Output

For each test case, output a single line containing the first term of the sequence which is the perfect cube, modulo **109+7**.

### Constraints

- **1** ≤ **T** ≤ **10**
- (Subtask 1): **N** = **1**, **1** ≤ **S** ≤ **109** - 15 points.
- (Subtask 2): **N** = **1**, **1** ≤ **S** ≤ **1018** - 31 point.
- (Subtask 3): **1** ≤ **N** ≤ **100**, **1** ≤ **Ai** ≤ **1018** - 54 points.

### Example

<pre><b>Input:</b>
2
2
2 2
2
2 3
<b>Output:</b>
8
216
</pre>
### Explanation

**Example case 1.** First few numbers in the infinite sequence 4, 8, 12, 16, 20, , etc. In this sequence, 8 is the first number which is also a cube (as **23 = 8**).

**Example case 2.** First few numbers in the infinite sequence 6, 12, 18, 24, , etc. In this sequence, 216 is the first number which is also a cube (as **63 = 216**).
