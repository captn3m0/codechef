---
category_name: easy
problem_code: RESCALC
problem_name: 'Chef and calculation'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: omelyanenko
problem_tester: dpraveen
date_added: 26-07-2016
tags:
    - ad
    - basic
    - bitset
    - easy
    - omelyanenko
    - sept16
editorial_url: 'http://discuss.codechef.com/problems/RESCALC'
time:
    view_start_date: 1473931800
    submit_start_date: 1473931800
    visible_start_date: 1473931800
    end_date: 1735669800
    current: 1493558180
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT16/mandarin/RESCALC.pdf), [Russian](http://www.codechef.com/download/translated/SEPT16/russian/RESCALC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT16/vietnamese/RESCALC.pdf) as well.

Every Friday Chef and his **N - 1** friends go for a party. At these parties, they play board games. This Friday, they are playing a game named "Boats! Boats! Boats!". In this game players have to transport cookies between Venice and Constantinople. Each player has a personal storage. The players are numbered from 1 to **N**, Chef is numbered 1. Rules for determining a winner are very difficult, therefore Chef asks you to write a program, which will determine who is a winner.

There are 6 types of cookies. For each cookie in the storage player gets 1 point. Also player gets additional points if he packs his cookies in some boxes as follows:

- A box containing 4 different types of cookies fetches 1 additional point.
- A box containing 5 different types of cookies fetches 2 additional points.
- A box containing 6 different types of cookies fetches 4 additional points.

Obviously a cookie can be put into a single box. For each player, you know the number of cookies in his storage (denoted by **c\[i\]**), also the types of cookies in the storage given denoted by **type\[i\]\[j\]**.

Your task is to determine the winner of this game. Output "tie" if there are two or more players with same maximum score, "chef" if only Chef has a maximum score, winner's index in all other cases.

### Input

The first line of input contains a single integer **T** denoting the number of test cases. This will be followed by **T** test cases.

The first line of each test case contains an integer **N** denoting the number of players.

The second line of each test case contains an integer **c\[i\]** denoting the number of cookies in the i-th storage, followed by **c\[i\]** space-separated integers **type\[i\]\[j\]** which denote the type if j-th cookie in the storage i-th.

### Output

For each test case, output a single line containing the answer as specified in the statement.

### Constraints and Subtasks

**Subtask #1 : (20 points)** - **1** ≤ **T** ≤ **10**
- **1** ≤  **N**  ≤ **100**
- **1** ≤  **c\[i\]**  ≤  **100**
- **1** ≤  **type\[i\]\[j\]**  ≤  **3**

 **Subtask #2 : (80 points)** - **1** ≤ **T** ≤ **10**
- **1** ≤  **N**  ≤ **100**
- **1** ≤  **c\[i\]**  ≤  **100**
- **1** ≤  **type\[i\]\[j\]**  ≤  **6**

### Example

<pre>
<b>Input:</b><tt>
3
2
6 1 2 3 4 5 6
9 3 3 3 4 4 4 5 5 5
2
5 2 3 4 5 6
7 1 1 2 2 3 3 4
3
4 1 1 2 3
4 1 2 2 3
4 1 2 3 3
</tt>
<b>Output:</b><tt>
chef
2
tie</tt>

</pre>### Explanation
**Example case 1**.

Chef has total 6 cookie, so he gets 6 points for that. Also, he can put all his cookies (as they are all distinct) in a bag of size 6. It will fetch him additional 4 points. So, Chef's total points will be 10.

The second player has 9 cookies, he gets 9 points for that. Other than this, he can't create a bag with either 4, 5 or 6 distinct cookies. So, his final score is 9.

10 > 9 - Chef wins.

**Example case 2**.

Chef has 5 + 2 (a bag with 5 different cookies) = 7.

The second player has 7 + 1(a bag with 4 different cookies) = 8.

7

**Example case 3**.

Every player has 4 cookies and can't create any bag of sweets. So, it's a tie.
