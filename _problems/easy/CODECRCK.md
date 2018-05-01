---
category_name: easy
problem_code: CODECRCK
problem_name: 'Cracking the Code'
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
problem_author: minimario
problem_tester: kevinsogo
date_added: 26-07-2015
tags:
    - easy
    - math
    - minimario
    - sept15
editorial_url: 'http://discuss.codechef.com/problems/CODECRCK'
time:
    view_start_date: 1442223000
    submit_start_date: 1442223000
    visible_start_date: 1442223000
    end_date: 1735669800
    current: 1493558132
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin](http://www.codechef.com/download/translated/SEPT15/mandarin/CODECRCK.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT15/russian/CODECRCK.pdf).Translations in Vietnamese to be uploaded soon.

Wet Shark once had 2 sequences:

**{a\_n}= {a\_1, a\_2, a\_3, ... , a\_(109)}**  
**{b\_n} = {b\_1, b\_2, b\_3, ... , b\_(109)}**

However, he only kept one element from each sequence. Luckily, both the elements that Wet Shark kept have the same index in Wet Shark's sequences: that is, he took **a\_i** and **b\_i** for some **1 ≤ i ≤ 109**.

Right after Wet Shark loses his sequences, he finds that he actually needs them to break the code of [Cthulhu](https://en.wikipedia.org/wiki/Cthulhu) to escape a labyrinth. Cthulhu's code is a single floating point number **Q**. However, the code verifier is faulty. If Wet Shark enters any code **c** such that **|c - Q| ≤ 0.01** , Cthulhu's code checker will allow him to escape.

Wet Shark now starts to panic, and consults Dry Dolphin for help via ultrasonic waves. After the Dry Dolphin Sequence Processing Factory processes data of Wet Shark's sequences, the machines give Wet Shark the following 2 relations his sequences follow for all 1 ≤ n < 109, where **x = sqrt(2)** and **y = sqrt(3)**.

![](http://i.imgur.com/Vvynmuh.png)

Wet Shark is now clueless on how to compute anything, and asks you for help.

Wet Shark has discovered that Cthulhu's code is actually defined as **Q = (a\_k + b\_k) / (2^s)**, where **s** is a predetermined number, **k** is the index of another element in Wet Shark's sequence, and **a\_k**, **b\_k** are precisely the **k**th elements of Wet Shark's sequences **{a\_n}** and **{b\_n}**, respectively.

Given **k**, **i**, and the 2 elements of the arrays Wet Shark has lost, find any value of the code **c** that will allow Wet Shark to exit Cthulhu's labyrinth.

### Input

The first line of input contains 3 space separated integers **i, k, s** — the common index of the two elements Wet Shark kept, the index of Wet Shark's array needed to break Cthulhu's code, and the number **s** described in the problem statement, respectively. It is guaranteed that Cthulhu's code, Q, is between -109 and 109 (both inclusive).

The second line of the input contains 2 space separated integers **a\_i** and **b\_i**, representing the **i**th element of sequence **{a\_n}** and the **i**th element of sequence **{b\_n}**, respectively.

### Output

Output any number **c** that will crack Cthulhu's code. Recall that if Wet Shark enters any code **c** such that **|c - Q| ≤ 0.01** , Cthulhu's code checker will allow him to exit the labyrinth.

###  Constraints 

- **SUBTASK 1: 20 POINTS**
- **1 ≤ i ≤ 103**
- **1 ≤ k ≤ 103**
- **-103 ≤ s ≤ 103**
- **1 ≤ a\_i, b\_i ≤ 103**
- **SUBTASK 2: 80 POINTS**
- **1 ≤ i ≤ 1010**
- **1 ≤ k ≤ 1010**
- **-1010 ≤ s ≤ 1010**
- **1 ≤ a\_i, b\_i ≤ 1010**

It is guaranteed that -1010 ≤ Q ≤ 1010.

### Example

<pre><b>Input:</b>
1 1 5
4 5

<b>Output:</b>
0.28125

</pre>### Explanation

**Example case 1.** In this case, **a\_1** = 4, **b\_1** = 5, and **s** = 5. Cthulhu's code in this case is (**a\_1** + **b\_1**) / (2s) = 9/32 = 0.28125.
