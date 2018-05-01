---
category_name: school
problem_code: ELEVSTRS
problem_name: 'From heaven to earth'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: melnik
problem_tester: kingofnumbers
date_added: 17-08-2017
tags:
    - cakewalk
    - cook85
    - math
    - melnik
editorial_url: 'https://discuss.codechef.com/problems/ELEVSTRS'
time:
    view_start_date: 1503253800
    submit_start_date: 1503253800
    visible_start_date: 1503253800
    end_date: 1735669800
    current: 1514815982
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/COOK85/mandarin/ELEVSTRS.pdf), [russian](http://www.codechef.com/download/translated/COOK85/russian/ELEVSTRS.pdf) and [vietnamese](http://www.codechef.com/download/translated/COOK85/vietnamese/ELEVSTRS.pdf) as well.

Chef has been working in a restaurant which has  **N**  floors. He wants to minimize the time it takes him to go from the **N**-th floor to ground floor. He can either take the elevator or the stairs.

The stairs are at an angle of **45** degrees and Chef's velocity is **V1** m/s when taking the stairs down. The elevator on the other hand moves with a velocity **V2** m/s. Whenever an elevator is called, it always starts from ground floor and goes to **N**-th floor where it collects Chef (collecting takes no time), it then makes its way down to the ground floor with Chef in it.

 The elevator cross a total distance equal to **N** meters when going from **N**-th floor to ground floor or vice versa, while the length of the stairs is **sqrt(2) \* N** because the stairs is at angle **45** degrees. Chef has enlisted your help to decide whether he should use stairs or the elevator to minimize his travel time. Can you help him out?

### Input

The first line contains a single integer **T**, the number of test cases. Each test case is described by a single line containing three space-separated integers **N**, **V1**, **V2**.

### Output

For each test case, output a single line with string **Elevator** or **Stairs**, denoting the answer to the problem.

### Constraints

- **1** ≤ **T** ≤  **1000**
- **1** ≤ **N**, **V1**, **V2** ≤  **100**

### Example

<pre><b>Input:</b>
3
5 10 15
2 10 14
7 14 10

<b>Output:</b>
Elevator
Stairs
Stairs
</pre>