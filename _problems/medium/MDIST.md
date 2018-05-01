---
category_name: medium
problem_code: MDIST
problem_name: 'Devu and Manhattan Distance'
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
problem_author: amitpandeykgp
problem_tester: xcwgf666
date_added: 21-04-2015
tags:
    - amitpandeykgp
    - easy
    - ltime24
    - segment
editorial_url: 'http://discuss.codechef.com/problems/MDIST'
time:
    view_start_date: 1433061000
    submit_start_date: 1433061000
    visible_start_date: 1433061000
    end_date: 1735669800
    current: 1493557792
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME24/mandarin/MDIST.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME24/russian/MDIST.pdf).

Devu has taken the course of computational geometry in the university of Coderpur. He liked this course very much. Today, he got to know about the Manhattan distance and got an assignment for the same topic. Manhattan distance between two points **(x1,y1)** and **(x2,y2)** can be defined as:

 **Manhattan Distance = abs(x1-x2) + abs(y1-y2)**

Devu has N points in the Co-ordinate plane. Co-ordinate of **ith** point is **(xi,yi)**. Points are indexed from 0 to **(N-1)**(both inclusive).

He has **Q** updates or queries, for each update **U\[i, x,y\]**, change the co-ordinate of **ith** point to **(x,y)**.

For each query **\[L,R\]**, find pair of points whose indices are between **L** and **R**(both inclusive) , such that Manhattan distance between them is maximized. Report the maximum Manhattan distance for each of the query.

Devu has to submit the assignment on the Monday, so help him in solving the problem.

### Input

- First line of the input will contain an integer **N** denoting the number of the points in Cartesian plane.
- Next **N** lines will be containing the co-ordinates of the **N** points.
- Next line will contain an integer **Q** denoting the number of the queries.
- Next **Q** lines will be containing character **'Q'** followed by pair of indices for each of the query or **'U'** followed by value of **i,x** and **y** for the update.

### Output

For each query, print a single integer representing the answer of that query.

### Constraints

- **0 ≤ L ≤ R ≤ N-1**
- **-109 ≤ x,y ≤ 109**

**Subtask #1: 20 points**

- **1 ≤ N,Q ≤1000.**

**Subtask #3: 80 points**

- **1 ≤ N,Q ≤ 105**

### Example

<pre><b>Input:</b>
4
10 10
10 20
20 20
20 10
2
U 1 20 20
Q 0 3

<b>Output:</b>
20
</pre>### Explanation

After first updates points will be:

10 10

20 20

20 20

20 10

So, maximum Manhattan distance will be between points **(10,10)** and **(20,20)**, which will be **20**.
