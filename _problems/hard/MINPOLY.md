---
category_name: hard
problem_code: MINPOLY
problem_name: 'Devu, his sister and Rangoli'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 21-05-2015
tags:
    - admin2
    - cook58
    - geometry
    - hard
editorial_url: 'http://discuss.codechef.com/problems/MINPOLY'
time:
    view_start_date: 1432492200
    submit_start_date: 1432492200
    visible_start_date: 1432492200
    end_date: 1735669800
    current: 1493556772
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK58/mandarin/MINPOLY.pdf) and [Russian](http://www.codechef.com/download/translated/COOK58/russian/MINPOLY.pdf) as well.

As you know already, it is Devu's birthday today. He wants to make a [ Rangoli ](http://en.wikipedia.org/wiki/Rangoli) to decorate his house. He created **n** points having integer coordinates on the front door of his house. He also made sure no three points are collinear in it because collinear points break beauty of it. For each point, there is parameter beauty which is a positive integer.

Now, when Devu's little sister saw the points drawn, she thought of creating patterns by drawing a convex polygon by choosing some of the **n** point as vertices of it. Also, as she is very naughty, instead of creating most beautiful pattern, she wants to create least beautiful pattern. Beauty of a polygon is sum of beauties of all the points lying inside or on the boundary of it.

You have to help Devu's sister in finding out the least beauty of convex polygon of **k** vertices. If it is impossible to find such a convex polygon, print -1. Otherwise print the minimum weight of the convex polygon you can have. Please solve the problem for all **k**'s from 3 to **n**.

### Input

- There is a single test case.
- First line contains a single integer **n** as defined in the problem.
- Then in the next **n** lines, each line contains three space separated integers **x, y, b** denoting that there is a point with coordinates **(x, y)** with beauty equal to **b**.

### Output

Print **n - 2** space separated integers corresponding to the answer for **k** = 3 to **n** as asked in the problem.

### Constraints

- **3** ≤ **n**  **≤ 50**
- **- 105** ≤ **x, y**  **≤ 105**
- **1** ≤ **b**  **≤ 105**
- No three or more points are collinear.
- All the points in the input are distinct.

### Example

<pre><b>Input:</b>
3
0 0 1
1 0 2
0 1 3
<b>Output:</b>
6
</pre>
<pre><b>Input:</b>
4
0 0 1
1 0 2
0 1 3
1 1 2
<b>Output:</b>
5 8
</pre>
### Explanation

**Example case 1.** The triangle given in the input has beauty equal to 6.

**Example case 2.** One of the triangles has a beauty of 5 whereas there is only one rectangle which has beauty equal to 8.
