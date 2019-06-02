---
category_name: medium
problem_code: MAXGRID
problem_name: 'Maximum Grid'
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
problem_author: kevind
problem_tester: xcwgf666
date_added: 28-06-2016
tags:
    - aug16
    - kevind
    - medium
    - segment
    - sweepline
editorial_url: 'http://discuss.codechef.com/problems/MAXGRID'
time:
    view_start_date: 1471253400
    submit_start_date: 1471253400
    visible_start_date: 1471253400
    end_date: 1735669800
    current: 1493557785
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG16/mandarin/MAXGRID.pdf), [Russian](http://www.codechef.com/download/translated/AUG16/russian/MAXGRID.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG16/vietnamese/MAXGRID.pdf) as well.

 There is an infinite grid given to you. Some of the cells in this infinite grid have gems in them. Each gem a parameter beauty associated with it which is given by a positive integer.

You will be given an integer **L**. You have to find maximum sum of beauties inside any square sub-grid with its side length being less than or equal to **L**. Let **S** be that number, i.e. the maximum sum of beauties for some sub-grid with side length no greater than **L**. You also have to find minimum side length such that there exists some sqaure sub-grid with that given side length with sum of beauties of gems inside it being equal to **S**.

### Input

First line of the input contains two space separated **N** and **L**, denoting the number of gems and the maximum allowed size of the sub-grid, respectively.

Each of the next **N** lines contains three space separated integers - **xi**, **yi** and **ci** denoting the **x**-coordinate, **y**-coordinate and the value of the **i**th gem respectively.

### Output

Output a single line containing two space separated integers: the maximum value of the sum of beauties of gem in some square sub-grid of the length not greater than **L** and the minimum side length of the square-grid which contains that much sum of beauties of gems inside it, respectively.

### Constraints

- **1** ≤ **L** ≤ **105**
- **1** ≤ **ci** ≤ **109**

### Subtasks

- **Subtask #1 (15 points):** **1** ≤ **N** ≤ **1000**, **1** ≤ **xi, yi** ≤ **2000**
- **Subtask #2 (25 points):** **1** ≤ **N** ≤ **105**, **1** ≤ **xi, yi** ≤ **2000**
- **Subtask #3 (60 points):** **1** ≤ **N** ≤ **105**, **1** ≤ **xi, yi** ≤ **105**

### Example

<pre><b>Input:</b>
<tt>3 2
1 1 1
2 1 1
3 1 5</tt>

<b>Output:</b>
<tt>6 2</tt>
</pre>
### Explanation

In the given example, you can create a 2X2 sub-grid with top-left corner as (2,1) and bottom right corner as (3,2) with value 6. All other sub-grids have value lower than or equal to this sub-grid.
