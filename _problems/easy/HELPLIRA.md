---
category_name: easy
problem_code: HELPLIRA
problem_name: 'Helping Lira'
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
problem_author: kuruma
problem_tester: shangjingbo
date_added: 26-02-2013
tags:
    - cakewalk
    - geometry
    - kuruma
    - oct13
editorial_url: 'http://discuss.codechef.com/problems/HELPLIRA'
time:
    view_start_date: 1381743000
    submit_start_date: 1381743000
    visible_start_date: 1381743000
    end_date: 1735669800
    current: 1493558152
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Mandarin Chinese [here](http://www.codechef.com/download/translated/OCT13/mandarin/HELPLIRA.pdf)

### Problem Statement

Lira is a little girl form Bytenicut, a small and cozy village located in the country of Byteland.

 As the village is located on a somewhat hidden and isolated area, little Lira is a bit lonely and she needs to invent new games that she can play for herself.

 However, Lira is also very clever, so, she already invented a new game.

She has many stones with her, which she will display on groups of three stones on the ground on a triangle like shape and then, she will select two triangles, one with the smallest area and one with the largest area as the most beautiful ones.

While it's easy for Lira to "estimate" the areas of the triangles by their relative sizes, it's harder for her to actually calculate these areas.

But, it turns out, that Lira is also friends with YOU, an exceptional Mathematics student, and she knew that you would know exactly how to do such verification.

Lira also numbered the triangles from 1 to **N**, and now she wants to know the indices of the triangles with the smallest and largest area respectively.

It is now up to you, to help Lira and calculate the areas of the triangles and output their numbers.

### Input

The first line of the input file contains an integer, **N**, denoting the number of triangles on the given input file.

Then **N** lines follow, each line containing **six** space-separated integers, denoting the coordinates x1, y1, x2, y2, x3, y3

### Output

You should output two space separated integers, the indexes of the triangles with the smallest and largest area, respectively.

If there are multiple triangles with the same area, then the last index should be printed.

### Constraints

- **2** ≤ **N** ≤ **100**
- **-1000** ≤  **xi, yi**  ≤ **1000**

### Example


<pre><b>Input:</b>
2
0 0 0 100 100 0
1 1 1 5 5 1

<b>Output:</b>
2 1

</pre>