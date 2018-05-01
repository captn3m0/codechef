---
category_name: hard
problem_code: TUZTRN
problem_name: 'Puppy and Triangles'
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
problem_author: pavel1996
problem_tester: kostya_by
date_added: 22-01-2016
tags:
    - cook67
    - geometry
    - implementation
    - maths
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/TUZTRN'
time:
    view_start_date: 1456081200
    submit_start_date: 1456081200
    visible_start_date: 1456081200
    end_date: 1735669800
    current: 1493557001
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK67/mandarin/TUZTRN.pdf), [Russian](http://www.codechef.com/download/translated/COOK67/russian/TUZTRN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK67/vietnamese/TUZTRN.pdf) as well.

Puppy Tuzik has recently found two triangles and a quadrilateral cut out from a large sheet of paper. Being a curious puppy, Tuzik started thinking of a game with these three geometric figures. All of a sudden, a thrilling idea crossed his mind! He wonders whether it's possible to combine these triangles by moving, flipping and/or rotating them, and cover exactly the quadrilateral with no overlap between the two triangles. Giving the coordinates of the triangles and the quadrilateral, your task is to answer the question: whether it's possible to combine the triangles to cover exactly the given quadrilateral?

### Input

The first line contains one integer **T** denoting the number of test cases.

The description of each test case consists of **ten** lines, each containing two integers denoting the coordinates of a point on the Cartesian plane. The first **three** lines of the test case description contain the points forming the first triangle. The next **three** lines describe the points forming the second triangle. The last **four** give the points forming the quadrilateral and are given in either a clockwise order, or a counterclockwise order.

It's guaranted that all the figures have a non-zero area and do not self-intersect or self-touch.

### Output

For each test case, output a line with the string **Yes** or **No**, denoting the answer to the question.

### Constraints

- **1** ≤ **T** ≤ **600**
- **-20000** ≤ **x, y** ≤ **20000** for each point in the input

### Example

<pre><b>Input:</b>
2
0 0 
1 0
1 1 
3 3 
2 2 
3 2 
5 5 
5 4 
4 4 
4 5 
0 0
2 2
2 0
1 1 
1 2
2 2
0 0
0 1
1 1
1 0

<b>Output:</b>
Yes
No
</pre>### Explanation

The figures from the first test case of the sample:

![](https://s3.amazonaws.com/codechef_shared/download/COOK67/1.png)

The figures from the second test case of the sample:

![](https://s3.amazonaws.com/codechef_shared/download/COOK67/3.png)
