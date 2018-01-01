---
category_name: medium
problem_code: COTA
problem_name: 'Chef of The Ancient'
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
problem_author: shiplu
problem_tester: rustinpiece‎
date_added: 31-01-2014
tags:
    - bitmasking
    - cook43
    - graph
    - hard
    - shiplu
    - shortest
editorial_url: 'http://discuss.codechef.com/problems/COTA'
time:
    view_start_date: 1392575400
    submit_start_date: 1392575400
    visible_start_date: 1392575400
    end_date: 1735669800
    current: 1493557603
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK43/mandarin/COTA.pdf) and [Russian](http://www.codechef.com/download/translated/COOK43/russian/COTA.pdf) as well.

Chef likes to play computer games very much. Recently he played a new game, Dota 2.
Chef is thinking to start a new game called Cota (Chef of the ancient).
There will be two teams in Cota, Radiant and Dire.

There are **2\*N** players in Cota and the players are numbered by integers from  to **2\*N – 1**.
Each team will have **N** players. One team will have all the players with even numbers **(0, 2, …, 2\*N - 2)**
and other team will have all the odd numbered players **(1, 3, …, 2\*N – 1)**.

Some of the players are friends and the power of their friendship can be expressed by an integer number.
If player **u** and player **v** are friends, their power of friendship is **Pu,v** (or **Pv,u**).

Chef wants to select some players(at least one) as elite players.
An elite player can be a member of Radiant or Dire.
But each Radiant member (maybe non-elite) should have odd number of elite friends and each Dire member (maybe non-elite) should have even number of elite friends (possibly zero).
So Chef has to break some friendships( possible zero) to make that happen.
Chef can break up friendships between any two players but cannot build any new friendship.
As Chef can break up any pair of friendships and he is quite rude, so he breaks up all friendships that are between a elite and a non-elite player ie. there cannot be a friendship between a elite and a non-elite player at all.

He will break the other friendships in such a way that the total power of remaining friendships between elite players
is minimized and also the restriction above is maintained.

Chef has not yet decided which team will be Radiant and which one will be Dire. It is your task to assign teams such that the total power of remaining friendships between elite players is minimized.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

First line contains two space separated integers **N** and **M**. Each of the next **M** lines contain three space separated integers **u**, **v** and **Pu,v**, means **u** and **v** are friends and the power of their friendship is **Pu,v**. No friendship will be mentioned twice in a test case

### Output

For each test case print the minimum total power of friendship between elite players after assigning the teams
and breaking up the friendships.

There will always be a valid answer.

### Constraints

- **1** ≤ **T** ≤ **50**
- **2** ≤ **N** ≤ **18**
- **N** is divisible by **2**
- **2\*N-1** ≤ **M** ≤ **2\*N(2\*N-1)/2**
- ≤ **u, v** ≤ **2\*N-1** and **u** ≠ **v**
- **1** ≤ **Pu,v** ≤ **106**
- For each player **u** and **v (u≠v)** , there is a sequence **x0, x1, ... xk**, where **x0 = u** and **xk = v** and player **xi** and **xi+1** (**0≤i<k**) are friends of each other.

### Example

<pre><b>Input:</b>
2
2 5
1 2 6
0 3 1
2 0 7
0 1 4
3 1 8
4 11
1 6 6
4 3 1
6 4 7
4 5 4
0 3 2
5 7 7
0 2 8
2 6 6
3 7 8
6 0 9
6 5 5

<b>Output:</b>
5
9

</pre>### Explanation
**Example case 1.** If the odd numbered players are assigned as Radiant and even numbered players as Dire, and Chef assigns players {0, 1, 3} as elite players and keeps only the friendships between (0, 1) and (0, 3) and breaks up any other pair of friendships. So the total power of friendship is 1 + 4 = 5. Elite player 1 and 3 have friendship with only elite player 0. So each Radiant player has odd number of elite friends. Similarly player 0 has friendship with 1 and 3, and players 2 do not have any friend(0 elite friends). So each Dire player has even number of elite friends.

**Example case 2.**

![](//www.codechef.com/download/sample2.png)

Say the odd numbered players are assigned as Radiant and even numbered players as Dire.
And Chef assigns players {1, 3, 5, 6, 7} as elite players and keeps only the friendships between (1, 6), (3, 7) and (5, 6) and breaks up any other pair of friendships.
So the total power of friendship is 6 + 5 + 8 = 19.

Elite player 1 and 5 have friendship with only elite player 6 and player 3 and 7 have mutual friendship.
So each Radiant player has odd number of elite friends.

Similarly player 6 has friendship with 1 and 5, and players 0, 2 and 4 do not have any friend(0 elite friends).
So each Dire player has even number of elite friends.

![](//www.codechef.com/download/Even.png)

Now say the even numbered players are assigned as Radiant and odd numbered players as Dire.
And Chef assigns players {0, 2, 3, 4, 6} as elite players and keeps only the friendships between (0, 3), (3, 4) and (2, 6) and breaks up any other pair of friendships.
So the total power of friendship is 2 + 1 + 6 = 9.
Elite player 0 and 4 have friendship with only elite player 3 and player 2 and 6 have mutual friendship.
So each Radiant player has odd number of elite friends.

Similarly player 3 has friendship with 0 and 4, and player 1, 5 and 7 do not have any friend(0 elite friends).
So each Dire player has even number of elite friends.

![](//www.codechef.com/download/Odd.png)
