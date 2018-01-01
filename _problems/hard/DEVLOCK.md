---
category_name: hard
problem_code: DEVLOCK
problem_name: 'Devu and Locks'
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
max_timelimit: '5 - 15'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: pushkarmishra
date_added: 19-01-2015
tags:
    - admin2
    - combinatorics
    - dynamic
    - feb15
    - fft
    - math
    - matrix
    - medium
editorial_url: 'http://discuss.codechef.com/problems/DEVLOCK'
time:
    view_start_date: 1424079000
    submit_start_date: 1424079000
    visible_start_date: 1424079000
    end_date: 1735669800
    current: 1493556683
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB15/mandarin/DEVLOCK.pdf) and [Russian](http://www.codechef.com/download/translated/FEB15/russian/DEVLOCK.pdf).

Devu likes to play with a lock of **N** dials. Each dial rotates from numbers 0 to 9 clockwise (i.e. 0 to 1, 2 to 3 and 8 to 9). You can not rotate from 9 to 0.

Initially all the dials of the lock are set to 0. From the current lock, Devu can move any dial to at most 10 different positions (i.e. 0 to 9), so there are total **10N** different locks possible.

Let us say for a lock we define cost of converting the initial lock (all zeros) to this lock. For this, we have to rotate each dial to corresponding position in the lock. Cost of moving a single dial to value **x** takes **x** seconds.
eg. cost of moving to 123 is 1 + 2 + 3 = 6 and cost of moving to 99 is 9 + 9 is 18.

Now Devu has to hurry up to meet his girlfriend, So he has at most **M** seconds to spend, he wonders how many possible locks he can create such that when a lock is represented as a decimal number, it should be divisible by **P**. As answer could be large, print answer modulo **998244353**.

### Input

Only line of input will contain three integers **N, P, MM** respectively. Use of **MM** is defined in the output section.

### Output

Print a single line containing **MM + 1** integers, ith (0 based indexing) of them should represent the
answer for the problem with given **N, P** and **M = i**.

### Constraints

- _Subtask #1: (10 points)_  **1** ≤ **N** ≤ **1000**, **1** ≤ **P** ≤ **50**, **1** ≤ **MM** ≤ **50** **TL : 5 secs**
- _Subtask #2: (20 points)_  **1** ≤ **N** ≤ **10^9**, **1** ≤ **P** ≤ **50**, **1** ≤ **MM** ≤ **50** **TL : 5 secs**
- _Subtask #3: (30 points)_  **1** ≤ **N** ≤ **10^9**, **1** ≤ **P** ≤ **50**, **1** ≤ **MM** ≤ **500** **TL : 10 secs**
- _Subtask #4: (40 points)_  **1** ≤ **N** ≤ **10^9**, **1** ≤ **P** ≤ **16**, **1** ≤ **MM** ≤ **15000** **TL : 15 secs**

### Example

<pre><b>Input:</b>
2 3 3

<b>Output:</b>
1 1 1 5

</pre><pre><b>Input:</b>
2 4 4

<b>Output:</b>
1 1 2 3 5

</pre>### Explanation
**Example #1.** 
For M = 0, we can have only one lock, ie. all zeros 00, it is divisible by 3. 
For M = 1, we can have only one lock, ie. all zeros 00, it is divisible by 3. 
For M = 2, we can have only one lock, ie. all zeros 00, it is divisible by 3. 
For M = 3, we can have 5 locks whose decimal representation is divisible by 3. They are 00, 03, 21, 30 and 12.

**Example #2.** 
For M = 0, we can have only one lock, ie. all zeros 00, it is divisible by 4. 
For M = 1, we can have only one lock, ie. all zeros 00, it is divisible by 4. 
For M = 2, we can have 2 locks whose decimal representation is divisible by 4. They are 00 and 20. 
For M = 3, we can have 3 locks whose decimal representation is divisible by 4. They are 00, 12 and 20. 
For M = 4, we can have 5 locks whose decimal representation is divisible by 4. They are 00, 04, 12, 20 and 40.
