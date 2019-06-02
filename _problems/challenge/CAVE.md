---
category_name: challenge
problem_code: CAVE
problem_name: 'Mushroom Cave'
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
max_timelimit: '0.85034'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: gamabunta
date_added: 26-02-2011
tags:
    - challenge
    - june11
    - pieguy
editorial_url: 'http://discuss.codechef.com/problems/CAVE'
time:
    view_start_date: 1307944762
    submit_start_date: 1307944762
    visible_start_date: 1307944714
    end_date: 1735669800
    current: 1525199504
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef is exploring a large cave looking for exotic mushrooms. It is very dark in the cave, so Chef uses torches to help him see. Torches do not last forever, so as Chef explores the cave he must find new torches to light. Specifically, once Chef picks up a torch, he may only travel K steps before it will burn out. If Chef doesn't find another torch within K steps, he will likely be eaten by a grue. Whenever Chef finds a torch, he immediately lights it, and drops any currently held torch to the ground, rendering it unusable. Chef wants to explore as much of the cave as possible before exiting. Chef begins at the northwest corner of the cave and must end at the southeast corner.

You will be given the layout of the cave, including the locations of all torches. Your task is to plot a route through the cave from the northwest corner to the southeast corner that visits as many distinct cells of the cave as possible. Chef must be able to follow your route without running out of torch light. Chef must also still have a burning torch when he finishes the route. Note that optimal routes are not required, and your submission will be scored relative to others' submissions. Any route that leads Chef from the northwest corner to the southeast corner will be accepted.

### Input

Input will begin with an integer T, the number of test cases (between 3 and 10). Each test case begins with 3 integers M, N, K (M, N ≤ 100, 2 ≤ K ≤ 15). M and N are the dimensions of the cave, K is the duration of each torch. M lines follow of N characters each, describing the cave. Rows proceed from north to south, and columns from west to east. A '.' character indicates an empty cell, a '#' character indicates an impassable cell, and a 't' character indicates a torch. The cell in the northwest corner will always be a 't', and the cell in the southeast corner will never be '#'.

### Output

For each test case, output a string of 'N', 'W', 'S', and 'E' characters (corresponding to the cardinal directions **N**orth, **W**est, **S**outh, and **E**ast, respectively) giving a route from the northwest corner to southeast. It is guaranteed that at least one such route will exist.

### Scoring

Your score for each test case is the total number of cells visited by your route (visiting the same cell multiple times only counts once toward the total) divided by the total number of passable cells. Your score for each file is the average of your scores on the individual test cases. Your overall score is the average of your scores on the individual test files.

### Sample Input

<pre>2
4 5 3
ttttt
.##..
.t...
##t..
6 6 4
tt#...
...##t
...tt.
..t.t#
....t.
..t..t

</pre>
### Sample Output

<pre>SSEESEE
SENSSSESSENNNWEEENSWSSESWE

</pre>
The score for the first test case is 8/16=0.5. The score for the second test case is 23/32=0.71875. The overall score is thus (0.5+0.71875)/2=0.609375. Note that the solution to the first test case is unique (in particular, the solution "EEEESSS" is invalid because Chef would run out of torch light during his final step), but in the second test case there are many alternate solutions (including some that visit more than 23 distinct cells).

### Test Case Generation

M and N are chosen randomly and uniformly between 10 and 100, inclusive, and K is chosen randomly and uniformly between 2 and 15. Additionally, a real number D is chosen randomly and uniformly between .05 and .2, inclusive. Each cell is chosen as '#' with probability D, 't' with probability (1-D)/K, and '.' with probability (1-D)\*(K-1)/K. If no valid path exists from the northwest to southeast corner, the process is restarted with the same values of M, N, K, and D.
