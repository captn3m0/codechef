---
category_name: hard
problem_code: TABISHOP
problem_name: Bishops
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
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: anton_lunyov
date_added: 10-02-2013
tags:
    - ad
    - cook32
    - line
    - medium
    - order
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TABISHOP'
time:
    view_start_date: 1364150220
    submit_start_date: 1364150220
    visible_start_date: 1364150220
    end_date: 1735669800
    current: 1493556860
layout: problem
---
All submissions for this problem are available.Last night, the Chef had a strange dream. He got lost in a Chess Kingdom where the chess pieces lived together on a huge chess board. In that dream, the Chef met the King and asked him for help. Unfortunately, The King really admired the cooking skills of the Chef and wanted The Chef to cook for him every day. The King gave the Chef a task and said that the Chef could leave only after solving it. The task of the King required a lot of calculations and The Chef thought he would have to stay in the Chess Kingdom forever. Hopefully, the Chef woke up and realized that it was just a dream. No! Actually, it was a nightmare. The Chef could not sleep in the rest of the night, worrying that he might meet the King again. Thus, the Chef really needs your help to finish the task of the King.

The task that the King gave to the Chef is described as follows. The Chess Kingdom is a **N × N** chess board. The rows are numbered by integers from **1** to **N**, inclusive, from the top to the bottom. Similarly, the columns are numbered by integers from **1** to **N**, inclusive, from the left to the right. The cell at the intersection of the row **i** and the column **j** is denoted as cell **(i, j)**. The Chess Kingdom is guarded by **K** bishops standing at **K** different cells of the board. Additionally, There are **M** other chess pieces standing on **M** different cells on the board. The bishop can move any number of squares (maybe zero) diagonally, but can not leap over other pieces. In other words, a bishop at the cell **(a, b)** can move to the cell **(u, v)** if we can pick the vector **(x, y)** in the set **{(1, 1), (1, -1), (-1, 1), (-1, -1)}** so that **u = a + t \* x** and **v = b + t \* y** for some positive integer **t** and all the cells of the form **(a + i \* x, b + i \* y)** in which **1 ≤ i ≤ t** are empty. The cell is called safe if some of the bishops can move to this cell. In particular, all cells, where bishops stand, are safe. The Chef is required to find the number of safe cells.

### Input

The first line of the input contains three space-separated integers **N**, **K**, **M**. Each of the following **K** lines contains two space separated integers **X** and **Y**, meaning that the cell **(X, Y)** is occupied by the bishop. Each of the following **M** lines contains two space separated integers **U** and **V**, meaning that the cell **(U, V)** is occupied by other chess piece.

### Output

Output a single line containing the number of safe cells.

### Constraints

- **1** ≤ **N** ≤ **109**
- **1** ≤ **K** ≤ **100000** (**105**)
- 0 ≤ **M** ≤ **100000** (**105**)
- **1** ≤ **X**, **Y**, **U**, **V** ≤ **N**
- Positions of all **K + M** chess pieces are distinct

### Example

<pre>
<b>Input:</b>
8 2 2
5 4
4 6
2 4
7 3

<b>Output:</b>
22
</pre>
### Explanation

<pre>
-------*
*--o--**
-*--***-
--*-*b--
---b*-*-
--***--*
-*o--*--
*-----*-

</pre>
Bishops are marked by 'b'.
 Other chess pieces are marked by 'o'.
 Safe cells other than bishop positions are marked by '\*'.
 There are 20 '\*'s plus two 'b's so the result is 22.
