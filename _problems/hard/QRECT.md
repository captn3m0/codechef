---
category_name: hard
problem_code: QRECT
problem_name: 'Rectangle Query'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: xiaodao
problem_tester: xcwgf666
date_added: 3-07-2014
tags:
    - fenwick
    - hard
    - sept14
    - sqrt
    - xiaodao
editorial_url: 'http://discuss.codechef.com/problems/QRECT'
time:
    view_start_date: 1410773400
    submit_start_date: 1410773400
    visible_start_date: 1410773400
    end_date: 1735669800
    current: 1493556801
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT14/mandarin/QRECT.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT14/russian/QRECT.pdf).

You are given a Cartesian plane, and you are asked to support the following three kinds of operations:

- **I x1 y1 x2 y2**: add an axes-parallel rectangle on the plane. The bottom-left corner has coordinates **(x1, y1)**, the top-right one has coordinates **(x2, y2)**
- **D index**: remove the retangle that was added during the **index**-th addition operation
- **Q x1 y1 x2 y2**: output the number of rectangles on the plane that have the common area with the rectangle with a bottom-left corner coordinates **(x1, y1)** and a top-right corner coordinates **(x2, y2)**.
  Please notice that, even if the two rectangles only share a common point, they are still regarded as sharing common area

Also, there can be a few same rectangles on the plane, they should be regarded as a few different rectangles.

There are **Q** operations in all, can you fulfill them?

### Input

The first line contains an integer **Q**.

The next **Q** lines represent the operations you are to deal with. Each of them contains an operation in one of the three forms above.

### Output

For each **Q**-type operation, output the result on the separate line of the output.

### Constraints

- 1 <= **Q** <= 100000
- 1 <= **x1** <= **x2** <= 109
- 1 <= **y1** <= **y2** <= 109

### Example

### ```
<pre style="font-size: 12px; font-weight: normal;"><strong>Input:</strong>
5
I 1 1 2 2
I 2 2 3 3
Q 3 3 4 4 
D 2
Q 3 3 4 4

<strong>Output:</strong>
1
0  
<pre>

### Explanation



</pre>In the third operation, the rectangle (2, 2)-(3, 3) has a common point with the given rectangle.
But in the fifth operation, as the rectangle (2, 2)-(3, 3) has been removed, so there are no rectangles that has the common area with the given rectangle.
<pre>