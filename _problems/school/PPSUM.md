---
category_name: school
problem_code: PPSUM
problem_name: 'Puppy and Sum'
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
problem_author: pavel1996
problem_tester: kostya_by
date_added: 12-02-2016
tags:
    - basic
    - cakewalk
    - cook67
    - implementation
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/PPSUM'
time:
    view_start_date: 1456081200
    submit_start_date: 1456081200
    visible_start_date: 1456081200
    end_date: 1735669800
    current: 1492506773
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK67/mandarin/PPSUM.pdf), [Russian](http://www.codechef.com/download/translated/COOK67/russian/PPSUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK67/vietnamese/PPSUM.pdf) as well.

Yesterday, puppy Tuzik learned a magically efficient method to find the sum of the integers from **1** to **N**. He denotes it as **sum(N)**. But today, as a true explorer, he defined his own new function: **sum(D, N)**, which means the operation **sum** applied **D** times: the first time to **N**, and each subsequent time to the result of the previous operation.

For example, if **D = 2** and **N = 3**, then **sum(2, 3)** equals to **sum(sum(3)) = sum(1 + 2 + 3) = sum(6) = 21**.

Tuzik wants to calculate some values of the **sum(D, N)** function. Will you help him with that?

### Input

The first line contains a single integer **T**, the number of test cases. Each test case is described by a single line containing two integers **D** and **N**.

### Output

For each testcase, output one integer on a separate line.

### Constraints

- **1** ≤ **T** ≤ **16**
- **1** ≤ **D, N** ≤ **4**

### Example

<pre><b>Input:</b>
2
1 4
2 3

<b>Output:</b>
10
21
</pre>### Explanation:

The first test case: sum(1, 4) = sum(4) = 1 + 2 + 3 + 4 = 10.

The second test case: sum(2, 3) = sum(sum(3)) = sum(1 + 2 + 3) = sum(6) = 1 + 2 + 3 + 4 + 5 + 6 = 21.
