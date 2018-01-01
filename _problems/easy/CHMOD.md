---
category_name: easy
problem_code: CHMOD
problem_name: 'Chef and Segments'
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
problem_author: furko
problem_tester: white_king
date_added: 11-05-2013
tags:
    - aug13
    - easy
    - exponentiation
    - furko
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHMOD'
time:
    view_start_date: 1376299800
    submit_start_date: 1376299800
    visible_start_date: 1376299800
    end_date: 1735669800
    current: 1493558127
layout: problem
---
All submissions for this problem are available.Chef likes toys. His favourite toy is an array of length **N**. This array contains only integers. He plays with this array every day. His favourite game with this array is **Segment Multiplication**. In this game, the second player tells the **left** and **right** side of a segment and some **modulo**. The first player should find **the multiplication of all the integers in this segment of the array modulo the given modulus**. Chef is playing this game. Of course, he is the first player and wants to win all the games. To win any game he should write the correct answer for each segment. Although Chef is very clever, he has no time to play games. Hence he asks you to help him. Write the program that solves this problem.

### Input

The first line of the input contains an integer **N** denoting the number of elements in the given array. Next line contains **N** integers **Ai** separated with spaces. The third line contains the number of games **T**. Each of the next T lines contain 3 integers **Li, Ri and Mi**, the left side of the segment, the right side of segment and the modulo.

### Output

For each game, output a single line containing the answer for the respective segment.

### Constrdaints

- **1 ≤ N ≤ 100,000**
- **1 ≤ Ai ≤ 100**
- **1 ≤ T ≤ 100,000**
- **1 ≤ Li ≤ Ri ≤ N**
- **1 ≤ Mi ≤ 109**

### Example

<pre>
<b>Input:</b>
5
1 2 3 4 5
4
1 2 3
2 3 4
1 1 1
1 5 1000000000

<b>Output:</b>
2
2
0
120


</pre>