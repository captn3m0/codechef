---
category_name: easy
problem_code: TMSLT
problem_name: 'Team Split'
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
problem_author: shiplu
problem_tester: null
date_added: 18-12-2013
tags:
    - march14
    - shiplu
    - simple
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/TMSLT'
time:
    view_start_date: 1395135000
    submit_start_date: 1395135000
    visible_start_date: 1395135000
    end_date: 1735669800
    current: 1493558193
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH14/mandarin/TMSLT.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH14/russian/TMSLT.pdf).

Chef wants to split a team of new chef into two teams to play a game. In order to make the split, he first designates two team captains who take alternate turns selecting players for their teams. During each turn, the captain selects a single player for his team. Since each captain wants to make the strongest possible team, he will always select the best available player. The players have strengths as integer number, where higher strength indicate better players. After all the players have been selected, the team strength is computed as the sum of the strengths of the players on that team.

For example, if **strengths** of 5 players are **5,7,8,4** and **2**, then the first captain selects the player with strength **8** for his team, the second captain gets the player with strength **7**, the first gets the one with strength **5**, the second the one with strength **4**, and the last one (strength **2**) goes to the first team. The first team now has a total strength **8+5+2=15**, and the second team has strength **7+4=11**.

Now Chef wants to find the absolute strength difference between the two teams. For the example above the answer is **4(=|15-11|)**.

But Chef does not know exact strengths of each player. He knows some parameter **a, b, c** and **d** and a formula to find the strength of each player. The formula is 

 **S0 = d,

 Si = (a \* Si-12 + b \* Si-1 + c) mod 1000000, for i = 1 to N - 1**

There are **N** players numbering 0 to **N-1** and **Si** is the strength of player **i**.

### Input

First line of the input contains an integer T, number of test cases to follow. Each test consist of single line containing five integers **N, a, b, c and d**.

### Output

For each test case, you have to print a single line containing the absolute strength difference between the two teams.

### Constraints

**1. 1 ≤ T ≤ 50
2. 1 ≤ N ≤ 3000000
3. 0 ≤ a, b, c, d ≤ 100** 
### Example

<pre><b>Input:</b>
4
1 1 1 1 1
2 1 1 1 1
3 1 2 3 4
4 2 3 4 1

<b>Output:</b>
1
2
763
74896
</pre>