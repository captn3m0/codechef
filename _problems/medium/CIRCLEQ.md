---
category_name: medium
problem_code: CIRCLEQ
problem_name: 'The New Restaurant'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: amrmahmoud
problem_tester: dpraveen
date_added: 17-06-2016
tags:
    - amrmahmoud
    - medium
    - sept16
time:
    view_start_date: 1473931800
    submit_start_date: 1473931800
    visible_start_date: 1473931800
    end_date: 1735669800
    current: 1493557581
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT16/mandarin/CIRCLEQ.pdf), [Russian](http://www.codechef.com/download/translated/SEPT16/russian/CIRCLEQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT16/vietnamese/CIRCLEQ.pdf) as well.

Chef decided to open a new restaurant in the town. The town already has **N** restaurants, each of which operates in an area of circular shape with its center at **xi, yi** and radius **ri**. For any point, there is at most one restaurant operating there.

Chef wants to build his restaurant in a strategic place. That's why he asks you some questions - find the total area covered by restaurants in the rectangle defined by the points **x1, y1, x2, y2** where **(x1, y1)** is the lower left corner and **(x2, y2)** is the upper right corner. Chef is not that good in answering these questions, so he asked you to help him in this.

### Input

There is a single test case.

The first line of input contains two integers **N, Q**, denoting number of restaurants and number of questions Chef asks.

Each of the next **N** lines contains three space separated integers **x, y, r** denoting **x** and **y** coordinate of center, and the radius of the restaurant, respectively.

Each of the next **Q** lines contains four space separated integers **x1, y1, x2, y2** denoting a question as defined in the statement.

### Output

Output **Q** lines, the **i-th** line contains the total area covered by restaurants in the rectangle defined by the **i-th** query. The answer will be considered correct if its absolute or relative error does not exceed **10-6**

### Constraints

- **1** ≤ **N** ≤ **50 000**
- **1** ≤ **Q** ≤ **100 000**
- ≤ **xi, yi** ≤ **50 000**
- **1** ≤ **ri** ≤ **50**
- ≤ **xi1** < **xi2** ≤ **50 000**
- ≤ **yi1** < **yi2** ≤ **50 000**
- No two circles touch or intersect each other.

### Subtasks

**Subtask #1 (10 pts)**

- **N** = **1**

**Subtask #2 (10 pts)**

- **1** ≤ **N, Q** ≤ **1000**
- ≤ **xi, yi** ≤ **1000**
- ≤ **xi1** < **xi2** ≤ **1000**
- ≤ **yi1** < **yi2** ≤ **1000**

**Subtask #3 (10 pts)**

- **1** ≤ **N, Q** ≤ **1000**

**Subtask #4 (20 pts)**

- Original constraints with **ri = 1**

**Subtask #5 (50 pts)**

- Original constraints

### Example

<pre><b>Input:</b>
2 4
5 5 2
2 2 1
2 2 5 5
1 1 7 7
2 3 8 4
1 3 2 4

<b>Output:</b>
3.926990816987241
15.707963267948966
2.456739397217513
0.000000000000000

</pre>