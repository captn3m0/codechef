---
category_name: challenge
problem_code: SEAND2
problem_name: 'Sereja and Number Division 2'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
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
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: shiplu
date_added: 10-09-2014
tags:
    - challenge
    - jan15
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAND2'
time:
    view_start_date: 1421055000
    submit_start_date: 1421055000
    visible_start_date: 1421055000
    end_date: 1735669800
    current: 1525454424
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN15/mandarin/SEAND2.pdf) and [Russian](http://www.codechef.com/download/translated/JAN15/russian/SEAND2.pdf).

Sereja has an integer number **A** that doesn't contain zeroes in its decimal form.
Also he has **N** integers **B\[1\], B\[2\], ..., B\[N\]**.

Let us first define function **f** for a number **A** as follows. 
![](https://codechef_shared.s3.amazonaws.com/download/JAN15/SEAND2.equation.png).

Now he has to reorder the digits of **A** such that **f(A)** is minimum.
Please help him in finding most optimal **A**.

### Input

- First line contain a single integer **T** denoting number of test cases. Then **T** tests follow.
- First line of each test case contains an integer **A**.
- Next line contains an integer **N**.
- Next line contains **N** integers **B\[1\], B\[2\], ..., B\[N\]**.

### Output

For each test case, output optimal value of **A** after reordering digits in a single line.

### Constraints

11. **1** ≤ **T** ≤ **100**
12. **1** ≤ **A** ≤ **101000**
13. **N** = **100**
14. **1** ≤ **B\[i\]** ≤ **106**
### Example

<pre><b>Input:</b>
2
123
2
2 3
123457
1
10

<b>Output:</b>
312
754312

</pre>### Scoring

Let **Y** denotes your score for the problem. **Y** is defined as sum of **f(optimal A))** for all test cases.
You objective is to make **Y** as small as possible.

### Tests generation Plan

Test set contains **five** official test cases.
During the contest, your solution will be tested only on the first test. After the end of contest, it will be re-judged on the full test set.

Length of number **A** is generated randomly. All digits of it are also chosen randomly.

In all test cases **N** is equal to **100**.

To generate array **B**, first we chose an integer **R** between **1** and **106** inclusive. Note that **R** is
not randomly generated, it will be manually selected.

Then all elements of array **B** are chosen in range **1..R** randomly.
