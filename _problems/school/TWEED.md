---
category_name: school
problem_code: TWEED
problem_name: 'Tweedle-Dee and Tweedle-Dum '
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
    - cakewalk
    - cook73
    - game
    - parity
editorial_url: 'http://discuss.codechef.com/problems/TWEED'
time:
    view_start_date: 1471804200
    submit_start_date: 1471804200
    visible_start_date: 1471804200
    end_date: 1735669800
    current: 1492506713
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK73/mandarin/TWEED.pdf), [Russian](http://www.codechef.com/download/translated/COOK73/russian/TWEED.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK73/vietnamese/TWEED.pdf) as well.

Tweedle-Dee and Tweedle-Dum are in a fierce battle playing even-odd nim. This novel game is played on **N** heaps. Heap **i** contains **ai** stones.

Like normal nim, Tweedle-Dee and Tweedle-Dum alternate taking a positive number of stones from any single one of the heaps, and the player that can't remove stones loses. However Tweedle-Dee can only take an even number of stones, and Tweedle-Dum can only take an odd number of stones.

Alice doesn't want to wait until the end of the game, so she asks you to determine the winner of the game. Remember that Tweedle-Dee and Tweedle-Dum are legendary grandmasters of combinatorial games, so they always play optimally.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each case consists of an integer **N** the number of heaps, and a string **P** the player that starts the game. String **P** is equal to "Dee" if Tweedle-Dee goes first, or "Dum" if Tweedle-Dum goes first.

The second line of each case contains **N** space separated integers **ai** the number of stones of the i-th heap.

### Output

For each test case, output a single line containing either "Dee" if Twedle-Dee winns the game or "Dum" otherwise.

### Constraints

- **1** ≤ **T** ≤ **50**
- **1** ≤ **N** ≤ **50**
- **1** ≤ **ai** ≤ **50**

### Example

<pre><b>Input:</b><tt>
1
2 Dee
2 2
</tt>
<b>Output:</b><tt>
Dum</tt>
</pre>### Explanation

Tweedle-Dee takes two stones from any of the heaps leaving just one non empty heap, next Tweedle-Dum takes one stone and the game finishes.
