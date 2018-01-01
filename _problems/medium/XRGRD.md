---
category_name: medium
problem_code: XRGRD
problem_name: 'Xor Grid'
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
problem_author: alex_2oo8
problem_tester: kingofnumbers
date_added: 8-08-2016
tags:
    - alex_2oo8
    - bitwise
    - cook78
    - easy
    - fractals
    - maths
editorial_url: 'https://discuss.codechef.com/problems/XRGRD'
time:
    view_start_date: 1485109800
    submit_start_date: 1485109800
    visible_start_date: 1485109800
    end_date: 1735669800
    current: 1493557957
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK78/mandarin/XRGRD.pdf), [Russian](http://www.codechef.com/download/translated/COOK78/russian/XRGRD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK78/vietnamese/XRGRD.pdf) as well.

Recently Chef invented a new structure that he has called **Xor Grid**. It is an infinitely large grid **G** filled with numbers based on these three rules:

1. **G\[1, c\] = 1** for all **c ≥ 1**
2. **G\[r, 1\] = r** for all **r ≥ 1**
3. **G\[r, c\] = G\[r - 1, c\] [xor](http://en.wikipedia.org/wiki/Bitwise_operation#XOR) G\[r, c - 1\]** for all **r > 1** and **c > 1**

Now Chef is wondering, what are the **xor sums** of all the numbers within some specific rectangles of the **Xor Grid**?

### Note

 Xor sum refers to successive xor operations on integers. For example, xor sum of integers **x1**, **x2**, **x3**, ..., **xn** will be (..((**x1** xor **x2**) xor **x3**)... xor **xn**). ### Input

The first line of the input contains an integer **T** denoting the number of test cases.

For each test case, the only line of input contains four integers **r1**, **r2**, **c1** and **c2**, where **(r1, c1)**, **(r2, c2)** denotes the coordinates of top left and bottom right cells of the rectangle.

### Output

For each test case, output a single integer ― the **xor sum** of all the numbers within **G\[r1..r2, c1..c2\]**. ### Constraints

- **1** ≤ **T** ≤ **10 000**
- **1** ≤ **r1** ≤ **r2** ≤ **1018**
- **1** ≤ **c1** ≤ **c2** ≤ **1018**

### Example

<pre><b>Input:</b>
5
1 1 71 93
23959042 23959042 1 1
1 2 1 2
2 7 3 6
5 8 5 8

<b>Output:</b>
1
23959042
1
6
4

</pre>### Explanation
**Example case 1.** First row is filled with ones, so our rectangle contains **23** ones and their **xor sum** is one. **Example case 2.** Here we have a rectangle that consists of one cell **G\[23959042, 1\] = 23959042**. **Example case 3.** The rectangle contains four numbers: **1 1 2 3** and their **xor sum** is **1**.
