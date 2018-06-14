---
category_name: easy
problem_code: CHEFTIC
problem_name: 'Chef and Tic-Tac-Toe'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
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
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: null
date_added: 6-02-2016
tags:
    - ltime33
    - mgch
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHEFTIC'
time:
    view_start_date: 1456592400
    submit_start_date: 1456592400
    visible_start_date: 1456592400
    end_date: 1735669800
    current: 1525454445
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME33/mandarin/CHEFTIC.pdf), [Russian](http://www.codechef.com/download/translated/LTIME33/russian/CHEFTIC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME33/vietnamese/CHEFTIC.pdf) as well.

Tic-Tac-Toe used to be Chef's favourite game during his childhood. Reminiscing in his childhood memories, he decided to create his own "Tic-Tac-Toe", with rules being similar to the original Tic-Tac-Toe, other than the fact that it is played on an **NxN** board.

The game is played between two players taking turns. First player puts an 'X' in an empty cell of the board, then the second player puts an 'O' in some other free cell. If the first player has **K** continuous **X's** or the second player has **K** continuous **O's** in row, column or diagonal, then he wins.

Chef started playing this new "Tic-Tac-Toe" with his assistant, beginning as the first player himself (that is, Chef plays 'X's). Currently, the game is ongoign, and it's Chef's turn. However, he needs to leave soon to begin tonight's dinner preparations, and has time to play only one more move. If he can win in one move, output "YES", otherwise output "NO" (without quotes). It is guaranteed that no player has already completed the winning criterion before this turn, and that it's a valid "Tic-Tac-Toe" game.

### Input

The first line of input contains one integer **T** denoting the number of testcases. First line of each testcase contains two integers **N** and **K**, next **N** lines contains **N** characters each. Each character is either an 'X' denoting that the first player used this cell, an 'O' meaning that the second player used this cell, or a '.' (a period) representing a free cell.

### Output

For each testcase, output, in a single line, "YES" if Chef can win in one move, or "NO" otherwise.

### Constraints

- **1** ≤ **T** ≤ **100**
- **3** ≤ **N** ≤ **20**
- **1** ≤ **K** ≤ **N**

### Example

<pre><b>Input:</b>
3
3 3
XOX
O.O
XOX
3 1
...
...
...
3 2
...
...
...


<b>Output:</b>
YES
YES
NO

<b>Input:</b>
1
4 4
XOXO
OX..
XO..
OXOX

<b>Output:</b>
YES

</pre>### Subtasks

- **Subtask 1:**  **K**  = 1. **Points - 10**
- **Subtask 2:**  **N**  =  **K**  = 3. **Points - 30**
- **Subtask 3:** Original constraints. **Points - 60**

### Explanation

Test #1:
In first testcase, put 'X' in (2, 2), in second we can put 'X' in any cell and win.

Test #2:
If you put an 'X' in (3, 3), there will be four 'X's on the main diagonal (1, 1) - (2, 2) - (3, 3) - (4, 4).
