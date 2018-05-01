---
category_name: medium
problem_code: GRIDCONN
problem_name: 'Yet another substring problem'
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
problem_author: xcwgf666
problem_tester: white_king
date_added: 11-11-2014
tags:
    - biginteger
    - bruteforce
    - handling
    - ltime18
    - simple
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/GRIDCONN'
time:
    view_start_date: 1417336200
    submit_start_date: 1417336200
    visible_start_date: 1417336200
    end_date: 1735669800
    current: 1493557679
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME18/mandarin/GRIDCONN.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME18/russian/GRIDCONN.pdf).

The problem is completely unrelated to its problem code :).

Let us build an infinite string **D** that is simply a concatenation of the decimal representations of all positive integers without leading zeros. In other words, **D** = 12345678910111213141...

You are given a string **S**. Find the position of the first occurrence of **S** in **D** that satisfies one additional constraint: at least one integer that was concatenated to form **D** occurs entirely within **S**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a string of digits **S**.

It is guaranteed that **S** will occur satisfying the given condition somewhere in **D**.

### Output

For each test case, output a single line containing the minimal position number where **S** occurs in **D** under the given condition, modulo **109+7**. Consider the string to be 1-indexed: '1' is in position 1.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **|S|** ≤ **300**
- Subtask 1 (17 points): the answer won't exceed 107
- Subtask 2 (23 points): the answer will fit in a signed 64-bit integer (before taking modulo).
- Subtask 3 (60 points): no additional constraints.

### Example

<pre><b>Input:</b>
2
78910
9930

<b>Output:</b>
7
2679
</pre>### Explanation

Please pay attention that in the second test case the answer is not 788, as it may seem at first glance. This is because the part 2982**9930**0301 doesn't contain any integer completely in it - neither 299, nor 300. But the part 92892**9930**931932 contains the integer 930 completely.
