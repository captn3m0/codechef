---
category_name: easy
problem_code: SEALUP
problem_name: 'Sealing up'
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
problem_author: xcwgf666
problem_tester: errichto
date_added: 10-01-2017
tags:
    - dynamic
    - easy
    - geometry
    - ltime44
    - xcwgf666
editorial_url: 'https://discuss.codechef.com/problems/SEALUP'
time:
    view_start_date: 1485622800
    submit_start_date: 1485622800
    visible_start_date: 1485622800
    end_date: 1735669800
    current: 1493558186
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME44/mandarin/SEALUP.pdf), [Russian](http://www.codechef.com/download/translated/LTIME44/russian/SEALUP.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME44/vietnamese/SEALUP.pdf) as well.

January and February are usually very cold in ChefLand. The temperature may reach -20 and even -30 degrees Celsius. Because of that, many people seal up windows in their houses.

Sergey also lives in ChefLand. He wants to seal the window in his house. The window has the shape of a [simple convex polygon](https://en.wikipedia.org/wiki/Convex_polygon) with **N** vertices.

For the sealing, there are **M** kinds of sticky stripes, which are sold in the shops. The stripe of the **i**th type has the length of **Li** millimeters and the cost of **Ci** rubles.

The sealing process consists in picking the stripe and sticking it on the border of the window. The stripe can't be cut (it is made of very lasting material) and can only be put straight, without foldings. It is not necessary to put the strip strictly on the window border, it can possibly extend outside the border side of window too (by any possible amount). The window is considered sealed up if every point on its' border is covered with at least one stripe.

Now Sergey is curious about the stripes he needs to buy. He wonders about the cheapest cost, at which he can seal his window. Please help him.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of number of vertices in the polygon denoting Sergey's window.

Each of the following **N** lines contains a pair of space-separated integer numbers **Xi Yi**, denoting the coordinates of the **i**th points.

The following line contains a single integer **M** denoting the number of types of sticky stripe which is sold in the shop.

Each of the following **M** lines contains a pair of space-separated integers **Li Ci** denoting the length and the cost of the sticky stripe of the **i**th type respectively.

### Output

For each test case, output a single line containing the minimum cost of sealing up the window.

### Constraints

- **1** ≤ **T** ≤ **10**
- The coordinates of the window are given either in clockwise or in a counter-clockwise order.
- No three or more vertices lie on the same line (i.e. are collinear).
- 0 ≤ **Xi**, **Yi** ≤ **106**
- **1** ≤ **Li**, **Ci** ≤ **106**

### Subtasks

- **Subtask #1 (17 points):** **3** ≤ **N** ≤ **10**, **M** = **1**
- **Subtask #2 (24 points):** **3** ≤ **N** ≤ **42**, **M** ≤ **2**
- **Subtask #3 (59 points):** **3** ≤ **N** ≤ **2000**, **1** ≤ **M** ≤ **10**

### Example

<pre><b>Input:</b>
<tt>1
4
0 0
1000 0
1000 2000
0 2000
2
1000 10
2000 15</tt>

<b>Output:</b>
<tt>50</tt>
</pre>### Explanation

**Example case 1.** In this case, Sergey's window is a rectangle with the side lengths of **1000** and **2000**. There are two types of the sticky stripes in the shop - the one of the length 1000 with the cost of 10 rubles and with the length of 2000 and the cost of 15 rubles. The optimal solution would be to buy **2** stripes of the first type **2** stripes of the second type. The cost will be **2 × 15 + 2 × 10 = 50** rubles.
