---
category_name: easy
problem_code: TIMEASR
problem_name: 'Time measure'
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
problem_author: kaizer
problem_tester: null
date_added: 29-05-2015
tags:
    - ad
    - kaizer
    - oct15
    - simple
editorial_url: 'http://discuss.codechef.com/problems/TIMEASR'
time:
    view_start_date: 1444642200
    submit_start_date: 1444642200
    visible_start_date: 1444642200
    end_date: 1735669800
    current: 1493558193
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT15/mandarin/TIMEASR.pdf) and [Russian](http://www.codechef.com/download/translated/OCT15/russian/TIMEASR.pdf) 

 Chef is sitting in a very boring lecture, waiting for it to end. He has recently asked his friend about the time, and instead of the straightforward answer, his friend, being an absolute jerk, told him the absolute value of angle between hour and minute hands.

But that is obviously not what he wanted to know, so he asks you to help him, by writing down all valid values of time (in hours and minutes, both non-negative integers) from **midnight** (inclusive) to **noon** (not inclusive) which satisfy the information Chef's friend has provided. Keep in mind that a time value is considered valid if the angle between the clock's hands for that value and the angle Chef's friend has described differ by **less** than **1/120 degrees.**

Note that the **movement of the minute hand influences the hour hand**. That is, every minute, it moves by 1/60th of the angular distance between two consecutive hour marks.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The only line of each test case contain a single real number **A** in decimal notation, denoting the angle between minute and hour hands. The fractional part won't contain more than **4** digits.

### Output

For each test case print all valid values of time as described in the statement in the format "**hh:mm**" (without quotes), where **hh** means number of hours, and **mm** the number of minutes. Times should be printed in **chronological** order.

### Constraints and Subtasks

- **1** ≤ **T** ≤ **105**
- 0 ≤ **A** ≤ **180**
- Output won't exceed **1 MB**.

**Subtask 1: (30 points)**

- **A** is an integer from the set {0, **90**, **180**}.

**Subtask 2: (30 points)**

- **A** is an integer.

**Subtask 3: (40 points)**

- No additional constraints.

### Example

<pre><b>Input:</b>
<tt>2
0
30</tt>

<b>Output:</b>
<tt>00:00
01:00
11:00</tt>
</pre>