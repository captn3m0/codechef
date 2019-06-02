---
category_name: hard
problem_code: BESTTRI
problem_name: 'Best Triangle'
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
max_timelimit: '7'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: mnbvmar
date_added: 18-03-2017
tags:
    - cook81
    - geometry
    - kingofnumbers
    - medium
editorial_url: 'https://discuss.codechef.com/problems/BESTTRI'
time:
    view_start_date: 1492972200
    submit_start_date: 1492972200
    visible_start_date: 1492972200
    end_date: 1735669800
    current: 1497589517
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK81/mandarin/BESTTRI.pdf), [Russian](http://www.codechef.com/download/translated/COOK81/russian/BESTTRI.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK81/vietnamese/BESTTRI.pdf) as well.

Given **N** points on a 2D plane and an integer **K**, choose 3 distinct points so that the area of the triangle whose vertices are the chosen points does not exceed **K**/2. If there are multiple such triangles, among all possible triangles choose the one which has maximum area.

### Input

First line contains two integers **N** and **K**.

Each of the next **N** lines contains two integers **Xi** and **Yi**, denoting the coordinates of the i-th point.

### Output

Output a single integer, the maximum area of a triangle which does not exceed **K**/2, multiplied by 2. If there's no valid triangle output -1 instead.

### Constraints

- 3 ≤ **N** ≤ 3000
- 1 ≤ **K** ≤ 1018
- 1 ≤ **Xi**,**Yi** ≤ 109
- No two points will have same coordinates
- No three points will be collinear

### Example 1

<pre><b>Input:</b>
4 7
1 1
5 1
3 3
3 2


<b>Output:</b>
4
</pre>
### Example 2

<pre><b>Input:</b>
3 7
1 1
4 1
1 4


<b>Output:</b>
-1
</pre>
### Example 3

<pre><b>Input:</b>
7 1234567890123
1234567 7654321
1111111 2222222
1212121 2323232
3333333 1122334
9292929 2929292
1234456 5654645
5435733 2342134


<b>Output:</b>
755024295480
</pre>
### Explanation

**Example case 1.** There are 4 triangles in total, and their areas are: 1, 1, 2 and 4. The ones which does not exceed 7/2 are 1, 1 and 2 so the biggest area is 2, and since we are required to multiply the area by 2 before outputting it, it becomes 4.

**Example case 2.** The only triangle has an area equal to 9/2, which is more than 7/2. So the answer is -1.
