---
category_name: medium
problem_code: CHSEQ22
problem_name: 'Chef and Favourite Sequence'
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
problem_tester: laycurse
date_added: 17-11-2013
tags:
    - easy
    - feb14
    - furko
editorial_url: 'http://discuss.codechef.com/problems/CHSEQ22'
time:
    view_start_date: 1392629400
    submit_start_date: 1392629400
    visible_start_date: 1392629400
    end_date: 1735669800
    current: 1493557914
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/FEB14/mandarin/CHSEQ22.pdf) and [Russian](http://www.codechef.com/download/translated/FEB14/russian/CHSEQ22.pdf).

Chef has an integer sequence **a1**, **a2**, ..., **aN** of size **N**, where all the elements of the sequence are 0 initially. Chef also has **M** segments, here the **i**th one is **\[Li, Ri\]**. He wants to create new sequences using the following operation:

- In a single operation, he picks a segment from the **M** segments. Let the chosen segment be **\[s, t\]**.
- Then *flip* the all elements from **s**th to **t**th elements, namely, **ai** is changed to **1 − ai** for all **s ≤ i ≤ t**.

Chef can perform the operation as many times as Chef likes. Chef wants to know how many different sequences Chef can make. Since the answer can be very large, please print it modulo **1000000007 (109+7)**.

### Input

The first line contains two space-separated integers **N** and **M**, denoting the size of the sequence and the number of the segments respectively. Then the **i**th line of the next **M** lines contains two space-separated integers **Li** and **Ri**, denoting the **i**th segments.

### Output

Print a single line containing one integer, denoting the number of the sequences which can be created by Chef, modulo **1000000007 (109+7)**.

### Constraints

- **1 ≤ N, M ≤ 100000 (105)**
- **1 ≤ Li ≤ Ri ≤ N**

### Example

<pre>
<b>Input:</b>
3 3
1 1
2 2
3 3

<b>Output:</b>
8
</pre>
### Explanation

In the example case, all the sequences **(0,0,0)**, **(0,0,1)**, **(0,1,0)**, **(1,0,0)**, **(0,1,1)**, **(1,0,1)**, **(1,1,0)**, **(1,1,1)** can be created by Chef.
