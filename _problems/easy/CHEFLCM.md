---
category_name: easy
problem_code: CHEFLCM
problem_name: 'Chef and Interview'
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
problem_author: abhra73
problem_tester: xcwgf666
date_added: 21-01-2015
tags:
    - abhra73
    - april15
    - lcm
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHEFLCM'
time:
    view_start_date: 1428917400
    submit_start_date: 1428917400
    visible_start_date: 1428917400
    end_date: 1735669800
    current: 1493558120
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL15/mandarin/CHEFLCM.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL15/russian/CHEFLCM.pdf).

Chef wants to hire a new assistant. He published an advertisement regarding that in a newspaper. After seeing the advertisement, many candidates have applied for the job. Now chef wants to shortlist people for the interviews, so he gave all of them one problem which they must solve in order to get shortlisted.

 The problem was : For a given positive integer **N**, what is the maximum sum of distinct numbers such that the [Least Common Multiple](http://en.wikipedia.org/wiki/Least_common_multiple) of all these numbers is **N**.

 Your friend Rupsa also applied for the job, but was unable to solve this problem and hence you've decided to help her out by writing a code for solving this problem.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

Each test case contains a single integer **N**.

### Output

For each test case, output a single line containing an integer corresponding to the answer for that test case.

### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **N** ≤ **109**

**Subtask 1 (30 points):**

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **105**

**Subtask 2 (70 points):**

- original constraints

### Example

<pre><b>Input:</b>
2
1
2

<b>Output:</b>
1
3

</pre>### Explanation
**Example 1 :** Only possible number is **1**, so the maximum sum of distinct numbers is exactly **1**. 
**Example 2 :** The distinct numbers you can have are just **1** and **2**, so the sum is **3**. If we consider any other number greater than **2**, then the least common multiple will be more than **2**.
