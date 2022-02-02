---
category_name: medium
problem_code: WEAPONS
problem_name: 'Fusing Weapons '
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
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 20-10-2016
tags:
    - kingofnumbers
time:
    view_start_date: 1498908900
    submit_start_date: 1498908900
    visible_start_date: 1498908900
    end_date: 1735669800
    current: 1514816332
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL17/mandarin/WEAPONS.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL17/russian/WEAPONS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL17/vietnamese/WEAPONS.pdf) as well.

Chef has recently started becoming a fan of computer games. He is currently playing a game in which he controls a warrior who is fighting evil monsters.

Before the start of each stage, **N** weapons appear on the screen in circular order. Each weapon has an integer associated with it, which represents its *level*. The chef can choose two adjacent weapons of the same level and fuse them into a single weapon of level **A+1**, where **A** is the level of the weapons before fusing. Both the old weapons will disappear and the new weapon will be placed in the place of the old weapons, shrinking the circle.

Chef can fuse as many times as he wants, and in each stage, he wants to make a weapon with as high a level as possible. Each stage is independent of other stages.

Please help Chef by figuring out the maximum level of a weapon that he can get in each stage.

### Input

The first line contains integer **T**, denoting the number of stages. The description of each stage follows.

The first line of each stage's description contains an integer **N**, denoting the number of weapons.

The second line contains **N** space-separated integers: **L1**, **L2**, ..., **LN**, where **Li** is the level of the i-th weapon. The i-th and (i+1)-th weapons are adjacent for all i which satisfy 1 ≤ i &lt; **N**. Additionally, the first and **N**-th weapons are also adjacent.

### Output

For each stage, output a single integer in new line, which should be the maximum level of a weapon that Chef can get.

### Constraints

- 1 ≤ **T** ≤ 100
- 1 ≤ **N** ≤ 200,000
- 1 ≤ sum of **N** in all stages ≤ 200,000
- 1 ≤ **Li** ≤ 200,000

### Example

<pre><b>Input:</b>
2
4
3 3 1 4
6
2 3 3 3 1 1

<b>Output:</b>
5
5
</pre>
### Explanation

**Example case 1:** The initial state is (3, 3, 1, 4). The Chef can fuse the first two weapons and get (4, 1, 4). Then he can fuse the first and last weapons to get (5, 1). Now, he can't do anything else. He has gotten a weapon of level 5, and you can show that there is no way to get a weapon of a higher level. Hence the answer is 5.

**Example case 2:** The initial state is (2, 3, 3, 3, 1, 1). The Chef can fuse the last two weapons and get the state (2, 3, 3, 3, 2). He can then fuse the first and fifth weapons and get (3, 3, 3, 3). Now, he can fuse the first and second to get (4, 3, 3). Then he fuses the second and third to get (4, 4). Finally, he fuses the first and second to get (5). You can check that nothing better can be achieved, and hence the answer is 5.
