---
category_name: school
problem_code: PALL01
problem_name: 'The Block Game'
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
problem_author: karthikv1392
problem_tester: null
date_added: 29-04-2015
tags:
    - karthikv1392
time:
    view_start_date: 1436519986
    submit_start_date: 1436519986
    visible_start_date: 1436519986
    end_date: 1735669800
    current: 1492507608
layout: problem
---
All submissions for this problem are available.The citizens of Byteland regularly play a game. They have blocks each denoting some integer from 0 to 9. These are arranged together in a random manner without seeing to form different numbers keeping in mind that the first block is never a 0. Once they form a number they read in the reverse order to check if the number and its reverse is the same. If both are same then the player wins. We call such numbers _palindrome_

Ash happens to see this game and wants to simulate the same in the computer. As the first step he wants to take an input from the user and check if the number is palindrome and declare if the user wins or not

### Input

The first line of the input contains T, the number of test cases. This is followed by T lines containing an integer N.

### Output

For each input output "wins" if the number is a palindrome and "losses" if not.

### Constraints

1<=T<=20 
1<=N<=10000

<pre><b>Input:</b>
3
331
666
343

<b>Output:</b>
losses
wins
wins
</pre>