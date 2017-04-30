---
category_name: easy
problem_code: NUMBERS
problem_name: 'Lucy and the Number Game'
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
problem_author: xcwgf666
problem_tester: Rubanenko
date_added: 13-10-2013
tags:
    - cakewalk
    - ltime06
    - sorting
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/NUMBERS'
time:
    view_start_date: 1385283720
    submit_start_date: 1385283720
    visible_start_date: 1385283720
    end_date: 1735669800
    current: 1493558171
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/LTIME06/russian/NUMBERS.pdf)

Lucy had recently learned the game, called Natural Numbers.

The rules of the game are really simple. There are **N** players. At the same time, every player says one natural number. Let's call the number said by the **i**-th player **Ai**. The person with the smallest unique number (that is, the smallest number that was not said by anybody else) wins. Sometimes, there is a case when there are no unique numbers at all. Then the game is obviously a draw, so nobody wins it.

Sometimes, it's hard to determine the winner, especially, when the number of players is enormous. So in this problem, your assignment will be: given the names of the players and the numbers every of them have said. Please, tell the name of the winner, or determine that nobody wins.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of every test case consists of a single integer **N** - the number of players. Then, **N** lines will follow. Each of these **N** lines will consist of the player's name and the number **Ai** said by her, separated by a single space.

### Output

For each test case, output a single line containing an answer to the corresponding test case - the name of the winner, or a string "Nobody wins.", if nobody wins the game.

### Example

```
<b>Input:</b>
2
5
Kouta 1
Yuka 1
Mayu 3
Lucy 2
Nana 5
2
Lucy 2
Nana 2

<b>Output:</b>
Lucy
Nobody wins.

```
### Scoring

Subtask 1 (17 points): **T** = 10000, 1 <= **N** <= 10, 1 <= **Ai** <= 10 

Subtask 2 (19 points): **T** = 10000, 1 <= **N** <= 10, 1 <= **Ai** <= 2\*109

Subtask 3 (30 points): **T** = 100, 1 <= **N** <= 1000, 1<= **Ai** <= 2\*109

Subtask 4 (34 points): **T** = 10, 1 <= **N** <= 10000, 1 <= **Ai** <= 2\*109

You can safely assume that in all the test cases the length of any name will not exceed five letters. All the players' names are unique.