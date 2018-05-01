---
category_name: medium
problem_code: AMSTRING
problem_name: 'Andrew and the Strings'
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
problem_tester: laycurse
date_added: 28-03-2013
tags:
    - cook33
    - easy
    - sliding
    - strings
    - witua
editorial_url: 'http://discuss.codechef.com/problems/AMSTRING'
time:
    view_start_date: 1366569000
    submit_start_date: 1366569000
    visible_start_date: 1728420627
    end_date: 1735669800
    current: 1493557455
layout: problem
---
Andrew likes strings very much.

He has two strings **A** and **B** of **N** lower alphabet letters. We denote **S\[i, j\]** as the substring from **i**th to **j**th characters of string **S**.

Andrew is interested in the number of such fours of integers **(LA, RA, LB, RB)**, where **1** ≤ **LA** ≤ **RA** ≤ **N**, **1** ≤ **LB** ≤ **RB** ≤ **N**, and **RA − LA = RB − LB**, such that the [Hamming distance](http://en.wikipedia.org/wiki/Hamming_distance) between substrings **A\[LA, RA\]** and **B\[LB, RB\]** is not greater than **K**. Here the Hamming distance between two strings of the same length is the number of unequal characters on the same positions of strings.

Help him and find this number.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains two space-separated integers **N** and **K**. The second line contains string **A**, and the third line contains string **B**.

### Output

For each test case, output an integer, denoting the number of fours **(LA, RA, LB, RB)** satisfying the conditions described in the problem statements.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **1000**
- **1** ≤ **K** ≤ **N**
- Both **A** and **B** are contain only **N** lower alphabet letters

### Example

<pre><b>Input:</b>
3
3 2
aba
abb
3 2
abc
def
1 1
a
a

<b>Output:</b>
14
13
1
</pre>### Explanation

**Example case 1**: There are **14** fours as following:
**(1, 1, 1, 1) : dist(A\[1, 1\], B\[1, 1\]) = dist(a, a) = 0 ≤ 2**
**(1, 1, 2, 2) : dist(A\[1, 1\], B\[2, 2\]) = dist(a, b) = 1 ≤ 2**
**(1, 1, 3, 3) : dist(A\[1, 1\], B\[3, 3\]) = dist(a, b) = 1 ≤ 2**
**(2, 2, 1, 1) : dist(A\[2, 2\], B\[1, 1\]) = dist(b, a) = 1 ≤ 2**
**(2, 2, 2, 2) : dist(A\[2, 2\], B\[2, 2\]) = dist(b, b) = 0 ≤ 2**
**(2, 2, 3, 3) : dist(A\[2, 2\], B\[3, 3\]) = dist(b, b) = 0 ≤ 2**
**(3, 3, 1, 1) : dist(A\[3, 3\], B\[1, 1\]) = dist(a, a) = 0 ≤ 2**
**(3, 3, 2, 2) : dist(A\[3, 3\], B\[2, 2\]) = dist(a, b) = 1 ≤ 2**
**(3, 3, 3, 3) : dist(A\[3, 3\], B\[3, 3\]) = dist(a, b) = 1 ≤ 2**
**(1, 2, 1, 2) : dist(A\[1, 2\], B\[1, 2\]) = dist(ab, ab) = 0 ≤ 2**
**(1, 2, 2, 3) : dist(A\[1, 2\], B\[2, 3\]) = dist(ab, bb) = 1 ≤ 2**
**(2, 3, 1, 2) : dist(A\[2, 3\], B\[1, 2\]) = dist(ba, ab) = 2 ≤ 2**
**(2, 3, 2, 3) : dist(A\[2, 3\], B\[2, 3\]) = dist(ba, bb) = 1 ≤ 2**
**(1, 3, 1, 3) : dist(A\[1, 3\], B\[1, 3\]) = dist(aba, abb) = 1 ≤ 2**

**Example case 2**: The four **(1, 3, 1, 3)** no longer satisfies the conditions, because
**(1, 3, 1, 3) : dist(A\[1, 3\], B\[1, 3\]) = dist(abc, def) = 3 > 2**
