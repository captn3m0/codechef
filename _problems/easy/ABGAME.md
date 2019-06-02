---
category_name: easy
problem_code: ABGAME
problem_name: 'A-B Game'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.6'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - PYP3
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 13-11-2018
tags:
    - admin2
    - cook100
    - easy
    - game
    - nim
    - observations
    - taran_1407
editorial_url: 'https://discuss.codechef.com/problems/ABGAME'
time:
    view_start_date: 1542565802
    submit_start_date: 1542565802
    visible_start_date: 1542565802
    end_date: 1735669800
    current: 1559472934
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\###Read problems statements in \[Hindi\](http://www.codechef.com/download/translated/CK100TST/hindi/ABGAME.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/CK100TST/mandarin/ABGAME.pdf), \[Russian\](http://www.codechef.com/download/translated/CK100TST/russian/ABGAME.pdf), \[Vietnamese\](http://www.codechef.com/download/translated/CK100TST/vietnamese/ABGAME.pdf) and \[Bengali\](http://www.codechef.com/download/translated/CK100TST/bengali/ABGAME.pdf) as well. Two players (let's call them A and B) are playing a game on a row of cells. A cell may contain the character 'A', contain the character 'B' or be empty. Each character may only be moved from a cell $c\_i$ to a cell $c\_f$ if cell $c\_f$ and all cells between $c\_i$ and $c\_f$ are currently empty. The leftmost (first) character may only be moved to the right, the second character may only be moved to the left, the next character to the right, and so on. Each character may be moved any number of times, including zero. The players alternate turns; player A starts. On each turn, the current player must choose a cell containing their own character ('A' for player A, 'B' for player B) and move it to a different cell. This cell may be chosen arbitrarily as long as all rules described above are satisfied. The first player that cannot move a character loses. Note that each character is always moved in a fixed direction, so the game is finite. Determine the winner of the game if both players play optimally. ### Input - The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. - The first and only line of each test case contains a single string $s$ describing the initial state of the row of cells. Each character of $s$ is either 'A', 'B' or '.', denoting a cell containing 'A', a cell containing 'B' or an empty cell respectively. ### Output For each test case, print a single line containing the string `"A"` if player A wins or `"B"` if player B wins. ### Constraints - $1 \\le T \\le 10^5$ - $1 \\le |s| \\le 10^5$ - the sum of $|s|$ over all test cases does not exceed $10^6$ ### Example Input ``` 3 A.B A..B A..B.A..B ``` ### Example Output ``` A A B ``` ### Explanation \*\*Example case 1:\*\* Player A can move the first character 'A' one cell to the right. Now, player B cannot move and loses. \*\*Example case 2:\*\* Player A can move the first character two cells to the right (to the cell adjacent to 'B'). Again, player B cannot move and loses.
