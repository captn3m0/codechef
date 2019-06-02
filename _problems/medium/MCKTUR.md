---
category_name: medium
problem_code: MCKTUR
problem_name: 'Mock Turtle'
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
problem_author: alei
problem_tester: kingofnumbers
date_added: 21-07-2016
tags:
    - alei
    - catalan
    - combinatorics
    - cook73
    - medium
editorial_url: 'http://discuss.codechef.com/problems/MCKTUR'
time:
    view_start_date: 1471804200
    submit_start_date: 1471804200
    visible_start_date: 1471804200
    end_date: 1735669800
    current: 1493557792
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK73/mandarin/MCKTUR.pdf), [Russian](http://www.codechef.com/download/translated/COOK73/russian/MCKTUR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK73/vietnamese/MCKTUR.pdf) as well.

The Mock Turtle went to the ocean's school to become a true turtle! However instead of practicing the usual operations of addition, subtraction and division taught by the lecturers, she was always playing with parentheses.

A parentheses is defined using the following rules:

- An empty string is a parentheses.
- If **X** is a parentheses, then **(X)** is also a parentheses
- If **X** and **Y** are parentheses, then **XY** is also a parentheses
- Every parentheses can be created using the previous rules only.

A parentheses contains **k** blocks if it can be represented as the concatenation of exactly **k** non empty parentheses, but can not be represented as the concatenation of more than **k** non empty parentheses. For example ()(()) contains two blocks (i.e. () and (())) and (()()) contains just one block.

Every time Alice meets with the Mock Turtle they create two arrays of integers **a** and **b** both of length **N**, and play the following game **T** times: First Alice thinks of two integers **L** and **R**, then the Mock Turtle chooses two integers **i, j** such that **L ≤ i, j ≤ R** and builds all the parentheses of length **ai** that contains **bj** blocks. Since the Mock Turtle loves building parentheses, she will choose **i, j** in such a way that number of parentheses of length **ai** that contains **bj** blocks are maximized.

### Input

The first line of the input contains two integers **N, T** .

The following two lines containing **N** space separated integers representing the elements of array **a** and **b** respectively.

Then follows **T** lines, each one have two integers **L** and **R** representing one game.

### Output

For each game, output a single line containing the answer to the problem, since this number can be very large print it modulo **109+7**.

### Constraints

- **1** ≤ **N, T** ≤ **105**
- **1** ≤ **ai, bi** ≤ **2·105, ai** is even
- **1** ≤ **L** ≤ **R** ≤ **N**

### Example

<pre><b>Input:</b><tt>
5 2
4 6 2 4 8
3 3 3 3 3
2 4
1 5</tt>
<b>Output:</b><tt>
1
3</tt>
</pre>
### Explanation

In the **first query** the Mock Turtle can build only the parentheses ()()()

In the **second query** the three possible parentheses are

- ()()(())
- ()(())()
- (())()()
