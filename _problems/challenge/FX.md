---
category_name: challenge
problem_code: FX
problem_name: Crystals
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
    - TCL
    - kotlin
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '0.229167'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 10-07-2009
tags:
    - admin
time:
    view_start_date: 1249991973
    submit_start_date: 1249991973
    visible_start_date: 1249991667
    end_date: 1735669800
    current: 1525199664
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.The Evil Magician of Byteland was performing evil magical experiments, and he has left you with an impressive collection of evil magical crystals which he produced. Honestly, you would be overjoyed to dispose of (or in other words: destroy) these crystals, but destroying a magical crystal is not so easy. To achieve thus, you need to connect three different crystals (red, green and blue) and cast some magic spell to destroy this particular triplet. Each magical crystal has its own mana level. You need a certain amount of your own mana to destroy the triplet, precisely equal to the product of the mana levels of the crystals in the triplet you are destroying. Fortunately, your crystals are all already grouped in triplets, and there are no leftovers (so it is possible to actually destroy all of them); unfortunately, the composition of the triplets is not necessarily optimal from the point of view of mana consumption. However, you are allowed to choose two crystals of the same color, and swap them within triplets (crystals become very unstable and hazardous when not part of a triplet, so you cannot perform any operations more complicated than swapping). But there is a catch (there always is, isn't there?): swapping crystals requires a magic spell -- a spell with a significant mana cost, and what makes matters worse, using this spell (as any other spell) on the crystals being swapped makes them accumulate more mana into their mana level (exactly by **1**). Try to minimize the amount of mana you need to use to destroy all the crystals!

### Input

First, 2 ≤ n ≤ 105, the number of crystals of each color. Then, 0 ≤ c ≤ 104, the mana cost of the swapping spell. After that, n triplets of integers follow, the ith triplet consisting of 0 ≤ ri ≤ 100, 0 ≤ gi ≤ 100, 0 ≤ bi ≤ 100, representing the initial mana levels of successive Red, Green and Blue crystals, respectively.

### Output

First 0 ≤ t ≤ 106, the number of swaps. Then, t descriptions of the swaps in the order in which they are applied, each of the form: 1≤p≤3, 1≤x≤n, 1≤y≤n, meaning a swap between crystals of the xth and yth triplets (p=1 stands for Red, 2 for Green, 3 for Blue).

### Example

<pre><strong>Input:</strong>
3 10
1 1 1
5 5 5
10 10 10

<strong>Output:</strong>
2
1 1 3
3 1 2
<strong>Score:</strong>
11*1*6 + 5*5*2 + 2*10*10 + 10 + 10 = 336
</pre>