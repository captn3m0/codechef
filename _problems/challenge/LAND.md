---
category_name: challenge
problem_code: LAND
problem_name: 'The Great Plain'
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
max_timelimit: '1.39667'
source_sizelimit: '50000'
problem_author: gennady.korotkevich
problem_tester: masked_zorro
date_added: 6-08-2011
tags:
    - challenge
    - gennady
    - oct11
editorial_url: 'http://discuss.codechef.com/problems/LAND'
time:
    view_start_date: 1318348490
    submit_start_date: 1318348490
    visible_start_date: 1318348490
    end_date: 1735669800
    current: 1525199666
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You have been hired to create a map of The Great Plain. The first thing to do is to find out how the land's height changes, and that's exactly what you are to do.

The plain can be imagined as a rectangular grid with N rows and M columns consisting of N\*M equal cells. The height of each cell is an integer number between 1 and 50, inclusive.

You have already explored some of the cells, and now you know the height of these cells. Unfortunately, the budget is quite tight, so you have no opportunity to explore the remaining cells. With no other choice, you decided to fill the information about the unknown cells with fake data. But you wouldn't like to be quickly caught, so you want the resulting grid to resemble a 'plain' as much as possible.

Formally speaking, you are to fill the empty cells of a grid with integers between 1 and 50, inclusive, so that the neighboring cells don't differ too much (see the 'Scoring' part of the problem statement for the exact explanation on how the scoring works). Note that this is a challenge problem: you don't have to find the optimal solution, it's enough to find any of them (but the better is your solution, the more points you receive).

### Input

Input will begin with an integer T, the number of test cases (no more than 10). Each test case consists of 2 integers N and M (N, M ≤ 100), which denote the dimensions of the grid, and then N lines containing M integers each, representing the heights of the cells of the grid, which are between 1 and 50, inclusive. The value of 0 means that the corresponding cell is actually empty.

### Output

For each test case output exactly N lines containing exactly M integers (between 1 and 50, inclusive) each, representing the resulting grid. Note that you aren't allowed to change the values in the cells with non-zero values of the given grid. You may separate the answers for consecutive test cases with empty lines.

### Scoring

Let S be the sum calculated as follows: for each pair of side-by-side neighboring cells the value of 2K is added to S, where K is the absolute difference of heights of these two cells. Then your score for the test case is equal to log2 S. Your score for each file is the average of your scores on the individual test cases. Your overall score is the average of your scores on the individual test files.

Your goal is to minimize this score.

### Example

<pre>
<b>Input:</b>
2
4 4
0 0 0 0
0 3 0 0
0 0 0 7
9 0 0 0
5 8
0 0 0 0 0 0 0 0
0 4 0 0 0 0 4 0
0 0 0 4 0 0 0 4
0 0 0 0 0 4 0 0
0 4 0 4 0 0 0 0

<b>Output:</b>
3 3 3 4
3 3 4 5
4 5 6 7
9 7 6 6

4 4 4 4 4 4 4 4
4 4 4 4 4 4 4 4
4 4 4 4 4 4 4 4
4 4 4 4 4 4 4 4
4 4 4 4 4 4 4 4

</pre>
In the first test case S = 81, so the score is equal to approximately 6.33985. In the second test case S = 67, so the score is equal to approximately 6.06609. The overall score is thus the average of these values, or approximately 6.20297. ### Test Case Generation

Every official input file contains exactly 10 test cases. In every test case M and N are chosen randomly and uniformly between 10 and 100, inclusive, and the values of all cells are set to zero. Then, a random integer K between 1 and 10, inclusive, is chosen. Then the following operation is executed exactly N\*M\*K/100 (rounded down) times: a random cell with zero value is chosen among cells which don't have any side-by-side neighboring cells with non-zero value, and the chosen cell is filled with a random integer between 1 and 50, inclusive.
