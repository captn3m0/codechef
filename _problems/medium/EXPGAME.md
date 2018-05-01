---
category_name: medium
problem_code: EXPGAME
problem_name: 'Exponential Game'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: vineetpaliwal
problem_tester: Rubanenko
date_added: 16-10-2013
tags:
    - easy
    - game
    - impartial
    - ltime05
    - sprague
    - vineetpaliwal
    - zero
editorial_url: 'http://discuss.codechef.com/problems/EXPGAME'
time:
    view_start_date: 1382862600
    submit_start_date: 1382862600
    visible_start_date: 1382862600
    end_date: 1735669800
    current: 1493557649
layout: problem
---
All submissions for this problem are available.###  Read problems statements in Russian [here](http://www.codechef.com/download/translated/LTIME05/russian/EXPGAME.pdf)

 Little Chef is trying to learn exponents. He is especially interested in a number raised to the power of itself. Head Chef being his mentor has decided to give him a two player game to play. The game is as follows: You are given n piles of stones. The piles have **a\_1, a\_2 .. a\_n** number of stones . Each player on his/her turn can remove **x** number of stones where **x** = **n^n** (for some natural number **n > 0**) from any one pile. The player who is unable to move loses. Head Chef is playing this game with the Little Chef and being senior he gives the first move to the Little Chef .

### Input

Input Description.

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows:
- The first line of each test case contains a single integer **N** denoting the number of piles. The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the number of stones in each pile.

### Output

Output description.

- For each test case, output a single line containing the string "Head Chef" if Head Chef will win the game or the string "Little Chef" is Little Chef will win the game (assuming optimal play by both players).

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **100**
- **1** ≤ **a\_i** ≤ **100000**

### Example

<pre><b>Input:</b>
1
1
4

<b>Output:</b>
Little Chef
</pre>### Explanation

**Example case 1.** Little Chef can remove all the four stones and Head Chef will lose.

###  Scoring 

  **Subtask 1 (16 points):**   **N = 1**  

 **Subtask 2 (24 points):**   **N = 2**  

 **Subtask 3 (60 points):**  **See constraints**
