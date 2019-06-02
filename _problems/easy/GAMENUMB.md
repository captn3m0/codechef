---
category_name: easy
problem_code: GAMENUMB
problem_name: 'Game with numbers'
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
    - rust
    - SCALA
    - swift
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
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: mgch
date_added: 21-02-2018
tags:
    - easy
    - game
    - kingofnumbers
    - ltime57
    - sorting
editorial_url: 'https://discuss.codechef.com/problems/GAMENUMB'
time:
    view_start_date: 1519491600
    submit_start_date: 1519491600
    visible_start_date: 1519491600
    end_date: 1735669800
    current: 1525198885
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME57/mandarin/GAMENUMB.pdf), [Russian](http://www.codechef.com/download/translated/LTIME57/russian/GAMENUMB.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME57/vietnamese/GAMENUMB.pdf) as well.

Chef is playing a game with his brother Chefu. Before the game begins, **C** cards are placed on a table. Each card has a number written on it; since **C** can be very large, these numbers are described by two sequences **A** and **D**. Each of these sequences has length **N**; for each **i** (1 ≤ **i** ≤ **N**), **Di** cards, each with number **Ai** written on it, are placed on the table. Therefore, **C** is equal to the sum of elements of **D**. Note that the elements of **A** don't have to be unique.

You are also given a sequence **B** with length **K**. The game will last for exactly **K** rounds numbered 1 through **K**. The players alternate turns — Chef plays on odd-numbered turns and his brother on even-numbered turns. In the **i**-th round, the current player must select **Bi** cards currently lying on the table, keep these cards on the table and discard all other cards.

Chef's goal is to maximize the sum of numbers written on cards that remain on the table after the last round, while Chefu's goal is minimize this sum. What will be the sum of numbers written on cards remaining on the table if both players play optimally?

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains two space-separated integers **N** and **K**.
- The second line contains **N** space-separated integers **A1, A2, ..., AN**.
- The third line contains **N** space-separated integers **D1, D2, ..., DN**.
- The fourth line contains **K** space-separated integers **B1, B2, ..., BK**.

### Output

For each test case, print a single line containing one integer — the sum of numbers on cards that remain on the table at the end of the game.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **N**, **K** ≤ 100,000
- 1 ≤ sum of **N** over all test cases ≤ 100,000
- 1 ≤ sum of **K** over all test cases ≤ 100,000
- 1 ≤ **Ai**, **Di** ≤ 1,000,000 for each valid **i**
- 1 ≤ **Bi** ≤ **C** for each valid **i**
- **Bi+1** Bi for each valid **i**

### Subtasks

**Subtask #1 (20 points):**

- **Di** = 1 for each valid **i**
- sum of **N** over all test cases ≤ 1,000
- sum of **K** over all test cases ≤ 1,000

**Subtask #2 (80 points):** original constraints

### Example

<pre><b>Input:</b>

1
4 2
1 2 3 4
2 2 2 2
6 3

<b>Output:</b>

7
</pre>
### Explanation

**Example case 1:** The cards that are on table initially are 1, 1, 2, 2, 3, 3, 4, 4 Chef in his turn should select 6 cards to keep and discard the rest, so he will keep 2, 2, 3, 3, 4, 4 after that Chefu should keep 3 cards and discard the rest, so he will keep 2, 2, 3 after that the game ends and sum of cards remained on the table is 2 + 2 + 3 = 7
