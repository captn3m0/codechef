---
category_name: easy
problem_code: FLYMODE
problem_name: 'Fly height mode'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: pkacprzak
problem_tester: null
date_added: 28-12-2016
tags:
    - line
    - ltime43
    - pkacprzak
    - simple
    - sorting
time:
    view_start_date: 1483203600
    submit_start_date: 1483203600
    visible_start_date: 1483203600
    end_date: 1735669800
    current: 1493558145
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME43/mandarin/FLYMODE.pdf), [Russian](http://www.codechef.com/download/translated/LTIME43/russian/FLYMODE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME43/vietnamese/FLYMODE.pdf) as well.

You like tracking airplane flights a lot. Specifically, you maintain history of an airplane’s flight at several instants and record them in your notebook. Today, you have recorded **N** such records **h1, h2, ..., hN**, denoting the heights of some airplane at several instants. These records mean that airplane was first flying on height **h1**, then started changing its height to **h2**, then from **h2** to **h3** and so on. The airplanes are usually on cruise control while descending or ascending, so you can assume that plane will smoothly increase/decrease its height from **hi** to **hi + 1** with a constant speed. You can see that during this period, the airplane will cover all possible heights in the range **\[min(hi, hi+1), max(hi, hi+1)\]** (both inclusive). It is easy to see that the plane will be at all possible heights in the range exactly a single instant of time during this ascend/descend.

You are interested in finding the maximum integer **K** such that the plane was at some height exactly **K** times during the flight.

### Input

There is a single test case.

First line of the input contains an integer **N** denoting the number of records of heights of the plane.

Second line contains **N** space separated integers denoting **h1, h2, ..., hN**.

### Output

Output a single maximum integer **K** in one line, such that the plane was at some height exactly **K** times during the flight.

### Constraints

- **hi ≠ hi+1**

### Subtasks

**Subtask #1: (30 points)**

- **1 ≤ N ≤ 1000**
- **1 ≤ hi ≤ 1000**

**Subtask #2: (70 points)**

- **1 ≤ N ≤ 105**
- **1 ≤ hi ≤ 109**

### Example

<pre><b>Input:</b>
5
1 2 3 2 3

<b>Output:</b>
3
</pre>
### Explanation

The flight can be draw as:

<pre>
3  /\/
2 /
1
</pre>
There are infinitely many heights at which the plane was 3 times during the flight, for example 2.5, 2.1. Notice that the plane was only 2 times at height 2. Moreover, there are no height at which the plane was more than 3 times, so the answer is 3.
