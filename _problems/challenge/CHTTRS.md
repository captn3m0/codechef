---
category_name: challenge
problem_code: CHTTRS
problem_name: 'Chef and Chetris'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: antoniuk1
problem_tester: kevinsogo
date_added: 4-08-2015
tags:
    - antoniuk1
    - challenge
    - sept15
editorial_url: 'http://discuss.codechef.com/problems/CHTTRS'
time:
    view_start_date: 1442223000
    submit_start_date: 1442223000
    visible_start_date: 1442223000
    end_date: 1735669800
    current: 1525199508
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin](http://www.codechef.com/download/translated/SEPT15/mandarin/CHTTRS.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT15/russian/CHTTRS.pdf). Translations in Vietnamese to be uploaded soon.

Chef has created his own game called **Chetris** and now he wants you to play this game. The rules of Chetris are very similar to a rather well-known game [**Tetris**](https://en.wikipedia.org/wiki/Tetris), but there are some subtle differences, so we recommend you to read the rules before start playing.

**Rules of the game:** *Tetrominos* are game pieces — geometric shapes composed of four square blocks each. There are seven types of Tetrominos and each of them can be rotated (lets enumerate types of Tetrominos by numbers from 1 to 7 and their rotational configuration by small Latin letters *a* through *d* ). You can see this enumeration in the picture below.

![picture](https://s3.amazonaws.com/codechef_shared/download/SEPT15/CHTTRS1.jpg)

A random sequence of Tetrominos fall down the playing field (a rectangular vertical shaft). The playing field is 15 cells wide and 15 cells tall. On each step of the game, exactly one Tetromino appears above the game field. After that you should decide how you will rotate the figure (**you can't rotate the figure when it is falling**), but sometimes there appear  **Fixed Tetrominos** that you cannot rotate. After you choose some rotation of the figure(or it's the Fixed Tetraminos) , it start falling. While the figure is falling, you can manipulate it by moving sideways (you can move the figure only by an integer number of cells and also you can assume that time for moving figure by one or more cells in left or right direction takes zero time). Similar to Tetris, the Tetrominos stop falling when under one of its square block there is bottom of the gamefield or a block from other Tetrominos. If this results in one or more horizontal lines of 15 units without gaps, those lines disappear, and any block above the deleted line will fall by a distance exactly equal to the height of the cleared rows below them. According to the rules of **Chetris**, when some k rows disappear and after falling down k rows, even if some block has no block directly below it , **it will not fall down and will instead stay afloat**. For example, see the picture below:

![picture](https://s3.amazonaws.com/codechef_shared/download/SEPT15/CHTTRS2.jpg)

The game ends when some Tetromino locks partially or completely above the visible portion of the playing field.

Your task is to place as many Tetrominos as possible before the game is over.

### Input

Each line of input contains an integer **type** denoting the type of the figure: 1 - normal Tetromino, 2 - Fixed Tetromino. If **type** = 1 then next number in this line will be **figure** - denoting the kind of the Tetromino that will appear. If **type** = 2 then next number in this line will be **figure** - denoting the kind of Tetromino that will appear and next character **rot** denoting the rotation of this Fixed Tetromino. If the game has ended - in the next line of input will be "Game over".

### Interaction with the judge

In each step you should read from the standard input all information about the Tetromino that appears in this step. After receiving this input, you should print one line containing three space-separated parameters **rot**, **r** and **c**, where **rot** denoting the rotation of this figure (a, b, c or d) and integers **r** and **c** where **r** denotes the row number of the lowest block of this Tetromino after it stops falling and **c** denotes the column column of the leftmost block of this Tetromino after it stops(note that if the current Tetromino if Fixed Tetromino that rotation in your output must be equal to the rotation in the input). The rows are numbered 1 to 15 from top to bottom and columns are numbered 1 to 15 from left to right. Remember to **flush** the output after every line you print.

### Constraints

- **1** ≤ **type** ≤ **2**
- **1** ≤ **figure** ≤ **7**
- Total amount of steps of the game does not exceed 5 \* 104

### Scoring

- For each test case, your score will be the number of Tetrominos that you correctly place in the playing field. Your goal is to maximise this score.
- Also there are some bonuses: if after your move exactly **x** row(s) will disappear - your score for this test will be increased by 10 \* **x**2(i.e. 10, 40, 90, 160) and and by 500 if after your move the field will be empty.
- Your total score for the problem will be the sum of scores on all the test cases.
- Your solution will be tested only on 20% of the test files during the contest and will be re-judged against 100% after the end of competition.
- The game will end if you output incorrect data or at least one block of some Tetromino is above the visible part of the playing field when the Tetromino stops. Incorrect data means that there is no way to put this figure in the rotational configuration you selected at the place you output or you output completely incorrect data: **rot** ∉ {a, b, c, d} or **r** ∉ \[1..15\] or **c** ∉ \[1..15\].
- If you correctly placed all 5 \* 104 Tetrominos on the playing field, the next line of input will be "Game over" and you will get a score of 5 \* 104.
### Test data generation

For each test file the probabilities of appearing each Tetraminos are manually chosen. The probability of appearing the Fixed Tetraminos is manually chosen too.

### Example


<pre><b>Input:</b>
1 7
1 5
2 1 b
1 3
1 1
2 2 c
1 4
1 6 
Game over

<b>Output:</b>
a 15 12
a 14 10
b 12 11
c 9 10
a 7 7
c 6 7
a 3 8
a 1 6
</pre>
<pre><b>Input:</b>
1 1
1 1
1 3
1 6
1 6
1 5
Game over

<b>Output:</b>
a 15 1
a 15 6
a 15 10
a 15 13
c 15 4
b 15 12

</pre>
### Explanation

**Example case 1.**

In this test case your score will be 7.

![picture](https://s3.amazonaws.com/codechef_shared/download/SEPT15/CHTTRS3.jpg)

![picture](https://s3.amazonaws.com/codechef_shared/download/SEPT15/CHTTRS4.jpg)

**Example case 2.**

In this test case your score will be 16.

![picture](https://s3.amazonaws.com/codechef_shared/download/SEPT15/CHTTRS5.jpg)

![picture](https://s3.amazonaws.com/codechef_shared/download/SEPT15/CHTTRS6.jpg)
