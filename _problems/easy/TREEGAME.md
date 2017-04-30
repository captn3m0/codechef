---
category_name: easy
problem_code: TREEGAME
problem_name: 'Tree Game'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: witua
problem_tester: xcwgf666
date_added: 14-04-2014
tags:
    - cook49
    - easy
    - games
    - greedy
    - pointers
    - witua
editorial_url: 'http://discuss.codechef.com/problems/TREEGAME'
time:
    view_start_date: 1408906200
    submit_start_date: 1408906200
    visible_start_date: 1408906200
    end_date: 1735669800
    current: 1493558196
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK49/mandarin2/TREEGAME.pdf) and [Russian](http://www.codechef.com/download/translated/COOK49/russian/TREEGAME.pdf) as well.

Alice and Bob are playing the game. Initially, there is a single rooted tree. Players take turns alternately, Alice starts.

In a single turn, Alice should choose any non-empty subset of roots of tree (or trees) and remove them. On the other hand, Bob should choose any non-empty subset of leafs and remove them from the tree (or trees). (**Please note** that Bob always takes some of the **deepest** in the original tree leafs.) It's not allowed to skip the turn. The game ends when a player can't take a turn.

The Alice's goal is to minimize the number of turns made by the both players, while Bob wants this number to be the maximal. Considering they both play optimally, what is the number of turns eventually made?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of nodes of the tree.

The next **N-1** lines contain pairs of nodes' numbers **Ui** and **Vi** (one pair per line), denoting the edges of the tree.

The nodes are numbered from **1** to **N**, inclusive, and the node with the index **1** is the root of the tree.

### Output

For each test case, output a single line containing the answer to the corresponding test case.

### Constraints

- **1** ≤ **T** ≤ **40**
- **1** ≤ **N** ≤ **10000**
- **1** ≤ **Ui, Vi** ≤ **N**

### Example

```
<b>Input:</b>
3
2
1 2
7
1 3
1 4
4 2
4 5
4 6
6 7
1

<b>Output:</b>
2
5
1

```