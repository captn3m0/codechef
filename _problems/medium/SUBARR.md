---
category_name: medium
problem_code: SUBARR
problem_name: 'Perfect Subarrays'
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
problem_author: kostya_by
problem_tester: null
date_added: 27-11-2013
tags:
    - bit
    - easy
    - fenwick
    - kostya_by
    - ltime07
    - prefix
    - segment
editorial_url: 'http://discuss.codechef.com/problems/SUBARR'
time:
    view_start_date: 1388305855
    submit_start_date: 1388305855
    visible_start_date: 1388305800
    end_date: 1735669800
    current: 1493557934
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME07/mandarin/SUBARR.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME07/russian/SUBARR.pdf).

You are given an array **A**, which consists of **N** integers. Also, you have an integer **K**.

Let's call a subarray **A\[L..R\]** perfect, if the average of the numbers **AL**, **AL + 1**, ..., **AR - 1**, **AR** is greater than or equal to **K**.

I.e. the average of the numbers **{2, 5, 9, -3}** equals to **3.25**.

So, your task is quite simple: you are to count the number of perfect subarrays of **A**.

### Input

The first line contains two integers **N** and **K**.

The second line contains **N** integers, **i**'th integer denotes **Ai**. The array **A** is 1-indexed.

### Output

The first line should contain an integer, denoting the number of perfect subarrays of **A**.

### Example

<pre><b>Input:</b>
4 2
1 2 3 -1
<b>Output:</b>
4

</pre>### Explanation
In the test case **N** equals to 4, **K** equals to 2, **A** equals to {1, 2, 3, -1}. The following subarrays are perfect: \[2..2\], \[3..3\], \[2..3\], \[1..3\].

### Scoring

-109 ≤ **K** ≤ 109 for each test case;

-109 ≤ **Ai** ≤ 109 for each test case;

Subtask 1 (10 points): 1 ≤ **N** ≤ 100;

Subtask 2 (39 points): 1 ≤ **N** ≤ 6000;

Subtask 3 (11 points): 1 ≤ **N** ≤ 150 000, **K** = 0;

Subtask 4 (20 points): 1 ≤ **N** ≤ 150 000;

Subtask 5 (20 points): 1 ≤ **N** ≤ 1 000 000;
