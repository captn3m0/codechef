---
category_name: challenge
problem_code: SPIN
problem_name: 'Spinning Wheels'
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
max_timelimit: '0.92'
source_sizelimit: '50000'
problem_author: gennady.korotkevich
problem_tester: pieguy
date_added: 10-11-2011
tags:
    - challenge
    - dec11
    - gennady
editorial_url: 'http://discuss.codechef.com/problems/SPIN'
time:
    view_start_date: 1323600962
    submit_start_date: 1323600962
    visible_start_date: 1323600962
    end_date: 1735669800
    current: 1525454457
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Spinning Wheels is a game for one player. It is played on a square grid consisting of **N** rows and **N** columns. Each cell contains a _wheel_, which is colored into one of five colors -- red, orange, yellow, blue or violet (for convenience, we'll number the colors from 1 to 5, correspondingly). Each wheel also has two _needles_, and the needles are placed in one of the following positions (for convenience, we'll number the positions from 1 to 4, correspondingly):

![](http://www.codechef.com/download/SPIN1.png) 


Basically, position 1 means that the needles are directed up and right, position 2 means that they're directed down and right down, position 3 -- down and left, and position 4 -- up and left.

The goal of the game is to make all the wheels colored into the same color through a sequence of _moves_. A move consists of choosing a wheel and rotating it 90 degrees clockwise (for example, if the wheel was in position 1, it would change to position 2). After the rotation of some wheel, the state of other wheels (as well as the state of the wheel rotated first) may change.

More formally. Let's denote the color of the wheel chosen on this move by **C**. We'll say that two wheels are _matching_ if they are situated in side-by-side neighboring cells and either needle of both wheels is directed to the other wheel. The process of changing the grid is separated into _iterations_. We will maintain set **S** consisting of the wheels rotated at the last iteration. Before the first iteration, set **S** contains only the starting wheel. The following algorithm is executed then repeatedly:

- If set **S** is empty, stop the process.
- Rotate each wheel in set **S** 90 degrees clockwise.
- Assign color **C** to each wheel in set **S**.
- Form set **Q** consisting of wheels which have at least one matching wheel in set **S**.
- Replace set **S** with set **Q** and clear set **Q**.


It's possible to prove that this process will definitely stop. Note that a wheel may get rotated more than once during the move.

Your task is to win the game. More precisely, for each grid configuration given in input you should either output a winning sequence of moves (no longer than 1000 moves) or output -1 meaning that you'd like to skip this test case (it's essentially the same as outputting a configuration with 1001 moves).

**Note.** This might help (though the rules are **not** exactly the same): <http://www.cesmes.fi/#boxSpin>.

### Input

The first line of the input file contains an integer **T** -- the number of test cases. Then **T** test cases follow. The first line of each test case contains an integer **N**. The following **N** lines contain **N** integers (between 1 and 4, inclusive) each, giving the initial positions of the wheels in the corresponding cells. The following **N** give the information about the starting colors (each color between 1 and 5, inclusive) in the same format.

**Note.** The constraints are listed in the 'Test Case Generation' part of the problem statement.

### Output

For each test case output **-1** if you would like to skip this test case. Otherwise, output a line containing just one integer **K** (0 <= **K** <= 1000) and then **K** lines each containing a pair of integers **r c**, describing the corresponding move (1 <= **r**, **c** <= **N**; **r** is the row ID, **c** is the column ID).

### Scoring

If at least one of the constraints in the 'Output' section is broken, you'll get 'Wrong Answer'. If at least one of your sequences of moves doesn't lead to winning in the corresponding test case (not all wheels are of the same color after performing all the moves), you'll get 'Wrong Answer'. Otherwise, for each test case you'll get a score of 1001 if you output **-1**, and a score of **K** if you output a valid sequence of moves. Your score for the input file is the sum of your scores for the particular test cases. Finally, there are 10 input files in this problem, and your overall score is the average of your scores on the input files. Of course, your goal is to minimize your overall score.

**Important! You must solve at least one test case in each file, otherwise you'll get 'Wrong Answer'.**

### Example

<pre>
<b>Input:</b>
2
3
1 1 1
4 2 4
1 4 2
3 3 2
3 2 1
4 5 4
4
2 2 2 3
1 4 4 3
3 1 3 1
3 2 3 1
3 4 2 3
4 2 1 1
4 3 2 3
4 4 2 2

<b>Output:</b>
3
3 3
2 1
1 3
-1

<b>Explanation:</b>
</pre>Your score for this input file is 3+1001 = 1004.

Let's see what happens in the first test case if we apply the rotations from the output. The first two rotations change the state of only one wheel each, as no wheel matches the chosen one after the rotation:

![](http://www.codechef.com/download/SPIN2.png) 


The third rotation starts a process consisting of 14 iterations, as shown below (if we look at the pictures from left to right, from top to bottom; the rotated wheels at each iteration are highlighted):

![](http://www.codechef.com/download/SPIN3.png) 


Now all wheels are of the same color, so we've achieved our goal.

### Test Case Generation

There are 10 official input files. Each input file contains exactly 19 test cases. The values of **N** in the corresponding test cases are listed in the table below:

Test case12345678910111213141516171819**N**234567891011121520253035404550
The initial positions and colors of the wheels are chosen randomly and uniformly in the corresponding ranges.
