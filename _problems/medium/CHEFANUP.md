---
category_name: medium
problem_code: CHEFANUP
problem_name: 'Chef Anup'
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
problem_author: piyushkumar
problem_tester: xcwgf666
date_added: 12-03-2015
tags:
    - cakewalk
    - ltime22
    - maths
    - piyushkumar
editorial_url: 'http://discuss.codechef.com/problems/CHEFANUP'
time:
    view_start_date: 1427617800
    submit_start_date: 1427617800
    visible_start_date: 1427617800
    end_date: 1735669800
    current: 1493557513
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME22/mandarin/CHEFANUP.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME22/russian/CHEFANUP.pdf).

Chef Anup is making dishes. Each dish consists of **N** ingredients, and quantity of each ingredient is an integer between 1 and **K** inclusive.

Relative quality of 2 dishes is determined by their lexicographic order. Dish **A** is of lower quality than dish **B** if there is a position i (1Aj = **Bj** for all j Ai Bi. 
E.g., if N = 2 and K = 2, then the possible dishes in lexicographic order are (1,1), (1,2), (2,1), (2,2).

Given an integer **L**, determine the **L**th possible dish in increasing order of quality.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- Each test case description consists of a single line containing three integers **N**, **K** and **L** as described above.

### Output

- For each test case, print N space-separated integers in a single line describing the quantities of the ingredients for the Lth dish.

### Constraints

- **1** ≤ **T** ≤ **10**
- For 20 points : **N** = **3**, **2** ≤ **K** ≤ **102**, **1** ≤ **L** ≤ **106**
- For 30 points : **1** ≤ **N** ≤ **102**, **2** ≤ **K** ≤ **102**, **1** ≤ **L** ≤ **104**
- For 50 points : **1** ≤ **N** ≤ **103**, **2** ≤ **K** ≤ **103**, **1** ≤ **L** ≤ **1018**
- **L** will not exceed the total number of possible dishes.

### Example

<pre><b>Input:</b>
4
3 3 1
3 3 2
3 3 3
3 3 4

<b>Output:</b>
1 1 1
1 1 2
1 1 3
1 2 1

</pre>### Explanation
First 4 dishes in order have ingredients (1,1,1), (1,1,2), (1,1,3), and (1,2,1).

<pre><b>Input:</b>
4
4 3 1
4 3 2
4 3 3
4 3 4

<b>Output:</b>
1 1 1 1
1 1 1 2
1 1 1 3
1 1 2 1

</pre>### Explanation
First 4 dishes in order have ingredients (1,1,1,1), (1,1,1,2), (1,1,1,3), and (1,1,2,1).
