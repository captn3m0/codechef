---
category_name: hard
problem_code: MAGIC
problem_name: 'Two Magicians'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: gennady.korotkevich
problem_tester: laycurse
date_added: 27-02-2012
tags:
    - aug12
    - game
    - gennady
    - graph
    - hard
editorial_url: 'http://discuss.codechef.com/problems/MAGIC'
time:
    view_start_date: 1344677923
    submit_start_date: 1344677923
    visible_start_date: 1344677400
    end_date: 1735669800
    current: 1493556766
layout: problem
---
All submissions for this problem are available.Two magicians are playing a funny game in a system of **N** rooms and **M** two-way passages between them. The rooms are small and the passages are straight, so no pair of rooms can ever be connected by more than one passage. Moreover, no two passages can ever intersect. The rooms are situated in 3D pretty well, so it's still possible for all pairs of rooms to be connected by passages at once.

Initially the first magician is located at room 1 and the second magician is located at (a candy for guessing!) room 2. Each magician has **P** _telepoints_ before the start. The game consists of _turns_, with the first magician taking the first turn and then both magicians taking turns alternately. Each turn consists of three _phases_. We'll call the magician taking the turn the _current_ magician.

In the first phase, the current magician can walk between rooms through the existing passages as much as he wants (he can choose not to move at all as well). Residing at one of the rooms, he announces that the phase is finished. If after this phase both magicians are found residing at the same room, the game ends and the current magician wins. Otherwise, the turn is continued.

In the second phase, the current magician must create a passage between any two rooms of the system which are not directly connected by a passage yet. If there is no such pair of rooms, the game ends and the current magician loses. Otherwise, the turn is continued.

In the third phase, the current magician can either stay at the same room or, if he has a strictly positive number of telepoints remaining, he can teleport into any of the rooms. In case of teleportation the current magician loses **1** telepoint. If after this phase the current magician turns out to be residing at the same room as the other one, nothing happens (though the current magician is likely to lose pretty soon).

You are given the information about the system of rooms and passages before the game. You'll get a point in the contest rankings if you find out which of the magicians is going to win considering them both playing optimally, that is, winning whenever there exists a guaranteed winning strategy.

### Input

The first line contains a single integer **T** -- the number of test cases (no more than 100). Each test case is described by an empty line followed by a line containing three integers **N**, **M** and **P** (2 ≤ **N** ≤ 7777, 0 ≤ **M** ≤ 10000, 0 ≤ **P** ≤ 10000) followed by **M** lines containing two integers **Xi** and **Yi** each (1 ≤ **Xi**, **Yi** ≤ **N**, **Xi** ≠ **Yi**). Each of these **M** lines describes a single two-way passage between rooms **Xi** and **Yi**. It's guaranteed that no two rooms are directly connected by more than one passage.

### Output

For each test case output a single line with a single word _First_ if the first magician has a winning strategy in this game, and _Second_ otherwise.

### Example

<pre>
<b>Input:</b>
4

2 0 0

3 1 0
1 3

4 0 1

4 1 1
3 4

<b>Output:</b>
Second
Second
Second
First

<b>Explanation:</b>
</pre>In the first two test cases, the game ends after the second turn (which is the first turn of the second magician) as the passage created by the first magician hands a win to the second magician. In the third test case, the game ends after the fourth turn (the second magician may need to use **1** telepoint here). In the fourth test case, the game ends after the third turn (the first magician has to use **1** telepoint here).
