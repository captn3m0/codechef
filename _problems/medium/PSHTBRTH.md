---
category_name: medium
problem_code: PSHTBRTH
problem_name: 'Pishty and birthday'
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
problem_author: fekete
problem_tester: xcwgf666
date_added: 19-02-2017
tags:
    - fekete
    - game
    - march17
    - medium
    - segment
    - sprague
editorial_url: 'https://discuss.codechef.com/problems/PSHTBRTH'
time:
    view_start_date: 1489397400
    submit_start_date: 1489397400
    visible_start_date: 1489397400
    end_date: 1735669800
    current: 1493557860
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH17/mandarin/PSHTBRTH.pdf?v=1), [Russian](http://www.codechef.com/download/translated/MARCH17/russian/PSHTBRTH.pdf?v=1) and [Vietnamese](http://www.codechef.com/download/translated/MARCH17/vietnamese/PSHTBRTH.pdf?v=1) as well.

A little boy Pishty lives in Khust - an ancient town in the best country of the world - Uzhlyandia (also Khust is a wonderful town with their own castle and smart bears, but this is not relevant for us). And he is celebrating his birthday today!

Citizens of Uzhlyandia love two things : cakes and [goulash](https://en.wikipedia.org/wiki/Goulash) , but Pishty prefer cakes. So his friend Lotsy decided to buy **N**  cakes, because a friend's birthday must be the best day of his life!

A cake can be thought of as a 4 × 4 square matrix, and in each cell of the matrix no more than 1 candle can be placed.

The two boys like to play a game, in which they extinguish candles.

They play in turns, with the birthday boy Pishty taking the first turn. In each turn, one of the boys picks a cake with burning candles on it, chooses a rectangle (ie. a [submatrix](http://mathworld.wolfram.com/Submatrix.html)) which has burning candles in all its cells, and extinguishes all those candles. If a boy can't make a move, he loses. You should assume that they play optimally. No one likes to lose a game, even to their best friend!

Because Pishty and Lotsy are best friends, Lotsy wants to buy the best collection of cakes, and so he has M queries to make to the Chef. There are 2 types of queries :

- to find the winner in the game if it is played with only the cakes in the range **\[L; R\]**
- to change a matrix, denoting a cake at some position

Help Chef answer all of Lotsy's queries, and make Pishty's birthday the best birthday in the world! ### Input

 The first line contains one integer  **T** , denoting the number of test cases. Then **T** test case descriptions follow.

The first line of the each description contains two integers  **N**  and  **M**, denoting the number of cakes and the number of queries respectively.

The following **5 × N** lines contain information about the **N** cake-denoting matrices (four lines of strings of four chars (without spaces), followed by an empty line). An element of a matrix equals **1** if there is a burning candle and 0 if there isn't anything.

Then the queries follow in one of the following formats:

- **1 L R**  - to find the winner in the game where only the caked in the range **\[L; R\]** are used.
- **2 pos matrix**  - to change the cake-denoting matrix at position **pos** to **matrix**Here, **2 pos** will be on the first line and **matrix**  will be described in the next four lines. each of which will be a string of four chars, without spaces in between. There will be no empty line after these four lines.

### Output

For each query of first type output a single line containing a string **"Pishty"**, if Pishty will win, or **"Lotsy"** otherwise.

### Constraints

- **1** ≤ **T**  ≤  **5**
- **1** ≤ **N, M** ≤  **105**
- **1** ≤ **L**  ≤  **R**  ≤ **N**
- **1** ≤ **pos**  ≤ **N**

### Subtasks

 Subtask 1 : 20 points

- 1 ≤ N, M ≤ 10
 
 Subtask 2: 30 points

- 1 ≤ N, M ≤ 1000
 
 Subtask 3 : 50 points

- 1 ≤ N, M ≤ 105
 
### Example

<pre><b>Input:</b>
<tt>1
3 6
0110
0000
0000
0001

0000
0000
0000
0000

1000
1000
0000
0000

1 1 1
1 2 2
1 3 3
1 1 3
2 2
0001
0010
0100
1000
1 1 3</tt>

<b>Output:</b>
<tt>Pishty
Lotsy
Pishty
Pishty
Pishty</tt>
</pre>