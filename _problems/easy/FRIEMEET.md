---
category_name: easy
problem_code: FRIEMEET
problem_name: 'Friends Meeting'
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
problem_author: cenadar
problem_tester: xcwgf666
date_added: 29-07-2015
tags:
    - cenadar
    - dfs
    - medium
    - nov16
    - tree
editorial_url: 'http://discuss.codechef.com/problems/FRIEMEET'
time:
    view_start_date: 1479115800
    submit_start_date: 1479115800
    visible_start_date: 1479115800
    end_date: 1735669800
    current: 1493558147
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV16/mandarin/FRIEMEET.pdf), [Russian](http://www.codechef.com/download/translated/NOV16/russian/FRIEMEET.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV16/vietnamese/FRIEMEET.pdf) as well.

Chef and his friend John have not see each other for years. They are both are looking forward to meeting again in the city they both grew up in.

The city has **N** public squares that they can meet in. The squares are numbered from **1** to **N** and are connected with **N-1** roads. Each road has its own length

It is known that between two squares there is exactly one path that goes through the roads and squares such that no square appears in the path more than once. Roads do not intersect each other and it takes 0 time to pass through a square.

Chef and John have previously met in squares **A1**, **A2**, ..., **AM** so they will meet in one of these squares again. To make this meeting more adventurous they do not agree on the square beforehand. Rather, Chef will pick a random square **C** from this list of squares and John will independently pick a random square **J** from this list of squares. Both random choices will be taken uniformly over the list of squares.

In the day before the meeting, Chef spoke with his roomate about their plan and asked him to calculate the expected distance between squares that Chef and John randomly pick. Please remember that Chef's roommate knows neither **C** nor **J**. Help him calculate this expected distance.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space-separated integers **N** and **M**.

The next **N-1** lines contain three space-separated integers **V**, **U**, and **L** describing a road with length **L** between squares **V** and **U**.

The final line of each case contains **M** space-separated integers **A1**, **A2**, ..., **AM**.

### Output

For each test case, output a single line containing two integers **numer** and **denom** separated by a space. These indicate the fraction **numer/denom** giving expected distance between the squares randomly chosen by Chef and John. This fraction should be reduced so that gcd(**numer**, **denom**) = 1 and **denom** ≥ 1.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **50000**
- **1** ≤ **M** ≤ **N**
- **1** ≤ **V** ≤ **N**
- **1** ≤ **U** ≤ **N**
- **1** ≤ **L** ≤ **10000**
- **1** ≤ **Ai** ≤ **N**
- The squares **Ai** are distinct.
- **Subtask #1 \[40 points\]: N ≤ 1000**
- **Subtask #2 \[60 points\]: No additional constraints**

### Example

<pre><b>Input:</b>
<tt>2
6 2
1 3 1
2 3 2
3 4 3
4 5 4
4 6 5
1 5
6 6
1 3 1
2 3 2
3 4 3
4 5 4
4 6 5
1 2 3 4 5 6</tt>

<b>Output:</b>
<tt>4 1
29 6</tt>
</pre>