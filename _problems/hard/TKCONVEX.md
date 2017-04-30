---
category_name: hard
problem_code: TKCONVEX
problem_name: 'Two k-Convex Polygons'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: shangjingbo
problem_tester: tuananh93
date_added: 16-04-2013
tags:
    - june13
    - math
    - medium
    - shangjingbo
editorial_url: 'http://discuss.codechef.com/problems/TKCONVEX'
time:
    view_start_date: 1371462407
    submit_start_date: 1371462407
    visible_start_date: 1371460885
    end_date: 1735669800
    current: 1493556875
layout: problem
---
All submissions for this problem are available.Given **n** sticks' lengths, determine whether there is a solution to choose **2k** out of them and use these **2k** sticks to form two **k**-convex polygons (non-degenerated), namely, two convex polygons each has exactly **k** sticks as its sides, and every adjacent sticks are not parallel.

### Input

The first line contains two space-separated integers **n** and **k**, denoting the number of sticks and the size of convex polygon we needed.

The second line contains **n** positive integers, denoting the lengths of sticks.

### Output

Print "Yes" (without quotes) in the first line if exists a solution. Otherwise print "No" (without quotes) instead.

If such solution exists, you should output a plan in the second line. Print **2k** indexes (indexes start from **1**) of the sticks you chosen. First **k** sticks compose the first **k**-convex polygon. And the later **k** sticks form the second. If there are more than one solution, output any.

### Constraints

- **2k** ≤ **n** ≤ **1000**
- **3** ≤ **k** ≤ **10**
- **1** ≤ **length of each stick** ≤ **109**

### Example

```

<b>Input 1:</b>
6 3
1 1 1 2 2 2

<b>Output 1:</b>
Yes
1 2 3 4 5 6


<b>Input 2:</b>
6 3
1 2 3 100 200 300

<b>Output 2:</b>
No

```
### Explanation

**Example case 1:** 1 1 1 and 2 2 2 form two triangles.

**Example case 2:** Please be careful that convex polygons must be non-degenerated.