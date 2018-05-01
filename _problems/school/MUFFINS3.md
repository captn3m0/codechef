---
category_name: school
problem_code: MUFFINS3
problem_name: 'Packaging Cupcakes'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: anton_lunyov
date_added: 26-11-2012
tags:
    - cakewalk
    - cook29
    - pieguy
    - simple
editorial_url: 'http://discuss.codechef.com/problems/MUFFINS3'
time:
    view_start_date: 1356288316
    submit_start_date: 1356288316
    visible_start_date: 1356288262
    end_date: 1735669800
    current: 1492507641
layout: problem
---
All submissions for this problem are available.Now that Chef has finished baking and frosting his cupcakes, it's time to package them. Chef has **N** cupcakes, and needs to decide how many cupcakes to place in each package. Each package must contain the same number of cupcakes. Chef will choose an integer **A** between 1 and **N**, inclusive, and place exactly **A** cupcakes into each package. Chef makes as many packages as possible. Chef then gets to eat the remaining cupcakes. Chef enjoys eating cupcakes very much. Help Chef choose the package size **A** that will let him eat as many cupcakes as possible.

### Input

Input begins with an integer **T**, the number of test cases. Each test case consists of a single integer **N**, the number of cupcakes.

### Output

For each test case, output the package size that will maximize the number of leftover cupcakes. If multiple package sizes will result in the same number of leftover cupcakes, print the largest such size.

### Constraints

- 1 ≤ **T** ≤ 1000
- 2 ≤ **N** ≤ 100000000 (108)

### Sample Input

<pre>2
2
5
</pre>### Sample Output

<pre>2
3
</pre>### Explanation

In the first test case, there will be no leftover cupcakes regardless of the size Chef chooses, so he chooses the largest possible size. In the second test case, there will be 2 leftover cupcakes.
