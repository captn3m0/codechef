---
category_name: medium
problem_code: RNDGRID
problem_name: 'Bear and Random Grid'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '3 - 5'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: null
date_added: 20-02-2017
tags:
    - april17
    - errichto
editorial_url: 'https://discuss.codechef.com/problems/RNDGRID'
time:
    view_start_date: 1492421400
    submit_start_date: 1492421400
    visible_start_date: 1492421400
    end_date: 1735669800
    current: 1497284435
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL17/mandarin/RNDGRID.pdf), [Russian](http://www.codechef.com/download/translated/APRIL17/russian/RNDGRID.pdf) and [Vietnamese](http://www.codechef.com/download/translated/APRIL17/vietnamese/RNDGRID.pdf) as well.

Don't miss the "Tests Generation" section. The input is generated in a special way for this problem.

Bear Limak lives in a square grid that consists of **N** rows and **N** columns. Each cell is either empty or blocked, denoted with character '.' or '#' respectively. Limak can only visit empty cells and he can't move outside the grid.

Limak wants to impress a girl he likes. He should make a sequence of moves described by a string **S** of length **L**. Each character is one of 'R', 'L', 'U', 'D', denoting directions: right, left, up and down respectively.

Depending on the starting cell, making all **L** moves might be impossible. Limak considers each empty cell as a starting one and wonders how many moves in the sequence he can make, before being forced to stop. For example, if **S** starts with 'R' but a cell on the right from the starting cell is blocked (or is outside the grid), Limak would do 0 moves.

Your task is to find the number of moves Limak would do from each starting cell, and print the [bitwise XOR](https://en.wikipedia.org/wiki/Bitwise_operation#XOR) of those numbers.

### Tests Generation

The input in this problem is generated as follows. For each test case we manually chose only three values: two integers **L** and **N** and one real value P (0 ≤ P S is chosen (generated) uniformly at random from the four allowed characters. Each cell in the grid is blocked with probability P, and empty otherwise. If all cells are blocked, the test case is generated again, so it is guaranteed that at least one cell is empty.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two integers **L** and **N** denoting the length of the sequence of moves and the size of the grid.

The second line of a test case contains a string **S** denoting the sequence of moves.

Next **N** lines describe the grid. The i-th line contains a string of length **N** denoting the i-th row of the grid.

### Output

For each test case, output a single line containing one integer — the bitwise XOR of the number of moves made by Limak from each possible starting cell. ### Constraints

- 1 ≤ **T** ≤ 3
- 1 ≤ **L** ≤ 5000
- 1 ≤ **N** ≤ 1000
- **S** will contain exactly **L** characters.
- Each character in **S** will be one of four: 'R', 'L', 'U', 'D'.
- Each string denoting a row of the grid will contain exactly **N** characters.
- Each character in the grid will be one of two: '.' or '#'.
- At least one cell will be empty.
- Both the grid and the sequence of moves are generated according to the description above.
- 0 ≤ P

### Subtasks

- Subtask #1 (15 points) 1 ≤ **N** ≤ 10
- Subtask #2 (30 points) P = 0, which means that all cells are empty.
- Subtask #3 (30 points) P ≥ 0.1
- Subtask #4 (25 points) original constraints

### Example

<pre><b>Input:</b>
2
3 4
DDU
#..#
#...
...#
..#.
10 4
RLLRDDLUUL
....
.#..
..#.
.#.#

<b>Output:</b>
2
3

</pre>### Explanation
**Test case 1.** We are given the grid of size **N** = 4, and a sequence of **L** = 3 moves. For each empty cell of the grid, below you can see the number of moves Limak would make:

<pre>
# 3 3 # 
# 3 1 0 
1 1 0 # 
0 0 # 0

</pre>The answer is 3 xor 3 xor 3 xor 1 xor 1 xor 1 = 2.
**Test case 2.** Again, below you can see the number of moves Limak would make from each cell:

<pre>
2 4 5 0 
0 # 2 0 
2 0 # 0 
0 # 0 #

</pre>