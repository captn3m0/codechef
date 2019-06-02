---
category_name: challenge
problem_code: SEASORT2
problem_name: 'Sereja and Sorting 2'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: null
date_added: 9-09-2013
tags:
    - challenge
    - greedy
    - heuristic
    - march14
    - sereja
    - test
editorial_url: 'http://discuss.codechef.com/problems/SEASORT2'
time:
    view_start_date: 1395135000
    submit_start_date: 1395135000
    visible_start_date: 1395135000
    end_date: 1735669800
    current: 1525199673
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/MARCH14/mandarin/SEASORT2.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH14/russian/SEASORT2.pdf).

Sereja has an array **A\[1 .. N\]**, which contains **N** integers. Now Sereja wants to sort it.
The only thing that Sereja can do, is to reverse all elements in some sub-array, which is a consecutive parts of **A**. In other words, in one operation, Sereja can choose two integers **L** and **R (1 <= L < R <= N)**, and swap elements **A\[L\]** and **A\[R\]**, **A\[L+1\]** and **A\[R-1\]**, **A\[L+2\]** and **A\[R-2\]** and so on.

In such operation of **L, R**, the total energy that Sereja spends **R - L + 1**. Clearly, Sereja wants to minimize the spent energy. Also, Sereja would like to minimize the total number of all operations. Therefore, we give a mixed objective as shown in Scoring.

### Input

First line contains an integer **N**. Next line contains a sequence of integers **A\[1\], A\[2\], A\[3\], ..., A\[N\]**.

### Output

First line contains an integer **Q** - the total number of operations you need to sort the array. In each of next **Q** lines, there should be two integers **L** and **R** **(1 <= L < R <= N)** indicate the operation that Sereja should do.

Also you should remember, that **Q** shouldn't be greater than **N**.

### Scoring

Suppose **S** is the total spent energy of your output, i.e. the sum of **R - L + 1** of all operations. Your score is **S / N + Q**. Lower scores will earn more points.

We have 40 official test files. You must correctly solve all test files to receive OK. During the contest, your overall score is the sum of the scores on the first 10 test files. After the contest, all solutions will be rescored by the sum of the scores on the rest 10 test files. Note, that public part of the tests may not contain some border cases.

### Constraints

- **1** <= **N** <= **10000**
- **1** <= **A\[i\]** <= **5000**

### Example

<pre><b>Input:</b>
6
2 1 5 4 3 2
<b>Output:</b>
2
3 6
1 2
</pre>