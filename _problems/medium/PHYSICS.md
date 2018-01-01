---
category_name: medium
problem_code: PHYSICS
problem_name: 'Physics Class'
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
problem_author: piyushkumar
problem_tester: xiaodao
date_added: 1-10-2014
tags:
    - binary
    - hash
    - ltime17
    - piyushkumar
    - simple
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/PHYSICS'
time:
    view_start_date: 1414312200
    submit_start_date: 1414312200
    visible_start_date: 1414312200
    end_date: 1735669800
    current: 1493557852
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME17/mandarin/PHYSICS.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME17/russian/PHYSICS.pdf).

The Physics teacher in Tanu's class is teaching concepts of a bouncing ball. The rubber ball that she is using has the property that if the ball is dropped from height H then, it bounces back to maximum height H/F. So after first bounce it rises up to maximum height H/F, after second bounce to maximum height H/F2, after third bounce to maximum height H/F3, and so on.

The class has **N** children, and the teacher wants to select two children such that when the taller child drops the ball from his height, ball reaches a maximum height equal to the height of the shorter child after some (possibly zero) number of bounces. Note that zero bounces mean heights of the two children will be same. Given the heights of the children in the class **Height\[i\]**, can you tell how many ways are there for the teacher to select two children for the demonstration? **Note** that when heights are same, the pair is only counted once (See first example for further clarification).

### Input

First line contains T, number of testcases. Then 2\*T lines follow, 2 per testcase.
First line of each testcase consists of two space-separated intergers **N** and **F**. Second line of each testcase contains N space-separated **integers** representing the array **Height**.

### Output

For each testcase, print a single line containing the answer to the problem.

### Constraints

- **For 40 points:** 1 ≤ T ≤ 100, 1 ≤ N ≤ 103, 2 ≤ F ≤ 109, 1 ≤ Height\[i\] ≤ 109
- **For 60 points:** 1 ≤ T ≤ 100, 1 ≤ N ≤ 104, 2 ≤ F ≤ 109, 1 ≤ Height\[i\] ≤ 109

### Example

**Input:**

`2<br></br>3 2<br></br>2 2 2<br></br>3 2<br></br>2 1 4`
**Output:**

`3<br></br>3`
**Explanation:**

- In the first case, the three pairs are (child 1, child 2), (child 2, child 3) and (child 1, child 3).
- For the second case also, the three pairs are (child 1, child 2), (child 2, child 3) and (child 1, child 3).
