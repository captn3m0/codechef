---
category_name: medium
problem_code: SEAPAIR
problem_name: 'Sereja and Pairs'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: iscsi
date_added: 6-11-2015
tags:
    - cook64
    - easy
    - greedy
    - implementation
    - maths
    - sereja
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/SEAPAIR'
time:
    view_start_date: 1448217000
    submit_start_date: 1448217000
    visible_start_date: 1448217000
    end_date: 1735669800
    current: 1493557926
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK64/mandarin/SEAPAIR.pdf) and [Russian](http://www.codechef.com/download/translated/COOK64/russian/SEAPAIR.pdf).

Sereja had an non-negative integer **A** in the range **\[0, 10100\]**.

One day, he wrote **N** pairs of the form **(X\[i\], [ floor](https://en.wikipedia.org/wiki/Floor_and_ceiling_functions)(A / X\[i\]) )** on a piece of paper. Let us denote **floor(A / X\[i\])** by **D\[i\]**.

Sereja's little brother Sergey is very naughty, he changed the **D** values for some of the pairs. When confronted for his mischief by Sereja, he said that he did not touch more than **K** such pairs.

Now, given the modified values of **N** pairs of the form **(X\[i\], D\[i\])**, Sereja is wondering about number of possible original values of integer **A**. Please help Sereja so that little Sergey could avoid the upcoming beating by Sereja. As the answer could be large, please report it modulo **1000000007 (109+7)**.

### Input

First line of input contain an integer **T** — the number of test cases.**T** test cases follow.

First line of each test case contains integers **N** and **K**. Each of the next **N** lines contains a pair that Sereja wrote on the paper — **X\[i\]** and **D\[i\]** — as two space-separated integers.

### Output

For each test case, output a single line containing the answer - number of possible numbers **A** modulo **(109+7)**. ### Constraints

- **1** ≤ **T** ≤ **5**
- 0 ≤ **K** ≤ **N** ≤ **105**
- **1** ≤ **X\[i\]**  ≤ **109**
- 0 ≤ **D\[i\]**  ≤ **109**

### Example

<pre><b>Input:</b>
2
3 0
50 2
40 2
30 3
3 1
30 3
40 2
50 2

<b>Output:</b>
20
30
</pre>