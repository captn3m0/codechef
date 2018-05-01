---
category_name: medium
problem_code: MAXGAME
problem_name: 'Game Count'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: khadarbasha
problem_tester: laycurse
date_added: 15-05-2012
tags:
    - aug12
    - combinatorics
    - khadarbasha
    - recurrence
editorial_url: 'http://discuss.codechef.com/problems/MAXGAME'
time:
    view_start_date: 1344676609
    submit_start_date: 1344676609
    visible_start_date: 1344677400
    end_date: 1735669800
    current: 1493557785
layout: problem
---
All submissions for this problem are available.Tug of war is a sport that directly puts two teams against each other in a test of strength. During school days, both Chef Shifu and Chef Po were champions of tug of war. On behalf of restaurant's anniversary, Chef Shifu and Chef Po have decided to conduct a tug of war game for their customers. Master Chef Oogway has decided the following rules for the game.

1. Let **N** be the number of players participating in the game. All of these players would stand in a circle in clock wise direction.
2. There are an infinite number of long ropes available. When a rope is held by exactly two players, it is termed as bonding.
3. At least one bonding is necessary to conduct a game.
4. A player can play against multiple people simultaneously i.e he can have more than one bonding at the same time.
5. Both members of a pair of players that have a bonding must have the same number of total bondings. That is, if the player _A_ makes bonding with the player _B_, then the number of total bondings of the player _A_ must be the same as that of the player _B_.
6. Bondings should be created in such a fashion that ropes must not intersect each other.
7. The number of bondings of every player must be no more than **K**.

Now Master Chef Oogway asked Chef Shifu and Chef Po to find out the number of possible games. Your task is to help them find this number. As this number might become huge, you've to find it modulo (10^14+7). Two games are different iff there is some bonding that is present in only of them.

### Input

First line contains **T**, the number of test cases. Each of **T** lines contain 2 positive integers **N** and **K** separated by a space. ### Output

For each test case, output the number of ways to conduct the game modulo 100000000000007 (1014+7) in one line. ### Example

<pre>
<b>Input:</b>
3
3 2
4 0
2 1

<b>Output:</b>
4
0
1
</pre>**Explanation:**For the 1st case, there are 3 players. Let's call them p1, p2, p3. Different games possible are:
Game 1: p1-p2 (numbers of bondings of p1, p2 are 1 ≤ **K** = 2)
Game 2: p1-p3 (numbers of bondings of p1, p3 are 1 ≤ **K** = 2)
Game 3: p2-p3 (numbers of bondings of p2, p3 are 1 ≤ **K** = 2)
Game 4: p1-p2, p1-p3, p2-p3 (numbers of bondings of p1, p2, p3 are 2 ≤ **K**= 2) For the 2nd test case, we cannot form the game, because K = 0 and hence no player is allowed to make any bonding. As any game must have atleast one bonding, no game is possible here. For the 3rd case, only possible game is:
Game 1: p1-p2 (number of bondings in p1, p2 are 1) ### Constraints

1 ≤ **T** ≤ 10000 0 ≤ **N** ≤ 10000 0 ≤ **K** ≤ **N**
