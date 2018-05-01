---
category_name: easy
problem_code: MATDYS
problem_name: 'Mathison and the Dynamo shuffle'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: alexvaleanu
problem_tester: kingofnumbers
date_added: 15-08-2017
tags:
    - alexvaleanu
    - easy
    - ltime51
    - observations
editorial_url: 'https://discuss.codechef.com/problems/MATDYS'
time:
    view_start_date: 1503768600
    submit_start_date: 1503768600
    visible_start_date: 1503768600
    end_date: 1735669800
    current: 1514816310
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/LTIME51/mandarin/MATDYS.pdf), [russian](http://www.codechef.com/download/translated/LTIME51/russian/MATDYS.pdf) and [vietnamese](http://www.codechef.com/download/translated/LTIME51/vietnamese/MATDYS.pdf) as well.

Mathison has bought a new deck of cards that contains 2**N** cards, numbered and ordered from 0 to 2**N**-1.

Mathison is getting bored and decides to learn the [Dynamo shuffle](https://www.youtube.com/watch?v=8T9yeV9oT2o) (or Sybil cut) - a flashy manner to shuffle cards. Unfortunately, the Dynamo shuffle is a little too complicated so Mathison decides to create his own shuffle.

 This newly invented shuffle is done in **N** steps. At step k (0 ≤ k < **N**) the deck is divided into 2k equal-sized decks where each one contains cards that lie on consecutive positions. Each one of those decks is then reordered: all the cards that lie on even positions are placed first followed by all cards that lie on odd positions (the order is preserved in each one of the two subsequences and all positions are 0-based). Then all the decks are put back together (preserving the order of decks).

 Mathison has spent hours practising the shuffle and he now believes that he has perfected his technique. However, Chef doesn't believe him yet so he asks Mathison to answer **Q** questions that given a deck of size 2**N** where i-th card is labelled i, find the position of the card labelled **K** in the final, shuffled deck.

### Input

The first line of the input file will contain one integer, **Q**, representing the number of Chef's questions.

Each of the next **Q** lines will contain a pair of integers, **N** and **K**.

### Output

The output file will contain **Q** lines, each one representing the answer to one of Chef's questions.

### Constraints

- 1 ≤ **Q** ≤ 1000
- 1 ≤ **N** ≤ 64
- 0 ≤ **K** < 2**N**

### Subtaks

**Subtask #1** (30 points):

- 1 ≤ **N** ≤ 10

**Subtask #2** (30 points):

- 1 ≤ **N** ≤ 32

**Subtask #3** (40 points):

- Original constraints

### Example

<pre><b>Input:</b>
3
3 4
3 3
3 2

<b>Output:</b>
1
6
2
</pre>
<pre><b>Input:</b>
1
64 11047805202224836936

<b>Output:</b>
1337369305470044825
</pre>### Explanation

<pre>
In all questions, we have <b>N</b> = 3. Therefore, we have a deck with 8 cards.
The shuffling is done in three steps:

Step 0: We divide {0, 1, 2, 3, 4, 5, 6, 7} in 2<sup>0</sup> decks. We get only one deck.
        The deck is reordered into {0, 2, 4, 6, 1, 3, 5, 7}.

Step 1: We divide {0, 2, 4, 6, 1, 3, 5, 7} in 2<sup>1</sup> decks. We get two decks: {0, 2, 4, 6} and {1, 3, 5, 7}.
        {0, 2, 4, 6} is reordered into {0, 4, 2, 6} while {1, 3, 5, 7} is reordered into {1, 5, 3, 7}.
        We get {0, 4, 2, 6, 1, 5, 3, 7} when we put the decks back together.

Step 2: We divide {0, 4, 2, 6, 1, 5, 3, 7} in 2<sup>2</sup> decks. We get four decks: {0, 4}, {2, 6}, {1, 5} and {3, 7}.
        Each one of the four decks stays the same after it is reordered (as there are only two elements to reorder).
        We get the final, shuffled deck: {0, 4, 2, 6, 1, 5, 3, 7}.

The card labelled 4 is on position 1.
The card labelled 3 is on position 6.
The card labelled 2 is on position 2.
</pre>