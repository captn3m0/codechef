---
category_name: school
problem_code: COPS
problem_name: 'Cops and the Thief Devu'
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
problem_author: devuy11
problem_tester: adurysk
date_added: 20-05-2015
tags:
    - cakewalk
    - cook60
    - devuy11
editorial_url: 'http://discuss.codechef.com/problems/COPS'
time:
    view_start_date: 1437330600
    submit_start_date: 1437330600
    visible_start_date: 1437330600
    end_date: 1735669800
    current: 1492506782
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK60/mandarin/COPS.pdf) and [Russian](http://www.codechef.com/download/translated/COOK60/russian/COPS.pdf) as well.

There are 100 houses located on a **straight line**. The first house is numbered 1 and the last one is numbered 100. Some **M** houses out of these 100 are occupied by cops.

Thief Devu has just stolen PeePee's bag and is looking for a house to hide in.

PeePee uses fast 4G Internet and sends the message to all the cops that a thief named Devu has just stolen her bag and ran into some house.

Devu knows that the cops run at a maximum speed of **x** houses per minute in a straight line and they will search for a maximum of **y** minutes. Devu wants to know how many houses are safe for him to escape from the cops. Help him in getting this information.

### Input

First line contains **T**, the number of test cases to follow.

First line of each test case contains 3 space separated integers: **M**, **x** and **y**.

For each test case, the second line contains **M** space separated integers which represent the house numbers where the cops are residing.

### Output

For each test case, output a single line containing the number of houses which are safe to hide from cops.

### Constraints

- 1 ≤ **T** ≤ 104
- 1 ≤ **x, y, M** ≤ 10

### Example

```
<b>Input:</b>
3
4 7 8
12 52 56 8
2 10 2
21 75
2 5 8
10 51

<b>Output:</b>
0
18
9

```
### Explanation

**Example 1 :** Cops in house 12 can cover houses 1 to 68, and cops in house 52 can cover the rest of the houses. So, there is no safe house.

**Example 2 :** Cops in house 21 can cover houses 1 to 41, and cops in house 75 can cover houses 55 to 95, leaving houses numbered 42 to 54, and 96 to 100 safe. So, in total 18 houses are safe.