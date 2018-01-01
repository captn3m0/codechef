---
category_name: medium
problem_code: ADDMULT
problem_name: 'To add or to multiply game'
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
problem_author: kingofnumbers
problem_tester: errichto
date_added: 20-10-2016
tags:
    - ad
    - cook79
    - game
    - kingofnumbers
    - medium
editorial_url: 'https://discuss.codechef.com/problems/ADDMULT'
time:
    view_start_date: 1487529000
    submit_start_date: 1487529000
    visible_start_date: 1487529000
    end_date: 1735669800
    current: 1493557912
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK79/mandarin/ADDMULT.pdf), [Russian](http://www.codechef.com/download/translated/COOK79/russian/ADDMULT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK79/vietnamese/ADDMULT.pdf) as well.

Chef and his brother Chefu are playing a game with a sequence of **N** integers.

They take alternate turns to play. In each turn, the player should choose two adjacent integers from the sequence, remove them, and put in their place either their sum or their product. So if the sequence is **(5,17,2,4,102)**, then one valid move would be to select **2** and **4**, and replace them with their product, which is **8**. So the sequence now becomes **(5,17,8,102)**. They could also have been replaced by their sum, and in that case, the new sequence would become **(5,17,6,102)**.

The game continues until there's only one integer left in the sequence. If this integer is even, then Chef is the winner, otherwise Chefu is the winner.

Given the initial sequence and the player who will play the first turn, you should tell who is going to win the game assuming that both of them play optimally.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

First line of each test-case contains **N**, the length of the initial sequence. and a string which is either "Chef" or "Chefu" denoting who will play first.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the initial sequence.

### Output

For each test case, output a single line containing who will win the game: "Chef" or "Chefu".

### Constraints

- **1** ≤ **T** ≤ **10,000**
- **1** ≤ **N** ≤ **100,000**
- sum of **N** in all test-cases will not exceed **100,000**
- **1** ≤ **Ai**  ≤ **50**

### Example

<pre><b>Input:</b>
2
1 Chef
8
3 Chef
1 2 3

<b>Output:</b>
Chef
Chefu

</pre>### Explanation
**Test case 1:** The game stops as soon as it begins, because there is only one integer, and because it is even, Chef wins.

**Test case 2:** Chef has 4 valid first moves:

- Add 1 and 2, and change the sequence to (3,3). Now Chefu will multiply these two, and get 9, and win, because only one integer is left, and it is odd.
- Multiply 1 and 2, and change the sequence to (2,3). Now Chefu will add these two, and get 5, and win, because only one integer is left, and it is odd.
- Add 2 and 3, and change the sequence to (1,5). Now Chefu will multiply these two, and get 5, and win, because only one integer is left, and it is odd.
- Multiply 2 and 3, and change the sequence to (1,6). Now Chefu will add these two, and get 7, and win, because only one integer is left, and it is odd.

As we can see, for every possible move of Chef, Chefu has a move that lets him win. Hence, in optimal play, Chefu will win.
