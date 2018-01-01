---
category_name: easy
problem_code: CHDOGS
problem_name: 'Chef and Three Dogs'
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
problem_author: antoniuk1
problem_tester: alex_2oo8
date_added: 12-02-2016
tags:
    - antoniuk1
    - oct16
    - simple
    - symmetry
    - trigonometry
editorial_url: 'http://discuss.codechef.com/problems/CHDOGS'
time:
    view_start_date: 1476696600
    submit_start_date: 1476696600
    visible_start_date: 1476696600
    end_date: 1735669800
    current: 1493558212
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT16/mandarin/CHDOGS.pdf), [Russian](http://www.codechef.com/download/translated/OCT16/russian/CHDOGS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT16/vietnamese/CHDOGS.pdf) as well.

Chef has three dogs sitting at the vertices of an equilateral triangle. The length of each side of the triangle equals to **s** meters. Chef gives the command "Start!" and each dog starts to run with constant speed **v** meters per second. At each moment, each dog is running towards the dog just right to him (in counter-clockwise direction). Therefore, their trajectories are forming some spirals that converging to one point as illustrated below.

![](https://s3.amazonaws.com/codechef_shared/download/upload/mice3.gif)

How long does it takes dogs to meet each other after the command "Start!"?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The only line of each test case contains two space-separated integers **s** and **v**.

### Output

For each test case, output a single line containing a real number corresponding to the answer of the problem. The answer will be considered correct if its absolute or relative error does not exceed 10-6.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **s, v** ≤ **109**

### Subtasks

- Subtask #1 (40 points): **1** ≤ **s, v** ≤ **10**
- Subtask #2 (60 points): **original constraints**

### Example

<pre><b>Input:</b>
2
2 5
1 1000000000

<b>Output:</b>
0.266667
0.0000001

</pre>### Explanation
Due to the triangle being very small, but the dogs running extremely fast, they will meet after less than 1e-6 seconds. Thus, due to remark about absolute or relative error in the output section, any answer within \[0, 1e-6\] will be considered correct.
