---
category_name: school
problem_code: LCOLLIS
problem_name: Collisions
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
problem_tester: karanaggarwal
date_added: 11-06-2016
tags:
    - basic
    - cakewalk
    - ltime37
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/LCOLLIS'
time:
    view_start_date: 1466874000
    submit_start_date: 1466874000
    visible_start_date: 1466874000
    end_date: 1735669800
    current: 1492506728
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME37/mandarin/LCOLLIS.pdf), [Russian](http://www.codechef.com/download/translated/LTIME37/russian/LCOLLIS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME37/vietnamese/LCOLLIS.pdf) as well.

Once **N** boys and **M** girls attended a party. You are given a matrix **A** of **N** rows and **M** columns where **Aij** is **1** if the **i-th** boy likes the **j-th** girl, otherwise it will be 0. Note that it is not necessary that if a boy **x** likes girl **y**, then girl **y** should like boy **x**.

You know that if there are two different boys **x** and **y**, who both like girl **z**, then there will be a collision. Can you calculate the number of different collisions at this party? Note that order of boys in the collision doesn't matter.

### Input

The first line contains a single integer **T** denoting the number of test cases. Then **T** test cases follow.

The first line of each test case contains two space separated integers **N**, **M** denoting the number of boys and girls, respectively.

Each of the following **N** lines contain **M** characters, each of them is either **'0'** or **'1'**.

### Output

For each test case output a single line containing an integer corresponding to the number of collisions at the party.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N, M** ≤ **10**

### Example

```
<b>Input:</b>
2
4 3
111
100
110
000
2 2
10
01

<b>Output:</b>
4
0

```
### Explanation

**Example Case 1.** All three boys like the first girl, so there are **(1, 2, 1), (1, 3, 1), (2, 3, 1)** collisions with her. Boys **1** and **3** both like the second girl so this is one more collision. Only one boy likes the third girl, so there are no collisions with her and thus we have **4** collisions total.

**Example Case 2.** For each girl there is only one boy who likes her, so there are no collisions at all.