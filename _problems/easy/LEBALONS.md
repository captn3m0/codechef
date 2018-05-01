---
category_name: easy
problem_code: LEBALONS
problem_name: 'Little Elephant and Balloons'
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
problem_author: witua
problem_tester: xcwgf666
date_added: 25-04-2012
tags:
    - dynamic
    - easy
    - may14
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LEBALONS'
time:
    view_start_date: 1399887000
    submit_start_date: 1399887000
    visible_start_date: 1399887000
    end_date: 1735669800
    current: 1493558159
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY14/mandarin/LEBALONS.pdf) and [Russian](http://www.codechef.com/download/translated/MAY14/russian/LEBALONS.pdf).

The Little Elephant from the Zoo of Lviv is going to the Birthday Party of the Big Hippo tomorrow. Now he wants to prepare a gift for the Big Hippo.

He has **N** balloons, numbered from **1** to **N**. The **i-th** balloon has the color **Ci** and it costs **Pi** dollars. The gift for the Big Hippo will be any subset (chosen randomly, possibly empty) of the balloons such that the number of different colors in that subset is at least **M**.

Help Little Elephant to find the expected cost of the gift.

### Input

The first line of the input contains a single integer **T** - the number of test cases. **T** test cases follow. The first line of each test case contains a pair of integers **N** and **M**. The next **N** lines contain **N** pairs of integers **Ci** and **Pi**, one pair per line.

### Output

In **T** lines print **T** real numbers - the answers for the corresponding test cases. Your answer will considered correct if it has at most **10^-6** absolute or relative error.

### Constraints

11. **1** ≤ **T** ≤ **40**
12. **1** ≤ **N**, **Ci**≤ **40**
13. **1** ≤ **Pi** ≤ **1000000**
14. 0 ≤ **M** ≤ **K**, where **K** is the number of different colors in the test case.
### Example

<pre>
<b>Input:</b>
2
2 2
1 4
2 7
2 1
1 4
2 7

<b>Output:</b>
11.000000000
7.333333333

</pre>