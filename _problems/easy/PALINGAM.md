---
category_name: easy
problem_code: PALINGAM
problem_name: 'Palindromic Game'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 31-07-2017
tags:
    - ad
    - admin2
    - aug17
    - easy
    - game
editorial_url: 'https://discuss.codechef.com/problems/PALINGAM'
time:
    view_start_date: 1503048600
    submit_start_date: 1503048600
    visible_start_date: 1503048600
    end_date: 1735669800
    current: 1514816316
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/AUG17/mandarin/PALINGAM.pdf), [russian](http://www.codechef.com/download/translated/AUG17/russian/PALINGAM.pdf) and [vietnamese](http://www.codechef.com/download/translated/AUG17/vietnamese/PALINGAM.pdf) as well.

There are two players A, B playing a game. Player A has a string **s** with him, and player B has string **t** with him. Both **s** and **t** consist only of lower case English letters and are of equal length. A makes the first move, then B, then A, and so on alternatively. Before the start of the game, the players know the content of both the strings **s** and **t**.

These players are building one other string w during the game. Initially, the string w is empty. In each move, a player removes any one character from their respective string and adds this character anywhere (at any position) in the string w (Note that w is a string at all times, and you can insert between characters or at the ends. It is not an empty array where you can add a character at any index. Please see the Explanations for further clarification). If at any stage of the game, the string w is of length greater than 1 and is a palindrome, then the player who made the last move wins.

If even after the game finishes (ie. when both **s** and **t** have become empty strings), no one is able to make the string w a palindrome, then player B wins.

Given the strings **s**, and **t**, find out which of A, B will win the game, if both play optimally.

### Input

- The first line of the input contains an integer **T**, corresponding to the number of test cases. The description of each testcase follows.
- The first line of each testcase will contain the string **s**.
- The second line of each testcase will contain the string **t**.

### Output

For each test case, output "A" or "B" (without quotes) corresponding to the situation, in a new line.

### Constraints

- **Subtask 1** (20 points) : 1 ≤ **T** ≤ 500, All characters of string **s** are equal, All characters of string **t** are equal. 1 ≤ **|s| = |t|** ≤ 500
- **Subtask 2** (80 points) : 1 ≤ **T** ≤ 500, 1 ≤ **|s| = |t|** ≤ 500

### Example

<pre><b>Input:</b>
3
ab
ab
aba
cde
ab
cd
<b>Output:</b>
B
A
B

</pre>### Explanation
**Testcase 1**: If A adds 'a' to w in the first move, B can add 'a' and make the string w = "aa", which is a palindrome, and hence win. Similarly, you can show that no matter what A plays, B can win. Hence the answer is B.

**Testcase 2**: Player A moves with 'a', player B can put any of the character 'c', 'd' or 'e', Now Player A can create a palindrome by adding 'a'.

**Testcase 3**: None of the players will be able to make a palindrome of length > 1. So B will win.
