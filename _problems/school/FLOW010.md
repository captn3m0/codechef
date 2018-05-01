---
category_name: school
problem_code: FLOW010
problem_name: 'Id and Ship'
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
problem_author: vicky002
problem_tester: null
date_added: 27-04-2015
tags:
    - vicky002
time:
    view_start_date: 1436519986
    submit_start_date: 1436519986
    visible_start_date: 1436519986
    end_date: 1735669800
    current: 1492507608
layout: problem
---
All submissions for this problem are available.Write a program that takes in a letterclass ID of a ship and display the equivalent string class description of the given ID. Use the table below.

Class ID Ship ClassB or bBattleShipC or cCruiserD or dDestroyerF or fFrigate### Input

The first line contains an integer **T**, total number of testcases. Then follow **T** lines, each line contains a character.

### Output

Display the Ship Class depending on ID.

### Constraints

- 1 **≤** **T** **≤** 1000

### Example

<pre>
<b>Input</b>

3 
B
c
D

<b>Output</b>
BattleShip
Cruiser
Destroyer
</pre>