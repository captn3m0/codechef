---
category_name: easy
problem_code: ANUWTA
problem_name: 'Walk on the Axis'
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
problem_author: anudeep2011
problem_tester: kostya_by
date_added: 30-09-2014
tags:
    - ad
    - anudeep2011
    - cakewalk
    - cook51
editorial_url: 'http://discuss.codechef.com/problems/ANUWTA'
time:
    view_start_date: 1413744000
    submit_start_date: 1413744000
    visible_start_date: 1413744000
    end_date: 1735669800
    current: 1493558108
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK51/mandarin/ANUWTA.pdf) and [Russian](http://www.codechef.com/download/translated/COOK51/russian/ANUWTA.pdf) as well.

There are **N+1** lights. Lights are placed at  **(0, 0), (1, 0), (2, 0) ... (**N**, 0).** Initially all the lights are on. You want to turn off all of them one after one. You want to follow a special pattern in turning off the lights.

You will start at **(0, 0)**. First, you walk to the right most light that is on, turn it off. Then you walk to the left most light that is on, turn it off. Then again to the right most light that is on and so on. You will stop after turning off all lights. You want to know how much distance you walked in the process. Note that distance between **(a,0)** and **(b,0)** is **|a-b|**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. Each test case has a single integer **N** on separate line.

### Output

For each test case, output the distance you walked.

### Constraints

- **1** ≤ **T** ≤ **10^5**
- **1** ≤ **N** ≤ **10^5**

### Example

<pre><b>Input</b>
2
1
2

<b>Output</b>
2
5

</pre>### Explanation
**Testcase #2**
You are initially at (0, 0)
Right most on-light is (2, 0). Distance = 2.
Now you are at (2, 0).
Left most on-light is (0, 0). Distance = 2.
Now you are at (0, 0)
Right most on-light is (1, 0). Distance = 1.
Now you are at (1, 0) and all lights are turned off.
Total distance walked = 5.
