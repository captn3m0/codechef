---
category_name: school
problem_code: ALEXTASK
problem_name: 'Task for Alexey'
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
max_timelimit: ' - 1'
source_sizelimit: '50000'
problem_author: rubanalexey
problem_tester: xcwgf666
date_added: 11-10-2016
tags:
    - basic
    - lcm
    - nov16
    - rubanalexey
    - simple
editorial_url: 'http://discuss.codechef.com/problems/ALEXTASK'
time:
    view_start_date: 1479115800
    submit_start_date: 1479115800
    visible_start_date: 1479115800
    end_date: 1735669800
    current: 1492506700
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV16/mandarin/ALEXTASK.pdf), [Russian](http://www.codechef.com/download/translated/NOV16/russian/ALEXTASK.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV16/vietnamese/ALEXTASK.pdf) as well.

 Alexey is trying to develop a program for a very simple microcontroller. It makes readings from various sensors over time, and these readings must happen at specific regular times. Unfortunately, if two of these readings occur at the same time, the microcontroller freezes and must be reset.

There are **N** different sensors that read data on a regular basis. For each **i** from **1** to **N**, the reading from sensor **i** will occur every **Ai** milliseconds with the first reading occurring exactly **Ai** milliseconds after the microcontroller is powered up. Each reading takes precisely one millisecond on Alexey's microcontroller.

Alexey wants to know when the microcontroller will freeze after he turns it on.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line contains single integer **N** denoting the number of sensors.

The second line contains **N** space-separated integers **A1, A2, ..., AN** denoting frequency of measurements. Namely, sensor **i** will be read every **Ai** milliseconds with the first reading occurring **Ai** milliseconds after the microcontroller is first turned on.

### Output

For each test case, output a single line containing the number of milliseconds until the microcontroller freezes.

### Constraints

- **1** ≤ **T** ≤ **10**
- **2** ≤ **N** ≤ **500**
- **1** ≤ **Ai** ≤ **109**

### Subtasks

15. Subtask #1 (10 points) **1**  ≤ **T** ≤ **10,** **2** ≤ **N** ≤ **9**, **1** ≤ **Ai** ≤ **500**
16. Subtask #2 (20 points) **1**  ≤ **T** ≤ **10,** **2** ≤ **N** ≤ **500,** **1** ≤ **Ai** ≤  **1000**
17. Subtask #3 (70 points) **original constraints**
### Example

<pre><b>Input:</b>
<tt>3
3
2 3 5
4
1 8 7 11
4
4 4 5 6</tt>

<b>Output:</b>
<tt>6
7
4</tt>

</pre>### Explanation
**Case 1: in 6 milliseconds, the third reading will be attempted from the 1st sensor and the second reading will be attempted from the 2nd sensor**.

**Case 2: in 7 milliseconds the seventh reading will be attempted from the 1st sensor and the first reading will be attempted from the 3rd sensor**.

**Case 3: in 4 milliseconds, the first readings from the first two sensors will be attempted**.
