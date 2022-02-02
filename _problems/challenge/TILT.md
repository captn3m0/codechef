---
category_name: challenge
problem_code: TILT
problem_name: 'Table Tilt'
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
max_timelimit: '2.9703'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: gamabunta
date_added: 4-08-2011
tags:
    - challenge
    - pieguy
    - sep11
editorial_url: 'http://discuss.codechef.com/problems/TILT'
time:
    view_start_date: 1315733823
    submit_start_date: 1315733823
    visible_start_date: 1315733606
    end_date: 1735669800
    current: 1525454470
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef recently discovered a game called "Table Tilt".
The game consists of a rectangular table which has several holes in it, and several balls placed on the table.
The goal is to tilt the table so that the balls will roll into the holes.
The edges of the table are blocked so that a ball cannot fall off the edge of a table.
By careful tilting of the table, Chef is able to precisely control the movement of the balls.
Chef controls the tilting so that each second, each ball will simultaneously attempt to
roll 1 unit in the same direction parallel to an edge of the table.
A ball will fail to move if doing so would cause it to fall off the table,
or if doing so would result in 2 balls in the same location after the move.

There are different types of balls, and they have different effects when they roll into a hole.
The ball types, along with their shorthand notations, and effects, are as follows:

- Neutral (=): no effect
- Positive (+): score increases by 5
- Negative (-): score decreases by 5
- Inverter (%): all positive balls become negative, and vice versa

Additionally, the score decreases by 1 every second until all of the balls have rolled into holes,
at which point the game ends.
Note that multiple balls may roll into holes simultaneously.
In this case, inverter balls are processed last.
That is, if a negative ball and an inverter ball simultaneously roll into holes, the score is decreased by 5 before the
remaining negative balls become positive.
Additionally, inverter balls are processed one at a time,
so if 2 inverter balls simultaneously roll into holes there is no net effect.

Since Chef has mastered his tilting skill, he now needs strategy to improve his score.
He has tasked you with finding a sequence of tilts that gives a good score.
Chef is in a good mood and is not demanding an optimal sequence of tilts,
but merely requires you find one that yields a positive score
(of course, the higher the score, the more appreciative Chef will be).

### Input

Input begins with an integer T, the number of test cases.
Each test case begins with 2 integers H and W on a line, giving the height and width, respectively,
of the table.
H lines follow of W characters each, giving the initial layout of the table.
A '\*' character indicates a hole.
All other characters will be '=', '+', '-', or '%',
indicating neutral, positive, negative, and inverter balls, respectively.

### Output

For each test case, output a single line with a sequence of 'U', 'L', 'D', and 'R' characters,
corresponding to tilts up, left, down, and right, respectively.
This sequence of tilts must be one that completes the game with a positive score.

### Scoring

Your total score is the sum of the scores for the individual test cases.
Note that if the score for any individual test case is non-positive, the submission will be judged "Wrong Answer".

### Sample Input

<pre>2
3 3
%+-
=*+
-=+
3 4
+==-
--%*
+%-*

</pre>
### Sample Output

<pre>LDRDLRULR
RDLRRRDR


</pre>
The score for the first test case after each tilt is: 4, 8, 7, 6, 10, 9, 8, 2, 6.

The score for the second test case after each tilt is: -6, -2, -3, 1, 5, 14, 13, 12.

The total score is therefore 18.
Note that better scores may be possible, but the only requirement is that the score be positive.

### Test Case Generation

For each official input file, T is 5.
For each test case, H and W are chosen randomly and uniformly between 8 and 20.
Each cell of the table is chosen with the following probabilities:

- Hole: 2%
- Inverter ball: 2%
- Neutral ball: 32%
- Positive ball: 32%
- Negative ball: 32%

Furthermore, it is guaranteed there will be at least one hole and one inverter ball.
