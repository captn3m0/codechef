---
category_name: hard
problem_code: PUPPYGCD
problem_name: 'Puppy and GCD'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: zedthirtyeight
date_added: 23-06-2015
tags:
    - ltime26
    - math
    - number
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/PUPPYGCD'
time:
    view_start_date: 1437900300
    submit_start_date: 1437900300
    visible_start_date: 1437900300
    end_date: 1735669800
    current: 1493556794
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME26/mandarin/PUPPYGCD.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME26/russian/PUPPYGCD.pdf).

One fine sunny day Tuzik was waiting for his master Vanka near their house. Time kept going by but the boy just wouldn't come out of the house. "Oh no, maybe he is participating in some programming contest like Lunchtime again. If I help him, we can go and start playing some interesting game outdoors sooner." - thought Tuzik, so he went into the house.

Vanka was struggling with the last problem indeed. The statement was: "Given integers **N** and **D**, find how many pairs of integers **(i, j)** such that **1 ≤ i ≤ j ≤ N** have the greatest common divisor exactly **D**."

"LOL, even I can solve it faster than him." - thought Tuzik. Unfortunately he is just a little puppy so he can't explain or code up the solution. But he wants to go outdoors with his master, so please help Vanka solve this problem for Tuzik's sake.

### Input

The first line contains one integer **T** denoting the number of test cases.
The following **T** lines contain two space-separated integers each: **N** and **D** - description of each test case.

### Output

For each test case, output a single line containing the answer for this test case.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N, D** ≤ **5\*108**
- Subtask #1\[20 points\]: **1** ≤ **N, D** ≤ **500**
- Subtask #2\[25 points\]: **1** ≤ **N, D** ≤ **105**
- Subtask #3\[25 points\]: **1** ≤ **N, D** ≤ **2\*108**
- Subtask #4\[30 points\]:**1** ≤ **N, D** ≤ **5\*108**

### Example

<pre><b>Input:</b>
1
12 3

<b>Output:</b>
6
</pre>
### Explanation

6 such pairs: (3, 3), (3, 6), (3, 9), (3, 12), (6, 9), and (9, 12).
