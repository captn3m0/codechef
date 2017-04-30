---
category_name: easy
problem_code: CHEFIHG
problem_name: 'Chef and Land'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: karanaggarwal
date_added: 10-07-2016
tags:
    - bfs
    - cook72
    - easy
    - graph
    - mgch
editorial_url: 'http://discuss.codechef.com/problems/CHEFIHG'
time:
    view_start_date: 1469385000
    submit_start_date: 1469385000
    visible_start_date: 1469385000
    end_date: 1735669800
    current: 1493558119
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK72/mandarin/CHEFIHG.pdf), [Russian](http://www.codechef.com/download/translated/COOK72/russian/CHEFIHG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK72/vietnamese/CHEFIHG.pdf) as well.

Chef lives in Chefland. Chefland can be thought as a two-dimensional grid of dimensions **N**x**M**. Some of the cells of the Chefland are prohibited to visit (denoted by '\*'). One can never step on such prohibited cells. There is a city at each at each non-prohibited cell (will be denoted by '.' or 'C' (denoting capital city)).

Sadly people in the capital city of Chefland (denoted by 'C') are lazy for their shopping. So they invented a robot for carrying their groceries. They want to feed a command of at max **105** characters to the robot such that if the robot starts from any cell (non-prohibited) of the grid, it should be able to visit the capital city during its walk. Each character of the command will be one of 'U', 'D', 'L', 'R' denoting the movement to go up, down, left and right cell from the current cell (provided it exists and the cell is not prohibited to visit). Otherwise, the robot will just stay at its current cell. The characters of the command will be followed in the order from left to right.

Now, after thinking a lot, citizens of Chefland could not come up such a command to feed to robot. So, they ask your help in it. They have come to know from an oracle that it is guaranteed that such a command exists.

### Input

First line contains two space separated integers **N**, **M**, denoting the dimensions of the grid.

Each of next **N** lines contains **M** symbols denoting the map of Chefland.

### Output

Output one non-empty string corresponding to the command with length ≤ **105** containing only symbols 'U', 'L', 'D', 'R'. it's guaranteed that such pattern exists.

### Constraints

- 4 ≤ **N, M** ≤ 20
- Each cell can be one of three types: 'C', '.', '\*'.
- All border cells are '\*'.

### Example

```
<b>Input:</b>
<tt>
4 4
****
*.C*
*..*
****
</tt>
<b>Output:</b>
LDUR

```
```
<b>Input:</b>
<tt>5 6
******
*.C..*
**.***
*....*
******</tt>

<b>Output:</b>
RLLURUU

```
### Explanation

You can reach to capital city by feeding this command to robot starting from any city. We have shown one such application of the command for the city on the cell (2, 2).

From cell (2, 2), you can go to following cells in order when you apply the command.

- Start at (2, 2).
- Apply the command 'L'. The cell at the left (2, 1) is prohibited, so you stay at (2, 2).
- Apply the command 'D'. You go to cell (3, 2).
- Apply the command 'U'. You come back to cell (2, 2).
- Apply the command 'R'. You come back to cell (2, 3), i.e. the capital city.