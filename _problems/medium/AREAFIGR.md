---
category_name: medium
problem_code: AREAFIGR
problem_name: 'Area of an amazing figure'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 25-11-2017
tags:
    - acm17chn
    - admin2
    - chn17rol
    - geometry
    - medium
    - monte
editorial_url: 'https://discuss.codechef.com/problems/AREAFIGR'
time:
    view_start_date: 1515357000
    submit_start_date: 1515357000
    visible_start_date: 1515357000
    end_date: 1735669800
    current: 1525198947
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.There is an equilateral triangle ABC with side length **2\*a**. The coordinates of the triangle's vertices are A = **(-a, 0)**, B = **(a, 0)** and C = **(0, sqrt(3) \* a)**. Next, there are three circles with centers at the midpoints of sides AB, BC and AC respectively and radii **r1**, **r2** and **r3** respectively. Compute the area of the intersection of the triangle and the three circles.

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first and only line of each test case contains four space-separated integers **a, r1, r2, r3**.

### Output

For each test case, print a single line containing one real number corresponding to the area of the intersection. Your answer will be considered correct if it has an absolute or relative error ≤ 5 \* 10-2.

### Constraints

- 1 ≤ **T** ≤ 20
- 1 ≤ **a** ≤ 50
- 1 ≤ **r1, r2, r3** ≤ 200
 
### Example

<pre>
<b>Input</b>

5
10 5 5 5
10 6 6 7
10 12 13 14
10 15 15 15
10 19 20 18

<b>Output</b>

0.0000000
1.417303000
138.1789
163.712
173.2064190
</pre>### Explanation

**Example case 2:** The black colored area shown in the figure is the intersection between the triangle and the three circles.

![](https://discuss.codechef.com/upfiles/triangle_semi_circles.png)
