---
category_name: easy
problem_code: PLANEDIV
problem_name: 'Plane Division'
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
problem_author: cenadar
problem_tester: xcwgf666
date_added: 19-09-2015
tags:
    - cenadar
    - dec15
    - euclidean
    - gcd
    - parallel
    - sets
    - simple
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/PLANEDIV'
time:
    view_start_date: 1450085400
    submit_start_date: 1450085400
    visible_start_date: 1450085400
    end_date: 1735669800
    current: 1493558174
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC15/mandarin/PLANEDIV.pdf), [Russian](http://www.codechef.com/download/translated/DEC15/russian/PLANEDIV.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC15/vietnamese/PLANEDIV.pdf) as well.

Chef is working with lines on a 2-D plane.

He knows that every line on a plane can be clearly defined by three coefficients **A**, **B** and **C**: any point **(x, y)** lies on the line if and only if **A \* x + B \* y + C = 0**.

Let's call a set of lines to be _perfect_ if there does not exist a point that belongs to two or more distinct lines of the set.

He has a set of lines on a plane and he wants to find out the size of the largest _perfect_ subset of this set.

### Input

The first line of input contains one integers **T** denoting the number of test cases.

Each test case consists of one integer **N** denoting number of lines.

Next **N** lines contain **3** space-separated integers each denoting coefficients **A**, **B** and **C** respectively.

### Output

For each test case output the cardinality of the largest perfect subset in a single line.

### Constraints

- **1** ≤ **N** ≤ **Nmax**
- Sum over all **N** for all test cases ≤ **NSmax**
- **|A|, |B|, |C|** ≤ **109**
- For a line with coefficients **A**, **B** and **C** either **A** or **B** is not zero.

### Subtasks

- **Subtask #1 \[35 points\]: Nmax = 5000, NSmax = 50000**
- **Subtask #2 \[65 points\]: Nmax = NSmax = 105**

### Example

<pre><b>Input:</b>
<tt>1
5
1 0 0
1 2 3
3 4 5
30 40 0
30 40 50</tt>

<b>Output:</b>
<tt>2</tt>

</pre>### Explanation
Lines **3\*x + 4\*y + 5 = 0** and **30\*x + 40\*y + 0 = 0** form a biggest perfect subset.
