---
category_name: challenge
problem_code: MANYLEFT
problem_name: 'Many Left'
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
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: laycurse
date_added: 30-09-2012
tags:
    - challenge
    - nov12
    - optimization
    - pieguy
    - search
editorial_url: 'http://discuss.codechef.com/problems/MANYLEFT'
time:
    view_start_date: 1352712600
    submit_start_date: 1352712600
    visible_start_date: 1352712600
    end_date: 1735669800
    current: 1525454420
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.The classical game of OneLeft is played as follows. Some pegs are placed on an NxN grid. Initially, at least one cell is empty and at least one contains a peg (each cell contains at most one peg). A move consists of jumping one peg over an adjacent peg to an empty cell, and removing the peg that was jumped over. Formally, if there is a peg in cell (x1, y1), and cell (x2, y2) is empty, and (x1-x2, y1-y2) is one of (0, 2), (0, -2), (2, 0), or (-2, 0), and there is a peg in cell ((x1+x2)/2, (y1+y2)/2), then the peg in cell (x1, y1) may be moved to cell (x2, y2) and the peg in cell ((x1+x2)/2, (y1+y2)/2) removed. The coordinate (0, 0) indicates the top-left corner, (N-1, 0) indicates the top-right corner, (0, N-1) indicates the bottom-left corner, and (N-1, N-1) indicates the bottom-right corner.

The game continues until no more moves are possible. Normally the goal of OneLeft is to leave a single peg on the grid. However, in this problem the goal is to leave *as many pegs as possible*. Optimal solutions are not required, but solutions that leave more pegs will score more points.

### Input

Input begins with an integer N, the size of the grid. N lines follow with N characters each, representing the grid. A '.' character indicates an empty cell, and a '\*' character indicates a peg.

### Output

For each test case, first output the number of moves in your solution. Then output each move in the form "x1 y1 x2 y2", which indicates a peg moving from (x1,y1) to (x2,y2). Any whitespace in your solution will be ignored.

### Scoring

Your score for each test case is the fraction of cells containing pegs after performing the moves in your solution. Your overall score is the average of your scores on the individual test cases. Invalid solutions will be judged as "wrong answer". In particular, if any legal moves exist after the moves in your solution have been performed, your solution will considered invalid.

### Sample Input 1

<pre>6
..*..*
*..*.*
***.**
.***..
****..
**.*.*

</pre>
### Sample Output 1

<pre>13
1 3 1 1
3 3 1 3
0 5 0 3
0 2 0 0
3 5 3 3
5 2 3 2
5 0 5 2
3 2 3 0
2 4 0 4
0 3 0 5
3 0 1 0
0 0 2 0
0 5 2 5
</pre>
### Sample Input 2

<pre>5
.*.*.
..*..
*...*
...*.
.*...

</pre>
### Sample Output 2

<pre>0

</pre>
The first sample output scores 8/36 = 0.2222.
The second sample output scores 7/25 = 0.28.
Recall that the goal is to maximize your score.

### Test Case Generation

For each official test file, N is chosen randomly and uniformly between 10 and 30, inclusive. A real number D is chosen randomly and uniformly between 0.5 and 0.95, then each cell is independently chosen to contain a peg with probability D.
