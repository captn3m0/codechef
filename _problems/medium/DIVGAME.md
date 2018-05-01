---
category_name: medium
problem_code: DIVGAME
problem_name: 'Game of Divisors'
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
problem_author: kostya_by
problem_tester: gerald
date_added: 8-02-2014
tags:
    - cook44
    - easy
    - game
    - kostya_by
editorial_url: 'http://discuss.codechef.com/problems/DIVGAME'
time:
    view_start_date: 1395599400
    submit_start_date: 1395599400
    visible_start_date: 1395599400
    end_date: 1735669800
    current: 1493557633
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK44/mandarin/DIVGAME.pdf) and [Russian](http://www.codechef.com/download/translated/COOK44/russian/DIVGAME.pdf) as well.

Mike and his friend Tom are playing a very interesting game right now. Here is the description of the game:

- Initially, there is a positive integer **N** written on the desk, which is strictly greater than 1;
- Mike makes the first move, then players make moves alternatively;
- On each move the current player can either decrease the number on the desk by 1, or divide it by one of it's divisors except itself and 1; It's forbidden to decrease the number if it's equal to 1;
- If the current player can't make a move, then he loses. In other words, if there is "1" written on the desk right before his move, then he loses.

You are given a number **N**. You need to determine the winner of the game, if **N** is the number written of the desk initially. You may assume, that both players play optimally.

### Input

There are multiple test cases in the input. The first line of the input contains one integer **T**, denoting the number of test cases in the input.

The next **T** lines contain one integer each, denoting the initial number of the game.

All the test cases are independent and must be considered separately!

### Output

Your output should contain exactly **T** lines, each contains the name of the winner(Mike or Tom) of the corresponding game. You should output the verdicts of the games in the order they appear in the input.

### Constraints

1 ≤ **T** ≤ 10 000;

2 ≤ **N** ≤ 108, for each test case appeared in the input.

### Example

<pre><b>Input:</b>
4 
5 
3 
2 
4

<b>Output:</b>
Tom
Tom
Mike
Mike
</pre>