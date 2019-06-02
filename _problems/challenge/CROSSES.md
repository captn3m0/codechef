---
category_name: challenge
problem_code: CROSSES
problem_name: 'The Game of Crosses & Crosses'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
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
    - TEXT
    - CLOJ
    - FS
max_timelimit: '2.21739'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 1-12-2008
tags:
    - admin
time:
    view_start_date: 1232505083
    submit_start_date: 1232505083
    visible_start_date: 1232505083
    end_date: 1735669800
    current: 1525199509
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.The game of [gomoku](http://en.wikipedia.org/wiki/Gomoku) (otherwise known as naughts & crosses), played on an *n x n* board has many interesting variations. One of them is the Game of Crosses & Crosses, with the following set of rules:

- Two players - red and black - take it in turns to place one cross of their respective color on an unoccupied square of the *n x n* gaming board. Red starts the game.
- After each player's move, any rectangles with sides equal to at least 2, lying entirely within the gaming board and covered completely by crosses, are simultaneously removed (cut off) from the gaming board and the game continues.
- When all the squares remaining in the gaming board are covered by crosses, the game comes to an end. The score of each player is equal to the number of crosses of his color left standing on the gaming board, and the player with the higher score is considered the winner.

The game of crosses & crosses has been the favorite pastime of Bytelandian schoolchildren during their lessons. Little Johnny was no different, and among his friends he actually became a notable crossing champion.

But not many people knew about Johnny's crossing talent, and Johnny often used this to his advantage. So when a few years after Johnny's abdication from the throne of Byteland an unsuspecting publisher signed a million dolar contract with the ex-king for a series of memoirs entitled *The famous victories of Johnny the Great*, he was certainly not prepared for what he received -- a detailed account of Johnny's childhood games of crosses & crosses. To make matters worse, all accounts are written by Johnny in exciting prose, rich in action, e.g.: "Then I played yet another game on a 3x3 board. I placed my first cross at (1,1). Then I placed a cross at (2,3). The next cross I placed at (2,2). The cross after that I placed at (3,3). Finally, I placed a cross at (1,2) and I won the game 2:1.".

In a desperate effort to save the day, the publisher employed you to create illustrations for the book. You are given a free hand in reinacting the games (and in particular the oponent's moves, which Johnny has modestly left out), provided your version of events is not an evident contradiction of Johnny's text.

### Input

Input begins with a line containing a single integer t (t=100) followed by t test cases.

Each test case starts with a line with three integers describing a single game: n sr sb, denoting the length of the side of the playing board, the number of points scored by the red player (Johnny) and the number of points scored by the black player (Johnny's oponent), respectively (3<=n<=250, 0<=sb< sr). The next ceil(n2/2) lines contain 2 integers xi yi each - the coordinates of the squares where Johnny placed his crosses in successive moves (1<= xi, yi <= n).

### Output

For the i-th test case output a line with the text case i Y or case i N, specifying whether you wish to solve the given case. Then in the former case print exactly floor(n2/2) lines containining 2 integers each - the coordinates of the squares where Johnny's anonymous oponent placed his crosses in successive moves.

### Scoring

The score awarded to your program is equal to the number of correctly solved test cases. For each case, the game defined by yours and Johnny's description must have the outcome (final score) defined at input.

### Example

<pre>
<b>Input:</b>
1
3 2 1
1 1
2 3
2 2
3 3
1 2

<b>Output:</b>
case 1 Y
3 1
1 3
2 1
3 2

<b>Score:</b>
1
</pre>
![Illustration to sample test data](http://www.codechef.com/download/adrian_crosses.png)

**Warning: large Input/Output data, be careful with certain languages**
