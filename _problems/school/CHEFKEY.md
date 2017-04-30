---
category_name: school
problem_code: CHEFKEY
problem_name: 'Chef and Keyboard'
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
problem_author: berezin
problem_tester: alex_2oo8
date_added: 30-10-2014
tags:
    - berezin
    - cakewalk
    - factorization
    - loop
    - oct16
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHEFKEY'
time:
    view_start_date: 1476696600
    submit_start_date: 1476696600
    visible_start_date: 1476696600
    end_date: 1735669800
    current: 1492506713
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT16/mandarin/CHEFKEY.pdf), [Russian](http://www.codechef.com/download/translated/OCT16/russian/CHEFKEY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT16/vietnamese/CHEFKEY.pdf) as well.

Chef is a well known programmer. He owns a brand new Android phone of screen size of dimension **n × m** (**n** denotes the height of the phone and **m** denotes the width). Chef wants to design a program for painting the screen. He figured out **c** colors, which he will use to paint the screen. He wants to paint some rectangular section of pixels of the screen each with different color. Also Chef would like to use all of his **c** colors in painting.

Can you help Chef in finding number of different dimensions of rectangular section he can paint? In other words, find number of pairs **x, y** such that Chef can paint a rectangular section of dimension **x × y** (**x** denotes height, **y** denotes width) on the screen. Please note that Chef uses a fix orientation of his phone and is not allowed to rotate it, i.e. height always stays **n** and width always stays **m** and not the other way around.

### Input

First line of the input contains an integer **T** denoting the number of test cases. **T** test cases follow.

Only line of each test case contains three space separated integers **n, m, c**.

### Output

For each test case, output a single line containing the answer for the test case.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **n, m** ≤ **106**
- **1** ≤ **c** ≤ **106**

### Subtasks

- Subtask #1: (40 points) **1** ≤ **n, m** ≤ **100**, **1** ≤ **c** ≤ **104**
- Subtask #2: (60 points) **original constraints**

### Example

```
<b>Input:</b>
2
4 6 12
3 3 10

<b>Output:</b>
3
0

```
### Explanation

**Test case 1.** Possible pairs of dimensions are **(2, 6)**, **(3, 4)** and **(4, 3)**. Note that the rectangular section of dimension **(1, 12)** can't be painted as it can't fit into the screen, because 12 > 6.

**Test case 2.** There does not exist any rectangle of desired dimensions which can have 10 different pixels painted.