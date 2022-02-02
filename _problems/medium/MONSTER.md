---
category_name: medium
problem_code: MONSTER
problem_name: 'Killing Monsters'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: null
date_added: 4-11-2017
tags:
    - chemthan
    - chemthan
    - jan18
    - medium
editorial_url: 'https://discuss.codechef.com/problems/MONSTER'
time:
    view_start_date: 1516008600
    submit_start_date: 1516008600
    visible_start_date: 1516008600
    end_date: 1735669800
    current: 1525454447
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/JAN18/mandarin/MONSTER.pdf), [Russian](http://www.codechef.com/download/translated/JAN18/russian/MONSTER.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN18/vietnamese/MONSTER.pdf) as well.

Chef is playing a game named "Killing monsters". In this game, at the beginning, there are **n** monsters arranged in a row (numbered 0 through **n-1** from left to right). The **i**-th monster initially has **hi** health points. A monster dies if its health points become ≤ 0.

Chef is going to perform **q** actions. For each action, Chef chooses two numbers **x**, **y** and shoots all living monsters whose index **k** satisfies **k** &amp; **x** = **k** (&amp; denotes the bitwise AND operator). Each monster he shoots loses **y** health points.

After each action, please help Chef determine the number of living monsters.

### Input

- The first line of the input contains a single integer **n** denoting the number of monsters.
- The second line contains **n** space-separated integers **h0, h1, ..., hn-1** denoting the initial health of monsters.
- The third line contains a single integer **q** denoting the number of actions.
- **q** lines follow. Each of these lines contains two space-separated integers **x** and **y** describing one action.

### Output

For each action, print a single line containing one integer — the number of living monsters afterwards.

### Constraints

- 1 ≤ **n** ≤ 217
- 1 ≤ **hi** ≤ 109 for each valid **i**
- 1 ≤ **q** ≤ 218
- 0 ≤ **x** ≤ 109
- 1 ≤ **y** ≤ 109

### Subtasks

**Subtask #1 (10 points):**

- 1 ≤ **n** ≤ 210
- 1 ≤ **q** ≤ 211

**Subtask #2 (20 points):**

- **hi** = 1 for each valid **i**
- **y** = 1 for each action

**Subtask #3 (70 points):** original constraints

### Example

<pre><b>Input:</b>

5
1 2 3 4 5
5
1 1
2 2
3 3
4 4
5 5

<b>Output:</b>

4
4
2
2
1
</pre>