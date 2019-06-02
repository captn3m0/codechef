---
category_name: hard
problem_code: ORDNCHS
problem_name: 'Order and Chaos (Interactive)'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: null
date_added: 29-01-2019
tags:
    - game
    - medium
    - pairing
    - pieguy
    - snckfl19
editorial_url: 'https://discuss.codechef.com/problems/ORDNCHS'
time:
    view_start_date: 1550311200
    submit_start_date: 1550311200
    visible_start_date: 1550311200
    end_date: 1735669800
    current: 1559472991
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.\### Read problem statements in \[Hindi\](http://www.codechef.com/download/translated/SNCKFL19/hindi/ORDNCHS.pdf), \[Bengali\](http://www.codechef.com/download/translated/SNCKFL19/bengali/ORDNCHS.pdf), \[Mandarin Chinese\](http://www.codechef.com/download/translated/SNCKFL19/mandarin/ORDNCHS.pdf), \[Russian\](http://www.codechef.com/download/translated/SNCKFL19/russian/ORDNCHS.pdf), and \[Vietnamese\](http://www.codechef.com/download/translated/SNCKFL19/vietnamese/ORDNCHS.pdf) as well. \*\*This is an interactive problem.\*\* Order and Chaos is a two-player game. One player plays as Order, the other as Chaos. The game is played on a $6 \\times 6$ grid of cells (both the rows and the columns are numbered $1$ through $6$); initially, all cells are blank. The players alternate turns; Order plays first. On each turn, the current player must place either an 'X' or an 'O' into one blank cell (either player may place either letter). Let's define a \*five-in-a-row\* as $5$ contiguous cells in a straight line containing the same letter. A five-in-a-row can be horizontal, vertical or diagonal. Note that there are only six diagonals which may contain a diagonal five-in-a-row: the main diagonal, the minor diagonal or a diagonal immediately above or below either of them. An \*exact five-in-a-row\* is a five-in-a-row that is not fully contained within a six-in-a-row. The game ends when all cells are filled. At this point, if there is an exact five-in-a-row (of either 'X'-s or 'O'-s), then the player that plays as Order wins; otherwise, the player that plays as Chaos wins. Here are some example games: ``` OOOOOO OXXXXO OXOOOO OXOXXX OXOXXX XOOXXX ``` The above is a win for Order. There is a vertical exact five-in-a-row of 'O'-s in the first column. If the 'X' at the bottom of the first column was an 'O' instead, then this would be a win for Chaos, since the five-in-a-row would not be exact. Note that the third row, which contains five 'O'-s, does not contain a five-in-a-row, because these five 'O'-s are not in contiguous cells. ``` OXOOOO OOXOOO OOOXOO OOOOXO XOOOOX OXOOXO ``` The above is a win for Order. There is an exact five-in-a-row of 'X'-s just above the main diagonal. ``` XXXXXX XXOOXX XOXXOX XOXXOX XXOOXX XXXXXX ``` The above is a win for Chaos. You are playing this game against the grader. You get to choose whether you want to play as Order or Chaos, but you must win every game. ### Interaction - First, you should read a line containing a single integer $T$ denoting the number of test cases. The description of interaction for $T$ test cases follows. - For each test case, you should start by printing a line containing the string `"ORDER"` or `"CHAOS"` (without quotes) indicating which player you want to play as. Then, the game starts. During each turn, you must do the following: - If it is your turn, print a line containing two space-separated integers $r$, $c$, a space and a character $n$, where $n$ must be 'X' or 'O'. This denotes that you want to place the character $n$ into the cell in row $r$ and column $c$. - If it is the grader's turn, read a line containing two space-separated integers $r$, $c$, a space and a character $n$, denoting that the grader placed the character $n$ into the cell in row $r$ and column $c$. - When the game ends, the grader automatically determines the winner. - Note: If your program attempts to make an invalid move, the grader will immediately exit with a "Wrong Answer" verdict. You may receive a different verdict if your program subsequently crashes or exceeds the time limit. Don't forget to flush the output after printing each line! In C/C++, this can be done after printing each line using `fflush(stdout);` or by setting the proper type of buffering at the beginning of the code using `setlinebuf(stdout);`. Failure to flush the output buffer may result in getting the verdict Time Limit Exceeded. ### Constraints - $1 \\le T \\le 1,000$ - $1 \\le r, c \\le 6$ - $n \\in \\{\\text{'X'}, \\text{'O'}\\}$ ### Interaction ``` You Grader 2 ORDER 1 2 X 4 6 X 3 3 O 2 5 X ... 30 lines omitted ... 2 1 O 6 1 O CHAOS 3 4 X 2 1 O 3 5 O 6 5 X ... 30 lines omitted ... 1 3 X 4 2 O ```
