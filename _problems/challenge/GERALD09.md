---
category_name: challenge
problem_code: GERALD09
problem_name: 'Chef and Rectangle Genome'
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
problem_author: gerald
problem_tester: null
date_added: 5-04-2014
tags:
    - challenge
    - gerald
    - greedy
    - july14
editorial_url: 'http://discuss.codechef.com/problems/GERALD09'
time:
    view_start_date: 1405330200
    submit_start_date: 1405330200
    visible_start_date: 1405330200
    end_date: 1735669800
    current: 1525454418
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/JULY14/mandarin/GERALD091.pdf) and [Russian](http://www.codechef.com/download/translated/JULY14/russian/GERALD09.pdf).

Chef has an empty matrix of **N**x**M**. He wants to construct rectangle genome. For this reason Chef should fill the matrix with letters G, С, A, T.

The genome will be stable if it contains **K** different submatrices. Of course, Chef wants to make his genome as stable as possible, that is the difference between the number of different submatrices in genome and number **K** should be as small as possible.

Please, write a program for Chef that constructs as stable genome as possible. Note, that you must fill each cell of the matrix. Two submatrices is different if either one of their dimensions differs or for some pair of corresponding cells their content differs.

### Input

The first line contains a single integer **T**, denoting the number of testcases. Each of the next **T** lines contains the description of the testcase: three integers **N**, **M**, **K**.

### Output

For each testcase in the first **N** lines print **N**x**M** matrix. Each character of the matrix should be G, C, A or T.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **15**
- **1** ≤ **M** ≤ **15**

### Test Generation

All the tests contains manual (non-random) **N** and **M** values. Number **K** for each testcase was choosen uniformly from the range \[1, **N\*N\*M\*M**\].

### Scoring

Imagine that your matrix for some testcase contains **W** different submatrices. Your score for that testcase will be **|W-K|**/**K**. You score for all testcases is the sum of the scores for each testcase.

There are 10 cases in total, and only 2 of them are evaluated during the contest, while others are tested but scored 0, and will be evaluated after the contest.

### Example

<pre><b>Input:</b>
2
2 3 5
1 1 1

<b>Output:</b>
AAA
AAA
T
</pre>
### Explanation

**Example case 1.** In this testcase the output matrix contains 6 different submatrices. So, your scoring for this testcase will be 1/5.
