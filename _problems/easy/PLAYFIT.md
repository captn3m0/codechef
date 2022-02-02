---
category_name: easy
problem_code: PLAYFIT
problem_name: 'Fit to Play'
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
problem_author: vamsi_kavala
problem_tester: laycurse
date_added: 20-01-2012
tags:
    - april12
    - easy
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/PLAYFIT'
time:
    view_start_date: 1334137605
    submit_start_date: 1334137605
    visible_start_date: 1334136600
    end_date: 1735669800
    current: 1493558174
layout: problem
---
All submissions for this problem are available.*Who's interested in football?*

Rayne Wooney has been one of the top players for his football club for the last few years. But unfortunately, he got injured during a game a few months back and has been out of play ever since.

He's got proper treatment and is eager to go out and play for his team again. Before doing that, he has to prove to his fitness to the coach and manager of the team. Rayne has been playing practice matches for the past few days. He's played N practice matches in all.

He wants to convince the coach and the manager that he's improved over time and that his injury no longer affects his game. To increase his chances of getting back into the team, he's decided to show them stats of any 2 of his practice games. The coach and manager will look into the goals scored in both the games and see how much he's improved. If the number of goals scored in the 2nd game(the game which took place later) is greater than that in 1st, then he has a chance of getting in. Tell Rayne what is the maximum improvement in terms of goal difference that he can show to maximize his chances of getting into the team. If he hasn't improved over time, he's not fit to play. Scoring equal number of goals in 2 matches will not be considered an improvement. Also, he will be declared unfit if he doesn't have enough matches to show an improvement.

### Input:

The first line of the input contains a single integer T, the number of test cases. Each test case begins with a single integer N, the number of practice matches Rayne has played.
The next line contains N integers. The ith integer, gi, on this line represents the number of goals Rayne scored in his ith practice match. The matches are given in chronological order i.e. j &gt; i means match number j took place after match number i. ### Output:

For each test case output a single line containing the maximum goal difference that Rayne can show to his coach and manager. If he's not fit yet, print "UNFIT". ### Constraints:

1&lt;=T&lt;=10
1&lt;=N&lt;=100000
0&lt;=gi&lt;=1000000 (Well, Rayne's a legend! You can expect him to score so many goals!) ### Example:

**Input:**
3
6
3 7 1 4 2 4
5
5 4 3 2 1
5
4 3 2 2 3

**Output:**
4
UNFIT
1

**Explanation:**
In the first test case, Rayne can choose the first and second game. Thus he gets a difference of 7-3=4 goals. Any other pair would give him a lower improvement. In the second test case, Rayne has not been improving in any match. Thus he's declared UNFIT.

***Note:*** Large input data. Use faster I/O methods. Prefer scanf,printf over cin/cout.
