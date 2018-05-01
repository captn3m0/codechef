---
category_name: easy
problem_code: CHEFSEG
problem_name: 'Chef and Segment Game'
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
problem_author: berezin
problem_tester: null
date_added: 12-03-2014
tags:
    - ad
    - berezin
    - nov14
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHEFSEG'
time:
    view_start_date: 1416216600
    submit_start_date: 1416216600
    visible_start_date: 1416216600
    end_date: 1735669800
    current: 1493558121
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV14/mandarin/CHEFSEG.pdf) and [Russian](http://www.codechef.com/download/translated/NOV14/russian/CHEFSEG.pdf).

Chef loves to play games. Now he plays very interesting game called "Segment". At the beginning Chef has segment **\[0, X\]** and no points on it. On each step Chef chooses the subsegment of maximal length possible such as it contains **no** points on it. If there are more than one such subsegment Chef chooses the one with the minimal left coordinate. Once Chef chosed the subsegment he put the point in it's middle and the step is over.

Help Chef to define the coordinate of the point he will put on the **K**-th step.

### Input

- The first line contains integer **T** - number of test cases.
- Each of next **T** lines contains two integers **X** and **K**.

### Output

- For each test case in a single line print single double number - the coordinate of the **K**-th point Chef will put. Answer will be considered as correct if absolute difference between the answer and correct answer is less or equal **10^(-6)**.

### Constraints

- **1** ≤ **T** ≤ **10^5**
- **1** ≤ **X** ≤ **10^9**
- **1** ≤ **K** ≤ **10^12**

### Subtasks

- Subtask **1**: **T** ≤ **10**; **X, K** ≤ **20**. Points: **15**
- Subtask **2**: **T** ≤ **10**; **X** ≤ **10^6**, **K** ≤ **2\*10^5**. Points: **25**
- Subtask **3**: **T** ≤ **10^5**; X ≤ **10^9**, **K** ≤ **10^12**. Points: **60**

### Example

<pre><b>Input:</b>
4
10 1
10 2
10 3
1000000000 1234567
<b>Output:</b>
5.0000
2.5000
7.5000
177375316.6198730500000000
</pre>### Explanation

You can see the points coordinates for the third sample from first two samples.
