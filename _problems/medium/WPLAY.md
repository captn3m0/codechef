---
category_name: medium
problem_code: WPLAY
problem_name: 'Word Play'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: kaushik_iska
problem_tester: laycurse
date_added: 1-01-2013
tags:
    - easy
    - feb13
    - game
    - kaushik_iska
editorial_url: 'http://discuss.codechef.com/problems/WPLAY'
time:
    view_start_date: 1360583729
    submit_start_date: 1360583729
    visible_start_date: 1360582602
    end_date: 1735669800
    current: 1493557955
layout: problem
---
All submissions for this problem are available.**Alice** and **Bob** decide to play the game **"CCWordPlay"**.
**CCWordPlay** is played as follows:

Initially, there is a **r \* c** grid of **uppercase English alphabets**, where **r** denotes the number of rows, and **c** denotes the number of columns.
In the player's turn, this player should make a **valid dictionary word** using the
**active** alphabets on the board. Initially all the alphabets on the board are active.
If a player is unable to make any such word, then the player lost the game. If a player makes a word, then all the alphabets used to make the word should be considered inactive till the end of the game. The turns of players alternate, until one of them loses. As usual **Alice plays first**.


You are to say, if both **Alice** and **Bob** play optimally, who will win the game? />

**Note 1:**

The alphabets need not be adjacent in any way.

<pre><pre style="font-family:monospace">
IBC
DEF
AJN
</pre>
In the above configuration, **"CAN"**, is a valid word.

**Note 2:**

Consider a **2 \* 2** of the grid

<pre><pre style="font-family:monospace">
BE
ED
</pre>
Let the dictionary be:

<pre><pre style="font-family:monospace">
BED
BEE
</pre>
Say a player made the word **"BED"**. This word can be make in two ways:

<pre><pre style="font-family:monospace">
--
E-

or

-E
--
</pre>
Note that after making **"BED"**, not all the **E**(s) are inactive. However, after **"BEE"** is created, both **E**s are inactive, namely the board will be

<pre><pre style="font-family:monospace">
--
-D
</pre>
### Input

The first line of input contains **D** denoting the number of words in the dictionally.
The next **D** lines contain words in the dictionally.
Then the next line contains 2 space-separated integers denoting **r** and **c**.
After that, the next line contains an integers **T** denoting the number of boards.
Then the **T** boards are follow without any extra spaces and extra blank lines.

### Output

For each board, print a single line containing,
**"Alice"**, if Alice wins, or **"Bob"**, if Bob wins. (Quotes are only for clarity).

### Constraints

1 ≤ **D** ≤ 500000

1 ≤ **T** ≤ 1000

1 ≤ **r**, **c** ≤ 4

1 ≤ The length of each word ≤ **r** \* **c**

The dictionary does not contain the same word more than once.

At least one of the following 3 conditions must be hold:

- **r** = 4, **c** = 4, **T** ≤ 10
- **r** = 3, **c** = 4, **T** ≤ 100
- **r** ≤ 3, **c** ≤ 3, **T** ≤ 1000

### Samples

<pre>
<b>Input:</b>
5
BED
BAD
RED
BREED
BEER
3 3
2
DER
RAD
FEE
BAR
BEE
RAN

<b>Output:</b>
Bob
Alice

</pre>