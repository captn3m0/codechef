---
category_name: medium
problem_code: CHEFGM
problem_name: 'Chef Game'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: div_adm
problem_tester: null
date_added: 22-08-2012
tags:
    - div_adm
    - easy
    - game
    - nov13
editorial_url: 'http://discuss.codechef.com/problems/CHEFGM'
time:
    view_start_date: 1384162200
    submit_start_date: 1384162200
    visible_start_date: 1384162200
    end_date: 1735669800
    current: 1493557528
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV13/mandarin/CHEFGM.pdf) and [Russian](http://www.codechef.com/download/translated/NOV13/russian/CHEFGM.PDF).

Chef Ciel is playing a game with one of her colleagues.

 In this game, there are _k_ piles of numbers. There are _ni_ numbers in _i_th pile. In each move, player has to select a pile and finally a number from that pile. After that, all the numbers which are greater than or equal to chosen number will be removed from that pile. Players take turn alternatively. Player who is unable to move loses the game.

Chef Ciel always make first move. But before making her move, she must choose either EVEN or ODD. If she chooses even then each time she selects a number it must be even and her opponent must select odd number in his/her turn. And vice versa for the other case.

Please help Chef Ciel to make her choice. If neither choice can make her win game, print DON'T PLAY otherwise EVEN or ODD depending on which choice she should make to win game. If you think then you will understand BOTH can not be answer.

Assume that both players play intelligently, if they can force win they will.

 **Input :** 
 First line of test case contains t, number of test cases.
 Then t test cases follow. First line of each test case contains k, number of piles. 
 Then description of k piles follow. _i_th pile description contains number _ni_, then _ni_ numbers follow in the same line.

**Output :** 
 Print "EVEN", "ODD" or "DON'T PLAY" accordingly.

**Constraints :**  t <= 1000, k <=100, ni <= 45. Numbers in pile will be non-negative and less than 2^31.

**Sample Input :**

2

2 

2 3 4

2 4 5

1

3 1 2 3

**Sample Output :**

DON'T PLAY
ODD

**Explanation:**

In the first test case, if you have chosen ODD to play with, it means you will select only ODD numbers and your opponent may choose only EVEN numbers. So you have two options. Either select 3 from first pile or 5 from second pile. If 3 is selected, 3 and 4 are removed from first pile and in next move your opponent's only move will be 4 from second pile removing every numbers thus you lose. If you had selected 5, then your opponent's optimal move would be selecting 4 from first pile. Next you will select 3 and your opponent 4 leaving nothing for you. So if you choose ODD you will lose. Similarly if you choose EVEN you will lose as well. So the answer is DON'T Play.

In the second case, if you choose ODD just select 1 and you will win. If you choose EVEN you have only one move that is 2, and in response your opponent will choose 1 and leave you nothing. Thus answer is ODD.
