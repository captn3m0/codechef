---
category_name: easy
problem_code: MAKETRI
problem_name: 'Chef and Triangles'
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
max_timelimit: '1 - 3'
source_sizelimit: '50000'
problem_author: kevind
problem_tester: mgch
date_added: 14-01-2017
tags:
    - kevind
time:
    view_start_date: 1487496600
    submit_start_date: 1487496600
    visible_start_date: 1487496600
    end_date: 1735669800
    current: 1493558165
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB17/mandarin/MAKETRI.pdf), [Russian](http://www.codechef.com/download/translated/FEB17/russian/MAKETRI.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB17/vietnamese/MAKETRI.pdf) as well.

Chef is long been involved in cooking recipes. He has now got bored with it, and has to decided to play with food instead of cooking it up.

He has already selected **N** spaghetti strands for his dish. He has to select just one extra strand such that this strand's length makes a non-degenerate [triangle](https://en.wikipedia.org/wiki/Triangle) with some of the two other strands already present in the dish. A triangle formed by three collinear points is called a degenerate triangle. The length of the strand to be selected must be an integer in the range **\[L, R\]** (both inclusive).

Formally, let array **L** denote the lengths of **N** strands, then the extra strand of length **X** can be selected if there exists two different indices **i, j (i ≠ j)** such that there can be made a triangle of side lengths **Li, Lj** and **X**.

Can you help him find the number of possible valid lengths of the extra strand?

Note again that three collinear points are not considered to form a triangle.

### Input

First line of the input contains three space separated **N**, **L** and **R**, denoting the number of strands already present in the dish and the range of the length of the new strand to be selected respectively.

The next line contains **N** space separated integers, where the **i**-th integer **Li** denotes the length of the **i**-th strand.

### Output

Output a single line corresponding to the answer of the problem.

### Constraints

- **2** ≤ **N** **≤ 106**
- **1** ≤ **L** ≤ **R** ≤ **1018**
- **1** ≤ **Li** ≤ **1018**

### Subtasks

**Subtask #1 (10 points):**

- **2** ≤ **N** ≤ **100**
- **1** ≤ **L** ≤ **R** ≤ **106**

**Subtask #2 (30 points):**

- **2** ≤ **N** ≤ **1000**
- **1** ≤ **L** ≤ **R** ≤ **1018**

**Subtask #3 (60 points):**

- **2** ≤ **N** ≤ **106**
- **1** ≤ **L** ≤ **R** ≤ **1018**

### Example

<pre><b>Input:</b>
<tt>5 1 4
1 2 3 4 5</tt>

<b>Output:</b>
<tt>3</tt>

</pre>### Explanation
If Chef chooses the strand of length 1, he can't form a triangle using this strand and the any of the pair of strands of length 1, 2, 3, 4, 5. However, for each of the extra strand of length 2, 3, 4, one can find at least one pair of strands such that those pair of strands and the extra strand makes a triangle. So, the answer will be 3.
