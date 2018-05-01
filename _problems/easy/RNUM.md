---
category_name: easy
problem_code: RNUM
problem_name: 'Rupsa and Number army'
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
problem_author: abhra73
problem_tester: null
date_added: 16-05-2015
tags:
    - abhra73
    - ad
    - snck151b
editorial_url: 'http://discuss.codechef.com/problems/RNUM'
time:
    view_start_date: 1432954800
    submit_start_date: 1432954800
    visible_start_date: 1432954800
    end_date: 1735669800
    current: 1493558181
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCK151B/mandarin/RNUM.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK151B/russian/RNUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK151B/vietnamese/RNUM.pdf)

Princess Rupsa came across a very interesting game. In the game, you have to face against a number army consisting of **N** distinct integers **A1, A2, , , AN**. In one move, you can shoot one magic bullet aiming at an alive enemy number, say **X**. The magic bullet will kill **X** and it will also kill **X + 1** and **X - 1** if they are alive when the bullet is shot. Game ends when the entire number army is killed.

Princess Rupsa wants to find out the minimum and maximum number of moves that can be played in the game. But since she has recently found her true love and is in hurry to meet him, you must help her to solve the problem as fast as possible.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases.
- The first line of each test case contains a single integer **N**.
- The second line contains **N** space-separated integers denoting **A1** to **AN**.

### Output

- For each test case, output a single line containing two space separated integer denoting the minimum and maximum number of moves required respectively.

### Constraints

- **1 ≤ T ≤ 10**
- **1 ≤ N ≤ 105**
- **1 ≤ Ai ≤ 106**

### Example

<pre><b>Input:</b>
1
3
1 2 3

<b>Output:</b>
1 2
</pre>### Explanation

- For minimum moves, you could aim for **2**, killing **1**, **2** and **3** in the same move.
- For maximum moves, you could aim for **1**, killing **1** and **2** in the first move and then aim for **3** in the second move.
