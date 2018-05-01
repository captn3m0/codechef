---
category_name: easy
problem_code: THREEDIF
problem_name: 'Three Different Numbers'
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
max_timelimit: '2.013'
source_sizelimit: '50000'
problem_author: anton_lunyov
problem_tester: anton_lunyov
date_added: 5-01-2013
tags:
    - anton_lunyov
    - combinatorics
    - jan13
    - modulo
    - simple
editorial_url: 'http://discuss.codechef.com/problems/THREEDIF'
time:
    view_start_date: 1358248727
    submit_start_date: 1358248727
    visible_start_date: 1358242651
    end_date: 1735669800
    current: 1493558193
layout: problem
---
All submissions for this problem are available.This is probably the simplest problem ever. You just need to count the number of ordered triples of different numbers **(X1, X2, X3)**, where **Xi** could be any positive integer from **1** to **Ni**, inclusive (**i = 1, 2, 3**).

No, wait. I forgot to mention that numbers **N1, N2, N3** could be up to **1018**. Well, in any case it is still quite simple :)

By the way, because of this the answer could be quite large. Hence you should output it modulo **109 + 7**. That is you need to find the remainder of the division of the number of required triples by **109 + 7**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The only line of each test case contains three space-separated integers **N1, N2, N3**.

### Output

For each test case, output a single line containing the number of required triples modulo **109 + 7**.

### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **Ni** ≤ **1018**

### Example

<pre>
<b>Input:</b>
5
3 3 3
2 4 2
1 2 3
25 12 2012
1 1 2013

<b>Output:</b>
6
4
1
578880
0
</pre>### Explanation

**Example case 1.** We have the following triples composed of different numbers up to 3:
(1, 2, 3)
(1, 3, 2)
(2, 1, 3)
(2, 3, 1)
(3, 1, 2)
(3, 2, 1)

**Example case 2.** Here the triples are:
(1, 3, 2)
(1, 4, 2)
(2, 3, 1)
(2, 4, 1)

**Example case 3.** Here the only triple is (1, 2, 3).

**Example case 4.** Merry Christmas!

**Example case 5.** ... and Happy New Year! By the way here the answer is zero since the only choice for **X1** and for is **X2** is 1, so any such triple will have equal numbers.
