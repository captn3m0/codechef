---
category_name: challenge
problem_code: BLOCKS
problem_name: 'Block Tower'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1.33'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: anshuman_singh
date_added: 9-06-2010
tags:
    - challenge
    - july10
    - pieguy
editorial_url: 'http://discuss.codechef.com/problems/BLOCKS'
time:
    view_start_date: 1278915452
    submit_start_date: 1278915452
    visible_start_date: 1278915520
    end_date: 1735669800
    current: 1525454414
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Dave has several rectangular blocks with which he wishes to build a tower. He may only place a block on another if its base fits within the other's base with the edges parallel. So he could place a block with a base of 1x9 on top of a block with a base of 2x9, but not on top of a block with a base of 8x8. Help Dave make the tower as tall as possible. Blocks may be rotated by any multiple of 90 degrees about any axis. Each block may only be used once, and you must use at least 3 blocks.

### Input:

Input begins with an integer T (about 500), the number of test cases. Each test case begins with an integer N (chosen uniformly between 10 and 200, inclusive), the number of blocks. N lines follow, each containing 3 integers that give the dimensions of a block. All dimensions are chosen uniformly between 1 and 100, inclusive. A blank line separates each case.

### Output:

For each case, first ouput an integer P>=3, indicating the number of blocks you wish to use. Follow with P lines, each containing the dimensions of a block, with the height of the block listed first (the order of the other 2 dimensions does not matter). Output the blocks in order from the top of the tower to bottom of the tower.

### Scoring

Your score for each test case is the height of your tower divided by N. Your total score is the average of your scores on the individual test cases. ### Sample input:

<pre>1

10
7 2 10
8 8 8
7 1 1
2 7 9
6 8 1
6 6 5
3 2 5
10 3 9
10 10 8
4 4 1
</pre>### Sample output:

<pre>5
4 1 4
1 1 7
10 2 7
2 7 9
8 10 10

</pre>Score: (4+1+10+2+8)/10 = 2.5
