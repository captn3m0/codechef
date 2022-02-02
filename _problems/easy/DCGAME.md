---
category_name: easy
problem_code: DCGAME
problem_name: 'Devu And Churu '
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: ma5termind
problem_tester: laycurse
date_added: 2-04-2015
tags:
    - aug15
    - binary
    - combinatorics
    - ma5termind
    - medium
    - stack
    - stock
    - value
editorial_url: 'http://discuss.codechef.com/problems/DCGAME'
time:
    view_start_date: 1439803800
    submit_start_date: 1439803800
    visible_start_date: 1439803800
    end_date: 1735669800
    current: 1493558135
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/AUG15/mandarin/DCGAME.pdf) and [Russian](http://www.codechef.com/download/translated/AUG15/russian/DCGAME.pdf).

Devu and Churu love to play games a lot. Today, they have an array **A** consisting of **N** positive integers. First they listed all **N × (N+1) / 2** non-empty continuous subarrays of the array **A** on a piece of paper and then replaced all the subarrays on the paper with the maximum element present in the respective subarray.

Devu and Churu decided to play a game with numbers on the paper. They both have decided to make moves turn by turn. In one turn, the player picks some number from the list and discards that number. The one who is not able to make a valid move will be the loser. To make the game more interesting, they decided to put some constraints on their moves.

A constraint on a game can be any of following three types :

- **&gt; K** : They are allowed to choose numbers having values strictly greater than **K** only.
- **&lt; K** : They are allowed to choose numbers having values strictly less than **K** only.
- **= K** : They are allowed to choose numbers having values equal to **K** only.

Given **M** constraints and who goes first, you have to tell the outcome of each game. Print **'D'** if Devu wins otherwise print **'C'** without quotes.

Note that **M** games are independent, that is, they'll rewrite numbers by using array **A** after each game. (This is the task for the loser of the previous game!)

### Input 

First line of input contains two space separated integers **N** and **M** denoting the size of array **A** and number of game played by them. Next line of input contains **N** space-separated integers denoting elements of array **A**. Each of the next **M** lines of input contains three space-separated parameters describing a game. First two parameter are a character **C ∈ {&lt;, &gt;, =}** and an integer **K** denoting the constraint for that game. The last parameter is a character **X ∈ {D, C}** denoting the player who will start the game.

###  Output 

Output consists of a single line containing a string of length **M** made up from characters **D** and **C** only, where **ith** character in the string denotes the outcome of the **ith** game.

###  Constraints: 

- **1 ≤ N, M ≤ 106**
- **1 ≤ Ai, K ≤ 109**
- **X ∈ {D, C}**
- **C ∈ {&lt;, &gt;, =}**

### Subtasks: 

- **Subtask 1 : 1 ≤ N, M ≤ 104 : ( 20 pts )**
- **Subtask 2 : 1 ≤ N, M ≤ 105 : ( 30 pts )**
- **Subtask 3 : 1 ≤ N, M ≤ 106 : ( 50 pts )**

### Example:

<pre>
<b>Input:</b>
3 5
1 2 3
> 1 D
< 2 C
= 3 D
> 4 C
< 5 D

<b>Output:</b>
DCDDC
</pre>
### Explanation: 

**Subarray List :**

**1. \[1\]** **1. \[2\]** **1. \[3\]** **1. \[1,2\]** **1. \[2,3\]** **1. \[1,2,3\]** 

**Numbers on the paper after replacement :**

**1. \[1\]** **1. \[2\]** **1. \[3\]** **1. \[2\]** **1. \[3\]** **1. \[3\]** 
**Game 1 :** There are only 5 numbers &gt; 1 in the list.
**Game 2 :** There is only 1 number &lt; 2 in the list.
**Game 3 :** There are only 3 numbers = 3 in the list.
**Game 4 :** There are no numbers &gt; 4 in the list. So the first player cannot make his move.
**Game 5 :** There are 6 numbers &lt; 5 in the list.
