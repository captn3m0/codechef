---
category_name: easy
problem_code: GAMEAAM
problem_name: 'Subtraction Game'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: 'satej '
problem_tester: gerald
date_added: 15-01-2014
tags:
    - cook42
    - easy
    - game
    - satej
    - sprague
editorial_url: 'http://discuss.codechef.com/problems/GAMEAAM'
time:
    view_start_date: 1390158900
    submit_start_date: 1390158900
    visible_start_date: 1390158900
    end_date: 1735669800
    current: 1493558150
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK42/mandarin/GAMEAAM.pdf) and [Russian](http://www.codechef.com/download/translated/COOK42/russian/GAMEAAM.pdf) as well.

Two players are playing a game. The game is played on a sequence of positive integer pairs. The players make their moves alternatively. During his move the player chooses a pair and decreases the larger integer in the pair by a positive multiple of the smaller integer in the pair in such a way that both integers in the pair remain positive. If two numbers in some pair become equal then the pair is removed from the sequence. The player who can not make any move loses (or in another words the player who encounters an empty sequence loses). Given the sequence of positive integer pairs determine whether the first player can win or not (assuming that both players are playing optimally).

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
Each test starts with an integer **N** denoting the number of pairs. Each of the next **N** lines contains a pair of positive integers.

### Output

For each test case, output a single line containing "YES" if the first player can win and "NO" otherwise.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **100**
- All other integers are between **1** to **108**
- The integers in each pair will be different

### Example

<pre><b>Input:</b>
3
1
2 3
2
4 5
5 6
2
2 3
3 5

<b>Output:</b>
NO
NO
YES


</pre>### Explanation
**Example case 1.** The first player don't have any choice other subtracting 2 from 3. So during the turn of the second player integer pair will be (2,1). The second player will win by subtracting 1 from 2.

**Example case 2.** If the first player choose to move (4,5) to (4,1) the second player will make it to (1,1). If the first player choose to move (5,6) to (5,1) the second player will make it to (1,1). So regardless of the move of the first player, the second will always win.

**Example case 3.** The first player will select pair (3,5) and make it to (3,2). Now both pairs are equal. So whatever the move of second player he will just mirror that move in another pair. This will ensure his win.
