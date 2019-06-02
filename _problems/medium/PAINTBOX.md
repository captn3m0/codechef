---
category_name: medium
problem_code: PAINTBOX
problem_name: 'Painting the Boxes'
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
problem_author: piyushkumar
problem_tester: xcwgf666
date_added: 11-03-2015
tags:
    - ltime22
    - medium
    - piyushkumar
    - segment
    - sets
editorial_url: 'http://discuss.codechef.com/problems/PAINTBOX'
time:
    view_start_date: 1427617800
    submit_start_date: 1427617800
    visible_start_date: 1427617800
    end_date: 1735669800
    current: 1493557924
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME22/mandarin/PAINTBOX.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME22/russian/PAINTBOX.pdf).

Anup has **N** boxes. He painted them.

He wants to pick **W** adjacent boxes and give it to Suraj on his birthday. He wants all the **W** boxes he gifts to be of same colour. Anup repaints some of the boxes, and asks how many ways are there to gift **W** boxes to Suraj. Can you please help him out?

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a two integers **N** denoting the number of boxes and **W** denoting the number of adjacent boxes that he wants to gift Suraj. The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the initial colours of the boxes.
- Third line of each test case contains a single integer **Q**, denoting the number of times Anup repainted a box. **Q** lines follow, each containing two integers **Posi** and **Coli** meaning that Posth box was repainted with colour Col.

### Output

- After each repainting query, output the number of ways Anup can gift Suraj W adjacent boxes of the same colour.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **W, Pos** ≤ **N**
- **1** ≤ **Ai, Col** ≤ **109**
- For 30 points : **1** ≤ **Q** ≤ **103**, **1** ≤ **N** ≤ **104**
- For 70 points : **1** ≤ **Q** ≤ **104**, **1** ≤ **N** ≤ **105**

### Example

<pre><b>Input:</b>
1
4 2
1 1 1 1
3
1 1
1 2
2 2

<b>Output:</b>
3
2
2
</pre>
### Explanation

After the first repaint the boxes are coloured (1,1,1,1), which means 3 ways to choose 2 adjacent boxes of the same colour.
After the second repaint the boxes are coloured (2,1,1,1), which means 2 ways to select 2 adjacent boxes of the same colour.
After the third repaint thee boxes are coloured (2,2,1,1), which means 2 ways to select 2 adjacent boxes of the same colour.
